<?php

include "conexao.php";

	$id = $_POST['id'];
    $status = $_POST['status'];

    
    $sql = "UPDATE pedido SET status = '$status' WHERE id = '$id'";

    if ($conn->query($sql) ===TRUE) {
        echo "<h1 style='text-align: center; margin-top: 15px;'>Produto Alterado com Sucesso</h1>";
        header('refresh: 3, index.php');
        } 
        else{
            echo "erro: . $conn->error";
        }
$conn->close();

?>