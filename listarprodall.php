<?php
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

include 'ProdutosDAO.class.php';
include 'Produtos.class.php';
$p_dao = new ProdutosDAO();


$query = $p_dao->selectProd(null);

	
	if(isset($_GET['acao']) && $_GET['acao'] == 'arearestrita'){
		if(isset($_GET['f']) && $_GET['f'] == 'rem'){
			// $r = mysql_fetch_object($query);
			// $produto = new Produto($r->id, $r->nome, $r->imagem, $r->preco);

			$q1 = $p_dao->selectProd("id = ".$_GET['id']);
			$r = mysql_fetch_object($q1);
			$produto = new Produto($r->id, $r->nome, $r->imagem, $r->preco);
			$p_dao->delProd($produto);
			header("location: index.php?acao=arearestrita&op=listar");
		}
	}
	if(mysql_num_rows($query) == 0)
		echo "N&atilde;o h&aacute; produtos cadastrados no estoque!!!";
?>
<table border=1>
	<?php while ($result = mysql_fetch_object($query)) { ?>
	<thead>
		<!-- <td></td> -->
		<td>Nome</td>
		<td>Pre&ccedil;o</td>
	</thead>
	<tr> 
		<td class="cel_internas"><?php echo $result->nome ?></td>
		<td class="cel_internas"><?php echo number_format($result->preco, 2, ",", null) ?></td>
		<td class="cel_internas"><?php echo "<a href='index.php?acao=arearestrita&op=listar&f=rem&id=". $result->id."'>Remover</a>"; ?></td>
	</tr>
	<?php } ?>
</table>
