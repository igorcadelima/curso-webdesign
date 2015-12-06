<?php 
	
	// Incluir arquivo de conexão

	// Pegar id do filme
	// Fazer busca do filme baseando-se em seu id para pegar dados já existentes

	// Salvar dados do filme em questão em variáveis

 ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Locadora do Pedrinho - Adicionar filme</title>
</head>
<body>
	<h1>Locadora do Pedrinho</h1>

	<?php include 'menu.php'; ?>

	<h3>Edição de filme</h3>

	<!-- Indicar que o script que cuidará da submissão do form será atualizar-aluno.php -->
	<!-- Indicar método de envio (post ou get) -->
	<!-- Para cada campo de entrada, indicar nome e valores já existentes -->
	<form action="" method="">
		<!-- Campo do tipo hidden (oculto) com id do filme -->
		<input type="hidden" name="" value=''>
		<p>
			<label>Título:</label>
			<input type="text" name="" value=''>
		</p>
		<p>
			<label>Valor locação:</label>
			<input type="text" name="" value=''>
		</p>
		<p>
			<label>Sinopse:</label>
			<textarea cols="30" rows="10" name="" value=''></textarea>
		</p>
		<p>
			<input type="submit" value="Atualizar">
		</p>
	</form>

</body>
</html>