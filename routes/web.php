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

Route::get('/articles', 'ArticlesController@getIndex');
Route::get('/articles/create', 'ArticlesController@getCreate');
Route::post('articles/store', 'ArticlesController@store');
Route::get('articles/preview/{id}', 'ArticlesController@show');
Route::get('articles/edit/{id}', 'ArticlesController@edit');
Route::post('articles/update', 'ArticlesController@update');
Route::get('articles/destroy/{id}', 'ArticlesController@destroy');
