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



// Route::get('file','FileController@showUploadForm')->name('upload.file');
// Route::post('file','FileController@storeFile');

Route::get('usercenter_sell','UserController@showSellForm')->name('sell');
Route::post('usercenter_sell','UserController@storeSell');

Route::get('usercenter_buy','UserController@showBuyForm')->name('buy');
Route::post('usercenter_buy','UserController@storeBuy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('developer', 'UserController@developer');
