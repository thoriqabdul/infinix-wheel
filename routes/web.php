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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
// Route::get('/Register', 'AuthController@regist')->name('regist');
Route::get('/', 'AuthController@index')->name('landing');


Route::group(['middleware'=>['auth']], function() {
    Route::get('/spin', 'AuthController@spin')->name('spin');
    Route::get('/kalah', 'AuthController@kalah')->name('kalah');
Route::get('/menang', 'AuthController@menang')->name('menang');
});

Route::get('/home', 'HomeController@index')->name('home');
