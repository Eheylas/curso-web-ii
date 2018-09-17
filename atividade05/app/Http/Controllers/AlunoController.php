<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller {

    public function criar() { {
            return view('aluno/criar', ['aluno' => new \App\Aluno]);
        }
    }

    public function editar($id) {
        return view('aluno/editar', ['aluno'=> \App\Aluno::find($id)]);
    }

    public function remover($id) {
        $aluno = \App\Aluno::find($id);
        $aluno->delete($id);
        return redirect('aluno/listar');
    }

    public function listar() {
        return view('aluno/listar', ['alunos' => \App\Aluno::all()]);
    }

    public function salvar(Request $request) {
        $aluno = null;
        if ($request->has('id')) {
            $aluno = \App\Aluno::find($request->input('id'));
        } else {
            $aluno = new \App\Aluno();
        }
        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->curso_id = $request->curso_id;
        $aluno->save();
        return redirect('aluno/listar');
    }

}
