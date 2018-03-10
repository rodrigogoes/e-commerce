
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
    <h1 class="font-bold text-center h1 py-5"><?php echo $_GET['nome']; ?></h1>

    <!--Grid row-->
    <div class="row">

<?php  
if (isset($_GET['nome'])) {
   $nome = $_GET['nome'];
   $preco = $_GET['preco'];
   $foto = $_GET['foto'];
    $categoria = $_GET['categoria'];

      $sql = "SELECT * FROM cadastro "; //

  //  echo $_GET['nome'];
  //  echo $_GET['preco'];
  //  echo $_GET['foto'];
  //  echo $_GET['categoria'];

    echo '<div class="col-lg-4 col-md-12 mb-r" style="margin-top: 15px;">';
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


                ?>

           
                <?php
              
                
  }  
?>

<?php

if(isset($_POST['submit'])) {
extract($_POST);

if($parcelado==1) {
echo "O valor de $campo sai a vista por $campo";
} 

else {
echo "O valor de $campo parcelado sai em $parcelado vezes de ".$campo/$parcelado."";
}

}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php 

  
  include "conexao.php";

   
    $id = $_SESSION['id'];

  $sql = "SELECT * FROM cadastro WHERE id = $id"; //

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
  while($row = $result -> fetch_assoc())
    {
?>
<form action="confirmacao.php" method="post">
                <p> 
                   <h5><label for="emailsignup" style="color: #f00" class="grupo" data-icon="e" >Forma de Pagamento</label></br></h5>
                     <select name="pagamento" class="custom-select">
                         <option value="Á vista">
                             À Vista
                         </option>
                         <option value="10x">
                             Em até 10
                             x sem Juros
                         </option>
                         <option value="12x">
                         12x com Juros
                         </option>
                     </select>
                </p>
                
                <input type="hidden" name="nomec" value="<?php echo $row['nome'] ?> ">
                <input type="hidden" name="cpf" value="<?php echo $row['cpf'] ?>">
                <input type="hidden" name="tel" value=" <?php echo $row['telefone'] ?>">
                <input type="hidden" name="nascimento" value=" <?php echo $row['nascimento'] ?>">
                <input type="hidden" name="nomep" value=" <?php echo $nome ?>">
                <input type="hidden" name="preco" value=" <?php echo $preco ?>">
                <input type="hidden" name="foto" value=" <?php echo $foto ?>">
                <input type="hidden" name="categoria" value=" <?php echo $categoria ?>">
                <input type="hidden" name="pedido" value=" <?php echo $pedido ?>">

           <button type="submit" class="btn btn-success btn-md btn-block">Comprar</button>
</form>

</body>
</html>


<?php
      

     //aqui iremos pegar o nome e escrever após o login ser aceito
    echo " <h4>DADOS DO COMPRADOR</h4>";
    echo ' <h5>Senhor ' . $row['nome'].'</h5><br>'; //aqui iremos pegar o nome e escrever após o login ser aceito
    echo ' <h5>portador do cpf: ' . $row['cpf'].'</h5><br>'; //aqui iremos pegar o nome e escrever após o login ser aceito
    echo ' <h5>dono do numero telefonico ' . $row['telefone'].'</h5><br>'; //aqui iremos pegar o nome e escrever após o login ser aceito
    echo ' <h5>nascido em :  ' . $row['nascimento'].'</h5>'; //aqui iremos pegar o nome e escrever após o login ser aceito
}

}
else{
  header('string');
}


 ?>



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