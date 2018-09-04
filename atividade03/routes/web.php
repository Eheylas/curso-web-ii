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


Route::group(['prefix' => 'aluno'], function () {

    Route::get('listar', function() {
        return "Lista de Alunos";
    });
    
    Route::get('criar', function() {
        return "Criar Aluno";
    });

    Route::get('{id}/editar', function() {
        return "Editar Aluno $id";
    });

    Route::get('salvar', function() {
        return redirect('aluno/listar');
    });

    Route::get('{id}/remover', function() {
        return redirect('aluno/listar');
    });
});
