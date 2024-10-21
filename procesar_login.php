<?php
include ("conexion.php");
if($conn){
    echo "Conexion exitosa";
     echo "<br>";
  error_reporting(E_ALL);
    ini_set('display_errors' ,1);
    if(isset($_POST['session'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if($result && $result->num_rows > 0);{
            $user=$result->fetch_assoc();
            $_SESSION['nombre']=$user['nombre'];
            header("Location: productos.html");
        }else{
        echo "Correo o contraseña incorrectos";
        }
    }
    $conn->close();
}
?>
