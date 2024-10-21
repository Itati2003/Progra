<?php session_start();
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}
$carrito_user = $_SESSION['carrito'];

if (isset($_POST['producto'])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $encontrado = false;

    // Verificar si el producto ya está en el carrito
    for ($i = 0; $i < count($carrito_user); $i++) {
        if ($carrito_user[$i]['Producto'] == $producto) {
            $carrito_user[$i]['cantidad'] += $cantidad;
            $encontrado = true;
            break;
        }
    }

    // Si el producto no está en el carrito, agregarlo
    if (!$encontrado) {
        $carrito_user[] = array("Producto" => $producto, "precio" => $precio, "cantidad" => $cantidad);
    }
}

$_SESSION['carrito'] = $carrito_user;
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
