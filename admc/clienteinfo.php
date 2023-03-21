<?php session_start(); ?>
<?php
   if(!isset($_SESSION['cliente']));  
   if(!isset($_SESSION['clientenome'])); 
   if(!isset($_SESSION['clientecpf']));   
   if(!isset($_SESSION['clientecelular']));
   if(!isset($_SESSION['clienteemail']));
   if(!isset($_SESSION['clientesenha']));
?>
<?php require "admin.php"; 
include('conexao.php');?>
<div class="col-md-10">
	<div class="row">
	<div class="col-md-12">
	<div class="content-box-large">
	<div class="panel-heading">
	<div class="panel-title">
	<h1>Dados do Cliente</h1>
		Seu código de Cliente é  <?php echo $_SESSION['cliente']; ?>
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
				<th width="100">NOME</th>
				<th width="10">CPF</th>
				<th width="14">Celular</th>
				<th width="100">E-mail</th>
				<th width="12">Senha</th>
			</tr>
		</thead>
		<tbody>
		<?php echo '<td>';?>  <?php echo $_SESSION['clientenome']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $_SESSION['clientecpf']; ?>
		<?php echo '</td>';?>
<?php echo '<td>';?>  <?php echo $_SESSION['clientecelular']; ?> 
<?php echo '</td>';?>
<?php echo '<td>';?> <?php echo $_SESSION['clienteemail']; ?>
<?php echo '</td>';?>
<?php echo '<td>';?> <?php echo $_SESSION['clientesenha']; ?>
<?php echo '</td>';?>
	</tbody>
<tr>			 
</tr>
 </table></div> 
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