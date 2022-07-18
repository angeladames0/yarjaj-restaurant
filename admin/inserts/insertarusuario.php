<?php
include("../../includes/conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];
$email=$_POST['email'];



$sql="INSERT INTO LOGIN (USUARIO, NOMBRE, CONTRASENA, EMAIL) VALUES ('$usuario', '$nombre', '$contrasena','$email')";   
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../../listusuarios.php");
    
}else {
}
?>