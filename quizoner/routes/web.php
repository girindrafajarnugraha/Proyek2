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

Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('user/{user}', function($name = null){
        return "Hasil Kuisioner ".$name;
    });

    Route::namespace('Master')->prefix('master')->name('master.')->group(function(){
        Route::resource('wilayah', 'WilayahController');
        Route::patch('tugas/{id}', 'NamaController@updateCheclist');
        Route::get('/kategori', 'KategoriController@index')->name('kategori');
    });

    Route::get('kuesioner/create-step1', 'KuesionerController@createStep1')->name('kuesioner.createStep1');
});
