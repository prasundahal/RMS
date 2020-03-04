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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('costumers', 'CostumerController');
//Route::apiResource('costumers', 'costumerController');

Route::resource('orders', 'orderController');

//Route::get('iteams-index', 'iteamController@index')->name('iteams.index');
//Route::apiResource('orders', 'orderController');

Route::resource('iteams', 'iteamController');
//Route::apiResource('iteams', 'iteamController');
//Ajax Table Route

Route::resource('tables', 'TableController');
Route::resource('tableorders', 'TableorderController');

//Route::resource('tableorders/{id}', 'TableorderController@create')->name('tableorders.create');
