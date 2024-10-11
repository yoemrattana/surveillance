<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\SettingController;
use  App\Http\Controllers\Admin\RoleController;
use  App\Http\Controllers\LangController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\VillageDataController;
use  App\Http\Controllers\Admin\DistrictDataController;
use App\Http\Controllers\Admin\CommuneDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(
        ['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/setting/user', [UserController::class, 'index'])->name('setting.user');
            Route::get('/user/get-user', [UserController::class, 'getUser'])->name('user.get-user');
            Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
            Route::post('/user/destroy', [UserController::class, 'destroy'])->name('user.destroy')->middleware('permission:users-read');

            Route::get('/setting/role', [RoleController::class, 'index'])->name('role');
            Route::get('/setting/get-role', [RoleController::class, 'getRole'])->name('setting.get-role');
            Route::post('/role-permission/store', [RoleController::class, 'store'])->name('role-permission.store');
            Route::post('/role/store', [RoleController::class, 'storeRole'])->name('role.store');
            Route::post('/role/destroy', [RoleController::class, 'destroyRole'])->name('role.destroy');

            Route::get('/village-data', [VillageDataController::class, 'index'])->name('village-data');
            Route::get('/village-data/get-attributes', [VillageDataController::class, 'getAttributes'])->name('village-data.get-attributes');
            Route::get('/village-data/get-data/{id}', [VillageDataController::class, 'getData'])->name('village-data.get-data');

            // Route::get('/khom-data', [KhomDataController::class, 'index'])->name('khom-data');
            // Route::get('/khom-data/get-attributes', [KhomDataController::class, 'getAttributes'])->name('khom-data.get-attributes');
            // Route::get('/khom-data/get-data/{id}', [KhomDataController::class, 'getData'])->name('khom-data.get-data');

            Route::any('/commune-data', [CommuneDataController::class, 'index'])->name('commune-data');
            Route::any('/commune-data/getdata', [CommuneDataController::class, 'getdata']);
            Route::any('/commune-data/getdetail', [CommuneDataController::class, 'getdetail']);
            Route::post('/commune-data/save', [CommuneDataController::class, 'save']);
            Route::post('/commune-data/delete', [CommuneDataController::class, 'delete']);

            Route::any('/district-data', [DistrictDataController::class, 'index'])->name('district-data');
            Route::any('/district-data/getdata', [DistrictDataController::class, 'getdata']);
            Route::any('/district-data/getdetail', [DistrictDataController::class, 'getdetail']);
            Route::post('/district-data/save', [DistrictDataController::class, 'save']);
            Route::post('/district-data/delete', [DistrictDataController::class, 'delete']);
        }
    );
});

Auth::routes();
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
