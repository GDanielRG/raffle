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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/assist', 'MainController@getAssist')->middleware('auth');
Route::post('/assist', 'MainController@postAssist')->middleware('auth');
Route::get('/prizes', 'MainController@prizes');
Route::get('/concursants', 'MainController@concursants');
Route::get('/raffled', 'MainController@raffled')->middleware('auth');
Route::get('/check', 'MainController@getCheck');
Route::post('/check', 'MainController@postCheck');
