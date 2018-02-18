<?php
include "cabecalho.html";
?>
    
<p><br></p>
    
    <div class="container">
    <div id="container_demo" >
    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">

        <div id="register" class="animate form">
            <form  action="select_login_funcionario.php" method="POST"> 
                <h1> Login do Funcionário </h1> 
                <p> 
                    <label for="emailsignup" class="youmail" data-icon="e" >Seu E-Mail</label></br>
                    <input id="emailsignup" name="email" required="required" type="email" placeholder="jucadasilva@gmail.com"/> 
                </p>
                <p> 
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Digite Sua Senha </label></br>
                    <input name="senha" required="required" type="password" placeholder=""/>
                </p>
                <button style="width: 96%" type="submit" class="btn btn-success btn-lg btn-block">Fazer Meu Login</button>
            </form>
        </div>
        <div style="margin-top: 10px">
        <h4>Não tem conta?<a href="cad_funcionario.php"> Cadastre-se!</a></h4>
        </div>
        
    </div>
</div> 
</div>

<?php
include "rodape.php";
?>
<!--/.Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>


</html>
