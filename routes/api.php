<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

#route mahasiswa all
Route::get('/mahasiswa/all', 'MahasiswaApiController@all');

#route create mahasiswa
Route::get('/mahasiswa/create', 'MahasiswaApiController@all');

#route update mahasiswa
Route::post('/mahasiswa/update/{id}', 'MahasiswaApiController@all');

#route delete mahasiswa
Route::post('/mahasiswa/delete/{id}', 'MahasiswaApiController@all');