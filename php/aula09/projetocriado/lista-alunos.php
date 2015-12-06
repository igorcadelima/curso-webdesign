<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de alunos MC - Lista de alunos</title>
</head>
<body>
	<h1>Sistema de alunos MC</h1>

	<?php include 'menu.php'; ?>
	<?php include 'conexao.php'; ?>
	
	<h3>Lista de alunos</h3>
	
	<?php 
		/* Realiza a consulta de todos os registros na tabela */
		$consulta = "select * from usuario";  // Consulta SQL
	  $resultado = mysqli_query($conexao, $consulta); // Resultado da consulta
	  $num_linhas = mysqli_num_rows($resultado);
	 ?>


	<table border="1">
		<!-- Linha de cabeçalho -->
	  <tr>
	    <th>Código</th>
	    <th>Nome</th> 
	    <th>Login</th>
	    <th>Senha</th>
	    <th>Excluir | Editar</th>
	  </tr>

	  <?php 
	  	// Para cada linha da tabela, executa as ações abaixo
		  for ($i = 0; $i < $num_linhas; $i++) {
		    $registro = mysqli_fetch_array($resultado);  // Resultado em forma de vetor associativo

		    $id = $registro["id"];
		    $nome = $registro["nome"];
		    $login = $registro["login"];
		    $senha = $registro["senha"];

		    // Cria linha da tabela
		    echo "<tr>";
			    echo "<td>$id</td>";
			    echo "<td>$nome</td>";
			    echo "<td>$login</td>";
			    echo "<td>$senha</td>";
			    echo "<td>
						    	<a href='excluir-aluno.php?id=$id'>Excluir</a> -
						    	<a href='editar-aluno.php?id=$id'>Editar</a>
					    	</td>";
	    	echo "</tr>";
		  }
	   ?>
	</table>

</body>
</html>