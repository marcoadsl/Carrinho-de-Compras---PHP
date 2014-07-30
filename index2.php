<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include 'UsuarioDAO.class.php';
include 'Usuario.class.php';
include 'Login.class.php';

$banco = new Banco();
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
         <div class="login">
            <h3>Login</h3>
            <br />
            <form action="" method="POST">
               <label for="nome">Nome:</label>
               <br />
               <input type="text" name="nome" id="nome" />
               <br />
               <br />
               <label for="senha">Senha:</label>
               <br />
               <input type="password" name="senha" id="senha" />
               <br />
               <br />
               <input type="submit" value="Enviar" name="Enviar"/>
            </form>
            <a href="index.php">Voltar</a>
         </div>
         <?php               
            if(isset($_POST["Enviar"]) && $_POST["Enviar"] == "Enviar"){
               $usuario = new Usuario(null, $_POST['nome'], $_POST['senha']);
               $login = new Login();               
               $login->logar($usuario);
            }
         ?>
      </div>
   </body>
</html>
