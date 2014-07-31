<?php
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

include 'Login.class.php';
Login::verificaLogin();

echo $_SESSION['usuario'];
   
   /*
      Logout
   */

   if(isset($_GET['op']) && $_GET['op'] == 'sair'){
      $login = new Login();
      $login->logout();
   }
?>
<!DOCTYPE HTML>
<html lang="en-US">
   <head>
      <meta charset="iso-8859">
      <title>Bem Vindo</title>
 
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <div id="container">
         <h3>Bem Vindo</h3>
      </div>
      <br>
      <a href="index.php?acao=arearestrita&op=sair">Sair</a>
   </body>
</html>