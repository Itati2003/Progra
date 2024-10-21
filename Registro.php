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
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="nombre" name="nombre" placeholder="Nombre completo">

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" placeholder="Nombre completo">
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password" placeholder="Nombre completo">
            
            <button type="submit">Entrar</button>
        </form>
        <?php
        include("procesar_usuario.php");
        ?>
    </div>

</body>
</html>
