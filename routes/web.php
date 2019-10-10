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
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});
Route::get('contact', function () {
    return view('contact-us');
});
Route::get('/todo', 'todoController@index');
Route::post('/todo', 'todoController@store')->name('todo.insert');

Route::get('/todo/{id}/edit', 'todoController@edit')->name('todo.edit');
Route::patch('/todo/{id}/edit', 'todoController@update')->name('todo.update');

Route::get('/shipwithus', 'customerController@index');
Route::post('/shipwithus', 'customerController@store')->name('register.save');

Route::get('admin', 'customerController@admin');
Route::post('/admin', 'customerController@store')->name('register.save');

Route::get('admin_allcustomers', 'customerController@adminall');
Route::post('admin_allcustomers', 'customerController@store')->name('register.save');

Route::get('admin_editcustomer/{id}/edit', 'customerController@edit')->name('customer.edit');
Route::patch('admin_editcustomer/{id}/edit', 'customerController@update')->name('customer.update');

//Route::get('admin', 'shipmentController@index');
Route::patch('admin', 'shipmentController@store')->name('shipment.update');

Route::delete('admin/{id}/edit', 'customerController@delete')->name('customer.delete');

// Route::get('admin', 'customerController@searchview')->name('customer.search');
// Route::get('admin', 'customerController@search')->name('customer.search');

// Route::get('admin_allcustomers', 'customerController@search')->name('customer.search');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
