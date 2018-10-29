<?php
session_start();
require_once('conexion.php');
$conexion = Conectar();

$app_paterno = $_POST['ape_pat_doc'];
	$app_materno = $_POST['ape_mat_doc'];
	$nombre = $_POST['pri_nom_doc'];
	$fecha = $_POST['nac_doc'];
	$edad = $_POST['edad_doc'];
	$ci = $_POST['ci_doc'];
	$lugar = $_POST['dep_doc'];
	$direccion = $_POST['dir_doc'];
	$genero = $_POST['sexo_doc'];
	$habilitado = 1;
	$cod_sis = $_POST['cod_sis_doc'];
	$seg_nom = $_POST['seg_nom_doc'];
	$tipo = 3;
	$nacion = $_POST['nacionalidad'];

	$fono_emergencia = ['num_emergencia_doc'];
	$dicta = ['unidad_dicta_doc'];
	
	$celular = $_POST['celu_doc'];
	$telefono = $_POST['fijo_doc'];
	$mail = $_POST['mail_doc'];
	
	$grado_acad = $_POST['grado_doc'];
	$profesion = $_POST['profe_doc'];
	$lugar_trab = $_POST['lugar_trab_doc'];
	$cargo = $_POST['cargo_doc'];
	$antiguedad = $_POST['ant_doc'];
	$telf_ofi = $_POST['fono_ofi_doc'];

$consulta = "select * from usuario where CI_USER = '$ci' ";
$query=mysqli_query($conexion, $consulta);

if (mysqli_num_rows($query) != 0) 
	{
    echo "EL USUARIO YA SE ENCUENTRA REGISTRADO DENTRO DEL SISTEMA";
}
else 
{
	


	$insertarDato = "INSERT INTO usuario VALUES ('$ci','$nombre','$app_paterno','$app_materno','$genero','$habilitado', '$fecha', '$edad', '$lugar', '$cod_sis', '$direccion', '$seg_nom', '$tipo', '$nacion')";
	
	$insertarDato1 = "INSERT INTO mail VALUES (null, '$ci','$mail')";
	
	$insertarDato2 = "INSERT INTO telefono VALUES (null,'$ci','$telefono', 1)";

	$insertarDato3 = "INSERT INTO telefono VALUES (null,'$ci','$celular', 2)";

	$insertarDato4 = "INSERT INTO datos_profesionales VALUES (null, '$ci', '$grado_acad', '$profesion', '$lugar_trab', '$cargo', '$antiguedad', '$telf_ofi', null)";	

	

	$insertarDato6 = "INSERT INTO telefono VALUES (null,'$ci','$fono_emergencia', 3)";

	$insertarDato7 = "INSERT INTO user_rol VALUES (null, 10, '$ci')";
		
		mysqli_query($conexion, $insertarDato);
		mysqli_query($conexion, $insertarDato1);
		mysqli_query($conexion, $insertarDato2);
		mysqli_query($conexion, $insertarDato3);
		mysqli_query($conexion, $insertarDato4);
		
		mysqli_query($conexion, $insertarDato6);
		mysqli_query($conexion, $insertarDato7);

		header("Location:plantel_docente.php?m=1");
		exit;

}	
?>