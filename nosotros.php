<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Restaurante YARJAJ</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="nosotros.css">

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

    <?php if(isset($_SESSION['session_admin']))
    echo "<a href=\"admin.php\" class=\"btn2\">Admin</a>"; ?> 
    <?php if(isset($_SESSION['session_usuario']))
    echo "<a href=\"includes/desloguear.php\" class=\"btn2\">Cerrar Sesión</a>"; ?> 
    <?php if(!isset($_SESSION['session_usuario']))
    echo "<a href=\"login.php\" class=\"btn2\">Iniciar Sesion</a>"; ?> 

    </header>
    <br>
    <section class="services" id="services">
        <div class="heading">
            <span>Nosotros</span>
            <h2>Lo que nos define</h2>
        </div>
    <div class="servives-container">
        <!-- Caja 1 -->
        <div class="s-box">
            <img src="images/order.png" alt="">
            <h3>Mision</h3>
            <p>La mision de nuestra empresa es conectar con esos lugares desconocidos y apoyar de manera virtual a nuestras empresas gastronomicas para el servicios de dominicanos y extranjeros</p>
        </div>
        <!-- Caja 2 -->
        <div class="s-box">
            <img src="images/delivery-truck.png" alt="">
            <h3>Vision</h3>
            <p>Esperamos poder expandirnos con los años, para ampliarnos en otros lugares del continente que de igual forma que en nuestro pais, dar a conocer esos lugares que no conforman parte de una franquicia multinacional.</p>
        </div>
        <!-- Caja 3-->
        <div class="s-box">
            <img src="images/shipping.png" alt="">
            <h3>Valores</h3>
            <p> Somos conscientes de que siempre se puede mejorar y aprender. Estamos abiertos a escuchar todo aquello que el cliente nos sugiere o comenta, conformandonos los valores, de la empatia y responsabilidad con nuestra comunidad.</p>
        </div>
    </div>
</section>
<div class="Padre">
        <!-- Adan -->
        <h2>Desarrolladores</h2> 
            <div  class="hijo">
                <img class="img" src="img/adan.jpeg">
                <p>Back-End developer</p>
            </div>
        <!-- Angel -->
            <div class= "hijo">
            <img class="img" src="img/angel.jpeg">
            <p>Back-End developer</p>
            </div>
              <!-- Joan -->
         <div class= "hijo">
            <img class="img" src="img/Joan.jpeg">
            <p>Manejador de BD</p>
            </div>
        <!-- Raymond -->
         <div class= "hijo">
            <img class="img" src="img/Raymond.jpeg">
            <p>Back-End developer</p>
            </div>
         <!-- Juan -->
            <div class= "hijo">
            <img class="img" src="img/Juan.jpeg">
            <p>Front-end developer</p>
            </div>
        <!-- Yomar -->
            <div class= "hijo">
            <img class="img" src="img/Yomar.jfif">
            <p>Front-end developer</p>
            </div>
        </div>
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
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Nosotros</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#contact">Contacto</a></li>

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
