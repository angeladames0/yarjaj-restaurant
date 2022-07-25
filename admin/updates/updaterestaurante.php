<?php

include("../../includes/conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$de=$_POST['de'];
$hasta=$_POST['hasta'];
$direccion=$_POST['direccion'];
$informacion=$_POST['informacion'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$img=$_POST['img'];


$sql="UPDATE RESTAURANTES SET  NOMBRE='$nombre', DE='$de', HASTA='$hasta', DIRECCION='$direccion', INFORMACION='$informacion', LATITUD='$latitud', LONGITUD='$longitud', IMG='$img' WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../listrestaurantes.php");
    }
?>