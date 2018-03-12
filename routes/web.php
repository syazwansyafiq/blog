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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/order', 'OrderController@index');
Route::post('/order/create', 'OrderController@create');
Route::get('/checkout', 'CheckoutController@order');
Route::post('/checkout/create', 'CheckoutController@create');