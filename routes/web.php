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


Route::get('contact', 'ContactformController@create')->name('contact');
Route::post('contact', 'ContactformController@send')->name('send.message');

Route::get('shipments', 'shipmentController@arrival')->name('shipments');



Route::get('/shipwithus', 'customerController@index')->name('shipwithus');
Route::post('/shipwithus', 'customerController@store')->name('register.insert');

Auth::routes();
Route::group(['middleware' => ['auth', 'isAdmin','verified']], function () { 
Route::get('admin', 'AdminController@admin')->name('admin.index');
Route::post('/admin', 'AdminController@store')->name('register.save');

Route::get('admin_allcustomers', 'AdminController@adminall')->name('admin.allcustomers');
Route::post('admin_allcustomers', 'AdminController@store')->name('register.store');

Route::get('admin_editcustomer/{id}/edit', 'AdminController@edit')->name('customer.edit');
Route::patch('admin_editcustomer/{id}/edit', 'AdminController@update')->name('customer.update');

Route::get('shipmentadmin', 'shipmentController@adminshipment')->name('admin.shipments');
Route::post('shipmentadmin', 'shipmentController@insert')->name('shipment.insert');

Route::get('shipmentedit/{id}/edit', 'shipmentController@edit')->name('shipment.edit');
Route::patch('shipmentedit/{id}/edit', 'shipmentController@update')->name('shipment.update');
Route::delete('shipmentadmin/{id}/edit', 'shipmentController@delete')->name('shipment.delete');

Route::delete('admin/{id}/edit', 'AdminController@delete')->name('customer.delete');

Route::get('users', 'AdminController@users')->name('admin.users');
Route::get('users/{id}/edit', 'AdminController@adminedit')->name('admin.edit');
Route::patch('users/{id}/edit', 'AdminController@adminupdate')->name('admin.update');
Route::delete('users/{id}/edit', 'AdminController@admindelete')->name('admin.delete');
});

Route::get('/home', 'AdminController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


