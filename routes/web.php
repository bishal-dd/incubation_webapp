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
Route::get('/advisory', function () {
    return view('user/advisory/advisory');
});
Route::get('/dashboard/add_advisory', function () {
    return view('admin/add_advisory/add_advisory');
});
Route::get('/mentor', function () {
    return view('user/mentor/mentor');
});
Route::get('/dashboard/add_mentor', function () {
return view('admin/add_mentor/add_mentor');
});
Route::get('/about', function () {
    return view('user/about/about');
});
Route::get('/dashboard/add_about', function () {
    return view('admin/add_about/add_about');
});
Route::get('/dashboard/add_stakeholder', function () {
    return view('admin/add_stakeholder/add_stakeholder');
});
Route::get('/stakeholder', function () {
    return view('user/stakeholder/stakeholder');
});