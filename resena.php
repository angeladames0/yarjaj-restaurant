<?php
session_start();
?>


<?php
    include("includes/conexion.php");
    $con=conectar();

$usuario=$_SESSION["session_usuario"];

$sql="SELECT * FROM LOGIN WHERE USUARIO='$usuario'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseña - Restaurante YARJAJ</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>
        <a href="#" class="logo">Restaurante Yarjaj</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="restaurantes.php">Restaurantes</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <?php if(isset($_SESSION['session_usuario']))
    echo "<li><a href=\"sugerencia.php\">Sugerencia</a></li>"; ?> 
    <?php if(isset($_SESSION['session_usuario']))
    echo "<li><a href=\"resena.php\">Reseña</a></li>"; ?> 
            <div class="bx bx-moon" id="darkmode"></div>

        </ul>

    <?php if(isset($_SESSION['session_usuario']))
    echo "<a href=\"admin.php\" class=\"btn2\">Admin</a>"; ?> 
    <?php if(isset($_SESSION['session_usuario']))
    echo "<a href=\"includes/desloguear.php\" class=\"btn2\">Cerrar Sesión</a>"; ?> 
    <?php if(!isset($_SESSION['session_usuario']))
    echo "<a href=\"login.php\" class=\"btn2\">Iniciar Sesion</a>"; ?> 
    

    </header>


        <form method="POST" action="./php/enviarcomentario.php">
            <section id="contact">
                <div class="container1 px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <br>
                                <br>
    
                                <div class="col-xs-12">
                                    <h3>¡Haz una Reseña!</h3>

                                    <br>
                                <div class="form-group">
                                    <label for="usuario" class="form-label">USUARIO</label>
                                    <input class="form-control" name="usuario" type="text" value="<?php echo $row['USUARIO']?>" id="usuario" readonly>
                                    </div>
                            
                                    
                            <br>
                                    <div class="form-group">
                                    <label for="comentario" class="form-label">Comentario:</label>
                                    <textarea class="form-control" name="comentario" cols="30" rows="5" type="text" id="comentario" 
                                    placeholder="Escribe tu comentario......"></textarea>
                                    </div>
                            <br>

                                <p class="clasificacion">
                                  <input id="calificacion5" type="radio" name="calificacion" value="5">
                                  <label for="calificacion5">★</label>
                                  <input id="calificacion4" type="radio" name="calificacion" value="4">
                                  <label for="calificacion4">★</label>
                                  <input id="calificacion3" type="radio" name="calificacion" value="3">
                                  <label for="calificacion3">★</label>
                                  <input id="calificacion2" type="radio" name="calificacion" value="2">
                                  <label for="calificacion2">★</label>
                                  <input id="calificacion1" type="radio" name="calificacion" value="1">
                                  <label for="calificacion1">★</label>
                                </p>

                            <input class="btn btn-primary" type="submit"  value="Enviar Comentario">
                            <br>
                            <br>
                            <br>


                                    <?php
$resultado= mysqli_query($con, 'SELECT * FROM RESENAS');

while($comentario = mysqli_fetch_object($resultado)){

    ?>

    <b><?php echo($comentario->USUARIO);  ?></b> - Califico <?php echo($comentario->CALIFICACION);  ?>★ y comento: 
    <br/>
    <?php echo ($comentario->COMENTARIO);?>
    <br/>
    <br/>




    <?php
}

                                    ?>
                            
                                </form>
                          
                </div>
                
            </section>

     

<script src="js/index.js"></script>
    </body>
</html>
