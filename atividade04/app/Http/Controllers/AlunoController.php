<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function listar() {
        return Aluno::all();
    }
    
    public function editar() {
        return \App\Aluno::find($id);
    }
    
    public function criar() {
        return new \App\Aluno;
    }
    
    public function remover() {
        $aluno = \App\Aluno::find($id);
        $aluno->delete();
        return redirect('aluno/listar');
    }
    
    public function salvar() {
        $aluno->nome = $request->input('nome');
    }
}
