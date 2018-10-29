<?php 
require_once('conexion.php');
$conexion=Conectar();

//insertar modulo
	
	$cod_uni = $_POST['unidad'];
	$matricula = $_POST['matri'];

	$pri = $_POST['primer'];
	$seg = $_POST['segundo'];
	$fin = $_POST['final'];
	$rec = $_POST['recu'];

	$consulta = "select * from nota where COD_UNI = '$cod_uni' and MATRICULA = '$matricula'";
$query=mysqli_query($conexion, $consulta);
if (mysqli_num_rows($query) != 0 )
{
    echo "EL USUARIO SELECIONADO YA TIENE REGISTRO DE NOTAS EN EL MODULO SELECIONADO";
}
else 
{
	$insertarDato = "INSERT INTO nota VALUES (null, '$cod_uni', '$matricula', '$pri', '$seg', '$fin', '$rec')";
	mysqli_query($conexion, $insertarDato);
	echo "SE INSERTO LOS DATOS";
	header("Location:participante-nota.php?id=$cod_uni");

}

	
	

?>