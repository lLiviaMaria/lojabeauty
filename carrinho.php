<?php
	session_start();
	 if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    } 
	if(isset($_GET['acao'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['acao'] == 'add'){ 
            $idproduto = intval($_GET['idproduto']); 
            if(!isset($_SESSION['carrinho'][$idproduto])){ 
                $_SESSION['carrinho'][$idproduto] = 1; 
            } else { 
                $_SESSION['carrinho'][$idproduto] += 1; 
            } 
		}
		//REMOVER
		 if($_GET['acao'] == 'del'){ 
            $idproduto = intval($_GET['idproduto']); 
            if(isset($_SESSION['carrinho'][$idproduto])){ 
                unset($_SESSION['carrinho'][$idproduto]); 
            } 
		 }
		//ALTERAR QUANTIDADE
		if($_GET['acao'] == 'up'){ 
            if(is_array($_POST['prod'])){ 
                foreach($_POST['prod'] as $idproduto => $qtd){
                        $idproduto  = intval($idproduto);
                        $qtd = intval($qtd);
                        if(!empty($qtd) || $qtd <> 0){
                            $_SESSION['carrinho'][$idproduto] = $qtd;
                        }else{
                            unset($_SESSION['carrinho'][$idproduto]);
						}
					}
            	}
        	}	
		  if($_GET['acao'] == 'finalizar'){ 
            $idproduto = intval($_GET['idproduto']); 
            if(!isset($_SESSION['carrinho'][$idproduto])){ 
                $_SESSION['carrinho'][$idproduto] = 1; 
            } else { 
                $_SESSION['carrinho'][$idproduto] += 1; 
            } 
		}
		  if($_GET['acao'] == 'pedidos'){ 
            $idproduto = intval($_GET['idproduto']); 
            if(!isset($_SESSION['carrinho'][$idproduto])){ 
                $_SESSION['carrinho'][$idproduto] = 1; 
            } else { 
                $_SESSION['carrinho'][$idproduto] += 1; 
            } 
		}
		}
?>
    <?php
        include ('cabecalho.php');
        ?>
<br>
 <div class="container-fluid">   
<div class="container">
    	<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Carrinho</h4>
	    		<a href="comprar.php">Lista de Produtos</a>
	    	</div>
		</div>
	<div class="table-responsive"><!---incluido a tabela responsiva 05.04 w3c bootstrap-->
	<table class="table table-strip">
		<thead>
			<tr>
				<th width="244">Nome </th>
				<th width="244">QUANTIDADE</th>
				<th width="244">PREÇO</th>
				<th width="244">SUBTOTAL</th>
				<th width="244">REMOVER</th>
			</tr>
		</thead>
			<form action="?acao=up" method="post">
	
		<tbody>
			<?php
				if(count($_SESSION['carrinho']) == 0){
					echo('<tr><td colspan="5">Nenhum produto no carrinho</td></tr>');
					
				}else{
					include('conexao.php');
					$total = 0;
					foreach($_SESSION['carrinho'] as $idproduto => $qtd){
						
						$sql     = "SELECT * FROM produto WHERE idproduto = '$idproduto'";
						$executa = mysqli_query($con, $sql) or die (mysqli_error());
						$in      = mysqli_fetch_assoc($executa);
						$nome   = $in ['nome'];
						$preco   = number_format ($in ['preco'], 2,',','.');
						$sub     = number_format ($in ['preco'] * $qtd, 2,',','.');
						$total   += $in['preco'] * $qtd;
						echo '<tr>
								<td>'.$nome.'</td>
								<td><input type="text" size="3" name="prod['.$idproduto.']" value="'.$qtd.'" ></td>
								<td>R$ '.$preco.'</td>
								<td>R$'.$sub.'</td>
								<td><a href="?acao=del&idproduto='.$idproduto.'" class="btn btn-danger">Remover</td>
							  </tr>' ;
					}
						$total = number_format($total, 2, ',', '.');
                echo 	'<tr>                         
                            <td colspan="4">Total</td>
                            <td>R$ '.$total.'</td>
                    	</tr>';
				}
			
			?>
		          <td ><input class="btn btn-primary"  type="submit" value="Atualizar Carrinho"/></td>
				<td ><a class="btn btn-info" href='index.php'>Continuar comprando</a></td>
				<td>  
			<a href="login.php" class="btn btn-primary"  value="finalizar">Finalizar Compra</a></td>	
		</tbody>
			</form>
	</table>
</div>
</div>
</div>
</body>
</html>
<?php
include_once("footer.php") ;
?>
