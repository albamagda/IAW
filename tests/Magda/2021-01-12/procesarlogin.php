<?php
/**
 * Escriba un programa que cada vez que se ejecute
 * muestre un círculo de 50px de radio y de un color elegido al azar.
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Procesar Login</title>
</head>

<body>
  <h1>Login</h1>


  <?php
    
    $usernameValid = "admin";
    $passwordValid = "123456";

    $usernameValid1 = "alba";
    $passwordValid1 = "1234567";
    $errores = [];


    if(isset($_POST['enviar'])){
        if($_POST['username'] == $usernameValid 
            && $_POST['password' == $passwordValid]){
           //LOGIN OK
        }else if($_POST['username'] == $usernameValid1 
            && $_POST['password']  == $passwordValid1){
            //LOGIN OK
        }else{
            $errores[] = "El usuario y la contraseña no coinciden";
        }
      
    }

    if(count($errores) == 0){
        // LOGIN OK
        $_SESSION['sesion'] = "iniciada";
        $_SESSION['user'] = $_POST['username'];
        header("Location: http://localhost/IAW/tests/Magda/2021-01-12/login.php");
        die();
    }else{
        //ERRORES TIENE VALORES, LUEGO EL LOGIN HA FALLADO
        echo "<ul>";
        foreach($errores as $error ){

            echo "<li>".$error."</li>";
            
        }
        echo "</ul>";
    }

    ?>
</body>
</html>
