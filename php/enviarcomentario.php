<?php  
include("../includes/conexion.php");
$con=conectar();

// Llamando a los campos
$usuario = $_POST['usuario'];
$comentario= $_POST['comentario'];
$calificacion= $_POST['calificacion'];

$sql='INSERT INTO RESENAS (USUARIO, COMENTARIO, CALIFICACION) VALUES ("'.$usuario.'", "'.$comentario.'", "'.$calificacion.'")';


$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../resena.php");
    
}else {
}
?>