<?php
session_start();
require_once('conexion.php');
$conexion = Conectar();


if (isset($_REQUEST["insert_sueldo"])) {
	$ciuser = $_POST['ci_ad'];
	$f_in = $_POST['fec_in'];
	$dias_p = $_POST['dias_pago'];
	$horas_p = $_POST['horas_pago'];
	$basi = $_POST['basico'];
	$pago_t = $_POST['monto_pago'];
	$seg = $_POST['seguro'];
	$horas_ext = $_POST['horas_extra'];

	
	

	$insertarDato = "INSERT INTO sueldo VALUES (null, '$ciuser', '$f_in', '$dias_p', '$horas_p', '$basi', '$pago_t', '$seg', '$horas_ext')";
	
	
		mysqli_query($conexion, $insertarDato);
		
		header("Location:planilla-sueldos.php?m=4");
		exit;
}else{
	echo "Datos incorrectos";
	exit;
}	
?>