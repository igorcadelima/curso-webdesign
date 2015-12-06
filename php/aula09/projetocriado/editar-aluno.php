<?php 
	include 'conexao.php';

	$id = $_GET["id"];
	$consulta = "select * from usuario where id = $id";
	$resultado = mysqli_query($conexao, $consulta);
	$vetorDados = mysqli_fetch_array($resultado);

	$nome = $vetorDados["nome"];
	$login = $vetorDados["login"];
	$senha = $vetorDados["senha"];
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de alunos MC - Adicionar aluno</title>
</head>
<body>
	<h1>Sistema de alunos MC</h1>

	<?php include 'menu.php'; ?>

	<h3>Edição de aluno</h3>

	<form action="atualizar-aluno.php" method="post">
		<input type="hidden" name="id" value='<?php echo "$id"; ?>'>
		<p>
			<label>Nome:</label>
			<input type="text" name="nome" value='<?php echo "$nome"; ?>'>
		</p>
		<p>
			<label>Login:</label>
			<input type="text" name="login" value='<?php echo "$login"; ?>'>
		</p>
		<p>
			<label>Senha:</label>
			<input type="text" name="senha" value='<?php echo "$senha"; ?>'>
		</p>
		<p>
			<input type="submit" value="Atualizar">
		</p>
	</form>

</body>
</html>