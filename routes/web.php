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
Route::get('logout', array('as' => 'logout', 'uses' => 'Admin@logoutAdmin'));
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
	Route::get('karyawan','KaryawanController@index');
	Route::get('karyawan/create','KaryawanController@create');
	Route::post('karyawan/store','KaryawanController@store');
	Route::delete('karyawan/{id}','KaryawanController@destroy');
	Route::get('/karyawan/{id}/detail','KaryawanController@detail');
	Route::get('/karyawan/{id}/edit','KaryawanController@edit');
	Route::put('/karyawan/{id}', 'KaryawanController@update');
// end karyawan

// route Peminjaman
		Route::get('peminjaman', array('as' => 'admin-index-peminjaman', 'uses' => 'PeminjamanController@index'));
        Route::get('peminjaman/create', array('as' => 'admin-create-peminjaman', 'uses' => 'PeminjamanController@create'));
        Route::post('peminjaman/store', array('as' => 'admin-post-peminjaman', 'uses' => 'PeminjamanController@store'));
        Route::get('peminjaman/{id}/edit', array('as' => 'admin-edit-peminjaman', 'uses' => 'PeminjamanController@edit'));
        Route::post('peminjaman/{id}/update', array('as' => 'admin-update-peminjaman', 'uses' => 'PeminjamanController@update'));
        Route::delete('peminjaman/{id}/delete', array('as' => 'admin-delete-peminjaman', 'uses' => 'PeminjamanController@destroy'));
