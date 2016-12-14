<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
// url user welcome ko home fn 
Route::get('user', 'WelcomeController@home');
// url user/a welcome ko a fn 
Route::get('home', 'HomeController@index');

// make own controller
Route::post('user/st', 'TestController@store');
Route::get('user/a', 'TestController@index');
Route::get('user/showuser', 'TestController@showuser');
Route::post('user/store', 'registerController@store');
Route::get('user/showregister', 'registerController@showregister');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);