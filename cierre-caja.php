<?php
	require_once('conexion.php');
	$conexion=Conectar();
	$id = $_REQUEST['id'];
	$fecha_actual = date("Y-m-d");

	$id=$_REQUEST['id'];
	$consulta1="SELECT SUM(MONTO_EG_NUM) FROM recibo_egreso WHERE FEC_EG = '$fecha_actual'";
	$query1=mysqli_query($consulta1);
	$dato = mysqli_fetch_assoc($query1);
	
	$a = $dato['SUM(MONTO_EG_NUM)'];
	$consulta2 = "INSERT INTO cierre_caja VALUES (NULL, '$a', '$id', '$fecha_actual')";
	$query2=mysqli_query($consulta2);
	Desconectar($conexion);
	header("Location:registros-egresos.php?m=7")
	

?>
