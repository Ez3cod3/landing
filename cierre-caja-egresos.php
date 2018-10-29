<?php
	require_once('conexion.php');
	$conexion=Conectar();
	$id = $_POST['fecha_cierre'];
	$fecha_actual = date("Y-m-d");
	session_start(); 
	$yes = $_SESSION['log'];
	$cod = $_SESSION['cod'];
	$ids = $_SESSION['usr'];
	
	$consulta1="SELECT SUM(MONTO_EG_NUM) FROM recibo_egreso WHERE FEC_EG = '$id' and CAJERO = '$cod'";
	$query1=mysqli_query($conexion, $consulta1);
	$dato = mysqli_fetch_assoc($query1);
	
	$a = $dato['SUM(MONTO_EG_NUM)'];
	$consulta2 = "INSERT INTO cierre_caja VALUES (NULL, '$a', '$cod', '$id', 1)";
	$query2=mysqli_query($conexion, $consulta2);
	Desconectar($conexion);
	header("Location:registros-egresos.php?m=7")
	

?>
