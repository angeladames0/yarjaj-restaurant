<?php  
include("../includes/conexion.php");
$con=conectar();

// Llamando a los campos
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$comentario= $_POST['comentario'];
$calificacion= $_POST['calificacion'];

$sql='INSERT INTO RESENAS (IDR, USUARIO, NOMBRE, COMENTARIO, CALIFICACION) VALUES ("'.$id.'", "'.$usuario.'", "'.$nombre.'" , "'.$comentario.'", "'.$calificacion.'")';


$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../page.php?id=$id");
    
}else {
}
?>