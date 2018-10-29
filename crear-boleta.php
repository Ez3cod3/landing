<?php
session_start();
require_once('conexion.php');
$conexion = Conectar();



	$nit = $_POST['nit'];
	$patronal = $_POST['patronal'];
	$periodo = $_POST['periodo'];
	$nombre = $_POST['nombre'];
	$seguro = $_POST['seguro'];
	$fecha_in = $_POST['fecha-ingreso'];
	$basico = $_POST['haber_basico'];
	$dias_pago = $_POST['dias_pago_mes'];
	$horas_dia = $_POST['horas_dias_pago'];
	$horas_ex_num = $_POST['horas_extra_num'];
	$horas_ex_pago = $_POST['horas_extra_pago'];
	$bono_antiguedad = $_POST['bono_ant'];
	$bono_otro = $_POST['otros_bono'];
	$total_gana = $_POST['total_ganado'];
	$afps = $_POST['afp'];
	$ivas = $_POST['iva']; 
	$otros_des = $_POST['des_otro'];
	$anticipo = $_POST['anticipos'];
	$total_des = $_POST['des_total'];
	$liq_pago = $_POST['pagable'];
	$fec_pago = $_POST['fecha_pago'];
	$direc = $_POST['director'];

	$totalganado= $basico + $horas_extra_pago + $bono_antiguedad + $bono_otro;
	$afps =$totalganado/12.71;
	$totaldescuento = $afps + $otros_des + $anticipo;
	$liquidopagable = $totalganado - $totaldescuento;

	$insertarDato = "INSERT INTO boleta_pago VALUES (null, '$nombre', '$nit', '$patronal', '$periodo', '$seguro', '$fecha_in', '$basico', '$dias_pago', '$horas_dia', '$horas_ex_num', '$horas_ex_pago', '$bono_antiguedad', '$bono_otro', '$totalganado', '$afps', '$ivas', '$otros_des', '$anticipo', '$totaldescuento', '$liquidopagable', '$fec_pago', '$direc') ";
	
	
		
		mysqli_query($conexion, $insertarDato);

		$consulta = "select * from boleta_pago order by ID_PAGO desc limit 1  ";
		$query = mysqli_query($conexion, $consulta);

		$dato = mysqli_fetch_array($query);
		$a = $dato["ID_PAGO"];
		$b - $dato1['NOM_PAGO'];

	
		header("Location:imprimir-boleta.php?m=$a");
		exit;
	