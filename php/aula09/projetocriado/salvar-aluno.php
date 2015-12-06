<?php 
	
	include 'conexao.php';

	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	// Insere na na tabela usuario, na devidas colunas, os valores $nome,
	// $login, e $senha
	$sqlInsereAluno = "insert into usuario(nome, login, senha) 
										value('$nome', '$login', '$senha')";

	mysqli_query($conexao, $sqlInsereAluno) 
		or die("Falha na inserção.");

	// Retorna para listagem de alunos
	header("Location: lista-alunos.php");

 ?>