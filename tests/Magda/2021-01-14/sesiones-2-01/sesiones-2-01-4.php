<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();

$_SESSION['errorapellidos'] = "";

if(isset($_POST['apellidos'])){
    if($_POST['apellidos'] == ""){
        $_SESSION['errorapellidos'] = "No has introducido ningún apellido";
    }
}   

if($_POST['apellidos']!= ""){
    //APELLIDO OK Y PASA A PAG5
    $_SESSION['apellidos'] = $_POST['apellidos'];
    header("Location:sesiones-2-01-5.php");
}else{
    //APELLIDO NOT OK Y PASA A PAG3
    header("Location:sesiones-2-01-3.php");
}
?>