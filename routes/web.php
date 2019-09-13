<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('resultados', 'ResultadoController@index' )->name('resultados-index');    
    Route::get('atualizar', 'ResultadoController@atualizar' )->name('resultados-atualizar');

    Route::get('simuladores', 'SimuladorController@index' )->name('simuladores-index');
});