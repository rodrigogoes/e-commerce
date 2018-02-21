<?php 
	include "conexao.php";

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	$foto = $_POST['foto'];


	$sql = "INSERT INTO produtos (nome, preco, categoria, foto) VALUES ('$nome', '$preco', '$categoria', '$foto')"; //iremos adicionar as informações do formulario no banco de dados

	if ($conn->query($sql) === TRUE) {
		echo "CADASTRADO COM SUCESSO";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>