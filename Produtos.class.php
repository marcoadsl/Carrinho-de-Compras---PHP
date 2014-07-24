<?php
class Produto{
	private $id;
	private $nome;
	private $imagem;
	private $preco;
	private $nomeTabela = 'Produtos';
	private $campos = array('nome', 'imagem', 'preco');


	public function Produto($id = null, $nome = null, $imagem= null, $preco = null){
		$this->id = $id;
		$this->nome = $nome;
		$this->imagem = $imagem;
		$this->preco = $preco;
	}

	/*		Getters 	*/
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}

	public function getImagem(){
		return $this->imagem;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function getNomeTabela(){
		return $this->nomeTabela;
	}

	public function getCampos(){
		return $this->campos;
	}

	/*		Setters 		*/
	public function setNome(string $nome){
		$this->nome = $nome;
	}

	public function setImagem(string $imagem){
		$this->imagem = $imagem;
	}

	public function setPreco(float $preco){
		$this->preco = $preco;
	}

}
?>