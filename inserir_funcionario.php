<?php 
	include "conexao.php";
	include "cabecalho.html";

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$nascimento = $_POST['nascimento'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];


	$sql = "INSERT INTO cad_funcionario (email, senha, cpf, nome, nascimento, sexo, telefone) VALUES ('$email', '$senha', '$cpf', '$nome', '$nascimento', '$sexo', '$telefone')"; //iremos adicionar as informações do formulario no banco de dados

	if ($conn->query($sql) === TRUE) {
		echo "<h1 style='text-align: center; margin-top: 15px;'>Funcionário Inserido com Sucesso</h1>";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>