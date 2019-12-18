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



Route::get('home', function () {
    return view('home');
});



Route::get('antri/action', 'AntrianController@action')->name('antri.action');

Route::get('antri/{id}','AntrianController@pilih_poli')->name('antri.pilih_poli');
Route::get('poli/{id}','AntrianController@ambil')->name('antri.ambil');
Route::get('ambil/{id}','AntrianController@ambil_antri')->name('antri.ambil_antri');
Route::get('create','AntrianController@create')->name('antri.create');
Route::post('create','AntrianController@store_antri')->name('antri.create');
Route::get('main', 'AntrianController@main')->name("antri.main");
Route::get('booking','AntrianController@booking')->name("antri.booking");

Route::get('riwayat','AntrianController@riwayat')->name("antri.riwayat");

Route::get('antri','AntrianController@antri');

Route::resource('admin','AdminController');

Route::resource('rumahsakit','RmhSakitController');

Route::resource('petugas','PegawaiController');

Route::get('/login/pasien','LoginController@index');
Route::post('/login/check','LoginController@check');
Route::get('/logout','LoginController@logout');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
