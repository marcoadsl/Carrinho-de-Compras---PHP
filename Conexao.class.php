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

	public function select($objeto){
		$sql = "SELECT * FROM ".$objeto->getNomeTabela();
		return mysql_query($sql);
	}

	public function insert($objeto){		
		$sql = "INSERT INTO ";
		switch ($objeto->getNomeTabela()) {
			case 'Produtos':
				$sql .= $objeto->getNomeTabela()." VALUES(null, '". $objeto->getNome()."', '".$objeto->getImagem()."', ".$objeto->getPreco().")";				
				break;
			case 'Usuarios':
				$sql .= $objeto->getNomeTabela()." VALUES(null, '". $objeto->getNome()."', '".$objeto->getSenha().")";		
			default:
				
				break;
		}		
		// echo $sql;
		return mysql_query($sql);
	}

	public function delete($objeto, array $condition = null){
		if($condition != null){
			$sql = "DELETE FROM ".$objeto->getNomeTabela()." WHERE ".$condition[0]." = ".$condition[1];					
			// echo $sql;
			return mysql_query($sql);
		}
		else{
			echo '	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
						alert ("Informe qual(quais) registros serão o excluídos!")
					</SCRIPT>
				';			
		}
	}

	public function update($objeto, array $condition = null){
		if($condition != null){
			




		}
	}

}

?>