<?php
session_start();
if(!isset($_SESSION["session_admin"])){
header("Location: index.php");
}
?>
<?php require_once("includes/conexion.php"); ?>
<?php
    $con=conectar();

$sql = "SELECT * FROM LOGIN";
$query=mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - YARJAJ</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <header>
        <a href="#" class="logo">YARJAJ</a>
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

    <?php if(isset($_SESSION['session_admin']))
    echo "<a href=\"admin.php\" class=\"btn2\">Admin</a>"; ?> 
    <?php if(isset($_SESSION['session_usuario']))
    echo "<a href=\"includes/desloguear.php\" class=\"btn2\">Cerrar Sesión</a>"; ?> 
    <?php if(!isset($_SESSION['session_usuario']))
    echo "<a href=\"login.php\" class=\"btn2\">Iniciar Sesion</a>"; ?> 
    

    </header>

    <section class="home" id="home">
        <div class="home-text">
            <hr>
            <h2>ADMINISTRADOR YARJAJ</h2>
            <a href="listusuarios.php" class="btn" target="_blank">Usuarios</a>
            <a href="listrestaurantes.php" class="btn" target="_blank">Restaurantes</a>
            <a href="listresenas.php" class="btn" target="_blank">Reseñas</a>
            <br>
            <br>
            <hr>
        </div>
    </section>


        <!-- Scroll Reveal -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- Link To JavaScript -->
        <script src="index.html"></script>
    </body>

    </html>



    <script src="js/index.js"></script>

    </body>

    </html>

    </html>
