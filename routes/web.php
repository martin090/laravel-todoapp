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
    return view('main.home');
});

Route::resource('tasks','TasksController');

Route::patch('/updateProgress/{task}','UpdateProgressController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
