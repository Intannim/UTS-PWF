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

Route::group(['prefix' => 'mahasiswa'], function(){
    Route::get('/pendaftaran', function(){
        return view('mahasiswa.pendaftaran');
    });
    Route::get('/ujian', function(){
        return view('mahasiswa.ujian');
    });
    Route::get('/nilai', function(){
        return view('mahasiswa.nilai');
    });
});
