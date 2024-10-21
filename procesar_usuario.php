<?php
include ("conexion.php");
if($conn){
    echo "Conexion exitosa";
     echo "<br>";
    error_reporting(E_ALL);
    ini_set('display_errors' ,1);
if(isset($_POST['registrar'])){
    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password'])){
      $nombre=$_POST['nombre'];
      $email=$_POST['email'];
      $password=$_POST['password'];
     $sql="INSERT INTO usuarios(nombre, email, password) VALUES ('$nombre','$email','$password')";
    if($conn->query($sql)===TRUE){
           echo "Registro exitoso";
    } else {
        echo "Error: ". $sql ."<br>". $conn->error; 
       }
    }
}
    $conn->close();

}
?>
