<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de alunos MC - Lista de alunos</title>
</head>
<body>
	<h1>Sistema de alunos MC</h1>

	<!-- Incluir menu.php -->
	<!-- Incluir conexao.php -->
	
	<h3>Lista de alunos</h3>
	
	<?php 
		// Realizar a consulta de todos os registros na tabela
	
		// Obter número de registros
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
		    // Transformar resultado em vetor associativo

		    // Salvar dados nas variáveis $id, $nome, $login, e $senha

		    // Cria linha da tabela
		    echo "<tr>";
			    echo "<td>$id</td>";
			    echo "<td>$nome</td>";
			    echo "<td>$login</td>";
			    echo "<td>$senha</td>";
			    // Passar id do aluno via url para os scripts excluir-aluno.php e editar-aluno.php
			    echo "<td>
						    	<a href=''>Excluir</a> -
						    	<a href=''>Editar</a>
					    	</td>";
	    	echo "</tr>";
		  }
	   ?>
	</table>

</body>
</html>