<?php 
	
	// Incluir arquivo de conexão

	// Pegar id do aluno
	// Fazer busca do aluno baseando-se em seu id para pegar dados já existentes

	// Salvar dados do aluno em questão em variáveis

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de alunos MC - Adicionar aluno</title>
</head>
<body>
	<h1>Sistema de alunos MC</h1>

	<!-- Incluir menu.php -->

	<h3>Edição de aluno</h3>

	<!-- Indicar que o script que cuidará da submissão do form será atualizar-aluno.php -->
	<!-- Indicar método de envio (post ou get) -->
	<!-- Para cada campo de entrada, indicar nome e valores já existentes -->
	<form action="" method="">
	<!-- Campo do tipo hidden (oculto) com id do aluno -->
		<input type="hidden" name="" value=''>
		<p>
			<label>Nome:</label>
			<input type="text" name="" value=''>
		</p>
		<p>
			<label>Login:</label>
			<input type="text" name="" value=''>
		</p>
		<p>
			<label>Senha:</label>
			<input type="text" name="" value=''>
		</p>
		<p>
			<input type="submit" value="Atualizar">
		</p>
	</form>

</body>
</html>