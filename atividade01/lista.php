<?php require 'cabecalho.php' ?>

<?php if(isset($_GET['sucesso'])) { ?>
<p><?=$_GET['sucesso']?></p>           
<?php } ?>                              

<?php if(isset($_GET['falha'])) { ?>   
<p><?=$_GET['falha']?></p>             
<?php } ?>                             

<h1>Listagem de Alunos</h1>

<a href="adiciona-aluno.php">Adicionar</a>

<table>
    	<tr>
		<th>Matrícula</th>
		<th>Nome</th>
		<th>Ações</th>       
	</tr>

	<tr>
		<td><?=$aluno['matricula']?></td>
		<td><?=$aluno['nome']?></td>
		<td><a href="edita-aluno.php?id=<?=$aluno['id']?>">Editar</a></td>
	</tr>
        	<tr>
		<td><?=$aluno['matricula']?></td>
		<td><?=$aluno['nome']?></td>
		<td><a href="edita-aluno.php?id=<?=$aluno['id']?>">Editar</a>
                    <a href="remove-aluno.php?id=<?=$aluno['id']?>" onclick="return confirm('Deseja remover o aluno?');">Remover</a>
                </td> 
	</tr>