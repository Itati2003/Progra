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
        $carrito_user=$_SESSION['carrito'];
        $_SESSION['carrito']=$carrito_user;
        if(isset($_SESSION['carrito'])){
            for($i=0;$i<=count($carrito_user)-1;$i ++){
                if($carrito_user[$i]!=NULL){
                    $total_cantidad = $carrito_user['cantidad']
                    $total_cantidad ++;
                    $total_cantidad += $total_cantidad;
                }
            }
        }
    ?>
    <header>
        <h1>Mi Tienda</h1>
        <nav>
            <ul>
                <li><a href="pagina_de_inicio.html">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="mision.html">Misión</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Carrito de Compras</h1>
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
                <tr>
                    <td>Producto 1</td>
                    <td>2</td>
                    <td>20$</td>
                    <td>40$</td>
                    <td><button>Eliminar</button></td>
                </tr>
                <!-- Repetir para otros productos en el carrito -->
            </tbody>
        </table>
        <button>Realizar pago</button>
    </section>

</body>
</html>
