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

Route::get('items','ItemsController@showItems');
// Route::get('digital','ItemsController@showDigital');
Route::get('buy','ItemsController@showBuy');

Route::get('items/category/{id}','ItemsController@showItemByID');


// Route::get('sell/{category}','ItemsController@showCategory');
Route::get('items/{category}','ItemsController@showCategory');



// Route::get('file','FileController@showUploadForm')->name('upload.file');
// Route::post('file','FileController@storeFile');

Route::get('/home/usercenter_sell','UserController@showSellForm')->name('sell');
Route::post('/home/usercenter_sell','UserController@storeSell');

Route::get('/home/usercenter_buy','UserController@showBuyForm')->name('buy');
Route::post('home/usercenter_buy','UserController@storeBuy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/developer', 'UserController@developer');
Route::get('/home/craninfo', 'UserController@craninfo')->name('info');
Route::post('/home/craninfo', 'UserController@updateinfo');




Route::get('delete/sell/{id}','ItemsController@destroySell');
Route::get('delete/buy/{id}','ItemsController@destroyBuy');
