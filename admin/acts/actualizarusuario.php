<?php 
    include("../../includes/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM LOGIN WHERE USUARIO='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar USUARIO - YARJAJ</title>
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
                <h3>Editar USUARIO</h3><hr>
                    <form action="../updates/updateusuario.php" method="POST">
                                 USUARIO:
                                 <input type="text" class="form-control mb-3" name="usuario" placeholder="USUARIO" value="<?php echo $row['USUARIO']  ?>" readonly>
                                 NOMBRE:
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="NOMBRE" value="<?php echo $row['NOMBRE']  ?>">
                                CONTRASEÑA:
                                 <input type="text" class="form-control mb-3" name="contrasena" placeholder="CONTRASEÑA" value="<?php echo $row['CONTRASENA']  ?>">
                                 EMAIL:
                                 <input type="text" class="form-control mb-3" name="email" placeholder="EMAIL" value="<?php echo $row['EMAIL']  ?>">
                                <hr>
                            <input type="submit" class="btn btn-warning btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>