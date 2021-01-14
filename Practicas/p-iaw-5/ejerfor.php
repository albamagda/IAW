<html>
    <head>
        <title> Práctica 5 // FOR </title>
    </head>
    <body>
        <h1>Generador de email consecutivo</h1>
        <?php
            $email="alba.magrec@educa.jcyl.es";
            $email="alba.magrec@educa.jcyl.es";

            for($i = 0; $i < 10; $i++){
                echo str_replace("@", $i."@", $email)."<br>";
            }
        ?>
    </body>
</html>