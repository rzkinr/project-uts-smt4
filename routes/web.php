<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/products', 'ProductsController@index')->name('products.index');
Route::get('/products/create', 'ProductsController@create')->name('products.create');
Route::get('/products/{id}/show', 'ProductsController@show')->name('products.show');
Route::post('/products', 'ProductsController@store')->name('products.store');
Route::get('/products/{id}/edit', 'ProductsController@edit')->name('products.edit');
Route::post('/products/{id}/update', 'ProductsController@update')->name('products.update');
Route::get('/products/{id}/delete', 'ProductsController@destroy')->name('products.destroy');

Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::get('/customer/{id}/show', 'CustomerController@show')->name('customer.show');
Route::post('/customer', 'CustomerController@store')->name('customer.store');
Route::get('/customer/{id}/edit', 'CustomerController@edit')->name('customer.edit');
Route::post('/customer/{id}/update', 'CustomerController@update')->name('customer.update');
Route::get('/customer/{id}/delete', 'CustomerController@destroy')->name('customer.destroy');



