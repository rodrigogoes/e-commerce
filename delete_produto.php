<?php 
	include "conexao.php";

	$id = $_POST['id'];

$sql = "DELETE FROM produtos WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		include "confirmacao_exclusao.php";
		header('refresh: 3, index.php');
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()

?>
