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

Route::group(['prefix' => 'admin','middleware' => 'preventBackHistory'], function () {
	Voyager::routes();
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'StudentsController@dashboard');

Route::get('/admin/summary','AdminController@browse');

Route::get('/home/dashboard','StudentsController@dashboard');
Route::get('/home/profile','StudentsController@profile');
Route::get('/home/media','StudentsController@media');

Route::get('/home/profile/edit','StudentsController@edit');
Route::post('/home/profile/edit','StudentsController@update');
Route::post('/home/profile/UpdatePassword','StudentsController@UpdatePassword' );

Route::post('/uploadResults', 'BulkUploadController@uploadResults');
Route::post('/uploadUsers', 'BulkUploadController@uploadUsers');

Route::get('/admin/summary123/test','AdminController@inst1');
Route::get('/admin/summary/2','AdminController@inst2');
Route::get('/admin/summary/3','AdminController@inst3');
