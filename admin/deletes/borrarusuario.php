<?php

include("../../includes/conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM LOGIN WHERE USUARIO='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../listusuarios.php");
    }
?>
