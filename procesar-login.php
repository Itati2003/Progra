<?php
// Datos de conexión a la base de datos
$host = 'localhost';  
$usuario = 'atenea';
$contraseña = '123';
$nombre_base_datos = 'baseDAt';

// Crear la conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $nombre_base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos enviados por el formulario (desde login.php)
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar la consulta SQL para evitar inyección SQL
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?");
$stmt->bind_param("ss", $email, $password);

// Ejecutar la consulta
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si el usuario existe en la base de datos
if ($resultado->num_rows > 0) {
    // Inicio de sesión exitoso
    echo "Inicio de sesión exitoso. Redirigiendo...";
    header("Location: dashboard.php");  // Redirige al usuario a otra página, puedes cambiar esto
    exit();
} else {
    // Credenciales incorrectas
    echo "Correo o contraseña incorrectos.";
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
