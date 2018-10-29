<?php 
require_once('conexion.php');
$conexion=Conectar();

//insertar program

  $cod_prog = $_POST['cod_pro'];
  $nom_pro = $_POST['nom_pro'];
  $des_pro = $_POST['desc_pro'];
  $cost_pro = $_POST['costo_pro'];
  $num_cuenta = $_POST['num_cuen_pro'];
  $num_ses = $_POST['num_ses_pro'];
  $anio_ini = $_POST['anio_ini'];
  $anio_fin = $_POST['anio_fin'];
  $selec_depa = $_POST['selec_depa'];
  $ver = $_POST['version_pro'];
  $fecha_ini = $_POST['fecha_pro'];
  $localidad = $_POST['selec_loca'];
  $aporte = $_POST['aporte'];
  $habilitado = 1;
  

  $insertarDato = "INSERT INTO programa VALUES ('$cod_prog','$nom_pro', '$des_pro', '$ver', '$fecha_ini', '$anio_ini', '$anio_fin', '$selec_depa', '$localidad', '$cost_pro', '$num_ses', '$num_cuenta', '$habilitado', '$aporte')";
  echo "$insertarDato";
  mysqli_query($conexion, $insertarDato);

  echo "SE INSERTO LOS DATOS";
  header("Location:programa.php?=3");



?>
