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
Route::get('/burgers','BurgerController@index')->middleware('auth');
Route::get('/burgers/create','BurgerController@create');
Route::get('/burgers/{id}','BurgerController@show')->middleware('auth');
Route::post('/burgers','BurgerController@store');
Route::delete('/burgers/{id}','BurgerController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
