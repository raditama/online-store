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
    return view('pages.home.index');
});

Route::get('/cart', function () {
    return view('pages.cart.index');
});

Route::get('/user', function () {
    return view('pages.user.index');
});

Route::get('/product', function () {
    return view('pages.product.index');
});

Route::get('/order', function () {
    return view('pages.order.index');
});
