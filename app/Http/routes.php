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
Route::get('brands/create','BrandController@createBrand');
Route::get('brands/edit/{id}','BrandController@editBrand');
Route::post('savebrand','BrandController@saveBrand');
Route::post('updateBrand/{id}','BrandController@updateBrand');
Route::post('deleteBrand','BrandController@delete');
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

// Engine
Route::get('createengine','EngineController@createEngine');
Route::post('saveengine','EngineController@saveEngine');
Route::get('manageengine','EngineController@manage');
Route::get('editengine/{id}','EngineController@edit');
Route::post('updateengine/{id}','EngineController@update');
Route::get('deleteengine/{id}','ModelController@delete');

//Department
Route::get('depts','DepartmentsController@Index');
Route::get('dept/create','DepartmentsController@Create');
Route::Post('savedept','DepartmentsController@savedept');
Route::Post('GetModelByBrand','DepartmentsController@GetModelByBrand');
Route::Post('GetEngineByModel','DepartmentsController@GetEngineByModel');
Route::Post('DeleteDepartment','DepartmentsController@DeleteDepartment');
Route::get('dept/edit/{id}','DepartmentsController@edit');
Route::post('updatedept','DepartmentsController@updatedept');




//Sub Department
Route::get('createsubdepartment','SubDepartmentController@createSubDepartment');
Route::post('savesubdepartment','SubDepartmentController@saveSubDepartment');
Route::get('managesubdepartment','SubDepartmentController@manage');
Route::get('editsubdepartment/{id}','SubDepartmentController@edit');
Route::get('updatesubdepartment/{id}','SubDepartmentController@update');

//events
Route::get('events/create','EventsController@create');


//Team
Route::get('createmember','TeamController@createMember');
Route::Post('savemember','TeamController@saveMember');