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
    return view('welcome');
});

Auth::routes();
Route::post('/login', 'AuthController@login');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin', 'AdminController');
Route::resource('soal', 'SoalController');
Route::resource('materi', 'MateriController');
Route::resource('isimateri', 'IsiMateriController');
Route::resource('submateri', 'SubMateriController');
