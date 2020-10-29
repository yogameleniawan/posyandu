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

Route::get('/', 'PagesController@index');
// Route::get('/login', 'PagesController@login');

Route::get('baby/{baby}/progress', 'BabiesController@progress');
Route::get('baby/export', 'BabiesController@export_excel');
Route::get('baby/{baby}/export', 'BabiesController@exportid_excel');
Route::post('baby/progress', 'BabiesController@simpanprogress');
Route::resource('baby', 'BabiesController');
// Route::get('progress/{baby}', 'ProgressBabiesController@show');
// Route::resource('progress', 'ProgressBabiesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/create', 'HomeController@create');
Route::post('/home/store', 'HomeController@store');
Route::get('/home/{user}/edit', 'HomeController@edit');
Route::put('/home/{user}', 'HomeController@update');
