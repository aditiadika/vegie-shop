<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home.index');
Route::get('/shops', 'ShopController@index')->name('shops.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shops.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
Route::get('/checkout', 'CartController@checkout')->name('checkout.index');
Route::middleware('guest')->namespace('Auth')->group(function () {

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
