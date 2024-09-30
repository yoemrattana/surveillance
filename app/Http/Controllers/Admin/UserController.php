<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Helper\Reply;
use App\Http\Requests\UserRequest;

class UserController extends Controller
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
        return view('admin/setting/user');
    }

    public function getUser()
    {
        $data['users'] = User::with('role')->get();
        $data['roles'] = Role::all();

        return Reply::dataOnly($data);
    }

    public function store(UserRequest $userRequest)
    {
        if($userRequest->id == 0) {
            $user = new User;
        } else {
            $user = User::find($userRequest->id);
        }

        $user->username = $userRequest->username;
        $user->name = $userRequest->name;
        $user->password = $userRequest->password;
        $user->save();

        $role = Role::where('id', $userRequest->role)->first();

        $user->syncRoles([$role]);

        $data['users'] = User::where('id', $user->id)->with('role')->first();

        return Reply::dataOnly($data);
    }

    public function destroy(Request $request) : void
    {
        $user = User::findOrFail($request->id);
        foreach($user->roles as $role) {
            $user->removeRole($role);
        }

        $user->delete();
    }

}
