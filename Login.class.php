<?php
// session_start();
include 'Conexao.class.php';

class Login{
	public function __construct($usuario){
		$this->logar($usuario);
	}

	public function verificaLogin(){
		if(!isset($_SESSION['usuario'])){
			// header("Location: ../index.php")
		}
	}

	public function logar($usuario){
		$daoUsu =  new UsuarioDAO();
		$q_usu = $daoUsu->selectUsuario($usuario, "nome = ".$usuario->getNome());

		if(mysql_num_rows($q_usu) == 1){
			$d_usu = mysql_fetch_array($q_usu);
			if($d_usu['senha'] == $usuario->getSenha()){
				$_SESSION['usuario'] = $d_usu['nome'];
				header("Location: welcome.php");
			}
			else{
				echo '	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
						alert ("Usuario ou senha invalido(s)")
					</SCRIPT>
					';	
			}
		}
		else{
			header("Location: index.php");
			echo '	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
						alert ("Usuario ou senha invalido(s)!")
					</SCRIPT>
				';	
		}
	}

	public function logout(){
		session_destroy();
		// header("Location: ../index.php");
	}



}
?>