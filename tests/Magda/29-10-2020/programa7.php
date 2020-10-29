<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $valor = rand(1,3);
    echo "El numero aleatorio es $valor <br>";
    if ($valor > 2) {
        echo "Tres";
    } elseif ($valor < 2) {
        echo "Uno";
    } else {
        echo "Dos";
    }
  ?>
</body>

</html>
