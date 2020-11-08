<html>
    <head>
        <title> Ejercicio2 </title>
    </head>
    <body>
        <form>
            <p>Inserte un valor: <input type="text" name="num"> </p>
        </form>

        <?php
            print "<p> El número es $_REQUEST[num]</p>";
            $numero=$_REQUEST['num'];

            for ($i=1; $i<=10; $i++) {
                echo $numero ."*". $i ."=". $numero*$i ."<br>" ;
            }
        ?>
    </body>
</html>


    