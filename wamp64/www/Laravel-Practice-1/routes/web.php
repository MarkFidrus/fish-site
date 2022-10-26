<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', '\App\Http\Controllers\Controller@index');

Route::resource('gallery', '\App\Http\Controllers\GalleryController');

Route::get('/galleries', '\App\Http\Controllers\GalleryController@galleries');

Route::get('/gallery/create', '\App\Http\Controllers\GalleryController@create');
Route::post('/gallery/create', '\App\Http\Controllers\GalleryController@store');

Route::get('/gallery/show/{id}', '\App\Http\Controllers\GalleryController@show');

Route::get('/gallery/edit/{id}', '\App\Http\Controllers\GalleryController@edit');
Route::post('/gallery/edit/{id}', '\App\Http\Controllers\GalleryController@set');


Route::resource('photo', '\App\Http\Controllers\PhotoController');
Route::get('/photo/upload', '\App\Http\Controllers\PhotoController@upload');
Route::post('/photo/upload', '\App\Http\Controllers\PhotoController@store');

Route::get('/photo/show/{id}', '\App\Http\Controllers\GalleryController@show');

Route::get('/photo/edit/{id}', '\App\Http\Controllers\GalleryController@edit');
Route::post('/photo/edit/{id}', '\App\Http\Controllers\GalleryController@set');


Route::resource('profile', '\App\Http\Controllers\ProfileController');
Route::get('/profile/show/{id}', '\App\Http\Controllers\PhotoController@show');


Auth::routes();

Route::get('/home', '\App\Http\Controllers\Controller@index');