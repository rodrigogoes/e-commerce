<?php 
include "cabecalho.html";
    session_start();

    echo "<h1>".$_GET['nome']."</h1>";
    echo $_GET['preco'];
    echo $_GET['foto'];
    echo $_GET['categoria'];
?>


    
</body>
</html>