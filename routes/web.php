<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/keijiban' , 'ThreadController@index');
Route::post('/keijiban', 'ThreadController@post');
Route::get('/keijiban/thre','MessageController@index');
Route::post('/keijiban/thre','MessageController@create');

