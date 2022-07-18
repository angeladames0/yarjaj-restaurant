<?php

include("../../includes/conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM RESTAURANTES  WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../listrestaurantes.php");
    }
?>
