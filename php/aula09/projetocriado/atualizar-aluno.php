<?php 
	
	include 'conexao.php';

	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	// Insere na na tabela usuario, na devidas colunas, os valores $nome,
	// $login, e $senha
	$sqlAtualizaAluno = "update usuario
		set 
			nome = '$nome',
			login = '$login',
			senha = '$senha'
		where id = $id";
										
	mysqli_query($conexao, $sqlAtualizaAluno) 
		or die("Falha na atualização.");

	// Retorna para listagem de alunos
	header("Location: lista-alunos.php");

 ?>