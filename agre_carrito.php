<?php session_start();
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}
$carrito_user = $_SESSION['carrito'];

if (isset($_SESSION['carrito'])) {
    $carrito_user = $_SESSION['carrito'];
    if (isset($_POST['producto'])) {
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $carrito_user[] = array("Producto" => $producto, "precio" => $precio, "cantidad" => $cantidad);
    }
} else {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $carrito_user[] = array("Producto" => $producto, "precio" => $precio, "cantidad" => $cantidad);
}
$_SESSION['carrito'] = $carrito_user;
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
