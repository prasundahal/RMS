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



Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::get('/waiter', 'WaiterController@index')->name('waiter')->middleware('waiter');

Route::resource('orders', 'OrderController');

Route::resource('iteams', 'IteamController');

Route::resource('tables', 'TableController');

Route::resource('tableorders', 'TableorderController');
<<<<<<< HEAD
//Route::get('tableorders/{id}', 'TableorderController@create')->name('tableorders.create');

<<<<<<< HEAD
=======
>>>>>>> 972221cf8ecf73cbe4540b6ad90953495cbcd60a

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});

<<<<<<< HEAD
=======
?>
>>>>>>> 01d604c1903812411534efdd227795d6ba9989c7
=======
?>
>>>>>>> 972221cf8ecf73cbe4540b6ad90953495cbcd60a
