<?php 

	session_start();

	include "conexao.php";
	include "cabecalho.html";

	$email = $_POST['email'];
	$senha = $_POST['senha'];


	$sql = "SELECT nome FROM cadastro WHERE email='$email' AND senha='$senha'"; //

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	$_SESSION['logado'] = 1; //aqui iremos saber se a conta está logada
	$_SESSION['email'] = $email;
	while($row = $result -> fetch_assoc()){
		echo "<h1 style='text-align: center; margin-top: 15px;'>Seja Bem Vindo</h1>";
		header('refresh: 3, index.php');
	}
}
else{
	header('0 Resultados');
}


 ?>