<?php 
	include "conexao.php";
	include "cabecalho.html";

	$id = $_POST['id'];

$sql = "DELETE FROM produtos WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "<h1 style='text-align: center; margin-top: 15px;'>Produto Deletado com Sucesso</h1>";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()

?>
