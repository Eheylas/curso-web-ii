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
        return "Listar";
    });
    Route::post('criar', function() {
        return "Criar";
    });
    Route::patch('{id}/editar', function() {
        return "Editar";
    });
    Route::delete('{id}/remover', function() {
        return "Remover";
    });
});