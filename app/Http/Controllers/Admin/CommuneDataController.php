<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        if ($id == 0) {
            return [
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
                $value['parent_id'] = $id;
            }
            DB::table($name)->where('parent_id', $id)->delete();
            DB::table($name)->insert($tables[$name]);
        }

        return $this->getdata($id);
    }

    public function delete(Request $request)
    {
        DB::table('commune_parent')->where('id', $request->id)->delete();
    }
}
