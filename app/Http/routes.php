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
//api
Route::resource('project', 'ProjectController');
Route::resource('category', 'CategoryController');
Route::resource('user', 'UserController');

//admin
Route::get('/','LoginController@index');
Route::post('check','LoginController@loginCheck');
Route::get('admin','AdminController@index');
Route::get('login','LoginController@index');
Route::get('logout','LoginController@logout');




//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
