<?php
include "cabecalho.html";
?>

<form action="update_status.php" class="container" method="post">


                <p> 
                    <label for="usernamesignup" class="uname" data-icon="u">ID do Produto</label></br>
                    <input id="usernamesignup" name="id" required="required" type="text" />
                </p>
                <p> 
                   <h5><label for="emailsignup" style="color: #f00" class="grupo" data-icon="e" >Status Do Pedido</label></br></h5>
                     <select name="status" class="custom-select">
                         <option value="processamento">
                             Em processamento
                         </option>
                         <option value="preparacao">
                             Em preparação
                         </option>
                         <option value="enviado">
                            Enviado
                         </option>
                     </select>
                </p>

           <button type="submit" class="btn btn-success btn-md btn-block">Enviar</button>
</form>

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