<?php 


$nom_rol = $_POST['nom_rol'];
$fec_ini = $_POST['fec_ini'];
$desc_rol = $_POST['desc_rol'];

require_once('conexion.php');
$conexion=Conectar();

$insertarDato= "INSERT INTO rol(`ID_ROL`, `NOM_ROL`, `FECHA_INI`, `DESC_ROL`) VALUES (NULL, '$nom_rol', '$fec_ini', '$desc_rol')";

mysql_query($insertarDato);
echo "se creo un nuevo Rol";



 ?>