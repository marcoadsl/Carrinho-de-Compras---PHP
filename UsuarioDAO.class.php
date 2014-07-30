<?php
class UsuarioDAO{
	private $nomeTabela = "Usuario";

	public function __construct(){
		
	}

	public function selectUsuario($usuario, $condition = null){
		$sql = "SELECT * FROM ".$this->nomeTabela;
		
		if($condition != null){
			$sql .= " WHERE ".$condition;	
		}		
		// echo $sql;
		return mysql_query($sql);
	}

	public function insertUsuario($usuario){		
		$sql = "INSERT INTO ".$this->nomeTabela." VALUES(null, '". $usuario->getNome()."', '".$usuario->getSenha()."')";
		try {
			return mysql_query($sql);			
		} catch (Exception $e) {
			echo "Erro!!!";
		}
	}

	public function deleteUsuario($usuario){
		if($usuario->getId() != null){
			$sql = "DELETE FROM ".$this->nomeTabela." WHERE id = ".$usuario->getId();	
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

}

?>