<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
    {
        return view('listar', ['alunos'=>\App\Aluno::all()]);
    }
    
    public function editar($id)
    {
        return view('editar', ['aluno'=> \App\Aluno::find($id)]);
    }
    
    public function criar()
    {
        return view('criar', ['aluno'=> new \App\Aluno]);
    }
    
    public function remover($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect('aluno/listar');
    }
    
    public function salvar(Request $request)
    {
        $aluno = new Aluno();
        
        if ($request->has('id')) {
            $aluno = Aluno::find($request->id);
        }
        
        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->save();
        return redirect('aluno/listar');
    }
    
}
