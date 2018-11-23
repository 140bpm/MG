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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function () {

    Route::resource('admin/cars' , 'ProductController');
    Route::resource('admin/motorcycles','ProductController');
    Route::resource('admin/customers' , 'CustomerController');
    Route::get('/admin' , 'adminController@dashboard');
    Route::resource('admin/plans' , 'PlanController');
    Route::resource('admin/employeds' , 'EmployedController');
    Route::resource('admin/bills' , 'BillController');
    Route::resource('admin/settings' , 'adminController@settings');

    });


