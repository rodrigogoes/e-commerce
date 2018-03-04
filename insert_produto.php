<?php 
	
	include "conexao.php";
	include "cabecalho.html";

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	$foto = $_POST['foto'];
	$descricao = $_POST['descricao'];


	$sql = "INSERT INTO produtos (nome, preco, categoria, foto, descricao) VALUES ('$nome', '$preco', '$categoria', '$foto', '$descricao')"; //iremos adicionar as informações do formulario no banco de dados

	if ($conn->query($sql) === TRUE) {
		 echo "<h1 style='text-align: center; margin-top: 15px;'>Produto Inserido com Sucesso</h1>";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>