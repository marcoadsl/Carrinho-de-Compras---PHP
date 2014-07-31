<?php
include 'ProdutosDAO.class.php';
include 'Carrinho.class.php';
$banco = new Banco();
$p_dao = new ProdutosDAO();
$car = new Carrinho();


$query = $p_dao->selectProd(null);
?>
<table >
	<?php while ($result = mysql_fetch_object($query)) { ?>
	<thead>
		<!-- <td></td> -->
		<td>Nome</td>
		<td>Pre&ccedil;o</td>
	</thead>
	<tr> 
		<td class="cel_internas"><?php echo $result->nome ?></td>
		<td class="cel_internas"><?php echo number_format($result->preco, 2, ",", null) ?></td>
		<td class="cel_internas"><a href="">Remover</a></td>
	</tr>
	<?php } ?>
</table>
