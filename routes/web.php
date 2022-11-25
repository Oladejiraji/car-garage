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



Route::get('/', 'CarController@index');
Route::get('/cars', 'CarController@index');
Route::post('/cars', 'CarController@store');
Route::get('/cars/garage', 'CarController@show');
Route::get('/cars/create', 'CarController@create');

