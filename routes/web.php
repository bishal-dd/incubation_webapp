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
    return view('user/home/home');
});

Route::get('/login', function () {
    return view('user/login/login');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard/dashboard');
});
Route::get('/dashboard/add_slider_image', function () {
    return view('admin/add_slider_image/add_slider_image');
});