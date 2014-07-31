<?php
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

include 'Login.class.php';
Login::verificaLogin();

// echo $_SESSION['usuario'];
   
   /* Logout  */

   if(isset($_GET['op']) && $_GET['op'] == 'sair'){
      $login = new Login();
      $login->logout();
   }
?>
<!DOCTYPE HTML>
<html lang="en-US">
   <head>
      <meta charset="iso-8859">
      <title>Bem Vindo sr(a) <?php echo $_SESSION['usuario'];?></title>
 
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <!-- <div id="container"> -->
            <h3>Bem Vindo sr(a) <?php echo strtoupper($_SESSION['usuario']);?> <a class="sair" href="index.php?acao=arearestrita&op=sair">[Sair]</a></h3>
            
      
         <div id="conteudoAR">
         <div id="nav">
            <ul>
               <li><a href="index.php?acao=arearestrita&op=listar">Listar Produtos</a></li>
               <li><a href="index.php?acao=arearestrita&op=add">Adicionar produtos</a></li>
            </ul>
         </div>
            <?php
               if(isset($_GET['acao']) && $_GET['acao'] == 'arearestrita'){
                  if(isset($_GET['op'])){
                     switch ($_GET['op']) {
                        case 'listar':
                           include 'listarprodall.php';
                           break;
                        case 'add':
                              include 'addProd.php';
                           break;
                     }
                  }
               }
            ?>
         </div>
         <!-- </div>   -->
      <br>
   </body>
</html>