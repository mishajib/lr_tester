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

Route::get('/', 'TodoController@index')->name('todo.index');
Route::get('tag', 'TagController@index')->name('tag.index');
Route::post('tag/store', 'TagController@store')->name('tag.store');

Route::get('json', 'JsonController@index');

Route::post('todo/store', 'TodoController@store')->name('todo.store');

