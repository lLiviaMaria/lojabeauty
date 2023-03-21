<?php session_start(); ?>
<?php
   if(!isset($_SESSION['cliente']));  
   if(!isset($_SESSION['clientenome']));  
   if(!isset($_SESSION['carrinho']));  
?>
<?php require "admin.php" ?>
<div class="col-md-10">
		  	<div class="row">
		<div class="col-md-12">
		<div class="content-box-large">
		 <div class="panel-heading">
		<div class="panel-title">
		<h1>Listagem de Produtos</h1>
		<?php echo $_SESSION['clientenome']; ?>, seus  pedidos:
	</div>
	<div class="panel-options">
		<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
		</div>
		</div>
		<div class="panel-body">
<table class="table table-strip">
		<thead>
			<tr>
				<th width="244">NOME</th>
				<th width="244">CATEGORIA</th>
				<th width="244">PREÇO</th>
				<th width="244">SUBTOTAL</th>
				<th width="244">REMOVER</th>
			</tr>
		</thead>
		<tbody>
	<?php
	if(count($_SESSION['carrinho']) == 0){
	echo('<tr><td colspan="5">Nenhum produto no carrinho</td></tr>');
	}else{
	include('conexao.php');
	$total = 0;
	foreach($_SESSION['carrinho'] as $codproduto => $qtd){
	$sql     = "SELECT * FROM produto WHERE idproduto = '$idproduto'";
	$executa = mysqli_query($conexao, $sql) or die (mysqli_error());
	$in      = mysqli_fetch_assoc($executa);
	$nome    = $in ['nome'];
	$preco   = number_format ($in ['preco'], 2,',','.');
	$sub     = number_format ($in ['preco'] * $qtd, 2,',','.');
	$total   += $in['preco'] * $qtd;
	$codcliente = $_SESSION['cliente'];
	$sql22 = "insert into pedido values (null,'".$idcliente."', '".$idproduto."','".$qtd."','".$sub."', '".$total."')";
	$gravar = mysqli_query($conexao, $sql22);	
	$_SESSION['carrinho'] = array();
	
	
	
	echo '<tr>
   <td>'.$nome.'</td>
    <td><input type="text" size="3" name="prod['.$idproduto.']" value="'.$qtd.'" ></td>
    <td>R$ '.$preco.'</td>
    <td>R$'.$sub.'</td>
  <td><a href="?acao=del&idproduto='.$idproduto.'" class="btn btn-danger">Remover</td> 							  
  </tr>' ;
					
					
						$total = number_format($total, 2, ',', '.');
                echo 	'<tr>                         
                            <td colspan="4">Total</td>
                            <td>R$ '.$total.'</td>
                    	</tr>';
				}
			}
			?>
 </table>

	
 
 
		  				</div>
		  			</div>
  				</div>
  			</div> 

		  			</div>
		  		</div>		  		
		  	</div> 	
		  </div>
		</div>
    </div>
	</section>			
 </section>
  <?php require "footer.php" ?> 
	 
	 
	 
	
