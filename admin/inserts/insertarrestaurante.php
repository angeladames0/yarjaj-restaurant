<?php
include("../../includes/conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$de=$_POST['de'];
$hasta=$_POST['hasta'];
$direccion=$_POST['direccion'];
$informacion=$_POST['informacion'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];


$sql="INSERT INTO RESTAURANTES (NOMBRE, DE, HASTA, DIRECCION, INFORMACION, LATITUD, LONGITUD) VALUES ('$nombre', '$de', '$hasta','$direccion', '$informacion', '$latitud', '$longitud')";   
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../../listrestaurantes.php");
    
}else {
}
?>