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

Route::get('/admin' , 'AdminController@dashboard');

Route::get('admin/cars' , 'ProductController@Index');

Route::get('admin/motorcycles' , 'AdminController@motorcycles');

Route::get('admin/plans' , 'AdminController@plans');

Route::get('admin/customers' , 'AdminController@customers');

Route::get('admin/employeds' , 'AdminController@employeds');

Route::get('admin/bills' , 'AdminController@bills');

Route::get('admin/settings' , 'AdminController@settings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


