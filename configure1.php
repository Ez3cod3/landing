<?php 


require_once('conexion.php');
$conexion=Conectar();


    if(isset($_REQUEST['cambiar']))
    {
        $num= $_POST["count"];// $res['numer'];
        $counta=0;
        while($counta < $num){
            $a=  $_POST["a".$counta]; //ide usus
            $c=0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE materia SET HABILITADO='$c' WHERE COD_MAT = '$a'";
            $query=mysqli_query($conexion,  , $conxecion, $consulta);
            $counta++;
        }
        header("Location:listar_materias.php?m=3");    
    }

?>