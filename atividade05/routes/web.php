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
})->name('home');

Route::get('ola/{nome?}', function ($nome = null) {
    if ($nome) {
        return "Olá $nome!";
    } else {
        return 'Olá Mundo!';
    }
});

Route::group(['prefix' => 'aluno'], function() {


    Route::get('listar', 'AlunoController@listar', function() {
        
    });

    Route::get('criar', 'AlunoController@criar', function() {
        
    });

    Route::get('{id}/editar', 'AlunoController@editar', function() {
        
    });

    Route::get('{id}/remover', 'AlunoController@remover', function() {
        
    });

    Route::get('salvar', 'AlunoController@salvar', function() {
        
    });
});
