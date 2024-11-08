<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\Log;
use App\Helper\Reply;

class DistrictDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/districtData/index');
    }

    public function getdata($id = 0)
    {

        $where = $id == 0 ? [] : ['id' => $id];
        $list = DB::table('district_parent')->where($where)->get()->toArray();
        $master = [
            'id'          => 0,
            'year'        => '',
            'ds_code'     => '',
            'recorded_by' => '',
            'phone'       => '',
            
        ];

        if($id == 0){
            return [
                'master' => $master,
                'list' => $list,
                'questions' => DB::table('district_question')->get(),
                'place' => [
                    'pv' => DB::table('provinces')->get(),
                    'ds' => DB::table('districts')->get(),
                ]
            ];
        }

        return $list[0];
       
    }

    public function getdetail(Request $request)
    {
        $tables = [1];
        foreach ($tables as $num) {
            $name = 'district_' . $num;
            $rs[$name] = DB:: table($name)->where('parent_id', $request->id)->get();
        }
        return $rs;       
    }
    public function save(Request $request)
    {
        $master = $request->input('master');
        $detail_response = json_decode($request->input('responses'), true);
        // Check if `$master` and `$detail_response` are not null
        if (is_null($master) || is_null($detail_response)) {
            return response()->json(['message' => 'Invalid input data'], 400);
        }
        $id = $master['id'] ?? 0;        
        if ($id == 0) {
            $id = DB::table('district_parent')->insertGetId($master);
        } else {
            DB::table('district_parent')->where('id', $id)->update($master);
        } 
        Log::info('Dist data '.$id)  ;     
        DB::table('district_response')->where('parent_id', $id)->delete();
        DB::table('district_response')->insert($this->build_params($detail_response, $id));

        return response()->json(['message' => __('general.save_success')]);
    }


    public function search(Request $request){
        $district_parent = DB::table('district_parent')
                        ->where('ds_code', $request->ds_code)
                        ->where('year', $request->year)
                        ->first();
        $detail = [];
        if($district_parent){
            
            $district_parent->questions = DB::table('district_question')
                                ->leftJoin('district_response', function (JoinClause $join) use ($district_parent) {
                                    $join->on('district_question.id', '=', 'district_response.question_id')
                                         ->where('district_response.parent_id', '=', $district_parent->id);
                                })
                                ->select('district_question.*', 'district_response.value')
                                ->get();

           
        }else{
            $district_parent = [];
            $district_parent['detail'] = [];
            $district_parent['questions'] = DB::table('district_question')->get();
        }      


        return Reply::dataOnly($district_parent);
    }

    public function build_params($params, $id){
        return array_map(function ($item) use ($id) {
                        return [
                            'question_id' => $item['question_id'],
                            'value' => $item['value'],
                            'parent_id' => $id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }, $params);
    }

    public function delete(Request $request)
    {
        DB::table('district_parent')->where('id', $request->id)->delete();
    }
}
