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
    return view('index');
});


Route::get('index','IndexController@index');
Route::get('admin','IndexController@admin');

Route::any('index',array(
		'as'=>'index',
		'uses'=>'IndexController@index'));
		
Route::any('admin',array(
		'as'=>'admin',
		'uses'=>'IndexController@admin'));
		
Route::post('insert','Controller@insert');
Route::get('/','Controller@getData');