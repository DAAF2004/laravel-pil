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
    return view('pertemuan4/home');
});

Route::get('/mahasiswa', function () {
    return view('pertemuan4/mahasiswa');
});

Route::get('/about', function () {
    return view('pertemuan4/about');
});

Route::get('/profile', function () {
    return view('pertemuan4/profile');
});