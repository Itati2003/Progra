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
                <li><a href="productos.html">Productos</a></li>
                <li><a href="carrito.html">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Catálogo de Productos</h1>
        <div class="producto">
            <form id="formulario" name="formulario" method="post" action="carrito.php">
            <input name="precio" type="hidden" id="precio" value="50" />
            <input name="producto" type="hidden" id="producto" value="Producto1" />
            <img src="Producto1.jpeg" alt="Producto1">
                <div class="card-body">
                    <h5 class="card-title"> Producto 1</h5>
                    <p class="card-text">Precio $50</p>
                    <button type="submit">Añadir al Carrito</button>
                </div>
            </form>
        </div>
        <div class="producto">
            <<form id="formulario" name="formulario" method="post" action="carrito.php">
            <input name="precio" type="hidden" id="precio" value="900" />
            <input name="producto" type="hidden" id="producto" value="Producto2" />
            <img src="Producto2.jpeg" alt="Producto2">
                <div class="card-body">
                    <h5 class="card-title"> Producto 2</h5>
                    <p class="card-text">Precio $900</p>
                    <button type="submit">Añadir al Carrito</button>
                </div>
            </form>
        </div>
        <div class="producto">
            <<form id="formulario" name="formulario" method="post" action="carrito.php">
            <input name="precio" type="hidden" id="precio" value="1230" />
            <input name="producto" type="hidden" id="producto" value="Producto2" />
            <img src="Producto3.jpeg" alt="Producto3">
                <div class="card-body">
                    <h5 class="card-title"> Producto 2</h5>
                    <p class="card-text">Precio $1230</p>
                    <button type="submit">Añadir al Carrito</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
