<?php
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

include 'Produtos.class.php';
include 'ProdutosDAO.class.php';
   
$p_dao = new ProdutosDAO();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <meta charset="iso-8859">
      <title>Login</title>
 
      <link rel="stylesheet" href="css/style.css" />
 
   </head>
   <body>
      <div id="container">
         <div class="conteudoAR">
            <br />
            <form action="" method="POST">
               <label for="nome">Nome:</label>
               <br />
               <input type="text" name="nome" id="nome" />
               <br />
               <label for="preco">Pre&ccedil;o:</label>
               <br />
               <input type="text" name="preco" id="preco" />
               <br>
               <label for="foto">Imagem:</label>
               <br />
               <input type="file" name="foto" id="foto" />
               <br />
               <br/>
               <input type="submit" value="Enviar" name="Enviar"/>
               <a href="index.php">Voltar</a>
            </form>
         </div>
         <?php               
            if(isset($_POST["Enviar"]) && $_POST["Enviar"] == "Enviar"){
               $produto = new Produto(null, $_POST['nome'], $_POST['foto'], $_POST['preco']);
               // echo $produto->getNome();   
               $p_dao->insertProd($produto);
            }
         ?>
      </div>
   </body>
</html>
