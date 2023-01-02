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

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin/users', function () {
    return view('admin/users');
});

Route::get('/admin/products', function () {
    return view('admin/products');
});

Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::post('/admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::patch('/admin/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/categories/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

Route::post('/admin/types', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
Route::patch('/admin/types/{type}', [App\Http\Controllers\TypeController::class, 'update'])->name('type.update');
Route::delete('/admin/types/{type}/destroy', [App\Http\Controllers\TypeController::class, 'destroy'])->name('type.delete');


Route::get('/admin/transactions', function () {
    return view('admin/transactions');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
        Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
        Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
    });
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('admin/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
