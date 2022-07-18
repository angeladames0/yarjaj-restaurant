<?php

include("../../includes/conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM RESENAS  WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../listresenas.php");
    }
?>
