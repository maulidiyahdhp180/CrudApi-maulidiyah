<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('siswa','RestApiSiswa@index');
Route::post('siswa','RestApiSiswa@create');
Route::put('/siswa/{id}','RestApiSiswa@update');
Route::delete('/siswa/{id}','RestApiSiswa@destroy');