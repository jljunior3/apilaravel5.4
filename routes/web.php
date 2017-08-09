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

//Route::get('/bancos','Api\BancosController@index');
//Route::get('/bancos/{id}','Api\BancosController@show');
//Route::post('/bancos','Api\BancosController@store');
//Route::put('/bancos/{id}','Api\BancosController@update');
//Route::delete('/bancos/{id}','Api\BancosController@destroy');
//
//Route::get('/contas','Api\ContasController@index');
//Route::get('/contas/{id}','Api\ContasController@show');
//Route::post('/contas','Api\ContasController@store');
//Route::put('/contas/{id}','Api\ContasController@update');
//Route::delete('/contas/{id}','Api\ContasController@destroy');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
