<?php

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

Route::get('/','HomeController@index');
//Route::get('Email/Send','SendEmailController@sendEmail');
Route::get('Email/Send','HomeController@jsonData');
Route::get('property/create','HomeController@getWizard');
Route::get('properties/get/{purpose?}/{country?}/{city?}/{location?}','PropertyController@index');
Route::get('property/{id}/detail','PropertyController@details');
Route::get('about-us','HomeController@getAboutUs');
Route::get('contact-us','HomeController@getContactUs');
Route::get('agents','HomeController@getAgents');
Route::get('projects','HomeController@getProjects');
Route::get('forget/{token}/get','HomeController@setPasswordView');
