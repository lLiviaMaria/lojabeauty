<?php
include ('cabecalho.php');
include ('conexao.php');
$idproduto = $_REQUEST['idproduto'];
$sql = "select * from produto where idproduto=$idproduto";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($resultado);
 ?>
<hr>
<div class="container">

   <div class="row">
    <div class="col-lg-4 col-md-12">
      <img  style="width:60%;height:14em;" src="fotosproduto/<?=$dados['imagem']; ?>" alt="imagem" class="w-75 h-75">
    </div>
    <div class="info col-lg-8 col-md-12">
       <div class="titulo">
       <h3><?= $dados['nome']; ?></h3>
      </div>

      <div class="genero">
        <b>Categoria:</b> <?=$dados['categoria'];?>
      </div>
      <div class="preco">
        <b>Preço: </b> R$  <?=$dados['preco']; ?>
      </div>
      <div class="compra">
      <div class="botao">
        <a class="btn btn-primary" href="carrinho.php?acao=add&idproduto=<?php echo $dados['idproduto']?>" >Comprar</a>
      </div>
      </div>
  </div>
</div>
</div>
<hr>
<?php
include_once("footer.php") ;
?>



