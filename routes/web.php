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

//Route::view('/', 'welcome');
Route::get('/', 'HomeController')->name('home.index');
Route::get('/shops', 'ShopController@index')->name('shops.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shops.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
Route::view('/checkout', 'checkout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
