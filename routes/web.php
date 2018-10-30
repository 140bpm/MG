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

Route::get('admin/cars' , 'ProductController@Index');

Route::get('admin/motorcycles' , 'adminController@motorcycles');

Route::get('admin/plans' , 'adminController@plans');

Route::get('admin/customers' , 'adminController@customers');

Route::get('admin/employeds' , 'adminController@employeds');

Route::get('admin/bills' , 'adminController@bills');

Route::get('admin/settings' , 'adminController@settings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


