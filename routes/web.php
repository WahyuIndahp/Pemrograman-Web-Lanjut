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
Route::get('/kdrama','KdHomeController@Homedrama');


Route::get('/loginta', 'LogintatController@login')->name('login');

Route::POST('/postlogin', 'LogintatController@postlogin')->name('postlogin');


Route::get('/crudDrama', 'editdramaController@editdrama')->name('editdrama');

Route::get('/crudDrama/create', 'editdramaController@create')->name('editdrama.create'); 

Route::PUT('/crudDrama/store', 'editdramaController@store')->name('editdrama.store'); 

Route::get('/crudDrama/edit/{id}', 'editdramaController@edit')->name('editdrama.edit'); 

Route::PUT('/crudDrama/update/{id}', 'editdramaController@update')->name('editdrama.update'); 

Route::get('/crudDrama/delete/{id}', 'editdramaController@destroy')->name('editdrama.delete'); 


Route::get('/kategori', 'KategoriController@index')->name('kategori');

Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');

Route::PUT('/kategori/store', 'KategoriController@store')->name('kategori.store');

Route::get('/kategori/edit/{id}', 'KategoriController@edit')->name('kategori.edit'); 

Route::PUT('/kategori/update/{id}', 'KategoriController@update')->name('kategori.update'); 

Route::get('/kategori/delete/{id}', 'KategoriController@destroy')->name('kategori.delete');


Route::get('/romance', 'GenreController@romance')->name('romance');

Route::get('/romance/{data}', 'GenreController@show')->name('romance.artikel');


Route::get('/action', 'GenreController@action')->name('action');

Route::get('/action/{data}', 'GenreController@showAc')->name('action.artikel');


Route::get('/melo', 'GenreController@melo')->name('melo');

Route::get('/melo/{data}', 'GenreController@showmelo')->name('melo.artikel');


Route::get('/Comedy', 'GenreController@comedy')->name('comedy');

Route::get('/Comedy/{data}', 'GenreController@showcom')->name('comedy.artikel');


Route::get('/history', 'GenreController@history')->name('history');

Route::get('/history/{data}', 'GenreController@showhis')->name('history.artikel');


Route::get('/aboutkd', 'AboutKdController@kdAbout');