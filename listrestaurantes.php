<?php 
session_start();

if(!isset($_SESSION["session_admin"])){
header("Location: index.php");
}


if ((isset($_SESSION['session_username']) && $_SESSION['session_username'] != '')) {

        header ("Location: login.php");
}

    include("includes/conexion.php");
    
    $con=conectar();

    $sql="SELECT *  FROM RESTAURANTES";
    $query=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrador de Restaurantes - YARJAJ</title>
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
                            <h1>Administrador de restaurantes</h1>
                             <table id="tabla-info" class="table table-striped">
                                <thead>
                                <form action="admin/inserts/insertarrestaurante.php" method="POST">
                                    <tr>
                                    <th>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="NOMBRE">
                                    </th>
                                    <th>
                                    <input type="text" class="form-control" name="de" id="de" placeholder="DE" value="00:00:00">
                                    </th>
                                    <th>
                                    <input type="text" class="form-control" name="hasta" id="hasta" placeholder="HASTA" value="00:00:00">
                                    </th>
                                    <th>
                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="DIRECCION">
                                    </th>
                                    <th>
                                    <input type="text" class="form-control" name="informacion" id="informacion" placeholder="INFORMACION">
                                     <th>
                                    <input type="text" class="form-control" name="latitud" id="latitud" placeholder="LATITUD">
                                    </th>
                                    <th>
                                    <input type="text" class="form-control" name="longitud" id="longitud" placeholder="LONGITUD">
                                    </th>
                                    <th>
                                    <th><input type="submit" class="btn btn-warning">
                                    <tr>
                                    </form>
                                        <th>NOMBRE</th>
                                        <th>DE</th>
                                        <th>HASTA</th>
                                        <th>DIRECCION</th>
                                        <th>INFORMACION</th>
                                        <th>LATITUD</th>
                                        <th>LONGITUD</th>
                                        <th></th>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['NOMBRE']?></td> 
                                                <td><?php  echo $row['DE']?></td> 
                                                <td><?php  echo $row['HASTA']?></td> 
                                                <td><?php  echo $row['DIRECCION']?></td>   
                                                <td><?php  echo $row['INFORMACION']?></td>   
                                                <td><?php  echo $row['LATITUD']?></td>  
                                                <td><?php  echo $row['LONGITUD']?></td>   
                                                <th><a href="admin/acts/actualizarrestaurante.php?id=<?php echo $row['ID'] ?>" class="btn btn-success">Editar</a></th>
                                                <th><a href="admin/deletes/borrarrestaurante.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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