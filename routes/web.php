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

Route::get('/', 'HomeController@index');

Route::get('/profil', 'ProfileController@index');

Route::get('/rezervacije', 'ReservationController@index');

Route::get('/oglasi', 'AddController@index');

Route::get('/desavanja', 'HappeningController@index');

//Route::get('/registracija', 'RegisterController::RegistersUsers');



Auth::routes();

Route::get('/registracija', 'HomeController@index')->name('registracija');
