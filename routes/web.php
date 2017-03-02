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

Auth::routes(['except' => ['register']]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/manage','HomeController@manage')->name('manage');
Route::get('/regMan','AdminController@register')->name('reg');
Route::get('/deleteSup/{id}','AdminController@removeSup');
Route::get('/delSup/{id}','HomeController@removeSup');
Route::post('/supportReply/{id}','AdminController@reply');
Route::post('support','HomeController@supportPost');
