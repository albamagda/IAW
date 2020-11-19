<html>
    <head>
        <title>Práctica 6</title>
    </head>
    <body>
        <h1>DB World</h1>
        <ol>
            <?php 
                
                $servername = "localhost";
                $database = "world";
                $username = "test";
                $password = "test";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                //Funcion de la query 
                function results($limit, $conn){
                    $query="SELECT * FROM city LIMIT ". $limit;
                    $resultado = $conn->query($query);
                    return $resultado
                }

                //QueryResults(10,$conn)
                while( $row = results(10,$conn)->fetch_array() )
                {
                    echo "<li>". $row['Name'] . " pertenece al distrito " . $row['District']. "</li>";
                    echo "<br />";
                }
                 $resultado->close();
                echo "Connected successfully";
                mysqli_close($conn);
            ?>
        </ol>
    </body>
</html>