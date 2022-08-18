<?php
session_start();

require 'includes/conexion.php';

$con = conectar();
$sql = "SELECT ID,NOMBRE,DE,HASTA,DIRECCION,INFORMACION,IMG FROM RESTAURANTES";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturantes - YARJAJ</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">


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
            <div class="bx bx-moon" id="darkmode"></div>

        </ul>

    <?php if(isset($_SESSION['session_admin']))
    echo "<a href=\"admin.php\" class=\"btn2\">Admin</a>"; ?> 
    <?php if(isset($_SESSION['session_usuario']))
    echo "<a href=\"includes/desloguear.php\" class=\"btn2\">Cerrar Sesión</a>"; ?> 
    <?php if(!isset($_SESSION['session_usuario']))
    echo "<a href=\"login.php\" class=\"btn2\">Iniciar Sesion</a>"; ?> 
    

    </header>



<section>

<br>
<h1>Mira nuestros mejores lugares</h1>
<div>
    <div class="content-scroll" style="height:700px; overflow: scroll;">
        
    <?php foreach ($result as $row) { ?>
                <?php 
                $id = $row['ID'];

                ?>

                    <div id="container-tarject">    
                        <div class="product-details">

                        <h1><?php echo $row['NOMBRE']; ?></h1>
                        
                            <p class="information"><?php echo $row['INFORMACION']; ?></p>

                            
                    <div class="control">
                        <button class="btn-tarject">
                       <a href="page.php?id=<?php echo $id?>"  target="_blank">Ver</a>
                     </button> 
                    </div>          
                    </div>
                        

                    <div class="product-image">
                        <img src="<?php echo $row['IMG']; ?>">
                    <div class="info">
                        <h2>Mas informacion</h2>
                        <ul>
                            <li><strong>Direccion: </strong><?php echo $row['DIRECCION']; ?></li>
                            <li><strong>Horario: </strong><?php echo $row['DE']; ?> - <?php echo $row['HASTA']; ?></li>
                            <h2>YARJAJ.tk</h2>
                        </ul>
                    </div>
                    </div>
                    </div>
                    <?php } ?>
    <div class="uk-container-expand">
    </div>
</section>


<section>
    <hr>
    <h1>AREA</h1>
<div class="card-best">
        <div class="content-about-best">
            <div class="img-best">
    <img src="img/recomendaciones1.jpg">
</div>
<strong><p>Mas visitado</p></strong>
</div>
</div>


<div class="card-best">
    <div class="content-about-best">
            <div class="img-best">
        <img src="img/recomendaciones2.jpg">
    </div>
        <strong><p>Mejor calificado ✰</p></strong>
    </div>
    </div>

<div class="card-best">
    <div class="content-about-best">
            <div class="img-best">
            <img src="img/recomendaciones3.jpg">
        </div>
            <strong><p>Nuevo en la zona</p></strong>     
        </div>
        </div>

<div class="card-best">
    <div class="content-about-best">
            <div class="img-best">
            <img src="img/recomendaciones3.jpg">
        </div>
            <strong><p>Promocion del dia</p></strong>      
        </div>
        </div>

    </section>


    
    <!-- Footer-->
    <section class="contact" id="contact">
            <div class="contact-box">
                <h3>Restaurante Yarjaj</h3>
                <span>Contácta con nosotros</span>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                </div>
            </div>
            <div class="contact-box">
                <h3>Links</h3>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="restaurantes.php">Restaurantes</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>

            </div>

            <div class="contact-box address">
                <h3>Contacto</h3>
                <i class='bx bxs-map'><span>32 DownTown Center, RD</span></i>
                <i class='bx bxs-phone'><span>+1 809 381 3829</span></i>
                <i class='bx bxs-envelope'><span>Yarjaj@gmail.com</span></i>
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
