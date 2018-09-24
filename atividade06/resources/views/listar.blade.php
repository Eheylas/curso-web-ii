@extends('leiaute')

@section('titulo', 'Lista de Aluno')

@section('conteudo')
<p>
    <a href="/aluno/criar">Incluir</a>
</p>
<table class="table">
    <tr>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    @foreach ($alunos as $aluno)
        <tr>
            <td>{{ $aluno->matricula }}</td>
            <td>{{ $aluno->nome }}</td>
            <td>
                <a href="/aluno/{{ $aluno->id }}/editar">Editar</a>
                <a href="/aluno/{{ $aluno->id }}/remover" onclick="return confirm('Deseja remover o aluno {{ $aluno->matricula }}?');">Remover</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection