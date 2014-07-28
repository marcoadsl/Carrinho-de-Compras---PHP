<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include 'UsuarioDAO.class.php';
include 'Usuario.class.php';
include 'Login.class.php';

// include 'Conexao.class.php';
// include 'ProdutosDAO.class.php';
// include 'Produtos.class.php';

// $banco = new Banco();
// $prod = new Produto(null, 'GUITARRA STRATOCASTER5', 'vazia1.png', 22.3);
// $pdao = new ProdutosDAO();
// echo '</br>';
// 	$query = $pdao->selectProd($prod);
// 	while($rs = mysql_fetch_object($query)){
// 		echo $rs->id.", ".$rs->nome.", ".$rs->preco."</br>";
// 	}

$banco = new Banco();
?>

<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> -->
<html>
   <head>
      <meta charset="iso-8859">
      <title>Login</title>
 
      <link rel="stylesheet" href="css/style.css" />
 
   </head>
   <body>
      <div class="container-geral">
         <div class="container login">
            <h3>Formulário de Login</h3>
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
         </div>
         <?php
               echo "ola";
               $usuario = new Usuario(null, $_POST['nome'], $_POST['senha']);
                  echo '<pre>';
                  print_r($_POST);
                  echo '</pre>';
               echo $usuario->getSenha();
            if(isset($_POST["Enviar"]) && $_POST["Enviar"] == "Enviar"){
               $login = new Login($usuario);
               
            }
         ?>
      </div>
   </body>
</html>
