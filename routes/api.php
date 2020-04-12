<?php

use Illuminate\Http\Request;

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
Route::post('email/send','SendEmailController@sendEmail');
Route::post('cities/get','HomeController@getCities');
Route::get('wizard','HomeController@getWizard');
Route::get('property/{propertyId}/contact/get','PropertyController@getContact');
Route::post('property/filter','PropertyController@filterProperties');
Route::resource('property','PropertyController');
Route::get('property/image/get','PropertyController@getImage');
Route::post('message/send','SendEmailController@sendMessage');
Route::get('ip','HomeController@getUserIpAddr');
Route::post('user/save','HomeController@saveUser');
Route::get('user/{id}/get','HomeController@isLoggined');
Route::post('login','HomeController@login');
Route::post('forgetpassword','HomeController@forgetPassword');
Route::post('setpassword','HomeController@changePassword');
