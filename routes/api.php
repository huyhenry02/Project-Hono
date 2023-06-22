<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('auth_client')->group(function (){
    Route::post('/login','AuthClientController@postLogin')->name('login_client.postLogin');
    Route::post('/register', 'AuthClientController@postRegister')->name('register_client.postRegister');
    Route::get('/email/verify/{id}', 'AuthController@verifyEmail')->name('verification.verify');
});
//Reset Password
Route::post('password/email', 'AuthClientController@forgotPassword')->name('password.email');
Route::post('password/reset', 'AuthClientController@resetPassword')->name('password.reset');

