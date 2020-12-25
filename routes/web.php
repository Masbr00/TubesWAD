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
Route::get('layout', function () {
    return view('layout');
});
Route::get('login_form', function () {
    return view('login_form');
});    
Route::get('register', function () {
    return view('register');
});

// route untuk client side
Route::get('home', function () {
    return view('client/home');
});
Route::get('skpd', function () {
    return view('client/skpd');
});
Route::get('visi', function () {
    return view('client/visi');
});
Route::get('buatktp', function () {
    return view('client/buatktp');
});
Route::get('statusktp', function () {
    return view('client/statusktp');
});
Route::get('profile', function (){
    return view('client/profile');
});

// route untuk admin side

// route untuk experiment