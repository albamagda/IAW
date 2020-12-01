<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="formulario.php" method="POST" enctype="multipart/form-data">
            Introduzca el 1er número: <input type='number' name='input_a'><br><br>
            Introduzca el 2o número: <input type='number' name='input_b'><br><br>
                <?php 
                    $errores=false;
                    if(isset($_POST["suma"]) || isset($_POST["resta"]) || isset($_POST["multi"]) || isset($_POST["divi"]) ){
                        if($_POST["input_a"] == ""){
                            echo "Tienes que dar un primer valor <br>";
                            $errores=true;
                        }
                        if($_POST["input_b"] == ""){
                            echo "Tienes que dar un segundo valor <br>";
                            $errores=true;
                        }
                    }
                ?>
            <input type='submit' name="suma" value='Sumar'>
            <input type='submit' name="resta" value='Restar'>
            <input type='submit' name="multi" value='Multiplicar'>
            <input type='submit' name="divi" value='Dividir'>
            <br><br>
            <?php 
                if(isset($_POST["suma"]) && $errores==false){
                    $suma=($_POST["input_a"] + $_POST["input_b"]);
                    echo "El resultado de la suma es: ".$_POST["input_a"]." + ".$_POST["input_b"]." es igual a ".$suma;
                }
                if(isset($_POST["resta"]) && $errores==false){
                    $resta=($_POST["input_a"] - $_POST["input_b"]);
                    echo "El resultado de la resta es: ".$_POST["input_a"]." - ".$_POST["input_b"]." es igual a ".$resta;
                }
                if(isset($_POST["multi"]) && $errores==false){
                    $multi=($_POST["input_a"] * $_POST["input_b"]);
                    echo "El resultado de la multiplicación es: ".$_POST["input_a"]." * ".$_POST["input_b"]." es igual a ".$multi;
                }
                if(isset($_POST["divi"]) && $errores==false){
                    $divi=($_POST["input_a"] / $_POST["input_b"]);
                    echo "El resultado de la división es: ".$_POST["input_a"]." / ".$_POST["input_b"]." es igual a ".$divi;
                }
            ?>
        </form>
    </body>
</html>