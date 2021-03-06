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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/dashboard', 'DashboardController');


Route::namespace('Maintenance')->group(function() {


    Route::resource('customer', 'CustomerController');
    Route::resource('technician','TechnicianController');
    Route::resource('model','VehicleModelsController');
    Route::resource('inspection','InspectionController');
    Route::resource('category','ServiceCategoryController');
    Route::resource('service','ServiceListController');
    
    
  
    
});