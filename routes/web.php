<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




Route::get('/', [App\Http\Controllers\User\UserDashboardController::class, 'homePage']);
Route::get('/about', [App\Http\Controllers\User\UserDashboardController::class, 'about']);
Route::get('/contact-us', [App\Http\Controllers\User\BooksController::class, 'contact']);
Route::get('/book', [App\Http\Controllers\User\BooksController::class, 'books']);
Route::get('/book/detail/{id}', [App\Http\Controllers\User\BooksController::class, 'detail']);
Route::get('location/{id}', [App\Http\Controllers\User\LocationController::class, 'index']);
Route::get('category/{id}', [App\Http\Controllers\User\CategoryController::class, 'index']);
Route::post('message', [App\Http\Controllers\User\MessageController::class, 'store']);
Route::post('search', [App\Http\Controllers\User\UserDashboardController::class, 'search']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'User' , "middleware"=>['auth','user']],function(){
    Route::get('/dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');

    Route::get('/book/create', [App\Http\Controllers\User\BooksController::class, 'create']);
    Route::get('/book/index', [App\Http\Controllers\User\BooksController::class, 'index']);
    Route::post('/book/store', [App\Http\Controllers\User\BooksController::class, 'store']);

    //cart
    Route::get('/cart/{id}', [App\Http\Controllers\User\CartController::class, 'store']);
    Route::get('/cart-detail', [App\Http\Controllers\User\CartController::class, 'cart_details']);
    Route::post('cart/quantity-store/{id}', [App\Http\Controllers\User\CartController::class, 'quantity']);
    Route::get('cart/delete/{id}', [App\Http\Controllers\User\CartController::class, 'destroy']);
    //checkout
    Route::post('checkout/store', [App\Http\Controllers\User\CheckoutController::class, 'store']);
    //order
    Route::get('order', [App\Http\Controllers\User\OrderController::class, 'index']);
    //logout
    Route::get('logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout']);

});







Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'Admin' , "middleware"=>['auth','admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    //category
    Route::get('category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('category/store', [App\Http\Controllers\Admin\CategoryController::class, 'storeOrUpdate']);
    Route::post('category/store/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'storeOrUpdate']);
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    //location
    Route::get('location/index', [App\Http\Controllers\Admin\LocationController::class, 'index']);
    Route::get('location/create', [App\Http\Controllers\Admin\LocationController::class, 'create']);
    Route::post('location/store', [App\Http\Controllers\Admin\LocationController::class, 'storeOrUpdate']);
    Route::post('location/store/{id}', [App\Http\Controllers\Admin\LocationController::class, 'storeOrUpdate']);
    Route::get('location/edit/{id}', [App\Http\Controllers\Admin\LocationController::class, 'edit']);
    Route::get('location/delete/{id}', [App\Http\Controllers\Admin\LocationController::class, 'destroy']);

    //book
    Route::get('book/index', [App\Http\Controllers\Admin\BookController::class, 'index']);
    Route::get('book/create', [App\Http\Controllers\Admin\BookController::class, 'create']);
    Route::post('book/store', [App\Http\Controllers\Admin\BookController::class, 'storeOrUpdate']);
    Route::post('book/store/{id}', [App\Http\Controllers\Admin\BookController::class, 'storeOrUpdate']);
    Route::get('book/edit/{id}', [App\Http\Controllers\Admin\BookController::class, 'edit']);
    Route::get('book/view/{id}', [App\Http\Controllers\Admin\BookController::class, 'show']);
    Route::get('book/status/{id}', [App\Http\Controllers\Admin\BookController::class, 'status']);
    Route::get('book/user-post', [App\Http\Controllers\Admin\BookController::class, 'pending']);
    Route::get('book/delete/{id}', [App\Http\Controllers\Admin\BookController::class, 'destroy']);

    //order
    Route::get('order/orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('order/status/{id}', [App\Http\Controllers\Admin\OrderController::class, 'status']);
    Route::get('order/delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'destroy']);
    Route::get('order/detail/{id}', [App\Http\Controllers\Admin\OrderController::class, 'detail']);
    Route::post('order/porduct-quantiy/{id}', [App\Http\Controllers\Admin\OrderController::class, 'quantity']);
    Route::post('order/cart-delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'delete']);
    //message
    Route::get('message/messages', [App\Http\Controllers\Admin\MessageController::class, 'index']);
    Route::get('message/status/{id}', [App\Http\Controllers\Admin\MessageController::class, 'status']);
    Route::get('message/delete/{id}', [App\Http\Controllers\Admin\MessageController::class, 'delete']);

    //logout
    Route::get('logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout']);

});




