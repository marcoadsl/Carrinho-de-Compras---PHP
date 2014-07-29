<?php
include 'Conexao.class.php';
include 'ProdutosDAO.class.php';
$banco = new Banco();
$p_dao = new ProdutosDAO();

$query = $p_dao->selectProd(null);

?>
<table border=1>
	<?php while ($result = mysql_fetch_object($query)) { ?>
	<tr> 
		<td><?php echo $result->nome ?></td>
		<td><?php echo $result->preco ?></td>
		<td> <?php echo $result->imagem ?></td>
	</tr>
	<?php } ?>
</table>
