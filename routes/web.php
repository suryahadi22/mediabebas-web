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
})->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/profil', 'ProfileController@index')->name('profil');

Route::get('/register/buat-profil', 'ProfileController@create')->name('buat_profil');

Route::get('/dashboard/artikel', 'ArticleController@index')->name('artikel');

Route::get('/dashboard/artikel/buat', 'ArticleController@create')->name('buat_artikel');

