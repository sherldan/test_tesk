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

Route::get('/', 'ParkingController@client');
Route::get('/index', 'ParkingController@index')->name('client.index');
Route::post('/index', 'ParkingController@store')->name('client.store');
Route::get('/index/{client}', 'ParkingController@show')->name('client.show');
Route::get('/index/{client}/edit', 'ParkingController@edit')->name('client.edit');
Route::patch('/index/{client}', 'ParkingController@update')->name('client.update');
Route::delete('/index/{client}', 'ParkingController@destroy')->name('client.delete');
Route::get('/create', 'ParkingController@create')->name('client.create');
Route::post('/index/submit', 'ParkingController@addition')->name('car.addition');




