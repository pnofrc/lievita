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

Route::get('/admin/login/', 'App\Http\Controllers\loginController@index');
Route::get('/admin/edit/', 'App\Http\Controllers\loginController@edit');

Route::get('/', 'App\Http\Controllers\ordersController@index');

Route::get('/form', 'App\Http\Controllers\ordersController@form');

Route::get('/success', 'App\Http\Controllers\ordersController@success');

Route::get('/userArea', 'App\Http\Controllers\ordersController@userArea');

Route::get('/login', 'App\Http\Controllers\ordersController@login');
