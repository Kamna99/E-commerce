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

Route::get('/', 'FrontEndController@index')->name('index');
Auth::routes();


Route::resource('products','ProductsController');

Route::get('/product/{id}','FrontEndController@single')->name('product.single');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/cart/add','ShopsController@cart_add')->name('cart.add');

Route::get('/cart','ShopsController@cart')->name('cart');

Route::get('/cart/delete/{id}','ShopsController@cart_delete')->name('cart.delete');

Route::get('cart/incr/{id}/{qty}','ShopsController@cart_incr')->name('cart.incr');

Route::get('cart/decr/{id}/{qty}','ShopsController@cart_decr')->name('cart.decr');

Route::get('cart/rapid/add/{id}','ShopsController@rapid')->name('cart.rapid');

Route::get('cart/checkout','CheckoutController@checkout')->name('checkout');



