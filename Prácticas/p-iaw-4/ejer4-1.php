<html>
    <head>
        <title> Ejercicio 4_1 </title>
    </head>
    <body>
       <?php 
            $a="4";
            $b="9";
            function getGratherValue($a,$b){
                if($a > $b){
                    echo $a." es mayor que ".$b;
                }else{
                    echo $b." es mayor que ".$a;
                }
            }
            getGratherValue($a,$b);
       ?> 
    </body>
</html>