<?php
$servername = "localhost";
$username = "atenea";
$password = "123";
$database = "baseDAt";

//Crear conexion

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("conexion fallida: ". $conn->connect_error);
}
echo "Conexion exitosa";
?>
