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

Route::get('/admin' , 'adminController@dashboard');

Route::get('admin/cars' , 'CarController@index');

Route::get('admin/motorcycles' , 'MotorcycleController@index');

Route::get('admin/plans' , 'PlanController@index');

Route::get('admin/customers' , 'CustomerController@index');

Route::get('admin/employeds' , 'EmployedController@index');

Route::get('admin/bills' , 'BillController@index');

Route::get('admin/settings' , 'adminController@settings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


