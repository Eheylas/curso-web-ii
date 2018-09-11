<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller {

    public function criar() { {
            return '<h2>Cadastro de Alunos</h2>';
            return $aluno = new \App\Aluno();
        }
    }

    public function editar($id) {
        return \App\Aluno::findOrFail($id);
    }

    public function remover($id) {
        $aluno = \App\Aluno::find($id);
        $aluno->delete($id);
        return redirect('aluno/listar');
    }

    public function listar() {
        return \App\Aluno::all();
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
