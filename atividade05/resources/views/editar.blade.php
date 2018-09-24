<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action="/aluno/salvar" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" size="15" value="<?php echo $aluno->id; ?>"/>
        <div class="">
            <label class="control-label">Matrícula</label>
            <div class="">
                <input type="text" name="matricula" size="15" value="<?php echo $aluno->matricula; ?>"/>
            </div>
        </div>
        <div class="">
            <label class="control-label">Nome</label>
            <div class="">
                <input type="text" name="nome" size="40" value="<?php echo $aluno->nome; ?>"/>
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
</body>
</html>
