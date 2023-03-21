<?php
 include 'cabecalho.php';
 include 'conexao.php';
 if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
	


    // Insere os dados no banco
  $sql = "insert into cliente values (null,'".$nome."','".$cpf."','".$celular."','".$email."','".$senha."')";
  $consulta = mysqli_query($con, $sql);
  // Se os dados forem inseridos com sucesso
  if ($sql){
        echo "
  <script type=\"text/javascript\">
        alert(\"Cadastrado com Sucesso.\");
      </script>
    ";
    }
  }
  
  

?>

<div class="col-md-10">
		  	<div class="row">
		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">
				  <h1>Cadastro Cliente</h1>
			</div>
		  <div class="panel-body">    
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" name="cadastro" >
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div>
	<div class="form-group">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf">
    </div> 
    <div class="form-group">
    <label for="celular">Celular:</label>
<input type="text" class="form-control" id="celular" placeholder="Celular" name="celular"></div>
<div class="form-group">
<label for="email">E-mail:</label>
<input type="email" class="form-control" id="email" placeholder="E-mail" name="email"></div>
<div class="form-group">
<label for="senha">Senha:</label>
<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"></div>
<div class="form-group">

<input type="submit" name="cadastrar" class="btn btn-primary"value="Cadastrar"/>
<button type="reset" class="btn btn-danger">Limpar</button>

</form>

<script src="js/cep.js" type="text/javascript"></script>
</div>
		  		</div>		  		
		  	</div> 	
		  </div>
		</div>
    </div>
	



</body>
</html>
<?php
include_once("footer.php") ;
?>
