<?php
include 'Conexao.class.php';
include 'ProdutosDAO.class.php';
$banco = new Banco();
$p_dao = new ProdutosDAO();

$query = $p_dao->selectProd(null);

?>
<table >
	<?php while ($result = mysql_fetch_object($query)) { ?>
	<tr> 
		<td><?php echo "<img src='img/".$result->imagem."' />";?></td>
		<td><?php echo $result->nome ?></td>
		<td><?php echo $result->preco ?></td>

	</tr>
	<?php } ?>
</table>
