<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\Admin\Auth\LoginController;
use App\Http\Controllers\Administrator\Admin\HomeController;
use App\Http\Controllers\Administrator\Admin\SettingController;
use App\Http\Controllers\Administrator\Admin\SubAdminController;

//Common Administrator Controllers.
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Administrator\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| https://staging.admin.camelpass.proapp.in/restaurant/profile
| contains the "web" middleware group. Now create something great!
|
*/
// Clear application cache:

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
	Artisan::call('route:cache');
 	Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

//Auth Routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('admin');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout')->middleware('auth:admin');

$router->group(['middleware' => ['auth:admin']], function($router)
{
    //Home Routes
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/approved_vendor', [SubAdminController::class, 'approved_vendor'])->name('admin.vendor.approved_vendor');
   
   


   



    Route::get('/banner', [HomeController::class, 'banner'])->name('admin.banner');
    Route::get('/bannerDataTable', [HomeController::class, 'bannerDataTable'])->name('admin.bannerDataTable');
    Route::get('/add_banner', [HomeController::class, 'add_banner'])->name('admin.add_banner');
    Route::post('/add_banner_detail', [HomeController::class, 'add_banner_detail'])->name('admin.add_banner_detail');
    Route::get('/edit_banner/{id}', [HomeController::class, 'edit_banner'])->name('admin.edit_banner');
    Route::post('/edit_banner_detail', [HomeController::class, 'add_banner_detail'])->name('admin.edit_banner_detail');
    Route::post('/banner_enable', [HomeController::class, 'banner_enable'])->name('admin.banner_enable');
    Route::post('/banner_disable', [HomeController::class, 'banner_disable'])->name('admin.banner_disable');
    Route::post('/banner_delete', [HomeController::class, 'banner_delete'])->name('admin.banner_delete');
   
    //Profile & Password Routes
    Route::post('/password/update', [HomeController::class, 'password_update'])->name('admin.password.update');

    //User Routes
    $router->group(['prefix' => 'users'], function($router)
    {
        Route::get('/', [UserController::class, 'index'])->name('admin.users');
        Route::get('/data', [UserController::class, 'data'])->name('admin.users.data');
        Route::post('/status', [UserController::class, 'status'])->name('admin.users.status');
    });

    $router->group(['prefix' => 'vendor'], function($router)
    {
        Route::get('/', [SubAdminController::class, 'index'])->name('admin.vendor');
        Route::post('/', [SubAdminController::class, 'store'])->name('admin.vendor.create');
        Route::get('/data', [SubAdminController::class, 'data'])->name('admin.vendor.data');
        Route::post('/approve', [SubAdminController::class, 'approve'])->name('admin.vendor.approve');
        Route::post('/reject', [SubAdminController::class, 'reject'])->name('admin.vendor.reject');
        Route::post('/delete', [SubAdminController::class, 'delete'])->name('admin.vendor.delete');
        Route::get('/view_vendor', [SubAdminController::class, 'view_vendor'])->name('admin.vendor.view_vendor');
        Route::get('/profile/{id}', [SubAdminController::class, 'profile'])->name('admin.vendor.profile');
        Route::post('/update', [SubAdminController::class, 'update'])->name('admin.vendor.update');
        Route::get('/approved', [SubAdminController::class, 'approved'])->name('admin.vendor.approved');

        Route::post('/disable', [SubAdminController::class, 'disable'])->name('admin.vendor.disable');
        Route::post('/enable', [SubAdminController::class, 'enable'])->name('admin.vendor.enable');
    });



}); 

