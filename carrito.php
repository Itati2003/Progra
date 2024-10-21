<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="diseno.css">
</head>
<body>
    <?php
        if (isset($_SESSION['carrito'])) {
            $carrito_user = $_SESSION['carrito'];
            $total_cantidad = 0;
            for ($i = 0; $i <= count($carrito_user) - 1; $i++) {
                if ($carrito_user[$i] != NULL) {
                    $total_cantidad += $carrito_user[$i]['cantidad'];
                }
            }
        }
    ?>
    <header>
        <h1>Mi Tienda</h1>
        <nav>
            <ul>
                <li><a href="pagina_de_inicio.html">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="mision.php">Misión</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Carrito de Compras</h1>
       <div class="producto">
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (isset($_SESSION['carrito'])) {
                    $total = 0;
                    foreach ($carrito_user as $item) {
                        if ($item != NULL) {
            ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['Producto']); ?></td>
                            <td><?php echo htmlspecialchars($item['cantidad']); ?></td>
                            <td><?php echo htmlspecialchars($item['precio']); ?>$</td>
                            <td><?php echo htmlspecialchars($item['precio'] * $item['cantidad']); ?>$</td>
                            <td><button>Eliminar</button></td>
                        </tr>
            <?php
                            $total += $item['precio'] * $item['cantidad'];
                        }
                    }
            ?>
                    <tr>
                        <td colspan="3"><strong>Total:</strong></td>
                        <td colspan="2"><strong><?php echo htmlspecialchars($total); ?>$</strong></td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
        <button>Realizar pago</button>
    </section>

</body>
</html>
