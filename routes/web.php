<?php

Route::get('/', function () {
    return view('welcome');
});

#route mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');

#route pencarian
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');

#route formulir tambah data
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');

#route simpan formulir data baru
Route::post('/mahasiswa/simpan', 'MahasiswaController@simpan');

# route untuk diarahkan ke halaman formulir edit data
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');

#route untuk mengeksekusi metode edit data pada mahasiswa controller
Route::put('/mahasiswa/update/{id}', 'MahasiswaController@update');

#route untuk menghapus data
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@delete');

#route user
Route::get('/user', 'AuthController@user');

#route formulir tambah data user
Route::get('/user/tambahuser', 'AuthController@tambahuser');

#route simpan formulir data baru user
Route::post('/user/simpanuser', 'AuthController@simpanuser');

#route login
Route::get('/login', 'AuthController@login');

#route cek login
Route::post('/user/ceklogin', 'AuthController@ceklogin');

#route logout
Route::get('/logout', 'AuthController@logout');