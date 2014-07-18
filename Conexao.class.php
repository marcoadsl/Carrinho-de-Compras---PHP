<?php
class Banco{
	private $root = "root";
	private $localhost = "localhost";
	private $pass =  "pedr0704";
	private $db = "Carrinho_de_compras"; //A definir

	public function Banco(){
		mysql_pconnect($this->localhost, $this->root, $this->pass) or die(mysql_error());		
		mysql_select_db($this->db) or die(mysql_error());
	}

	public function select($produto){
		$sql = "SELECT * FROM ".$produto->getNomeTabela();
		return mysql_query($sql);
	}

	public function insert($produto){		
		$sql = "INSERT INTO ";
		$sql .= $produto->getNomeTabela()." VALUES(null, '". $produto->getNome()."', '".$produto->getImagem()."', ".$produto->getPreco().")";
		// echo $sql;
		return mysql_query($sql);
	}

	public function delete($produto){

	}

}

?>