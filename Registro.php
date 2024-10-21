<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="diseno.css">
</head>
<body>


    <!-- Formulario de REGISTRO-->
    <div class="login-container">
        <h1>Registrarse</h1>
        <form action="procesar_usuario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="nombre" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Entrar</button>
        </form>
        <?php
        include("procesar_usuario.php");
        ?>
    </div>

</body>
</html>