<?php

class Usuario{
	private $id;
	private $nome;
	private $senha;
	private $nomeTabela = "Usuarios";

	public function __construct($id = null, $nome = null, $senha = null){
		if($nome != null && $senha != null && $id != null){
			$this->id = $id;
			$this->nome = $nome;
			$this->senha = $senha;
		}
	}

	public function getNomeTabela(){
		return $this->nomeTabela;
	}
	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}
		public function getSenha(){
		return $this->senha;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
}
?>