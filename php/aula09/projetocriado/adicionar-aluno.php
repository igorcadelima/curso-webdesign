<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de alunos MC - Adicionar aluno</title>
</head>
<body>
	<h1>Sistema de alunos MC</h1>

	<?php include 'menu.php'; ?>

	<h3>Cadastro de aluno</h3>

	<form action="salvar-aluno.php" method="post">
		<p>
			<label>Nome:</label>
			<input type="text" name="nome">
		</p>
		<p>
			<label>Login:</label>
			<input type="text" name="login">
		</p>
		<p>
			<label>Senha:</label>
			<input type="text" name="senha">
		</p>
		<p>
			<input type="submit" value="Salvar">
		</p>
	</form>

</body>
</html>