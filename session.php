<?php session_start();
include "cabecalho.html" ?>



<?php


if ($_SESSION['logado'] == 1){
 	echo $_SESSION['email'] ;
}
else {
	echo "voce não esta logado";
}
?>

</body>
</html>