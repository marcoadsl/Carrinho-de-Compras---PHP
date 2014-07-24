<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include 'Conexao.class.php';
include 'Produtos.class.php';

$banco = new Banco();
$prod = new Produto(null, 'GUITARRA STRATOCASTER5', 'vazia1.png', 22.3);
// $banco->insert($prod);
$cond = array('id', 2);
$banco->delete($prod, $cond);
echo '</br>';
	$query = $banco->select($prod);
	while($rs = mysql_fetch_object($query)){
		echo $rs->nome.", ".$rs->preco."</br>";
	}


?>