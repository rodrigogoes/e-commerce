<?php
include "cabecalho.html"
?>
<body>


<div class="container">
<section class="pb-3">

    <!--Section heading-->
    <h1 class="font-bold text-center h1 py-5">Resultado da Pesquisa</h1>

    <!--Grid row-->
    <div class="row">

<?php 
  include "conexao.php";

  $busca = $_POST['categoria'];

  $sql = "SELECT * FROM produtos WHERE UPPER (categoria) = UPPER ('$busca')";
  $result = $conn -> query($sql);

  if ($result ->num_rows>0){
    while($row = $result -> fetch_assoc()){
?>

    <div class="col-lg-4 col-md-12 mb-r" style="margin-top: 25px;">
    <div class="card card-cascade wider">
    <div class='row'>
    <div class="view overlay hm-white-slight">
    <img class='container' width='' src="<?php echo $row['foto']; ?>"
    <a>
     <div class="mask"></div>
    </a>
    </div>

            <div class="card-body text-center no-padding">
                   <a href="" class="text-muted">
                       <h5><?php echo $row['categoria']; ?></h5>
                   </a>
                   <h4 class="card-title">
                       <strong>
                          <a href=""><?php echo $row['nome']; ?></a>
                      </strong>
                   </h4>

                    <div class="card-footer">
                        <span class="left font-bold">
                            <strong><?php echo $row['preco']; ?></strong>
                        </span>
                    </div>

             </div>
             </div>
        </div>
    </div>
 
<?php  
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

</body>
</html> 