<?php 
	include "conexao.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$nascimento = $_POST['nascimento'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];


	$sql = "INSERT INTO cad_funcionario (email, senha, cpf, nome, nascimento, sexo, telefone) VALUES ('$email', '$senha', '$cpf', '$nome', '$nascimento', '$sexo', '$telefone')"; //iremos adicionar as informações do formulario no banco de dados

	if ($conn->query($sql) === TRUE) {
		include "confirmacao_cadastro.php";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>