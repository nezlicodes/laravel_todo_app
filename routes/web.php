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


Route::get('/', 'TodosController@index');
Route::get('/todos/{todo}', 'TodosController@show');
Route::get('/new-todo', 'TodosController@create');
Route::post('/new-todo', 'TodosController@store');
Route::get('/edit/{todo}', 'TodosController@edit');
Route::post('/edit/{todo}', 'TodosController@update');
Route::get('/delete/{todo}', 'TodosController@destroy');
