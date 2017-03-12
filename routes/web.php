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

Route::get('/scoreboard','AdminController@showScore');

Auth::routes(['except' => ['register']]);
Route::get('/register', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/registrations/{sort?}','AdminController@registration')->name('adminreg');
Route::get('/manage/{sort?}','HomeController@manage')->name('manage');
Route::get('/regMan','AdminController@register')->name('reg');
Route::get('/rule','AdminController@RuleCheck')->name('rule');
Route::get('/deleteSup/{id}','AdminController@removeSup');
Route::get('/delSup/{id}','HomeController@removeSup');
Route::post('/supportReply/{id}','AdminController@reply');
Route::get('/webteam', 'webteamController@index');
Route::post('support','HomeController@supportPost');
Route::get('/val','AdminController@valform')->name('validate');
Route::get('/validate/{id?}','AdminController@val');
Route::get('/mailsend','AdminController@sendmail');
Route::post('/upload','HomeController@upload');
Route::get('/upload','HomeController@viewUpload');
Route::get('/admin/uploads','AdminController@viewupload');
Route::get('/publish','AdminController@publishForm');
Route::get('/announcements','AdminController@viewann');
Route::post('/delann/{id}','AdminController@delann');
Route::post('/addann','AdminController@announcements');
