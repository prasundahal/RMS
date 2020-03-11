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

//Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard', 'DashboardController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders', 'OrderController');

Route::resource('iteams', 'IteamController');
Route::resource('categorys','CategoryController');
Route::resource('tables', 'TableController');
Route::resource('kitchens', 'kitchenController');

Route::resource('tableorders', 'TableorderController');
//Route::get('tableorders/{id}', 'TableorderController@create')->name('tableorders.create');
Route::resource('roles','RoleController');
    Route::resource('users','UserController');


//Route::group(['middleware' => ['auth']], function() {



//});
?>


