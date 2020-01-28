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

//Если авторизирован
Route::middleware('auth')->group(function () {

    Route::get('profile', 'UsersController@index')->name('profile');

    //Пари
    Route::get('bets', 'BetsController@index')->name('bets');
    Route::get('bets/add', 'BetsController@add')->name('bets.add');


    Route::post('give_me_coin', 'UsersController@addCoin')->name('addCoin');
});


Route::get('/', 'HomeController@index')->name('home');


//Custom... Мне не нравится такая логика
Route::get( 'ajaxImageUpload', 'ImagesController@imageUpload');
Route::post('ajaxImageUpload', 'ImagesController@imageUploadPost')->name('imageUpload');

Auth::routes();



