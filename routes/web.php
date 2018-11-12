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

Route::resource('admin/cars' , 'ProductController');

Route::resource('admin/motorcycles','ProductController');

Route::get('admin/plans' , 'adminController@plans');

Route::resource('admin/customers' , 'CustomerController');

Route::resource('admin/employeds' , 'EmployedController');

Route::get('admin/bills' , 'adminController@bills');

Route::get('admin/settings' , 'adminController@settings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



