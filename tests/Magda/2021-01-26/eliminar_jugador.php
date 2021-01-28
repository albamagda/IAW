<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "nba2";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM jugador WHERE id=".$_GET['id']."";
$resultado = $conn->query($sql);

if (!$resultado) {
  echo "No se ha borrado correctamente";
}

echo "Connected successfully";
mysqli_close($conn);

header("Location:listar_jugadores.php");

?>
