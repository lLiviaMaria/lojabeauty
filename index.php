<?php
include_once("cabecalho.php") ;
?>
<html>
<body>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/beauty1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/beauty4.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/beauty3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</html>
<?php
 include('conexao.php');  
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    $sql = "SELECT * from produto";
    $resultado = mysqli_query($con, $sql);
        /* barra de página */
    $total_produto = mysqli_num_rows($resultado);
    $quantidade_pg = 6;
    $num_pagina = ceil($total_produto/$quantidade_pg);
    $inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
    $sqls = "SELECT * FROM produto limit $inicio, $quantidade_pg";   
    $resultados = mysqli_query($con, $sqls);    
    $total_produto = mysqli_num_rows($resultados);
?>
		
<div class="container" style="width:80%;">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <br>
            <h1>Produtos em Destaque</h1>
        </div>
        <div class="col-sm-6 col-md-6">
		<br><br>
		<form class="form-inline" method="GET" action="pesquisar.php">
		<div class="form-group">
		<label for="exampleInputName2"></label>
		<input type="text" name="pesquisar" class="form-control" id="exampleInputName2" placeholder="Digitar...">
				</div>
		<button type="submit" class="btn btn-primary">Pesquisar</button>
						</form>
					</div>
           <hr>
        </div><br><br>
    <div class="row">
        <?php while ( $dados = mysqli_fetch_assoc($resultados) ) { ?>
        <div class="col-sm-3">
        <div class="thumbnail">
			<img src="fotosproduto/<?= $dados['imagem']; ?> "style="height:150px;width:60%;"> <h3><?php echo $dados['nome']; ?>  </h3>
			<p><?php echo $dados['nome']; ?></p>
			<p><?php echo "R$ ";
			echo $dados['preco']; ?> </p>
			<input type="hidden" id="postId" name="postId" value="<?= $dados['idproduto']; ?>">
			<p><a href="destaquep.php?idproduto=<?= $dados['idproduto']; ?>" class="btn btn-primary" role="button">
             Compra</a> </p>

                    </div>
              </div>

    <?php } ?>    
</div>
        <?php
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
        ?>
        <nav class="nav">
         <div class="row-fluid">
          <ul class="pagination justify-content-center">
            <li class="page-item">
                <?php
				if($pagina_anterior != 0){ ?>
              <a class="page-link" href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                <span aria-hidden="true">«</span>
                  </a>
                <?php }else{ ?>
                <span class="sr-only">Previous</span>
              <?php }  ?>
            </li>
              	<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
              <?php
if($pagina_posterior <= $num_pagina){ ?>
              <li class="page-item">  
              <a class="page-link" href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
                <span aria-hidden="true">»</span>
                    </a>
                  <?php }else{ ?>
                <span class="sr-only">Next</span>
              <?php }  ?>
            </li>
          </ul>
          </div>
        </nav>
    </div>
    <hr>



<?php
include_once("footer.php") ;
?>
