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
    return view('welcome');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/blog', function () {
    return view('layout.blog');
});

Route::get('checkout', function () {
    return view('layout.checkout');
});

Route::get('contact', function () {
    return view('layout.contact');
});

Route::get('main', function () {
    return view('layout.main');
});

Route::get('product-details', function () {
    return view('layout.product-details');
});

Route::get('shop-cart', function () {
    return view('layout.shop-cart');
});

Route::get('shop', function () {
    return view('layout.shop');
});

Route::get('blog-details', function () {
    return view('layout.blog-details');
});

Route::get('login', function () {
    return view('layout.login');
});

Route::get('signup', function () {
    return view('layout.signup');
});


Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('login', function () {
    return view('login');
});
