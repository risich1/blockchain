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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deals', 'HomeController@deals');
Route::get('/close_deals', 'AdminController@closeDeals');
Route::get('/disputes', 'AdminController@disputes');
Route::post('/getUsersByEmail' , 'DealController@getUsersByEmail');
Route::post('/makeDeal' , 'DealController@makeDeal');
