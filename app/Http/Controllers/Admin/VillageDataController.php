<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VillageData;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Module;
use App\Helper\Reply;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Query\JoinClause;

class VillageDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/villageData/index');
    }

    public function getdata($id = 0)
    {
        $where = $id == 0 ? [] : ['id' => $id];
        $list = DB::table('village_data')->where($where)->get()->toArray();
        
        $master = [
            'id'             => 0,
            'year'           => '',
            'vl_code'   => '',
            'phone'  => '',
            'commune_leader' => '',
            'phone_commune'  => '',
            

        ];

        if($id == 0) {
            return [
                'master' => $master,
                'list' => $list,
                'questions' => DB::table('village_question')->get(),
                'place' => [
                    'pv' => DB::table('provinces')->get(),
                    'ds' => DB::table('districts')->get(),
                    'cm' => DB::table('communes')->get(),
                    'vl' => DB::table('villages')->get(),
                ]
            ];           
        } 

        return $list[0];
    }


    public function getdetail(Request $request)
    {
        $tables = [1];

        foreach ($tables as $num) {
            $name = 'village_' . $num;
            $rs[$name] = DB:: table($name)->where('parent_id', $request->id)->get();
        }

        return $rs;
    }

    public function save(Request $request)
    {
        $master = $request->master;
        $detail_response = json_decode($request->responses, true);
        $id = $master['id'];
        if ($id == 0) {
            $id = DB::table('village_data')->insertGetId($master);
        } else {
            DB::table('village_data')->where('id', $id)->update($master);
        }

        DB::table('village_response')->where('parent_id', $id)->delete();
        DB::table('village_response')->insert($this->build_params($detail_response, $id));

        return response()->json(['message' => __('general.save_success')]);
    }

    
    public function search(Request $request){
        $village_data = DB::table('village_data')
                        ->where('vl_code', $request->vl_code)
                        ->where('year', $request->year)
                        ->first();

        if($village_data){
            $village_data->questions = DB::table('village_question')
                                ->leftJoin('village_response', function (JoinClause $join) use ($village_data) {
                                    $join->on('village_question.id', '=', 'village_response.question_id')
                                         ->where('village_response.parent_id', '=', $village_data->id);
                                })
                                ->select('village_question.*', 'village_response.value', 'village_response.value_txt')
                                ->get();
        }else{
            $village_data = [];
            $village_data['detail'] = [];
            $village_data['questions'] = DB::table('village_question')->get();
        }

        return Reply::dataOnly($village_data);
    }

    public function build_params($params, $id){
        return array_map(function ($item) use ($id) {
                        return [
                            'question_id' => $item['question_id'],
                            'value' => isset($item['value']) ? $item['value'] : null,
                            'value_txt' => isset($item['value_txt']) ? $item['value_txt'] : '',
                            'parent_id' => $id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }, $params);
    }

    public function delete(Request $request)
    {
        DB::table('village_data')->where('id', $request->id)->delete();
    }
  
    
}
