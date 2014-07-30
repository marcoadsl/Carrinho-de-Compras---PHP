<?php
/*
	Classe responsável por manipular os produtos do carrinho
*/
class Carrinho{
	private $carrinho;

	public function __construct(){
		session_start();
		$_SESSION['carrinho'] = $carrinho;
	}

	public function addProduto($id){
		
	}

}



?>