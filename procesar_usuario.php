<?php
include ("conexion.php");
if($conn){
    echo "Conexion exitosa";
#error_reporting(E_ALL);
#ini_set('display_errors' ,1);
if(isse($_POST[''])){
     echo "Conexion exitosa";
 #   $nombre=$_POST['nombre'];
  #  $email=$_POST['email'];
 #   $password=$_POST['password'];
  #  $sql="INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre','$email','$password');
    #if($conn->quey($sql)===TRUE){
  #      echo "Registro exitoso";
  #  } else {
  #      echo "Error: ". $sql ."<br>". $conn->error; 
 #   }
 #   $conn->close();
}
}
?>
