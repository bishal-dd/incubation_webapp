<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController\LoginController;

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

Route::post("/userlogin", [LoginController::class, "userlogin"])->name(
    "userlogin"
);

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
Route::get('/event', function () {
    return view('user/event/event');
});
Route::get('/dashboard/add_event', function () {
    return view('admin/add_event/add_event');
    });
