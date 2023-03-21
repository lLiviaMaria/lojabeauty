<?php 
include "conexao.php";

$nome   =$_POST['nome'];
$celular=$_POST['celular'];
$email  =$_POST['email'];
$mensagem =$_POST['mensagem'];

$sql="insert into contato values(null,'".$nome."','".$celular."','".$email."','".$mensagem."')";
$consulta=mysqli_query($con,$sql);
if($sql){
	echo "<script type=\"text/javascript\">
	alert(\"Contato Cadastrado com Sucesso.\");
	</script>";
	
}else{
	echo "<script type=\"text/javascript\">
	alert(\"Contato não cadastrado.\");
	</script>";
	
}
?>
<?php
include_once("footer.php") ;
?>

