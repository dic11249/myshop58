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

use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//同一個參數限制格式
Route::pattern('product', '[0-9]+');
Route::pattern('id', '[0-9]+');

//商品列表
Route::get('/','ProductController@index')->name('index');
//商品列表
Route::get('/product', 'ProductController@index')->name('product.index');
//商品詳情頁面
Route::get('/product/{product}', 'ProductController@show')->name('product.show');
//新增商品至購物車
Route::post('/cart', 'CartController@store')->name('cart.store');
//查看購物車商品
Route::get('/cart', 'CartController@index')->name('cart.index');
//移除購物車商品
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
