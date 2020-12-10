<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre una tirada de dados entre 1 y 6,
 * al azar, y coloque la ficha en la posición correspondiente.
 *
 * La posición de la ficha cx depende del valor obtenido en el dado:
 * La posición se puede calcular a partir del valor del dado mediante la fórmula: $posicion = 100 * $dado - 50
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
    Avance de ficha.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <style>
  table, tr, td {
    border: 1px solid black;
    border-collapse: collapse;
    height: 75px;
    width: 500px;
    text-align: center;
  }
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

    <?php
    $num=rand(1,6);
    $imgsrc= "img/".$num.".svg";

      echo "<img src=".$imgsrc.">";
    ?>
  <table> 
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
    </tr>
    <tr>
    <?php
     $color= ["transparent",
        "transparent",
        "transparent",
        "transparent",
        "transparent",
        "transparent",
      ];
      $color[($num - 1)]="red";
      for ($i=0; $i<6; $i++ ){
          echo"<td>
            <b  style='height:50px;
            width:50px;
            background-color:".$color[$i].";
            display:inline-block;
            border-radius:25px;'>
          </td>";
      }
    ?>
    </tr>
  </table>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
