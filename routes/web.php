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

Route::get('/', 'ContactformController@home');
Route::post('/', 'ContactformController@send')->name('send.message');


Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});


Route::get('contact', 'ContactformController@create');
Route::post('contact', 'ContactformController@send')->name('send.message');

Route::get('shipments', 'shipmentController@arrival');



Route::get('/shipwithus', 'customerController@index');
Route::post('/shipwithus', 'customerController@store')->name('register.insert');

Auth::routes();
Route::group(['middleware' => ['auth', 'isAdmin','verified']], function () { 
Route::get('admin', 'AdminController@admin');
Route::post('/admin', 'AdminController@store')->name('register.save');

Route::get('admin_allcustomers', 'AdminController@adminall');
Route::post('admin_allcustomers', 'AdminController@store')->name('register.save');

Route::get('admin_editcustomer/{id}/edit', 'AdminController@edit')->name('customer.edit');
Route::patch('admin_editcustomer/{id}/edit', 'AdminController@update')->name('customer.update');

Route::get('shipmentadmin', 'shipmentController@adminshipment');
Route::post('shipmentadmin', 'shipmentController@insert')->name('shipment.insert');

Route::get('shipmentedit/{id}/edit', 'shipmentController@edit')->name('shipment.edit');
Route::patch('shipmentedit/{id}/edit', 'shipmentController@update')->name('shipment.update');
Route::delete('shipmentadmin/{id}/edit', 'shipmentController@delete')->name('shipment.delete');
Route::delete('admin/{id}/edit', 'AdminController@delete')->name('customer.delete');
});
// Route::get('admin', 'customerController@searchview')->name('customer.search');
// Route::get('admin', 'customerController@search')->name('customer.search');

// Route::get('admin_allcustomers', 'customerController@search')->name('customer.search');


Route::get('/home', 'AdminController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


