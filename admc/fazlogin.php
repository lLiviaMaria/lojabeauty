<?php
session_start();

include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select * from cliente where email='$email' and senha='$senha'";

$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$row = mysqli_fetch_array($resultado);
	$_SESSION['cliente']   = $row['idcliente'];
	$_SESSION['clientenome']  = $row['nome'];
	$_SESSION['clientecpf']  = $row['cpf'];
	$_SESSION['clientecelular']  = $row['celular'];
	$_SESSION['clienteemail'] = $row['email'];
	$_SESSION['clientesenha'] = $row['senha'];
	header("location:index.php");
	     
}else {
	echo "<script>
	        alert('Cliente não encontrado');
	        location.href='../login.php';
	      </script>";
}

?>