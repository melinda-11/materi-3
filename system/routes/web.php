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


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/produk', function () {
    return view('produk');
});
Route::get('/kategori', function () {
    return view('kategori');

});
Route::get('/promo', function () {
    return view('promo');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});