<!-- archivo: procesar_registro.php -->
<?php
$servername = "localhost";
$username = "atenea";
$password = "123";
$database = "baseDAt";

// Crear la conexión
$conn = new mysqli($host, $usuario, $password, $baseDeDatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Encriptar la contraseña

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";

// Preparar el statement
$stmt = $conn->prepare($sql);

// Vincular los parámetros
$stmt->bind_param("sss", $nombre, $email, $password);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
