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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('hotels/{hotel}', 'HotelController@update');
Route::get('hotels/{hotel}/delete', 'HotelController@destroy');
Route::resource('hotels', 'HotelController');

Route::get('hotels/{hotel}/rooms/{room}/reserve', 'HotelRoomController@reserve');
Route::get('hotels/{hotel}/rooms/{room}/delete', 'HotelRoomController@destroy');
Route::post('hotels/{hotel}/rooms/{room}', 'HotelRoomController@update');
Route::resource('hotels.rooms', 'HotelRoomController');
