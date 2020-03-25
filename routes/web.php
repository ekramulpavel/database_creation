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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'AdminController@index');
Route::get('/food-category', 'AdminController@foodCategory');
Route::get('/customer', 'AdminController@customer');
Route::get('/food-list', 'AdminController@foodList');
Route::get('/order-list', 'AdminController@orderList');
Route::get('/payment-method', 'AdminController@paymentMethod');

