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
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/template', function () {
    return view('template.base');
});

Route::get('/beranda', function () {
    return view('Admin.beranda');
});

Route::get('/produk', function () {
    return view('Admin.produk');
});

Route::get('/kategori', function () {
    return view('Admin.kategori');
});

Route::get('/login', function () {
    return view('Admin.login');
});
