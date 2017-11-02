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
    return view('user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//buku
Route::get('buku','Buku@index');
Route::get('buku/create','Buku@create');
Route::post('buku/store','Buku@store');
Route::delete('buku/{id}','Buku@destroy');
Route::get('/buku/{id}/edit','Buku@edit');
Route::put('/buku/{id}', 'Buku@update');
//end buku

//Jenis buku
	Route::post('Ajenis','admin@storeJ');
	Route::delete('jenis/{id}','admin@destroy_jenis');
//end jenis buku
Route::get('kategori','admin@index');
// Genre buku
Route::post('Agenre','admin@storeG');
Route::delete('genre/{id}','admin@destroy_genre');
// end Genre

// karyawan
	Route::get('karyawan','users@index_K');
	Route::get('karyawan/create','users@create_K');
	Route::post('karyawan/store','users@store_K');
// end karyawan

