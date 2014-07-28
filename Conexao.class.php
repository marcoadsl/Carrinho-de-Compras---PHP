<?php
class Banco{
	private $root = "root";
	private $localhost = "localhost";
	private $pass =  "pedr0704";
	private $db = "Carrinho_de_compras";

	public function Banco(){
		mysql_pconnect($this->localhost, $this->root, $this->pass) or die(mysql_error());		
		mysql_select_db($this->db) or die(mysql_error());
	}

	public function close(){
		return mysql_close();
	}
}

?>