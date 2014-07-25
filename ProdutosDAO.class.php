<?php
class ProdutosDAO{
	
	public function selectProd($produto, $condition = null){
		$sql = "SELECT * FROM ".$produto->getNomeTabela();
		
		if($condition != null){
			$sql .= " WHERE ".$condition;	
		}		
		return mysql_query($sql);
	}

	public function insertProd($produto){		
		$sql = "INSERT INTO ".$produto->getNomeTabela()." VALUES(null, '". $produto->getNome()."', '".$produto->getImagem()."', ".$produto->getPreco().")";		return mysql_query($sql);
	}

	public function delProd($produto, array $condition = null){
		if($condition != null){
			$sql = "DELETE FROM ".$produto->getNomeTabela()." WHERE ".$condition[0]." = ".$condition[1];					
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
/*	UPDATE tabela SET coluna1 = exp1... WHERE [cond..]*/
	public function updateProd($prod){

	}





}
?>