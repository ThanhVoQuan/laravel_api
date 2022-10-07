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

Route::get('', 'HomeController@index');

// Route::get('/bai-viet/(id)', 'BaivietController@show');
// Route::get('baiviet', 'BaivietController@index');
Route::get('baiviet/{id}', 'BaivietController@index');

Auth::routes();

Route::get('/home', 'LoginController@index')->name('home');
