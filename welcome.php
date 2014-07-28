<?php
include 'Login.class.php';
Login::verificaLogin();
?>
<!DOCTYPE HTML>
<html lang="en-US">
   <head>
      <meta charset="iso-8859">
      <title>Bem Vindo</title>
 
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <div class="container welcome">
         <h3>Bem Vindo</h3>
      </div>
      <br>
      <a href="logout.php">Sair</a>
   </body>
</html>