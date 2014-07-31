<?php
session_start();

class Login{
	public function __construct(){
		// $this->logar($usuario);
	}

	public static function verificaLogin(){
		// session_start();
		if(!isset($_SESSION['usuario'])){
		echo  '	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
			alert ("Necessário fazer login!!")
		</SCRIPT>';
			header("Location: index.php?acao=login");
		}
	}

	public function logar($usuario){
		$daoUsu =  new UsuarioDAO();
		$q_usu = $daoUsu->selectUsuario($usuario, "nome = '".$usuario->getNome()."'");

		if(mysql_num_rows($q_usu) == 1){
			$d_usu = mysql_fetch_array($q_usu);
			if($d_usu['senha'] == $usuario->getSenha()){
				$_SESSION['usuario'] = $d_usu['nome'];
				header("Location: index.php?acao=arearestrita");
			}
			else{	
				$this->error("Usuario ou senha invalidos!!");
			}
		}
		else{
			header("Location: index.php?acao=arearestrita");			
			$this->error("Usuario ou senha invalidos!!!");
		}
	}

	public function error($msg){
		$script =   '	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
						alert ("'.$msg.'")
					</SCRIPT>
				';
		echo $script;
	}

	public function logout(){
		session_destroy();
		header("Location: index.php?acao=login");
	}
}
?>