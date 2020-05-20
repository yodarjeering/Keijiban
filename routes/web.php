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
Route::get('/keijiban/thre','MessageController@index')->name('thre');
Route::post('/keijiban/thre','MessageController@create');
Route::get('/keijiban/admin_index', 'AdminThreadController@index');
Route::post('/keijiban/admin_index','AdminThreadController@search');
Route::get('/keijiban/admin_thre_delete', 'AdminThreadController@delete');
Route::post('keijiban/admin_thre_delete', 'AdminThreadController@remove');
Route::get('/keijiban/admin_thre', 'AdminMessageController@index')->name('admin_thre');
Route::post('keijiban/admin_thre', 'AdminMessageController@search');
Route::get('/keijiban/admin_message_delete', 'AdminMessageController@delete');
Route::post('/keijiban/admin_message_delete', 'AdminMessageController@remove');

