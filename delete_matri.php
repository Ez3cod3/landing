<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$progra=$_REQUEST['pro'];
	$consulta="delete from matricula where CI_USER ='$id' and COD_PROGRA = '$progra'";
	$query=mysqli_query($conexion, $consulta);
	Desconectar($conexion);
	header("Location:matricular.php?m=8");
?>