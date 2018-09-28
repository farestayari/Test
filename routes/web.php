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

Route::get('/login','UserController@showUserLogin')->name('showUserLogin');
Route::post('/login','UserController@handleUserLogin')->name('handleUserLogin');
Route::get('/register','UserController@showUserRegister')->name('showUserRegister');
Route::get('/dashboard','UserController@showUserDashboard')->name('showUserDashboard');
Route::post('/user/register','UserController@handleUserRegister')->name('handleUserRegister');
Route::get('/post','UserController@showCreatePost')->name('showCreatePost');
Route::post('/create-post','UserController@handleCreatePost')->name('handleCreatePost');
