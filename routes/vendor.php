<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\Vendor\Auth\LoginController;
use App\Http\Controllers\Administrator\Vendor\HomeController;
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

    Route::post('/verify_number', [LoginController::class, 'verify_number'])->name('vendor.verify_number');
    Route::get('/otp_verify/{mobile}', [LoginController::class, 'catch_mobile'])->name('otp_verify');
    Route::post('/verify_otp', [LoginController::class, 'verify_otp'])->name('vendor.verify_otp');
    Route::get('/register/{mobile}', [LoginController::class, 'catch_mobile_no'])->name('register');
    Route::post('/submit_vendor', [LoginController::class, 'submit_details'])->name('vendor.submit_vendor_detail');
    Route::get('/accomodation/{mobile}', [LoginController::class, 'accomodation'])->name('accomodation');
    Route::post('/accomodation', [LoginController::class, 'submit_accomodation'])->name('vendor.accomodation');
    Route::get('/food/{mobile}', [LoginController::class, 'food'])->name('food');
    Route::post('/food', [LoginController::class, 'submit_food'])->name('vendor.food');
    Route::get('/transport/{mobile}', [LoginController::class, 'transport'])->name('transport');
    Route::post('/transport', [LoginController::class, 'submit_transport'])->name('vendor.transport');
    Route::get('/submission', [LoginController::class, 'waiting'])->name('vendor.waiting');

    Route::get('search-admin-restaurant-map-address', [LoginController::class, 'place'])->name('admin.restaurant.search.location');
    Route::get('search-admin-restaurant-map-suggestion', [LoginController::class, 'geocode'])->name('admin.restaurant.search.location.suggestion');

    $router->group(['middleware' => ['auth:vendor']], function($router)
    {
        //Home Routes
        Route::get('/home', [HomeController::class, 'index'])->name('vendor.home');
        Route::get('/profile', [HomeController::class, 'manage_profile'])->name('vendor.profile');
        Route::post('/update_vendor', [HomeController::class, 'update_vendor'])->name('vendor.update_vendor');
        Route::post('/update_category', [HomeController::class, 'update_category'])->name('vendor.update_category');
        Route::post('/update_location', [HomeController::class, 'update_location'])->name('vendor.update_location');
       
        Route::get('/accomodation_plan', [HomeController::class, 'accomodation_plan'])->name('vendor.accomodation_plan');
        Route::get('/add_accomodation_plan', [HomeController::class, 'add_accomodation_plan'])->name('vendor.add_accomodation_plan');
        Route::post('/add_accomodation', [HomeController::class, 'add_accomodation'])->name('vendor.add_accomodation');
        Route::get('/edit_accomodation_plan/{id}', [HomeController::class, 'edit_accomodation_plan'])->name('vendor.edit_accomodation_plan');
        Route::post('/edit_accomodation', [HomeController::class, 'add_accomodation'])->name('vendor.edit_accomodation');
        Route::get('/accomodationDataTable', [HomeController::class, 'accomodationDataTable'])->name('vendor.accomodationDataTable');
        Route::post('/accomodation_enable', [HomeController::class, 'accomodation_enable'])->name('vendor.accomodation_enable');
        Route::post('/accomodation_disable', [HomeController::class, 'accomodation_disable'])->name('vendor.accomodation_disable');
        Route::post('/accomodation_delete', [HomeController::class, 'accomodation_delete'])->name('vendor.accomodation_delete');

        Route::get('/food_plan', [HomeController::class, 'food_plan'])->name('vendor.food_plan');
        Route::get('/add_food_plan', [HomeController::class, 'add_food_plan'])->name('vendor.add_food_plan');
        Route::post('/add_food', [HomeController::class, 'add_food'])->name('vendor.add_food');
        Route::get('/edit_food_plan/{id}', [HomeController::class, 'edit_food_plan'])->name('vendor.edit_food_plan');
        Route::post('/edit_food', [HomeController::class, 'add_food'])->name('vendor.edit_food');
        Route::get('/foodDataTable', [HomeController::class, 'foodDataTable'])->name('vendor.foodDataTable');
        Route::post('/food_enable', [HomeController::class, 'food_enable'])->name('vendor.food_enable');
        Route::post('/food_disable', [HomeController::class, 'food_disable'])->name('vendor.food_disable');
        Route::post('/food_delete', [HomeController::class, 'food_delete'])->name('vendor.food_delete');

        Route::get('/transport_plan', [HomeController::class, 'transport_plan'])->name('vendor.transport_plan');
        Route::get('/add_transport_plan', [HomeController::class, 'add_transport_plan'])->name('vendor.add_transport_plan');
        Route::post('/add_transport', [HomeController::class, 'add_transport'])->name('vendor.add_transport');
        Route::get('/edit_transport_plan/{id}', [HomeController::class, 'edit_transport_plan'])->name('vendor.edit_transport_plan');
        Route::post('/edit_transport', [HomeController::class, 'add_transport'])->name('vendor.edit_transport');
        Route::get('/transportDataTable', [HomeController::class, 'transportDataTable'])->name('vendor.transportDataTable');
        Route::post('/transport_enable', [HomeController::class, 'transport_enable'])->name('vendor.transport_enable');
        Route::post('/transport_disable', [HomeController::class, 'transport_disable'])->name('vendor.transport_disable');
        Route::post('/transport_delete', [HomeController::class, 'transport_delete'])->name('vendor.transport_delete');

        Route::get('/booking_and_orders', [HomeController::class, 'booking_and_orders'])->name('vendor.booking_and_orders');
        Route::get('/account_settlement', [HomeController::class, 'account_settlement'])->name('vendor.account_settlement');
        Route::get('/rating_reviews', [HomeController::class, 'rating_reviews'])->name('vendor.rating_reviews');
        Route::get('/notifications', [HomeController::class, 'notifications'])->name('vendor.notifications');
        //Profile & Password Route
        Route::post('/password/update', [HomeController::class, 'password_update'])->name('vendor.password.update');
        Route::post('add_thumbnail', [HomeController::class, 'add_thumbnail'])->name('vendor.add_thumbnail');
        Route::post('add_image', [HomeController::class, 'add_image'])->name('vendor.add_image');

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





    