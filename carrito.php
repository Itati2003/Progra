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
        <div class="producto">
            <ul>
                <?
                    if(isset($_SESSION['carrito'])){
                        $total=0;
                        for($i=0;$i<=count($carrito_user)-1;$i ++){
                            if($carrito_user[$i]!=NULL){
                            ?>
                            <li>
                                <div class="card-body">
                                     <h5 class="card-title">Cantidad: <?php echo $carrito_user[$i]['cantidad']?> : <? echo $carrito_user[$i]['producto']; ?></h5>
                                    <span class="text-muted"><? echo $carrito_user[$i]['precio'] * $carrito_user[$i]['cantidad']; ?></span>
                                </div>
                            </li>
                            <?
                            $total=$total + ($carrito_user[$i]['precio'] * $carrito_user[$i]['cantidad']);
                        }
                    }
                    }
                    ?>
                    <li>
                        <span> Total: (EUR)</span>
                        <strong><?php
                        if(isset($_SESSION['carrito'])){
                            $total=0;
                            for($i=0;$i<=count($carrito_user)-1;$i ++){
                                if($carrito_user[$i]!=NULL){
                                    $total=$total +($carrito_user[$i]['precio'] * $carrito_user[$i]['cantidad']);
                                }
                            }
                        }
                        echo $total; ?> $</strong>
                    </li>
            </ul>
        </div>
        <button>Realizar pago</button>
    </section>

</body>
</html>
