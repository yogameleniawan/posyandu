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

Route::get('baby/{baby}/progress', 'BabiesController@progress');
Route::post('baby/progress', 'BabiesController@simpanprogress');
Route::resource('baby', 'BabiesController');
// Route::get('progress/{baby}', 'ProgressBabiesController@show');
// Route::resource('progress', 'ProgressBabiesController');
