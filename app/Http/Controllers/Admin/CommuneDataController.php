<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\Reply;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\Log;

class CommuneDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/communeData/index');
    }

    public function getdata($id = 0)
    {
        $where = $id == 0 ? [] : ['id' => $id];
        $list = DB::table('commune_parent')->where($where)->get()->toArray();
        $master = [
            'id'             => 0,
            'year'           => '',
            'cm_code'   => '',
            'recorded_by'  => '',
            'phone' => '',
        ];
        if ($id == 0) {
            return [
                'master' => $master,
                'list' => $list,
                'questions' => DB::table('commune_question')->get(),
                'place' => [
                    'pv' => DB::table('provinces')->get(),
                    'ds' => DB::table('districts')->get(),
                    'cm' => DB::table('communes')->get(),
                ]
            ];
        }

        return $list[0];
    }

    public function getdetail(Request $request)
    {
        $tables = [1];

        foreach ($tables as $num) {
            $name = 'commune_' . $num;
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
            $id = DB::table('commune_parent')->insertGetId($master);
        } else {
            DB::table('commune_parent')->where('id', $id)->update($master);
        }
        DB::table('commune_response')->where('parent_id', $id)->delete();
        DB::table('commune_response')->insert($this->build_params($detail_response, $id));

        return response()->json(['message' => __('general.save_success')]);
    }

    public function search(Request $request){
        $commune_parent = DB::table('commune_parent')
                        ->where('cm_code', $request->cm_code)
                        ->where('year', $request->year)
                        ->first();
        $detail = [];
        if($commune_parent){
            $commune_parent->questions = DB::table('commune_question')
                                ->leftJoin('commune_response', function (JoinClause $join) use ($commune_parent) {
                                    $join->on('commune_question.id', '=', 'commune_response.question_id')
                                         ->where('commune_response.parent_id', '=', $commune_parent->id);
                                })
                                ->select('commune_question.*', 'commune_response.value')
                                ->get();
        }else{
            $commune_parent = [];
            $commune_parent['detail'] = [];
            $commune_parent['questions'] = DB::table('commune_question')->get();
        }      


        return Reply::dataOnly($commune_parent);
    }
    
    public function build_params($params, $id){
        return array_map(function ($item) use ($id) {
                        return [
                            'question_id' => $item['question_id'],
                            'value' => isset($item['value']) ? $item['value'] : null,
                            'parent_id' => $id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }, $params);
    }

    public function delete(Request $request)
    {
        DB::table('commune_parent')->where('id', $request->id)->delete();
    }
}
