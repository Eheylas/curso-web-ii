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

Route::get('home', function () {
    return "Bem Vindo!";
});

Route::group(['prefix'=>'aluno'], function(){
    
    Route::get('listar', 'AlunoController@listar');
    
    Route::get('criar', 'AlunoController@criar');
    
    Route::get('{id}/editar', 'AlunoController@editar');
    
    Route::post('salvar', 'AlunoController@salvar');
    
    Route::get('{id}/remover', 'AlunoController@remover');
});

