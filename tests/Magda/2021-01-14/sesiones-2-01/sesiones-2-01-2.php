<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
$_SESSION['errornombre'] = "";

if(isset($_POST['nombre'])){
    if($_POST['nombre'] == ""){
        $_SESSION['errornombre'] = "No has introducido ningún nombre";
    }
}


if($_POST['nombre']!= ""){
    //NOMBRE OK Y PASA A PAG3
    $_SESSION['nombre'] = $_POST['nombre'];
    header("Location:sesiones-2-01-3.php");
}else{
    //NOMBRE NOT OK Y PASA A PAG1
    header("Location:sesiones-2-01-1.php");
}
?>