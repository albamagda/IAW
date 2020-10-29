<html>
    <head></head>
    <body>
        <?php
        $num = rand(1,100);
        if ($num <= 50) {
            echo "El valor $num es menor o igual a 50";
        } else {
            echo "El valor $num es mayor de 50";
        }
        ?>
    </body>
</html>
