<?php require 'cabecalho.php' ?>

<h1>Cadastro de Aluno</h1>

<form method="POST" action="adiciona-aluno.php">
    <div>
        <label>Matrícula:</label>
        <input type="text" name="matricula" size="15">
    </div>
    <div>
        <label>Nome:</label>
        <input type="text" name="nome" size="30">
    </div>
    <input type="submit" value="Salvar"/>
    <a href="lista-aluno.php">Desistir</a>
</form>

<?php require 'rodape.php' ?>