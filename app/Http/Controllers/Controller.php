<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use App\Models\Role;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var array
     */
    public $data = [];

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public $user;
    public $pageTitle;
    public $settings;
    public $productsCount;
    public $via;

    public function __construct($via=null)
    {
        $this->via = $via;
        
        config(['app.name' => 'my starter kit']);
        config(['app.url' => url('/')]);

        $this->name = Route::currentRouteName();
        view()->share('name', $this->name);

        $this->middleware(function ($request, $next) {
            
            $this->user = auth()->user();

            view()->share('user', $this->user);

            $this->customer_role = Role::withoutGlobalScopes()->where('name', 'customer')->first();

            $this->current_emp_role = null;

            $this->original_emp_role = null;

            if($this->user){
                if (Session::get('loginRole')) {
                    $this->current_emp_role = $this->user->roles()->withoutGlobalScopes()->where('id', Session::get('loginRole'))->first();
                }
                else {
                    $this->current_emp_role = $this->user->roles()->withoutGlobalScopes()->latest()->first();
                }

                if ($this->user->is_employee) {
                    $this->original_emp_role = $this->user->roles()->withoutGlobalScopes()->where('name', 'employee')->first();
                }
                else if ($this->user->is_admin) {
                    $this->original_emp_role = $this->user->roles()->withoutGlobalScopes()->where('name', 'administrator')->first();
                }
                else {
                    $this->original_emp_role = $this->user->roles()->withoutGlobalScopes()->where('name', 'customer')->first();
                }

                //!is_null($this->via) ? App::setLocale(\Cookie::get('appointo_language_code')) : App::setLocale($this->settings->locale);
            }

            view()->share('current_emp_role', $this->current_emp_role);
            view()->share('customer_role', $this->customer_role);
            view()->share('original_emp_role', $this->original_emp_role);

            return $next($request);
        });
    }
}
