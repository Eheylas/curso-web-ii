<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Lista de Alunos</h1>
    <p>
        <a href="/aluno/criar">Incluir</a>
    </p>
    <table class="table">
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($alunos as $aluno) : ?>
            <tr>
                <td><?php echo $aluno->matricula; ?></td>
                <td><?php echo $aluno->nome; ?></td>
                <td>
                    <a href="/aluno/<?php echo $aluno->id; ?>/editar">Editar</a>
                    <a href="/aluno/<?php echo $aluno->id; ?>/remover" onclick="return confirm('Deseja remover o aluno <?php echo $aluno->matricula; ?>?');">Remover</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
