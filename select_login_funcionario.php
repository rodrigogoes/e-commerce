<?php 
	include "conexao.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];


	$sql = "SELECT nome FROM cad_funcionario WHERE email='$email' AND senha='$senha'"; //

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	while($row = $result -> fetch_assoc())
		{
		include "bem_vindo.php";
		header('refresh: 3, index.php');
	}
}
else{
	header('string');
}


 ?>