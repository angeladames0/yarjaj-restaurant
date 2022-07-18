<?php

include("../../includes/conexion.php");
$con=conectar();

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];
$email=$_POST['email'];


$sql="UPDATE LOGIN SET  USUARIO='$usuario', NOMBRE='$nombre', CONTRASENA='$contrasena', EMAIL='$email' WHERE USUARIO='$usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../listusuarios.php");
    }
?>