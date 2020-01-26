<?php

use Illuminate\Http\Request;
use App\Materi;
use App\Admin;
use App\IsiMateri;
use App\SubMateri;
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
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::post('/logout', 'UserController@logout');
Route::get('/materi', 'ApiController@materi');
Route::get('/materi/{materi}', 'ApiController@showmateri');
Route::get('/isimateri', 'ApiController@isimateri');
Route::get('/isimateri/{isimateri}', 'ApiController@showisimateri');
Route::get('/submateri', 'ApiController@submateri');
Route::get('/submateri/{submateri}', 'ApiController@showsubmateri');
Route::get('/soal', 'ApiController@soal');
Route::get('/soal/{soal}', 'ApiController@showsoal');
Route::group(['middleware' => 'auth:api'], function(){
Route::get('/details', 'UserController@details');
Route::get('/nilai', 'NilaiController@index');
Route::post('/nilai', 'NilaiController@store');
Route::put('/nilai/{nilai}', 'NilaiController@update');
});
