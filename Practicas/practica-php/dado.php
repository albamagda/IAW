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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>
  
  <br>
<?php
    $aleatorio = rand (1,6);
    echo "<img src='img/".$aleatorio.".svg'>";


?>
    <table border='2'>
        <tr>
            <td width="60px"><center>1</center></td>
            <td width="60px"><center>2</center></td>
            <td width="60px"><center>3</center></td>
            <td width="60px"><center>4</center></td>
            <td width="60px"><center>5</center></td>
            <td width="60px"><center>6</center></td>
        </tr>
    </table>
    <br>
    <?php
        $margen =  (60 * $aleatorio - 50)+ $aleatorio*5;
         echo "<b  style='height:50px;
         width:50px;
         background-color:red;
         display:inline-block;
         border-radius:25px;
         margin-left:".$margen."px;'>
       </b>";   
    ?>
    
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>