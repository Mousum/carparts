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

Route::group(array('prefix' => 'admin'), function() {

//admin
Route::get('/','Admin\LoginController@index');
Route::post('check','Admin\LoginController@loginCheck');
Route::get('admin','Admin\AdminController@index');
Route::get('createadmin','Admin\AdminController@createAdmin');
Route::post('saveadmin','Admin\AdminController@saveAdmin');
Route::get('manageadmin','Admin\AdminController@manage');
Route::get('editadmin/{id}','Admin\AdminController@edit');
Route::post('updateadmin/{id}','Admin\AdminController@update');
Route::get('deleteadmin/{id}','Admin\AdminController@delete');
Route::post('blockadmin','Admin\AdminController@block');
Route::post('unblockadmin','Admin\AdminController@unblock');
Route::get('login','Admin\LoginController@index');
Route::get('logout','Admin\LoginController@logout');


//Brand
Route::get('brands','Admin\BrandController@Index');
Route::get('brands/create','Admin\BrandController@createBrand');
Route::get('brands/edit/{id}','Admin\BrandController@editBrand');
Route::post('savebrand','Admin\BrandController@saveBrand');
Route::post('updateBrand/{id}','Admin\BrandController@updateBrand');
Route::post('deleteBrand','Admin\BrandController@delete');
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);


//Model

Route::get('createmodel','Admin\ModelController@createModel');
Route::post('savemodel','Admin\ModelController@saveModel');
Route::get('managemodel','Admin\ModelController@manage');
Route::get('deletemodel/{id}','Admin\ModelController@delete');
Route::get('editmodel/{id}','Admin\ModelController@edit');
Route::post('updatemodel/{id}','Admin\ModelController@update');
Route::get('getmodels','Admin\ModelController@GetModelByBrand');

// Engine
Route::get('createengine','Admin\EngineController@createEngine');
Route::post('saveengine','Admin\EngineController@saveEngine');
Route::get('manageengine','Admin\EngineController@manage');
Route::get('editengine/{id}','Admin\EngineController@edit');
Route::post('updateengine/{id}','Admin\EngineController@update');
Route::get('deleteengine/{id}','Admin\EngineController@delete');
Route::get('getengine','Admin\EngineController@GetEngineByModel');

//Department
Route::get('depts','Admin\DepartmentsController@Index');
Route::get('dept/create','Admin\DepartmentsController@Create');
Route::Post('savedept','Admin\DepartmentsController@savedept');
Route::Post('GetModelByBrand','Admin\DepartmentsController@GetModelByBrand');
Route::Post('GetEngineByModel','Admin\DepartmentsController@GetEngineByModel');
Route::Post('DeleteDepartment','Admin\DepartmentsController@DeleteDepartment');
Route::get('dept/edit/{id}','Admin\DepartmentsController@edit');
Route::post('updatedept','Admin\DepartmentsController@updatedept');




//Sub Department
Route::get('createsubdepartment','Admin\SubDepartmentController@createSubDepartment');
Route::post('savesubdepartment','Admin\SubDepartmentController@saveSubDepartment');
Route::get('managesubdepartment','Admin\SubDepartmentController@manage');
Route::get('editsubdepartment/{id}','Admin\SubDepartmentController@edit');
Route::get('updatesubdepartment/{id}','Admin\SubDepartmentController@update');

//events
Route::get('events/create','Admin\EventsController@create');
Route::post('events/add','Admin\EventsController@addEvent');
Route::get('events','Admin\EventsController@Index');
Route::get('events/edit/{id}','Admin\EventsController@Edit');
Route::post('events/update','Admin\EventsController@Update');
Route::post('events/deleteImage','Admin\EventsController@deleteImage');
Route::post('events/delete','Admin\EventsController@deleteEvent');


//Team
Route::get('createmember','Admin\TeamController@createMember');
Route::Post('savemember','Admin\TeamController@saveMember');
Route::get('managemember','Admin\TeamController@manage');


//Products
Route::get('products/manage','Admin\ProductsController@manageProduct');
Route::get('products/create','Admin\ProductsController@Create');
Route::get('products/edit/{id}','Admin\ProductsController@EditProduct');
Route::get('products/getDescriptionMeta','Admin\ProductsController@GetDescriptionMeta');
Route::post('products/save','Admin\ProductsController@SaveProduct');
Route::post('product/delete','Admin\ProductsController@DeleteProduct');
Route::post('/products/deleteImage','Admin\ProductsController@deleteImage');
Route::post('/products/update/{id}','Admin\ProductsController@UpdateProduct');

//vehicle
Route::get('vehicle/manage','Admin\VehicleController@ManageVehicle');
Route::get('vehicle/create','Admin\VehicleController@Create');
Route::get('vehicle/edit/{id}','Admin\VehicleController@editVehicle');
Route::post('vehicle/save','Admin\VehicleController@SaveVehicle');
Route::post('deletevehicle','Admin\VehicleController@deletevehicle');
Route::post('vehicle/update/{id}','Admin\VehicleController@UpdateVehicle');

});