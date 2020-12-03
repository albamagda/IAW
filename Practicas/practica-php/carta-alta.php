<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10,
 * al azar, e indique el valor más alto.
 *
 * El valor más alto se puede obtener con la función max().
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
    La carta más alta.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>
  
  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>
    <?php
      $num1 = rand(1,10);
      $num2 = rand(1,10);
      $num3 = rand(1,10);

      $imgsrc1 = "img/c".$num1.".svg";
      $imgsrc2 = "img/c".$num2.".svg";
      $imgsrc3 = "img/c".$num3.".svg";
      
      
        echo  "<img  src=".$imgsrc1.">";
        echo  "<img  src=".$imgsrc2.">";
        echo  "<img  src=".$imgsrc3."> <br>";
    ?>
    <?php
      $carta_alta=$num1;
    
      if($num2 > $carta_alta){
        $carta_alta=$num2;
      }
      if ($num3 > $carta_alta){
        $carta_alta=$num3;
      }
      
      $imgsrcalta = "img/c".$carta_alta.".svg";
      echo "La carta más alta es <img  src=".$imgsrcalta.">";
      
    ?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
