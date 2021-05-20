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

Route::get('/', 'Auth\LoginController@showLoginForm');
Auth::routes([
    'reset' => false,
    'confirm' => false,
]);
Route::get('home', 'HomeController@index')->name('home');
Route::get('admin', 'HomeController@admin')->name('admin');
Route::resource('textbooks', 'TextbookController');
