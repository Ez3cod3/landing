<?php
session_start();
require_once('conexion.php');
$conexion = Conectar();


if (isset($_REQUEST["insert_agui"])) {
	$ciuser = $_POST['ci_p'];
	$tipo_documento = $_POST['tipo_doc'];
	$num_documento = $_POST['num_doc'];
	$ext_documento = $_POST['ext_doc'];
	$afp_aporta = $_POST['afp'];
	
	$promedio_basico = $_POST['haber_basico'];
	$bono_antiguedad = $_POST['bono_ant'];
	$bono_produccion = $_POST['bono_prod'];
	$subsidio_frontera = $_POST['bono_front'];
	$bono_trasnoche = $_POST['bono_noche'];
	$bono_dominical = $_POST['bono_dom'];
	$otros_bonos = $_POST['bono_otros'];
	$total_gana = $_POST['bono_total'];
	$meses_trabajo = $_POST['meses'];
	$duodecimas = $_POST['duo'];
	$ubicacion = $_POST['sucursal'];
	$firma = NULL;
	$nuacua = $_POST['nua'];
	$jubilacion = $_POST['jubilado'];
	$clasificacion_lab =$_POST['clas_labo'];
	$cargo_actual = $_POST['cargo'];
	$fecha_ingreso = $_POST['fec_ingreso'];
	$fecha_retiro = $_POST['fec_retiro'];
	$mod_contrato = $_POST['contrato'];

	$insertarDato = "INSERT INTO aguinaldo VALUES (null, '$ciuser', '$tipo_documento', '$num_documento', '$ext_documento', '$afp_aporta', '$nuacua', '$jubilacion', '$clasificacion_lab', '$fecha_ingreso', '$mod_contrato', '$fecha_retiro', '$promedio_basico', '$bono_antiguedad', '$bono_produccion', '$subsidio_frontera', '$bono_trasnoche', '$bono_dominical', '$otros_bonos', '$total_gana', '$meses_trabajo', '$duodecimas', '$ubicacion', '$firma' )";
	
	
		mysqli_query($conexion, $insertarDato);
		
		header("Location:plantilla-aguinaldo.php?m=1");
		exit;
}else{
	echo "Datos incorrectos";
	exit;
}	
?>