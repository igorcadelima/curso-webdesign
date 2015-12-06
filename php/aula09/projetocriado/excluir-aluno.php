<?php 

	include 'conexao.php';

	$id = $_GET["id"];

	// Exclui da tabela usuario o registro onde o campo id = $id
	$sqlDeletaAluno = "delete from usuario where id = $id";

	mysqli_query($conexao, $sqlDeletaAluno) 
		or die("Erro ao excluir aluno.");

	// Retorna para listagem de alunos
	header("Location: lista-alunos.php");

 ?>