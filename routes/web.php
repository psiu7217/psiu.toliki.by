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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('welcome');
});

//Custom... Мне не нравится такая логика
Route::get( 'ajaxImageUpload', 'ImagesController@imageUpload');
Route::post('ajaxImageUpload', 'ImagesController@imageUploadPost')->name('imageUpload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
