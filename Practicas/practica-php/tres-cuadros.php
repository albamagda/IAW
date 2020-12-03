<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tres cuadrados.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tres cuadrados</h1>

  <p>Actualice la página para mostrar tres nuevos cuadrados.</p> 

  
  
  <?php
 $color=["red", "blue", "yellow", "green", "black", "pink", "purple", "brown", "powderblue"];

  for ($i= 0; $i<3 ; $i++){
    $side = rand(50,150);
    $num = rand(0,8);
    
    echo "<div style='width:".$side."px;height:".$side."px;background-color:".$color[$num].";display:inline-block;'></div>";
   
  }
  
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
