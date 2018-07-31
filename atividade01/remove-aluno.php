<?php

require_once 'aluno.php';

$id = $_GET['id'];

if (excluir_aluno($conexao, $id)) {
	header("Location: lista-aluno.php?sucesso=Aluno removido com sucesso!");
	die();
}

header("Location: lista-aluno.php?falha=Erro ao remover o aluno!");