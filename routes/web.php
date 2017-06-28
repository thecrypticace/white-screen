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

Route::get("/causes/permissions", "CausesController@permissions");
Route::get("/causes/env", "CausesController@env");
Route::get("/causes/app-key", "CausesController@appKey");
Route::get("/causes/display-errors", "CausesController@displayErrors");
Route::get("/causes/php", "CausesController@php");
Route::get("/causes/composer", "CausesController@composer");
