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

/*
Route::get('/', 'TodoController@index');

Auth::routes();

Route::get('/todo','TodoController@add');
Route::post('/todo','TodoController@create');

Route::get('/todo/{todo}','TodoController@delete');
Route::post('/todo/{todo}','TodoController@update');*/ 
