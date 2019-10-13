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

Auth::routes();

Route::get('admin', 'AdminController@admin');
Route::post('/admin', 'AdminController@store')->name('register.save');

Route::get('admin_allcustomers', 'AdminController@adminall');
Route::post('admin_allcustomers', 'AdminController@store')->name('register.save');

Route::get('admin_editcustomer/{id}/edit', 'AdminController@edit')->name('customer.edit');
Route::patch('admin_editcustomer/{id}/edit', 'AdminController@update')->name('customer.update');

Route::get('admin', 'shipmentController@index');
Route::patch('admin', 'shipmentController@update')->name('shipment.update');

Route::delete('admin/{id}/edit', 'AdminController@delete')->name('customer.delete');

// Route::get('admin', 'customerController@searchview')->name('customer.search');
// Route::get('admin', 'customerController@search')->name('customer.search');

// Route::get('admin_allcustomers', 'customerController@search')->name('customer.search');


Route::get('/home', 'AdminController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


