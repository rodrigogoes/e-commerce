<?php
include "cabecalho.html"
?>

<div class="container">
<section class="pb-3">

    <!--Section heading-->
    <h1 class="font-bold text-center h1 py-5">Confira os nossos produtos</h1>

    <!--Grid row-->
    <div class="row">


<?php

    include "conexao.php";

    $categoria = $_GET['cat'];

    $sql = "SELECT * FROM produtos WHERE categoria='$categoria'";

    $result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc())
    {
                
    echo '<div class="col-lg-4 col-md-12 mb-r" style="margin-top: 25px;">';
        echo '<div class="card card-cascade wider">';
             echo "<div class='row'>";
                echo '<div class="view overlay hm-white-slight">';
                echo " <img class='container' width='' src='".$row['foto']."'>";
                    echo '  <a>';
                        echo '<div class="mask"></div>';
                    echo '</a>';
                echo '</div>';

            echo' <div class="card-body text-center no-padding">';
               echo '   <a href="" class="text-muted">';
               echo '  <h5>'.$row['categoria'].'</h5>';
               echo '  </a>';
               echo '  <h4 class="card-title">';
               echo '  <strong>';
               echo '  <a href="">'.$row['nome'].'</a>';
               echo '  </strong>';
               echo '   </h4>';

                echo ' <div class="card-footer">';
                echo ' <span class="left font-bold">';
                echo '<strong><a>R$'.$row['preco'].'</a></strong>';
                 echo ' </span>';
                echo '</div>';
                
                ?>

                <a href="carrinho.php?acao=add&id=<?php echo $row['id']?>&nome=<?php echo $row['nome']?>&preco=<?php echo $row['preco']?>&foto=<?php echo $row['foto']?>&categoria=<?php echo $row['categoria']?>" style="width: 96%; margin-top: 15px; margin-left: 7px;" type="submit" class="btn btn-success btn-md btn-block">Adicionar ao Carrinho</a>
                <?php

             echo '</div>';
             echo '</div>';
        echo '</div>';
    echo '</div>';
     }
}


   
else{
    echo "0 resultados";
}
$conn -> close();

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