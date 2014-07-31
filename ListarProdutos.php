<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// include 'Conexao.class.php';
include 'ProdutosDAO.class.php';
include 'Carrinho.class.php';
$banco = new Banco();
$p_dao = new ProdutosDAO();
$car = new Carrinho();

	// Add o produto no carrinho
		if(isset($_GET['op']) && $_GET['op'] == 'add'){
			$car->addProduto($_GET['id']);
		}

		$query = $p_dao->selectProd(null);
		if(mysql_num_rows($query) == 0){
			echo "N&atilde;o h&aacute; produtos cadastrados no estoque!!!";
		}
		else{
?>
<table border=1>
	<?php while ($result = mysql_fetch_object($query)) { ?>
	<thead>
		<td></td>
		<td>Nome</td>
		<td>Pre&ccedil;o</td>
	</thead>
	<tr> 
		<td class="cel_internas"><?php echo "<img src='img/".$result->imagem."' />";?></td>
		<td class="cel_internas"><?php echo $result->nome ?></td>
		<td class="cel_internas"><?php echo number_format($result->preco, 2, ",", null) ?></td>
		<td><?php echo "<a href='index.php?acao=listar&op=add&id=".$result->id."'>Comprar</a>"?></td>
	</tr>
	<?php } ?>
</table>
<?php
	}
?>
