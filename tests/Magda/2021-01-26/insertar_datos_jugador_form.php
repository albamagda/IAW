<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
  session_start();
  $servername = "localhost";
  $database = "nba2";
  $username = "test";
  $password = "test";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM equipo ORDER by 'id asc'";
  $resultado = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    DATABASE MENU
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
    <h1>INSERTAR DATOS JUGADOR</h1>
    <form action="insertar_datos_jugador_form_action.php" method="post">
        Nombre: 
        <input type="text" name="nombre">
        <?php
            if(isset($_SESSION['error_insertar_jugador'])){
                echo "<p class='aviso'>".$_SESSION['error_insertar_jugador']."</p>";
            }
        ?>
        <br><br>
        ID Equipo:
         <input type="text" name="equipo_id" >
        <?php
            if(isset($_SESSION['error_insertar_equipo_id'])){
                echo "<p class='aviso'>".$_SESSION['error_insertar_equipo_id']."</p>";
            }
        ?>
        <br><br>
        <input type="submit" name="enviar" value="Guardar datos">

        <h1>Equipos</h1>
        <?php
          if ($resultado) {
              
              echo "<table>";
              while( $row = $resultado->fetch_array() )
              {
                echo "<tr>";
                  echo"<td>".$row['id']."</td>";
                  echo"<td>".$row['name']."</td>";
                echo "</tr>";
              }
              
              echo "</table>";
              /* liberar el conjunto de resultados */
              $resultado->close();
          }
          mysqli_close($conn);
        ?>
    </form>
  
</body>
</html>
