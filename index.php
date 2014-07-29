<!DOCTYPE HTML>
<html lang="pt-BR">
   <head>
      <meta charset="iso-8859">
      <title>Lojas ******</title>
 
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <div class="conteiner welcome">
         <h3>Carrinho de Compras</h3>
      </div>
      <div id="menu">
         <ul>
            <li><a href="index.php?acao=listar">Inicio</a></li>
            <li><a href="index.php?acao=meucarrinho">Meu Carrinho</a></li>
            <li><a href="welcome.php">&Aacute;rea restrita</a></li>
         </ul>
      </div>
   </br>
      <div id="conteudo">
         <?php
            if(isset($_GET['acao'])){
               switch ($_GET['acao']) {
                  case 'listar':
                     include 'ListarProdutos.php';
                     break;
                  case 'meucarrinho':
                     include 'MeuCarrinho.php';
                     break;
               }               
            }
            else
               include 'ListarProdutos.php';

         ?>
      </div>

   </body>
</html>