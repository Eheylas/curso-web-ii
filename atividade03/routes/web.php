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
    
    Route::get('listar', function(){
        return "Listagem de alunos.";
    });
    
    Route::get('criar', function(){
        return "Criação de alunos.";
    });
    
    Route::get('{id}/editar', function($id){
        return "Editando aluno $id.";
    });
    
    Route::get('salvar', function(){
        return redirect('aluno/criar');   
    });
    
    Route::get('{id}/remover', function($id){
        return "O aluno $id foi removido com sucesso!";
    });
});

