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
    return redirect(url('home'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('gudang')->group(function(){
	Route::get('/', 'GudangController@index')->name('gudang_all');
	Route::get('/add', 'GudangController@add');
	Route::post('/save', 'GudangController@save')->name('gudang_save');
	Route::get('/edit/{id}', 'GudangController@edit');
	Route::post('/update/{id}', 'GudangController@update')->name('gudang_update');
	Route::get('/delete/{id}', 'GudangController@delete')->name('gudang_delete');
});

Route::prefix('barang')->group(function(){
	Route::get('/', 'BarangController@index')->name('barang_all');
	Route::get('/add', 'BarangController@add');
	Route::post('/save', 'BarangController@save')->name('barang_save');
	Route::get('/edit/{id}', 'BarangController@edit');
	Route::post('/update/{id}', 'BarangController@update')->name('barang_update');
	Route::get('/delete/{id}', 'BarangController@delete')->name('barang_delete');
});

