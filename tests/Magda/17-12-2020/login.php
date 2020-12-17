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
  <title>Login</title>
</head>

<body>
  <h1>Login</h1>


  <?php

    if(isset($_SESSION['sesion'])){
        if(isset($_SESSION['type'])){
            echo "Has iniciado como ".$_SESSION['type']." <br><br>";
        }
        echo "<a href ='logout.php'>Logout</a>";
    }else{
    ?>
        <form action="procesarlogin.php" method="post">
            <p>
                <label>
                    Tipo de usuario
                </label>
                <select id="type" name="type">
                    <option value="profesor">Profesor</option>
                    <option value="alumno">Alumno</option>
                </select>
            </p>
            <p>
                <label>
                    Username
                </label>
                <input name="username" type="text" >
            </p>
            <p>
                <label>
                    Password
                </label>
                <input name="password" type="password" >
            </p>
            <p>
                <input name="enviar" type="submit" value="Login">
            </p>
            
        </form>
    <?php
    }
    ?>
</body>
</html>
