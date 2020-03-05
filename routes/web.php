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

Route::resource('orders', 'OrderController');

Route::resource('iteams', 'IteamController');

Route::resource('tables', 'TableController');

Route::resource('tableorders', 'TableorderController');
//Route::get('tableorders/{id}', 'TableorderController@create')->name('tableorders.create');

?>
