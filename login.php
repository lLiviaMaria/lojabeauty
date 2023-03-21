
<?php include 'cabecalho.php' ?>
<div class="container">
  <h2>Realize o login para finalizar a compra</h2>
  <form action="admc/fazlogin.php" method="post" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="senha" name="senha">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Me lembrar</label>
    </div>
   <button type="submit" class="btn btn-default">Enviar</button>
    
  </form>
  <br>
  <a href="cadcliente.php"> <button  class="btn btn-default">Criar Conta</button> </a>
</div>

</body>
</html>
<?php
include_once("footer.php") ;
?>
