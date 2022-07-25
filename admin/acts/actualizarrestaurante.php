<?php 
session_start();

if(!isset($_SESSION["session_admin"])){
header("Location: index.php");
}

    include("../../includes/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM RESTAURANTES WHERE ID='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar RESTAURANTE - YARJAJ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <link rel="stylesheet" href="../../css/admin.css">

    </head>

                    <div class="container mlogin1">
                    <div class="row"> 
    <a href="../../listrestaurantes.php" class="btn btn-warning">REGRESAR</a>  
                </div>
                </div>
                    <body>
                <div class="container mt-5">
                                    <br><br>
                <h3>Editar RESTAURANTE</h3><hr>
                    <form action="../updates/updaterestaurante.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['ID']  ?>">
                                NOMBRE:
                                 <input type="text" class="form-control mb-3" name="nombre" placeholder="NOMBRE" value="<?php echo $row['NOMBRE']  ?>">
                                 DE:
                                <input type="text" class="form-control mb-3" name="de" placeholder="DE" value="<?php echo $row['DE']  ?>">
                                HASTA:  
                                 <input type="text" class="form-control mb-3" name="hasta" placeholder="HASTA" value="<?php echo $row['HASTA']  ?>">
                                 DIRECCION:
                                 <input type="text" class="form-control mb-3" name="direccion" placeholder="DIRECCION" value="<?php echo $row['DIRECCION']  ?>">
                                 INFORMACION:
                                 <input type="text" class="form-control mb-3" name="informacion" placeholder="INFORMACION" value="<?php echo $row['INFORMACION']  ?>">
                                 LATITUD:
                                 <input type="text" class="form-control mb-3" name="latitud" placeholder="LATITUD" value="<?php echo $row['LATITUD']  ?>">
                                 LONGITUD:
                                 <input type="text" class="form-control mb-3" name="longitud" placeholder="LONGITUD" value="<?php echo $row['LONGITUD']  ?>">
                                 IMG:
                                 <input type="text" class="form-control mb-3" name="img" placeholder="IMG" value="<?php echo $row['IMG']  ?>">
                                <hr>
                            <input type="submit" class="btn btn-warning btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>