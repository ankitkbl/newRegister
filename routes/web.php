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

Route::get('/RegisterUser' ,'RegisterUserController@ShowRegisterForm');
Route::post('/users', 'ValideUserController@ValidUser')->name('validUser');
Route::get('/loginForm' ,'RegisterUserController@ShowLoginForm')->name('loginForm');
Route::post('/loginForm' ,'RegisterUserController@ValidLogin')->name('loginForm');
Route::get('/extraDetail' ,'ExtraDetailController@ShowExtraForm')->name('extraDetail');
Route::post('/extraDetail' ,'ExtraDetailController@validExtraForm')->name('extraDetail');

//Route::get('/loginValid', 'ValideUser@ValidLogin')->name('loginValid');

