<?php
	require_once('conexion.php');
	$conexion=Conectar();

	$id=$_POST['unidad'];
	$ids=$_POST['matri'];
	$as=$_POST['asiste'];

$consulta = "select * from asistencia where COD_UNI = '$id' and MATRICULA = '$ids'";
$query=mysqli_query($conexion, $consulta);
if (mysqli_num_rows($query) != 0 )
{
    echo "EL USUARIO SELECIONADO YA TIENE ASISTENCIA EN EL MODULO SELECIONADO";
}
else 
{
	$consulta1="INSERT INTO `asistencia` VALUES (NULL, '$id', '$ids', '$as')";

	

$query1=mysqli_query($conexion, $consulta1);
Desconectar($conexion);
	header("Location:participantes-asistentes.php?id=$id");
}
	

	
	
?>
