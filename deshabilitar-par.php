<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$consulta1="UPDATE `usuario` SET `HABILITADO` = '0' WHERE `usuario`.`CI_USER` = $id";
	

	$query1=mysqli_query($conexion, $consulta1);
	
	
	Desconectar($conexion);
	header("Location:participantes.php?m=1");

?>
