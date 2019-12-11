<?php

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

Route::get('daftar', function () {
    return view('main.cari');
});

Route::get('main', function () {
    return view('main.main');
});
Route::get('booking', function () {
    return view('main.booking');
});

Route::get('antri', function () {
    return view('main.antri');
});

Route::get('home', function () {
    return view('home');
});

Route::get('pencarian', 'AntrianController@searchHospital')->name('pencarian');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
