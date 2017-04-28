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
    return view('app');
});

Route::get('/style', function () {
    return view('style');
});

// api routes
Route::get('/copayCards', 'CopayController@index');
Route::post('/copayCards', 'CopayController@create');
Route::get('/copayCards/{id}', 'CopayController@show');
Route::put('/copayCards/{id}', 'CopayController@update');
Route::delete('/copayCards/{id}', 'CopayController@destroy');
