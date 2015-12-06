<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Locadora do Pedrinho - Lista de filmes</title>
</head>
<body>
	<h1>Locadora do Pedrinho</h1>

	<!-- Incluir menu.php -->
	<!-- Incluir conexao.php -->
	
	<h3>Lista de filmes</h3>
	
	<?php 
		// Realizar a consulta de todos os registros na tabela
	
		// Obter número de registros
	 ?>


	<table border="1">
		<!-- Linha de cabeçalho -->
	  <tr>
	    <th>Código</th>
	    <th>Título</th> 
	    <th>Valor locação</th>
	    <th>Sinopse</th>
	    <th>Excluir | Editar</th>
	  </tr>

	  <?php 
	  	// Para cada linha da tabela, executa as ações abaixo
		  for ($i = 0; $i < $num_linhas; $i++) {
		    // Transformar resultado em vetor associativo

		    // Salvar dados nas variáveis $id, $titulo, $valorLocacao, e $sinopse

		    // Cria linha da tabela
		    echo "<tr>";
			    echo "<td>$id</td>";
			    echo "<td>$titulo</td>";
			    echo "<td>$valorLocacao</td>";
			    echo "<td>$sinopse</td>";

			    // Passar id do filme via url para os scripts excluir-filme.php e editar-filme.php
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