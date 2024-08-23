<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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

Route::get('/', function () {
  // return view('index');
  return redirect('admin') ; 
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');

Route::post('/verify_number', [UserController::class, 'verify_number'])->name('user.verify_number');
Route::post('/verify_otp', [UserController::class, 'verify_otp'])->name('user.verify_otp');
Route::get('/user_register', [UserController::class, 'user_register'])->name('user.register');
Route::post('/registeration', [UserController::class, 'submit_details'])->name('user.registration');
Route::get('/education/{id}', [UserController::class, 'education'])->name('user.education');
Route::post('/education_details', [UserController::class, 'education_submit'])->name('user.education_details');

Route::group(['middleware' => 'user.auth'], function(){

  Route::get('/home', [UserController::class, 'home_page'])->name('user.home');

});

