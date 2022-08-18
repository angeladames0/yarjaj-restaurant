<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - YARJAJ</title>
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
    <br>
    <section class="services" id="services">
        <div class="heading">
            <span>Nosotros</span>
            <h2>Lo que nos define</h2>
        </div>
    <div class="servives-container">
        <!-- Caja 1 -->
        <div class="s-box">
            <img src="img/mision.png" alt="">
            <h3>Mision</h3>
            <p>La mision de nuestra empresa es conectar con esos lugares desconocidos y apoyar de manera virtual a nuestras empresas gastronomicas para el servicios de dominicanos y extranjeros</p>
        </div>
        <!-- Caja 2 -->
        <div class="s-box">
            <img src="img/vision.png" alt="">
            <h3>Vision</h3>
            <p>Esperamos poder expandirnos con los años, para ampliarnos en otros lugares del continente que de igual forma que en nuestro pais, dar a conocer esos lugares que no conforman parte de una franquicia multinacional.</p>
        </div>
        <!-- Caja 3-->
        <div class="s-box">
            <img src="img/valores.png" alt="">
            <h3>Valores</h3>
            <p> Somos conscientes de que siempre se puede mejorar y aprender. Estamos abiertos a escuchar todo aquello que el cliente nos sugiere o comenta, conformandonos los valores, de la empatia y responsabilidad con nuestra comunidad.</p>
        </div>
    </div>
</section>

<section>    
<h1>NUESTRO TEAM</h1>

<p>Este proyecto surgio como iniciativa para automatizar el desarrollo de nuestra gastronomia nacional, para hacer como uso de conocimiento, publicidad e informacion para nuestros usuarios</p>

        <!-- Adan -->
    <div class="card">
        <div class="content-about">
            <span></span>
            <div class="img">
                <img src="img/adan.jpeg" alt="">
            </div>
            <h4>Adan Solis</h4>
            <h6>Fundador</h6>
            <h6>Full Stack Developer</h6>
        </div>
    </div>

        <!-- Angel -->
            <div class="card">
        <div class="content-about">
            <span></span>
            <div class="img">
                <img src="img/angel.jpeg" alt="">
            </div>
            <h4>Angel Adames</h4>
            <h6>Fundador</h6>
            <h6>Full Stack Developer</h6>
        </div>
    </div>
              <!-- Joan -->
                  <div class="card">
        <div class="content-about">
            <span></span>
            <div class="img">
                <img src="img/Joan.jpeg" alt="">
            </div>
            <h4>Joan Stiven</h4>
            <h6>Manejador de BD</h6>
        </div>
    </div>

        <!-- Raymond -->
            <div class="card">
        <div class="content-about">
            <span></span>
            <div class="img">
                <img src="img/Raymond.jpeg" alt="">
            </div>
            <h4>Raymond Suarez</h4>
            <h6>Back-End developer</h6>
        </div>
    </div>

         <!-- Juan -->
             <div class="card">
        <div class="content-about">
            <span></span>
            <div class="img">
                <img src="img/Juan.jpeg" alt="">
            </div>
            <h4>Juan Niemen</h4>
            <h6>Front-end developer</h6>
        </div>
    </div>

        <!-- Yomar -->
            <div class="card">
        <div class="content-about">
            <span></span>
            <div class="img">
                <img src="img/Yomar.jfif" alt="">
            </div>
            <h4>Yomar Baez</h4>
            <h6>Front-end developer</h6>
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
