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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

##### Files Routes ########
Route::get('/allFiles', 'FileController@index')->name("allFiles");
Route::get('/file/create', 'FileController@create')->name("file.create");
Route::post('/file/create', 'FileController@store')->name("file.store");
Route::get('/file/show/{id}', 'FileController@show')->name("file.show");
Route::get('/file/delete/{id}', 'FileController@destroy')->name("file.destroy");
Route::get('file/{id}/download', 'FileController@download')->name('file.download');
Route::get('fileas/public', 'FileController@public')->name('file.public');
Route::get('file/share/{id}', 'FileController@share')->name('file.share');

// Edit
Route::get('/file/edit/{id}', 'FileController@edit')->name("file.edit");
Route::post('/file/update/{id}', 'FileController@update')->name("file.update");
