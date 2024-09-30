<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Module;
use App\Helper\Reply;
class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/setting/role');
    }

    public function getRole()
    {
        $data['roles'] = Role::with('permissions')->get();
        $data['modules'] = Module::with('permissions')->get();
        return Reply::dataOnly($data);
    }

    public function store(Request $request)
    { 
        $role = Role::where('id', $request->roleId)->first();
        $permission = Permission::where('id', $request->permissionId)->first();

        if ($request->assignPermission === 'yes')
            $role->givePermission($permission);
        else 
            $role->removePermission($permission);

        return Reply::dataOnly(['status' => 'success']);
    }

    public function storeRole(Request $request)
    {
        $id = $request->submit['id'];
        $role = Role::where('id', $id)->first();
        if($id) $role->update($request->submit); 
        else $id = Role::create($request->submit)->id;

        return Reply::dataOnly($id);
    }

    public function destroyRole(Request $request) 
    {
        Role::where('id', $request->id)->delete();

        return Reply::dataOnly(['status' => 'success']);
    }
}
