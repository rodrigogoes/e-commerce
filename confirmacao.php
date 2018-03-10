
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
    <h1 class="font-bold text-center h1 py-5">Compra Finalizada</h1>

    <!--Grid row-->
    <div class="row">

<?php  


  include "conexao.php";

   $nomep = $_POST['nomep'];
   $categoria = $_POST['categoria'];
   $preco = $_POST['preco'];
   $foto = $_POST['foto'];
   $nomec = $_POST['nomec'];
   $cpf = $_POST['cpf'];
   $tel = $_POST['tel'];
   $nascimento = $_POST['nascimento'];
   $pagamento = $_POST['pagamento'];


   if ($pagamento == '12x') {
      $preco = $preco * 1.1;
    }

$sql = "INSERT INTO pedido (nomep, preco, foto, nomec, cpf, tel, nascimento, pagamento) VALUES ('$nomep', '$preco', '$foto', '$nomec', '$cpf', '$tel', '$nascimento', '$pagamento')";
 
   
    if ($conn->query($sql) === TRUE) {


    }
    echo '<div class="col-lg-6 col-md-12 mb-r" style="margin-top: 25px;">';
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
               echo '           <a href="">'.$nomep.'</a>';
               echo '       </strong>';
               echo '    </h4>';

                echo '    <div class="card-footer">';
                echo '        <span class="left font-bold">';
                echo '            <strong>R$'.$preco.'</strong>';
             //   echo '<a action href="carrinho.php"><img width="25px" style="float: right;" src="imagens/carrinho.png"></a>';    
                 echo '       </span>';
                echo '    </div>';
                
 
?>	

</div>
</section>
</div>

<?php  


  include "conexao.php";



 $sql = "SELECT * FROM pedido WHERE cpf='$cpf'";
    $result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc())
    {


?>

<div class="container">
   <ul class="list-group">
     <li class="list-group-item">Nome: <?php echo $nomec ?></li>
     <li class="list-group-item">CPF: <?php echo $cpf ?> </li>
     <li class="list-group-item">Telefone: <?php echo $tel ?> </li>
     <li class="list-group-item">Nascimento: <?php echo $nascimento ?> </li>
     <li class="list-group-item">Pagamento: <?php echo $pagamento ?> </li>
     <li class="list-group-item">Status do Pedido: <?php echo $row['status'] ?></li>

   </ul>
 </div>

<?php
  }
}


   
else{
    echo "0 resultados";
}
$conn -> close();

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