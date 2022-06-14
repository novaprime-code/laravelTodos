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

Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('/create',  'App\Http\Controllers\TodoController@create');
Route::post('/create',  'App\Http\Controllers\TodoController@store');
Route::get('/edit/{todo}', 'App\Http\Controllers\TodoController@edit');

Route::get('/details/{todo}', 'App\Http\Controllers\TodoController@details');
Route::post('/update/{todo}', 'App\Http\Controllers\TodoController@update');
Route::get('/delete/{todo}', 'App\Http\Controllers\TodoController@delete');





// Auth::routes();
// Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
// Route::post('/todos', 'App\Http\Controllers\TodoController@store');
