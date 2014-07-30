<?php
include 'Conexao.class.php';
include 'ProdutosDAO.class.php';
$banco = new Banco();
$p_dao = new ProdutosDAO();

$query = $p_dao->selectProd(null);
	if(mysql_num_rows($query) == 0){
		echo "N&atilde;o h&aacute; produtos cadastrados no estoque!!!";
	}
	else{
?>
<table >
	<?php while ($result = mysql_fetch_object($query)) { ?>
	<tr> 
		<td><?php echo "<img src='img/".$result->imagem."' />";?></td>
		<td><?php echo $result->nome ?></td>
		<td><?php echo $result->preco ?></td>
		<td><?php echo "<a href='MeuCarrinho.php?acao=add&id=".$result->id."'>Comprar</a>"?></td>

	</tr>
	<?php } ?>
</table>
<?php
	}
?>
