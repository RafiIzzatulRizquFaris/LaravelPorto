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

Route::get('/home', function () {
    return view('home');
}) -> name('home');

Route::get('/portofolio', function () {
    return view('portofolio');
}) -> name('portofolio');

Route::get('/about', function () {
    return view('about');
}) -> name('about');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('/add/{first}/{second}', function($first, $second){
    return $first + $second;
});

Route::get('/substract/{first}/{second}', function($first, $second){
    return $first - $second;
});

Route::get('/divide/{first}/{second}', function($first, $second){
    return $first / $second;
});

Route::get('/multiple/{first}/{second}', function($first, $second){
    return $first * $second;
});

Route::get('/allguru', 'GuruController@all_guru');
Route::get('/cekkoneksi', 'GuruController@cek_koneksi');
Route::get('/simpanguru/{nik}/{nama}/{tgl}/{alamat}', 'GuruController@simpan_guru');
Route::get('/temukanguru/{find}', 'GuruController@find_guru');
Route::get('/hapusguru/{find}', 'GuruController@hapus_guru');
Route::get('/editguru/{find}/{nik}/{nama}/{tgl}/{alamat}', 'GuruController@edit_guru');
