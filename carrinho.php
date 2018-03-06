
<?php 
include "cabecalho.html";
session_start(); 
?>

<?php


if ($_SESSION['logado'] == 1){
    echo "Bem Vindo: ";	
 	echo $_SESSION['email'] ;
}
else {
	echo "voce não esta logado";
	header('refresh: 3, login.php');
}
?>

<div class="container">
<section class="pb-3">

    <!--Section heading-->
    <h1 class="font-bold text-center h1 py-5">Seu Carrinho de Compras</h1>

    <!--Grid row-->
    <div class="row">

<?php  
if (isset($_GET['nome'])) {
   $nome = $_GET['nome'];
   $preco = $_GET['preco'];
   $foto = $_GET['foto'];
    $categoria = $_GET['categoria'];

  //  echo $_GET['nome'];
  //  echo $_GET['preco'];
  //  echo $_GET['foto'];
  //  echo $_GET['categoria'];

    echo '<div class="col-lg-4 col-md-12 mb-r" style="margin-top: 25px;">';
        echo '<div class="card card-cascade wider">';
             echo "<div class='row'>";
                echo '<div class="view overlay hm-white-slight">';
                echo " <img class='container' width='' src='$foto'>";
                    echo '  <a>';
                        echo '<div class="mask"></div>';
                    echo '</a>';
                echo '</div>';

                echo' <div class="card-body text-center no-padding">';
               echo '    <a href="" class="text-muted">';
               echo '        <h5>'.$categoria.'</h5>';
               echo '    </a>';
               echo '    <h4 class="card-title">';
               echo '        <strong>';
               echo '           <a href="">'.$nome.'</a>';
               echo '       </strong>';
               echo '    </h4>';

                echo '    <div class="card-footer">';
                echo '        <span class="left font-bold">';
                echo '            <strong>R$'.$preco.'</strong>';
             //   echo '<a action href="carrinho.php"><img width="25px" style="float: right;" src="imagens/carrinho.png"></a>';    
                 echo '       </span>';
                echo '    </div>';
                
  }  
?>	
	<a href="compra.php?acao=add&nome=<?php echo  $nome?>&preco=<?php echo $preco?>&foto=<?php echo $foto?>&categoria=<?php echo $categoria?>" style="width: 96%; margin-top: 15px; margin-left: 7px;" type="submit" class="btn btn-success btn-md btn-block">COMPRAR</a>


</div>
</section>
</div>

<?php
include "rodape.php";
?>
<!--/.Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>