<?php
// include 'Conexao.class.php';
/*
	Classe responsável por manipular os produtos do carrinho
*/
session_start();
class Carrinho{
	private $carrinho = array();// = $_SESSION['carrinho'];

	public function iniciar(){
		if(!isset($_SESSION['carrinho']))
			$_SESSION['carrinho'] = array();
			// $carrinho[] =  $_SESSION['carrinho'];
	}

	/*
		Adicionando produtos no carrinho de acordo com 'id' passado por parametro
	*/
	public function addProduto($id){
		$id = intval($id);
		if(!isset($_SESSION['carrinho'][$id])){
			$_SESSION['carrinho'][$id] = 1;
			
		}
		else{
			$_SESSION['carrinho'][$id]++;
			
		}		
	}

	/*
		Removendo produto no carrinho de acordo com 'id' passado
	*/

	public function remProduto($id){
		$id = intval($id);
		if(isset($_SESSION['carrinho'][$id])){
			unset($_SESSION['carrinho'][$id]);
		}
	}

	/*
		Atualizando a quantidade do produto no carrinho
	*/

	public function upProduto($id, $quantidade){
		$id = intval($id);
		$_SESSION['carrinho'][$id] = $quantidade;
	}


}



?>