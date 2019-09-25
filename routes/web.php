<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('resultados', 'ResultadoController@index' )->name('resultados-index');   
    Route::get('todosresultados', 'ResultadoController@todos' )->name('resultados-todos');    
    Route::get('atualizar', 'ResultadoController@atualizar' )->name('resultados-atualizar');

    Route::get('simuladores', 'SimuladorController@index' )->name('simuladores-index');
    Route::get('metodosmartigale', 'SimuladorController@metodoMartingale')->name('simulador-metodo-martingale');
    Route::get('fechamentos', 'SimuladorController@fechamentos')->name('simulador-fechamentos');
    Route::get('todosconcursos', 'SimuladorController@todosConcursos')->name('simulador-todos-concursos');
    
});