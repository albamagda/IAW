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
    
    $username = "alba";
    $password = "123456";
    $errores = [];

    if(isset($_POST['enviar'])){
        if(isset($_POST['username']) && $_POST['username'] != $username){
            $errores[] = "Usuario erróneo o no encontrado";
        }
        if(isset($_POST['password']) && $_POST['password'] != $password){
            $errores[] = "Password errónea";
        }
    }
   

    if(count($errores) == 0){
        //LOGIN CORRECTO
        $_SESSION['sesion'] = $username;
        $_SESSION['type'] = $_POST['type'];

        echo "Hola ".$username."<br><br>";
        echo "<b>Sesion iniciada</b><br><br>";
        echo "<a href='login.php'>Retrocede</a>";
    }else{
        //FALLOS EN EL LOGIN
        echo "<ul>";
        foreach($errores as $error){
            echo "<li>".$error."</li>";
        }
        echo "</ul>";
        echo "<a href='login.php'> Vuelve a loggearte.</a>";
    }

    ?>
</body>
</html>
