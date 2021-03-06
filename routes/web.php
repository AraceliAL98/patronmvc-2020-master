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

Route::get('/noticias','NoticiaController@index')->name('noticias.index');
Route::get('/noticias/{id}','NoticiaController@show')->name('noticias.show');
//misitio.com/noticias/8

Route::get('/admin', 'adminController@dashboard')->name('admin.dashboard');