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
    return view('home/home');
});

Route::get('/cart', function () {
    return view('cart/cart');
});

Route::get('/products/1', function () {
    return view('product/show');
});

Route::get('/products', function () {
    return view('product/index');
});

Route::get('/wishlist', function () {
    return view('wishlist/index');
});

Route::get('/user/1/personal', function () {
    return view('user/personal');
});

Route::get('/user/1/orders', function () {
    return view('user/orders');
});

Route::get('/user/1/wishlist', function () {
    return view('user/wishlist');
});

Route::get('/signup', function () {
    return view('user/signup');
});

Route::get('/signin', function () {
    return view('user/signin');
});

Route::get('/forgot', function () {
    return view('user/forgot');
});

Route::get('/reset', function () {
    return view('user/reset');
});

Route::get('/blocked', function () {
    return view('user/blocked');
});
