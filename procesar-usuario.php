<!-- archivo: procesar_registro.php -->
<?php
// Datos de conexión a la base de datos
$host = 'localhost';  // O la IP de tu servidor
$usuario = 'atenea';  // Usuario de MySQL
$password = '123';  // Contraseña de MySQL
$baseDeDatos = 'baseDAt';  // Nombre de la base de datos

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
