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

//Route::get('/', function () {
//    return view('index.layouts.index');
//});


Route::get('/', 'IndexController@home');
Route::get('/help','IndexControler@help');
Route::get('/content','IndexController@content');