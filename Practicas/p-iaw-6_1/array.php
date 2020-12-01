

<html>
    <head>
        <title>Provincias</title>
    </head>
    <body>
        <h1> Provincias de Castilla y León. </h1>
        <ol>
            <?php 
                $provincias=["León", 
                    "Palencia",
                    "Burgos", 
                    "Valladolid", 
                    "Zamora", 
                    "Soria", 
                    "Salamanca", 
                    "Segovia", 
                    "Ávila"
                ];

                for($i=0; $i < count($provincias) ; $i++) {
                    echo "<li>".$provincias[$i]."</li>";
                }

                foreach ($provincias as $key => $value) {
                    echo"<li>".$value."</li>";
                }
            ?>
        </ol>
    </body>
</html>
