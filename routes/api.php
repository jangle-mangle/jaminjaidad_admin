<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/api',function(Request $request){
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() 
{
    Route::post('login', [UserController::class, 'verify_number']);
    Route::post('/verify_otp', [UserController::class, 'verify_otp']); 
    Route::post('/register', [UserController::class, 'submit_details']);
    Route::post('/resend_otp', [UserController::class, 'resend_otp']);


    Route::middleware('auth:api')->group(function()
    {
        Route::get('/get_profile', [UserController::class, 'get_profile']);
        Route::get('/my_property', [UserController::class, 'my_property']);
        Route::get('/all_properties', [UserController::class, 'all_properties']);
        Route::post('/post_property', [UserController::class, 'post_property']);
        Route::post('/edit_profile', [UserController::class, 'edit_profile']);
        Route::get('/get_banner', [UserController::class, 'get_banner']);
        
    });
    
});
