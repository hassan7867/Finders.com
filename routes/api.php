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
Route::resource('property','PropertyController');
//Route::get('top','HomeController@getTop');
