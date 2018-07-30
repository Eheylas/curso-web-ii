<?php require 'cabecalho.php' ?>

<h1>Edição de Aluno</h1>

<form method="POST" action="edita-aluno.php">
    <input type="hidden" name="id" value="<?=$aluno['id']?>">
    <div>
        <label>Matrícula:</label>
        <input type="text" name="matricula" value="<?=$aluno['matricula']?>"size="15">
    </div>
    <div>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?=$aluno['nome']?>" size="30">
    </div>
    <input type="submit" value="Salvar"/>
    <a href="lista-aluno.php">Desistir</a>
</form>

<?php require 'rodape.php' ?>