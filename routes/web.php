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
// Route::get('login_form', function () {
//     return view('login_form');
// });
// Route::get('register', function () {
//     return view('register');
// });
Route::get('register', 'App\Http\Controllers\AuthController@getRegister');
Route::post('register', 'App\Http\Controllers\AuthController@PostRegister') -> name('register');
Route::get('login', 'App\Http\Controllers\AuthController@getLogin');
Route::post('login', 'App\Http\Controllers\AuthController@postLogin') -> name('login');
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
Route::get('admin_layout', function (){
    return view('admin/admin_layout');
});
Route::get('admin_home', function () {
    return view('admin/home');
});
Route::get('admin_profile', function (){
    return view('client/profile');
});
Route::get('admin_skpd', function () {
    return view('admin/skpd');
});
Route::get('admin_visi', function () {
    return view('admin/visi');
});
Route::get('admin_buatktp', function () {
    return view('admin/buatktp');
});
Route::get('daftar_dokumen', function () {
    return view('admin/daftar_dokumen');
});
Route::get('ktp_selesai', function () {
    return view('admin/ktp_selesai');
});
Route::get('ktp_belum_selesai', function () {
    return view('admin/ktp_belum_selesai');
});

// route untuk experiment