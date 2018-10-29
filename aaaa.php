<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_REQUEST['id'];
	$sdate=date("Y")."-".date("m")."-".date("d");

	$consulta="SELECT SUM(MONTO_EG_NUM) AS MONTO_EG_NUM  WHERE 	"



	$consulta1="INSERT INTO cierre_caja VALUES(NULL, )";
	

	$query1=mysqli_query($conexion,  , $conxecion, $consulta1);
	$query1=mysqli_query($conexion,  , $conxecion, $consulta2);
	$query1=mysqli_query($conexion,  , $conxecion, $consulta3);
	Desconectar($conexion);
	header("Location:plantel-docente.php?m=1");

?>
