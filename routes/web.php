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

Route::get('/home', function () {
    return view('home');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/deskProduk', function () {
    return view('deskProduk');
});

Route::get('/jualBarang', function () {
    return view('jualBarang');
});

Route::get('/lihatBarang', function () {
    return view('lihatBarang');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/barangKu', function () {
    return view('barangKu');
});

Route::get('/payment', function () {
    return view('payment');
});
