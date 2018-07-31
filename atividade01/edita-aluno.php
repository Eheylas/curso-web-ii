<?php

require_once 'aluno.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$id = $_POST['id'];
	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];

	if (alterar_aluno($conexao, $id, $matricula, $nome)) {
		header("Location: lista-aluno.php?sucesso=Aluno editado com sucesso!");
		die();
	}

	header("Location: lista-aluno.php?falha=Erro ao editar o aluno!");
	die();
}

$id = $_GET['id'];

$aluno = consultar_aluno($conexao, $id);

if (!$aluno) {
	header("Location: lista-aluno.php?falha=Erro ao consultar o aluno!");
	die();
}

require 'edita.php';