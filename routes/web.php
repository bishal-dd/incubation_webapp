<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('user/home/home');
});

Route::get('/login', function () {
    return view('user/login/login');
});

Route::post('/login', [LoginController::class, 'login']);


Route::get('/dashboard', function () {
    return view('admin/dashboard/dashboard');
});
Route::get('/dashboard/add_slider_image', function () {
    return view('admin/add_slider_image/add_slider_image');
});
Route::get('/about', function () {
    return view('user/about/about');
});
Route::get('/dashboard/add_about', function () {
    return view('admin/add_about/add_about');
});
