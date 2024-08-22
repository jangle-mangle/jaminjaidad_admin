<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\SubAdmin\Auth\LoginController;
use App\Http\Controllers\Administrator\SubAdmin\HomeController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Administrator\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth Routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('vendor');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('vendor.login');
Route::post('/login', [LoginController::class, 'login'])->name('vendor.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('vendor.logout')->middleware('auth:vendor');

$router->group(['middleware' => ['auth:vendor']], function($router)
{
    //Home Routes
    Route::get('/home', [HomeController::class, 'index'])->name('vendor.home');

    //Profile & Password Route
    Route::post('/password/update', [HomeController::class, 'password_update'])->name('vendor.password.update');

    //User Routes
    $router->group(['prefix' => 'users'], function($router)
    {
        Route::get('/', [UserController::class, 'index'])->name('vendor.users');
        Route::get('/data', [UserController::class, 'data'])->name('vendor.users.data');
        Route::post('/status', [UserController::class, 'status'])->name('vendor.users.status');
    });

    //Notification Routes
    $router->group(['prefix' => 'notifications'], function($router)
    {
        Route::get('/', [NotificationController::class, 'index'])->name('vendor.notifications');
        Route::get('/data', [NotificationController::class, 'data'])->name('vendor.notifications.data');
        Route::post('/', [NotificationController::class, 'store'])->name('vendor.notifications.store');
    });
});


