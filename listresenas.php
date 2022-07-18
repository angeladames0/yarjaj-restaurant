<?php 
session_start();
if ((isset($_SESSION['session_username']) && $_SESSION['session_username'] != '')) {

        header ("Location: login.php");
}

    include("includes/conexion.php");
    
    $con=conectar();

    $sql="SELECT *  FROM RESENAS";
    $query=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrador de Reseñas - YARJAJ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
            <link rel="stylesheet" href="css/admin.css">

        
    </head>
    <body>
            <div class="container">
                    <div class="row"> 
                        <a href="admin.php" class="btn btn-warning">ADMINISTRADOR</a>
                        <div class="col-xs-15" >
                            <br><br>
                            <h1>Administrador de reseñas</h1><hr>
                             <table id="tabla-info" class="table table-striped">
                                <thead>
                                        <th>USUARIO</th>
                                        <th>COMENTARIO</th>
                                        <th>CALIFICACION</th>
                                        <th></th>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['USUARIO']?></td> 
                                                <td><?php  echo $row['COMENTARIO']?></td> 
                                                <td><?php  echo $row['CALIFICACION']?>★</td>  
                                                <th><a href="admin/deletes/borrarresena.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>