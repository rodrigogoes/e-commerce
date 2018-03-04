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
            <form  action="insert_produto.php" method="POST"> 
                <h1> Cadastro de Produto </h1> 
                <p> 
                    <label for="usernamesignup" class="uname" data-icon="u">Nome do Produto</label></br>
                    <input id="usernamesignup" name="nome" required="required" type="text" placeholder="Ex.: PlayStation 4" />
                </p>
                <p> 
                    <label for="descricao" class="usame" data-icon="e" >Descrição do Produto</label></br>
                    <input id="descricao" name="descricao" required="required" type="text" placeholder="Insira a descrição do produto"/> 
                </p>
                <p> 
                    <label for="preco" class="usame" data-icon="e" >Preço do Produto</label></br>
                    <input id="preco" name="preco" required="required" type="text" placeholder=""/> 
                </p>
                <p> 
                    <label for="categoria" class="grupo" data-icon="e" >Categoria do Produto</label></br>
                     <select name="categoria" class="custom-select">
                         <option value="livros">
                            livros
                         </option>
                         <option value="celulares">
                            celulares 
                         </option>
                         <option value="consoles">
                            consoles
                         </option>
                         <option value="eletrodomesticos">
                            eletrodomesticos
                         </option>
                         <option value="informatica">
                            informatica
                         </option>
                         <option value="moveis">
                            moveis
                         </option>
                     </select>
                </p>
                <p> 
                    <label for="foto" class="uname" data-icon="p">Foto do Produto </label></br>
                    <input name="foto" required="required" type="text" placeholder="Digite o endereço da imagem"/>
                </p>
                <button style="width: 96%" type="submit" class="btn btn-success btn-lg btn-block">Cadastrar Produto</button>
            </form>
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
