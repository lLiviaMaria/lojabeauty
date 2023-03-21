<?php session_start(); 
include('verifica-sessao.php');
?>
<?php 

require "admin.php"; 
include('conexao.php');?>
<div class="col-md-10">
	<div class="row">
	<div class="col-md-12">
	<div class="content-box-large">
	<div class="panel-heading">
	<div class="panel-title">
	<h1>Dados do Cliente</h1>
<?php 
$idcliente= $_SESSION['cliente'];
$senha = $_SESSION['clientesenha'];
$sql = "select * from cliente where idcliente=$idcliente and senha='$senha'";
$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);
 ?>
	</div>
	<div class="panel-options">
		<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
	</div>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table table-strip">
	<thead>
		<tr>
				<th width="8">ID</th>
				<th width="80">NOME</th>
				<th width="10">CPF</th>			
				<th width="14">Celular</th>
				<th width="100">E-mail</th>
				<th width="12">Senha</th>
</tr>	</thead>	<tbody>
		<?php		while ( $dados = mysqli_fetch_array($resultado) ) {
		?>
		<tr>
		<?php echo '<td>';?>  <?php echo $dados['idcliente']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $dados['nome']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $dados['cpf']; ?>
		<?php echo '</td>';?>
<?php echo '<td>';?>  <?php echo $dados['celular']; ?> 
<?php echo '</td>';?>
<?php echo '<td>';?> <?php echo $dados['email']; ?>
<?php echo '</td>';?>
<?php echo '<td>';?> <?php echo $dados['senha']; ?>
<?php echo '</td>';?>

</tbody>
<tr>
<td>
<a href="alterarcliente.php?cliente=<? = $dados['idcliente']; ?>" class="btn btn-danger">Alterar</a></td>
<td>


</td>
</tr>
<?php
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
	</div>
    </div>
	</section>			
 </section>
  <?php require "footer.php" ?> 
