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

    public function search(Request $request){
        $village_data = DB::table('village_data')
                        ->where('code_village', $request->vl_code)
                        ->where('year', $request->year)
                        ->first();
        if($village_data){
            $village_data->attributes = DB::table('attributes')
                                ->leftJoin('village_value', function (JoinClause $join) use ($village_data) {
                                    $join->on('attributes.id', '=', 'village_value.attribute_id')
                                         ->where('village_value.parent_id', '=', $village_data->id);
                                })
                                ->select('attributes.*', 'village_value.value')
                                ->get();
        }else{
            $village_data = [];
            $village_data['attributes'] = DB::table('attributes')->get();
        }

        return Reply::dataOnly($village_data);
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
    public function save(Request $request)
    {
        $master = $request->master;
        $village_attributes = json_decode($request->village_attributes, true);
        $data['attributes'] = Attribute::all();

        $id = $master['id'];

        if ($id == 0) {
            $id = DB::table('village_data')->insertGetId($master);
        } else {
            DB::table('village_data')->where('id', $id)->update($master);
        }

        Log::info('******************* This is an info log message.'.$master['id']);

        DB::table('village_value')->where('parent_id', $id)->delete();
        foreach ($village_attributes as $attribute) {
            if(isset($attribute['value'])){
                $attribute['parent_id'] = $id;
                Log::info($attribute);     
                DB::table('village_value')->insert($attribute);
            }

            // Log::info('Attribute '.$attribute['attribute_id']);
            // echo "value: " . $attribute['value'] . ", attribute: " . $attribute['code_attribute'] . "\n";
        }
        return response()->json(['message' => 'Form submitted successfully!']);
    }
}
