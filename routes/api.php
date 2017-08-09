<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors','auth:api']], function () {
    Route::get('/bancos','Api\BancosController@index');
    Route::get('/bancos/{id}','Api\BancosController@show');
    Route::post('/bancos','Api\BancosController@store');
    Route::put('/bancos/{id}','Api\BancosController@update');
    Route::delete('/bancos/{id}','Api\BancosController@destroy');

    Route::get('/contas','Api\ContasController@index');
    Route::get('/contas/{id}','Api\ContasController@show');
    Route::post('/contas','Api\ContasController@store');
    Route::put('/contas/{id}','Api\ContasController@update');
    Route::delete('/contas/{id}','Api\ContasController@destroy');
});


