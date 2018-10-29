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
            $consulta = "UPDATE usuario SET HABILITADO_US='$c' WHERE COD_SIS_US = '$a'";
            $query=mysqli_query($conexion, $consulta);
            $counta++;
        }
        header("Location:lis_usuarios.php?m=3");    
    }
//HABILITAR USUARIO CON SU ROL
//
    if(isset($_REQUEST['habilitar_usuario_rol']))
    {
        $num= $_POST["count"];// $res['numer'];
        echo $num."<br>";
        $counta=0;
        while($counta < $num){
            $a=  $_POST["a".$counta]; //ide usus
            echo "esto es a ".$a;
            $c=0; //habilitado ?
            if($_POST["c".$counta]){
                $c=1;
            }
            $consulta = "UPDATE id_rol_usuario SET US_HABILITADO='$c' WHERE COD_SIS_US = '$a'";
            $query=mysqli_query($conexion, $consulta);
            $counta++;
        }
        header("Location:lis_user.php?m=3");    
    }

//INSERTAR ROL
    if(isset($_REQUEST['insert-rol']))
    {
        // Recuperando variables rol -----------------
        $newRol = $_POST['rol'];
        $newDesRol = $_POST['desc-rol'];
        $consulta1="INSERT INTO rol VALUES (null,'$newRol','$newDesRol')";
        
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:list-rol.php?m=4");     
    }
//FIN INSERTAR ROL
if(isset($_REQUEST['asig-fun'])){
    $rol= $_POST["rol"];
    $fun=$_POST["funcion"];
        $consulta = "INSERT INTO rol_funcion VALUES(NULL, '$rol', '$fun');";
        $query=mysqli_query($conexion, $consulta);
        $counta++;
    header("Location:asignar-fun.php?m=6");
}
if(isset($_REQUEST['asignar-rol']))
    {
        // Recuperando variables Asignacion Rol Funcion -----------------
        $newRol = $_POST['rol'];
        $newUser = $_POST['user'];
        $consulta1="INSERT INTO user_rol VALUES (NULL,'$newRol','$newUser');";
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:asignar-rol.php?m=5");       
    }

if(isset($_REQUEST['inert-rol']))
    {
        // Recuperando variables Asignacion Rol Funcion -----------------
        $newRol1 = $_POST['rol'];
        $newFunc1 = $_POST['desc-rol'];
        $consulta1="INSERT INTO rol_funcion VALUES (NULL, '$newRol1', '$newFunc1 ');";
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:asig_rol_func.php?m=3");       
    }

if(isset($_REQUEST['insert_func'])){
        // Recuperando variables Funcion -----------------
        $newFunc = $_POST['funcion'];
        $newDesFunc = $_POST['desc_func'];
        $consulta1="INSERT INTO funcion VALUES (NULL, '".$newFunc."', '".$newDesFunc."')";
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:listado-funciones.php?m=0");        
    }

if(isset($_REQUEST['insert-form']))
    {
        // Recuperando variables Formulario-----------------
        $newForm = $_POST['formulario'];
        $newUrl = $_POST['url-form'];
        $newDes = $_POST['desc-form'];
        $consulta2="INSERT INTO formulario VALUES (default,'".$newForm."','".$newUrl."','".$newDes."')";
        $query1=mysqli_query($conexion, $consulta2);
        header("Location:listado-formularios.php?m=3");        
    }

if(isset($_REQUEST['asig_form']))
    {
        // Recuperando variables rol -----------------
        $newFun = $_POST['fun'];
        $newForm = $_POST['form'];
        $consulta1="INSERT INTO form_formulario VALUES (null,'$newFun','$newForm')";
        
        $query1=mysqli_query($conexion, $consulta1);
        header("Location:listado-form-fun.php?m=3");     
    }

?>