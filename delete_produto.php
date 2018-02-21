<?php 
	include "conexao.php";

	$id = $_POST['id'];

$sql = "DELETE FROM produtos WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "PRODUTO DELETADO COM SUCESSO";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()

?>
