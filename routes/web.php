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
Route::get('home', function () {
    return view('home');
});
Route::get('skpd', function () {
    return view('skpd');
});
Route::get('visi', function () {
    return view('visi');
});
Route::get('buatktp', function () {
    return view('buatktp');
});
Route::get('statusktp', function () {
    return view('statusktp');
});
Route::get('login_form', function () {
    return view('login_form');
<<<<<<< HEAD
});
Route::get('register', function () {
    return view('register');
});
=======
});    
Route::get('register', function () {
    return view('register');
});
>>>>>>> e1b6e87576aead5c401020ab4408c206ac237676
