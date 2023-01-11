<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/cart', function () {
    return view('cart/cart');
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

Route::get('/', [App\Http\Controllers\ProductController::class, 'index_featured'])->name('product.index_featured');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
        Route::get('login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.auth.login');
        Route::post('login', 'App\Http\Controllers\Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
        Route::post('logout', 'App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.auth.logout');
    });

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/admin/products/all', [App\Http\Controllers\ProductController::class, 'indexAdmin'])->name('product.indexAdmin');
    Route::get('/admin/products/add', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/admin/products/add', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/products/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/admin/products/{product}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::patch('/admin/products/{product}/active', [App\Http\Controllers\ProductController::class, 'active'])->name('product.active');
    Route::patch('/admin/products/{product}/featured', [App\Http\Controllers\ProductController::class, 'featured'])->name('product.featured');
    Route::delete('/admin/products/{product}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');


    Route::get('/admin/characteristics', [App\Http\Controllers\CharacteristicsController::class, 'index'])->name('characteristics.index');

    Route::post('/admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::patch('/admin/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/categories/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

    Route::post('/admin/types', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
    Route::patch('/admin/types/{type}', [App\Http\Controllers\TypeController::class, 'update'])->name('type.update');
    Route::delete('/admin/types/{type}/destroy', [App\Http\Controllers\TypeController::class, 'destroy'])->name('type.delete');

    Route::post('/admin/brands', [App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
    Route::patch('/admin/brands/{brand}', [App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');
    Route::delete('/admin/brands/{brand}/destroy', [App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.delete');


    Route::get('/admin/transactions', function () {
        return view('admin/transactions');
    });

    Route::get('/admin/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users');

});
