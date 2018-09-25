@extends('leiaute')

@section('titulo', 'Cadastrar Aluno')

@section('conteudo')
<form action="/aluno/salvar" class="form-horizontal" method="post">
    {{ csrf_field() }}
    <div class="">
        <label class="control-label">Matrícula</label>
        <div class="">
            <input type="text" name="matricula" size="15" value="{{ $aluno->matricula }}"/>
        </div>
    </div>
    <div class="">
        <label class="control-label">Nome</label>
        <div class="">
            <input type="text" name="nome" size="40" value="{{ $aluno->nome }}"/>
        </div>
    </div>
    <div class="">
        <label class="control-label"></label>
        <div class="">
            <button type="submit" class="btn">Salvar</button>
            <a href="/aluno/listar">Desistir</a>
        </div>
    </div>
</form>
@endsection