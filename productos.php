<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="diseno.css">
</head>
<body>
    <header>
        <h1>Mi Tienda</h1>
        <nav>
            <ul>
                <li><a href="pagina_de_inicio.html">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Catálogo de Productos</h1>
        <?php
        // Conexión a la base de datos
        $conn = new mysqli('localhost', 'usuario', 'contraseña', 'tienda');

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta para obtener los productos
        $sql = "SELECT id, nombre, precio, imagen FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los productos
            while($row = $result->fetch_assoc()) {
                echo '<div class="producto">';
                echo '<form method="post" action="agre_carrito.php">';
                echo '<input name="precio" type="hidden" value="' . $row["precio"] . '" />';
                echo '<input name="producto" type="hidden" value="' . $row["nombre"] . '" />';
                echo '<input name="cantidad" type="hidden" value="1" />';
                echo '<img src="' . $row["imagen"] . '" alt="' . $row["nombre"] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["nombre"] . '</h5>';
                echo '<p class="card-text">Precio $' . $row["precio"] . '</p>';
                echo '<button type="submit">Añadir al Carrito</button>';
                echo '</div>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo "No hay productos disponibles.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </section>
</body>
</html>
