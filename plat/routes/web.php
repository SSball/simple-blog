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

Route::get('/about', function () {
    return view('common/about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game', 'GameController@index')->name('game');

Route::get('/account', 'HomeController@account')->name('account');

Route::post('/update', 'GameController@update')->name('update');

