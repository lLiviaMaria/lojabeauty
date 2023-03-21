<?php
include_once 'cabecalho.php';
  include_once 'conexao.php';
  $sql = 'Select * from produto where categoria = "maquiagem"';
  $stmt = mysqli_query($con, $sql);
  if(mysqli_num_rows($stmt) > 0) {
    while($row = mysqli_fetch_array($stmt)){    
?>
   <div class="container">
    <div class="row">
    <div class="col-sm-3 w3-panel w3-card w3-center">
    <h3> <?php echo $row['nome'] ?><br></h3>
    <img src="fotosproduto/<?php echo $row['imagem'] ?>" 
    style="width:80%;height:13em;"> </br>
    <h4>
   
    <h4><?php echo 'preço: R$ '  .$row['preco'] ?><br><br>
    <input type="hidden" id="postId" name="postId" value="<?= $row['idproduto']; ?>">
			<p><a href="destaquep.php?idproduto=<?= $row['idproduto']; ?>" class="btn btn-primary" role="button">
             Compra</a> </p>

    </div>  
 <?php
   }
  }
  ?> 
  </div>
  <br>
  </div>
  <?php
include_once("footer.php") ;
?>
