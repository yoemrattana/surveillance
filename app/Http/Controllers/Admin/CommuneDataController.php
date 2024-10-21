<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\Reply;

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
        $tables = json_decode($request->tables, true);

        $id = $master['id'];

        if ($id == 0) {
            $id = DB::table('commune_parent')->insertGetId($master);
        } else {
            DB::table('commune_parent')->where('id', $id)->update($master);
        }

        foreach (array_keys($tables) as $name) {
            foreach ($tables[$name] as &$value) {
                $value['commune_parent_id'] = $id;
            }
            DB::table($name)->where('commune_parent_id', $id)->delete();
            DB::table($name)->insert($tables[$name]);
        }

        return response()->json(['message' => ('general.save_success')]);
    }

    public function search(Request $request){
        $commune_parent = DB::table('commune_parent')
                        ->where('cm_code', $request->cm_code)
                        ->where('year', $request->year)
                        ->first();
        $detail = [];
        if($commune_parent){
            $tables = ['commune_base_profile', 'commune_agriculture', 'commune_production',
                      'commune_transportation', 'commune_education', 'commune_natural_resource',
                      'commune_disaster'
                      ];
            foreach ($tables as $table) {
                $detail[$table] = DB::table($table)->where('commune_parent_id', $commune_parent->id)->get();
            }
            $commune_parent->detail = $detail;
            $commune_parent->questions = DB::table('commune_question')->get();
        }else{
            $commune_parent = [];
            $commune_parent['detail'] = [];
            $commune_parent['questions'] = DB::table('commune_question')->get();
        }      


        return Reply::dataOnly($commune_parent);
    }

    public function delete(Request $request)
    {
        DB::table('commune_parent')->where('id', $request->id)->delete();
    }
}
