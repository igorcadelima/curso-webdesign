<?php 
  $servidor = "localhost";  // Endereço do servidor
  $usuario = "root";        // Nome do usuário de acesso ao servidor
  $senha = "";              // Senha do usuário de acesso ao servidor
  $banco = "bdUsuario";     // Nome do banco de dados que será manipulado

  // Executa conexão com o servidor
  $conexao = mysqli_connect($servidor, $usuario, $senha)
            or die("Não foi possível conectar-se ao servidor. Erro: " . mysqli_connect_error());

  // Seleciona banco de dados
  $selecao = mysqli_select_db($conexao, $banco)
            or die("Não foi possível conectar-se ao banco. Erro: " . mysqli_error());
 ?>