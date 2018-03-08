<?php 
	include "conexao.php";
	include "cabecalho.html";

	$email = $_POST['email'];
	$senha = $_POST['senha'];


	$sql = "SELECT nome FROM cad_funcionario WHERE email='$email' AND senha='$senha'"; //

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	while($row = $result -> fetch_assoc()){
		
		echo "<h1 style='text-align: center; margin-top: 15px;'>Login Realizado com Sucesso</h1>";
		header('refresh: 3, pag_funcionario.php');
	}
}
else{
	header('0 Resultados');
}


 ?>