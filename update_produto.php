<?php 
	include "conexao.php";	
	include "cabecalho.html";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	$foto = $_POST['foto'];

	
	$sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco', categoria = '$categoria', foto = '$foto' WHERE id = '$id'";

	if ($conn->query($sql) ===TRUE) {
		echo "<h1 style='text-align: center; margin-top: 15px;'>Produto Alterado com Sucesso</h1>";
		header('refresh: 3, index.php');
		} 
		else{
			echo "erro: . $conn->error";
		}
$conn->close();
