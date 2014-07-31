<?php
include 'Carrinho.class.php';
include 'ProdutosDAO.class.php';

$p_dao = new ProdutosDAO();
$car = new Carrinho();

// Iniciamos a sessão
$car->iniciar();
	
	/*
		Removendo produto do carrinho
	*/

	if(isset($_GET['op']) && $_GET['op'] == 'del'){
		$car->remProduto($_GET['id']);
	}

	/*
		Atualizando quantidade de produtos
	*/

	if(isset($_GET['op']) && $_GET['op'] == 'up'){
		if(is_array($_POST['produto'])){
			foreach ($_POST['produto'] as $key => $value) {
				if(!empty($value) || $value != 0)
					$car->upProduto($key, $value);
				else
					$car->remProduto($key);
			}
		}
	}


?>
<table>
    <thead>
          <tr>
            <th width="244">Produto</th>
            <th width="89">Pre&ccedil;o</th>
            <th width="79">Quantidade</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
          </tr>
    </thead>
    <form action="?acao=meucarrinho&op=up" method="post">
	    <tbody>
           <?php
                 if(count($_SESSION['carrinho']) == 0){
                    echo '<tr><td colspan="5">N&atilde;o h&aacute; produtos no carrinho!!!</td></tr>';
                 }else{
                    $total = 0;
                    foreach($_SESSION['carrinho'] as $id => $qtd){
                    	$query = $p_dao->selectProd("id =".$id);
						$result    = mysql_fetch_object($query);
                          
                        $nome = $result->nome;
                        $preco = number_format($result->preco, 2, ',', '.');
                        $subTotal = number_format($result->preco * $qtd, 2, ',', '.');
                           
                        $total += $result->preco * $qtd;
                        
                       echo '<tr>       
                             <td>'.$nome.'</td>
                             <td>R$ '.$preco.'</td>
                            <td><input type="text" size="3" name="produto['.$id.']" value="'.$qtd.'" /></td>
                             <td>R$ '.$subTotal.'</td>
                             <td><a href="?acao=meucarrinho&op=del&id='.$id.'">Remover</a></td>
                          </tr>';
                    }
                       $total = number_format($total, 2, ',', '.');
                       echo '<tr>
                                <td colspan="4">Total</td>
                                <td>R$ '.$total.'</td>
                          </tr>';
                 }
           ?>	    
	    </tbody>

	    <tfoot>
           <tr>
            <td colspan="1"><input type="submit" value="Atualizar" /></td>
            <tr>
            <td colspan="1"><a href="index.php">Continuar Comprando</a></td>
	    </tfoot>
	      
    </form>
</table>