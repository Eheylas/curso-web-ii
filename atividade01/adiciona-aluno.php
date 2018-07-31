<?php

require_once 'aluno.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];

	if (inserir_aluno($conexao, $matricula, $nome)) {
		header("Location: lista-aluno.php?sucesso=Aluno adicionado com sucesso!");
		die();
	}
	
	header("Location: lista-aluno.php?falha=Erro ao adicionar o aluno!");
	die();
}

require 'adiciona.php';
