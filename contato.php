<?php
include "cabecalho.php";
?>
<div class="container">
<form name="usuario" method="post" action="gravarcontato.php">
<h1>Cadastre seu contato</h1>
<div class="form-group">
<label for="nome">Nome:</label>
<input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
</div>
<div class="form-group">
<label for="celular">Celular:</label>
<input type="text" class="form-control" id="celular" placeholder="Celular com whatsapp" name="celular">
</div>

<div class="form-group">
<label for="email">E-mail:</label>
<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
</div>

<div class="form-group">
<label for="senha">Senha:</label>
<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
</div>

<div class="form-group">
<label for="mensagem">Mensagem</label>
<input type="mensagem" class="form-control" id="mensagem" placeholder="mensagem" name="mensagem">
</div>
<input type="submit" name="cadastrar" class="btn btn-primary"value="Cadastrar"/>
<button type="reset" class="btn btn-danger">Limpar</button>

</form>
</div>
<?php
include_once("footer.php") ;
?>
