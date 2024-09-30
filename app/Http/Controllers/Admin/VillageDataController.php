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

    public function getAttributes()
    {
        $data['attributes'] = Attribute::all();

        //$data['main'] = Attribute::with('villageData')->get();
        $data['main'] = Attribute::with('values')->get();
        $data['place'] = [
            'pv' => DB::table('provinces')->get(),
            'ds' => DB::table('districts')->get(),
            'cm' => DB::table('communes')->get(),
            'vl' => DB::table('villages')->get(),
        ];

        return Reply::dataOnly($data);
    }

    public function getData($id)
    {
        $data = [];
        if( empty( $id ) ) {
            $data['master'] = [
                'id'             => 0,
                'year'           => '',
                'code_village'   => '',
                'phone_village'  => '',
                'commune_leader' => '',
                'phone_commune'  => '',
            ];

            $data['attributes'] = Attribute::all();
        } else {
            $data['attributes'] = DB::table('attributes')->where('id', $id)
                ->join('village_value', 'attributes.id', '=', 'village_value.attribute_id')
                ->select('attributes.*', 'village_value.village_id')
                ->get();
        }

        $data['place'] = [
            'pv' => DB::table('provinces')->get(),
            'ds' => DB::table('districts')->get(),
            'cm' => DB::table('communes')->get(),
            'vl' => DB::table('villages')->get(),
        ];

        return Reply::dataOnly($data);
    }
}
