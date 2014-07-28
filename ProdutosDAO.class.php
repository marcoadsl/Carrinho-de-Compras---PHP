<?php
class ProdutosDAO{
	private $nomeTabela = "Produtos";

	public function selectProd($produto, $condition = null){
		$sql = "SELECT * FROM ".$this->nomeTabela;
		
		if($condition != null){
			$sql .= " WHERE ".$condition;	
		}		
		return mysql_query($sql);
	}

	public function insertProd($produto){		
		$sql = "INSERT INTO ".$this->nomeTabela." VALUES(null, '". $produto->getNome()."', '".$produto->getImagem()."', ".$produto->getPreco().")";
		return mysql_query($sql);
	}

	public function delProd($produto){
		if($produto->getId() != null){
			$sql = "DELETE FROM ".$this->nomeTabela." WHERE id = ".$produto->getId();	
			// echo $sql;
			return mysql_query($sql);
		}
		else{
			echo '	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
						alert ("Informe qual registro será o excluído!")
					</SCRIPT>
				';			
		}
	}
	
	/*		
		UPDATE tabela SET coluna1 = exp1... WHERE [cond..]
		Considerando que as atualizações só serão feitas segundo a PK no BD, ou seja, sempre vamos usar o 'id' pra fazer os updates no 
		registros, e que só poderá ser feito atualização de um campo por vez![ALERT... GAMBIARRA DETECTED!!!!!]
	*/
	public function updateProd($prod, $cond = array(2)){
		if($cond[0] != 'id'){
			$sql = "UPDATE ".$this->nomeTabela." SET ".$cond[0]." = '".$cond[1]."' WHERE id = ".$prod->getId();
			echo $sql;
			// return mysql_query($sql);
		}
	}





}
?>