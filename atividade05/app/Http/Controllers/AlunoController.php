<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller {

    public function listar() {
        return view('listar', ['alunos' => Aluno::all()]); 
    }

    public function criar() {
        return view('criar', ['aluno' => new Aluno]);
    }

    public function editar($id) {
        return view('editar', ['aluno'=> Aluno::find($id)]);
    }

    public function salvar(request $request) {
        $aluno = new Aluno;

        if ($request->has('id')) {
            $aluno = Aluno::find($request->id);
        }

        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->save();
        return redirect('aluno/listar');
    }

    public function remover($id) {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect('aluno/listar');
    }

}
