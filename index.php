<?php
include "cabecalho.html"
?>

<div class="container">
  <br>
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view hm-black-light">
                <img class="d-block w-100" src="imagens/s1.jpg" alt="First slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-strong">
                <img class="d-block w-100" src="imagens/s2.jpg" alt="Second slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img class="d-block w-100" src="imagens/s3.jpg" alt="Third slide">
                <div class="mask"></div>
            </div>
            <div class="carousel-caption">
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>

</div>


<div class="container">
<section class="pb-3">

    <!--Section heading-->
    <h1 class="font-bold text-center h1 py-5">Confira nossos produtos em destaques</h1>

    <!--Grid row-->
    <div class="row">


<?php

    include "conexao.php";



    $sql = "SELECT * FROM produtos order by id desc limit 3";
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
               echo '    <a href="" class="text-muted">';
               echo '        <h5>'.$row['categoria'].'</h5>';
               echo '    </a>';
               echo '    <h4 class="card-title">';
               echo '        <strong>';
               ?>           <a href="pedidos.php?acao=add&id=<?php echo $row['id']?>&nome=<?php echo $row['nome']?>&preco=<?php echo $row['preco']?>&foto=<?php echo $row['foto']?>&categoria=<?php echo $row['categoria']?>&descricao=<?php echo $row['descricao']?>"><?php echo $row['nome']?></a>
               <?php
               echo '       </strong>';
               echo '    </h4>';

                echo '    <div class="card-footer">';
                echo '        <span class="left font-bold">';
                echo '            <strong>R$'.$row['preco'].'</strong>';
             //   echo '<a action href="carrinho.php"><img width="25px" style="float: right;" src="imagens/carrinho.png"></a>';    
                 echo '       </span>';
                echo '    </div>';

                
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