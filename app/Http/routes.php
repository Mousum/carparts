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
Route::get('createadmin','AdminController@createAdmin');
Route::post('saveadmin','AdminController@saveAdmin');
Route::get('manageadmin','AdminController@manage');
Route::get('editadmin/{id}','AdminController@edit');
Route::post('updateadmin/{id}','AdminController@update');
Route::get('deleteadmin/{id}','AdminController@delete');
Route::post('blockadmin','AdminController@block');
Route::post('unblockadmin','AdminController@unblock');
Route::get('login','LoginController@index');
Route::get('logout','LoginController@logout');


//Brand
Route::get('brands','BrandController@Index');
Route::get('createbrand','BrandController@createBrand');
Route::post('savebrand','BrandController@saveBrand');
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);


//Model

Route::get('createmodel','ModelController@createModel');
Route::post('savemodel','ModelController@saveModel');
Route::get('managemodel','ModelController@manage');
Route::get('deletemodel/{id}','ModelController@delete');
Route::get('editmodel/{id}','ModelController@edit');
Route::post('updatemodel/{id}','ModelController@update');
