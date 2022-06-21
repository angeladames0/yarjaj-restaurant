<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Restaurante YARJAJ</title>
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
            <div class="bx bx-moon" id="darkmode"></div>

        </ul>

    <?php if(isset($_SESSION['session_usuario']))
    echo "<a href=\"includes/desloguear.php\" class=\"btn2\">Cerrar Sesión</a>"; ?> 
    <?php if(!isset($_SESSION['session_usuario']))
    echo "<a href=\"login.php\" class=\"btn2\">Iniciar Sesion</a>"; ?> 

    </header>


    <section class="home" id="home">
        <div class="home-text">
            <h1>Restaurante YARJAJ</h1>
            <h2>La mejor comida<br> del país</h2>
    <?php if(!isset($_SESSION['session_usuario']))
    echo "<a href=\"registro.php\" class=\"btn\">Crear Cuenta</a>"; ?> 
            
        </div>
        <div class="home-img">
            <img src="img/inicio.jpg" alt="">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="img/About.jpg" alt="">
        </div>
        <div class="about-text">
            <span>Sobre Nosotros</span>
            <h2>Encargados de dar las mejores opciones para nuestra comunidad<br> diferente y único</h2>
            <p>Somos una de las  mejores paginas de reseñas culinarias, amplia por su variedad en cuanto a lo gastronomico, este nos avala, como la comunidad gastronomica dominicana, 
                mas aplia a nivel nacional de sitios de comidad conocidos y nuevos del pais.</p>
            <a href="#" class="btn">Saber Más</a>
        </div>
    </section>

    <section class="services" id="services">
        <div class="heading">
            <span>Servicios</span>
            <h2>Nos define un servicio de calidad</h2>
        </div>

        <div class="servives-container">
            <!-- Caja 1 -->
            <div class="s-box">
                <img src="images/order.png" alt="">
                <h3>Seguridad</h3>
                <p>Con la informacion recopilada por nuestra comunidad, le aseguramos las reseñas mas objetivas para nuestros usuarios, confiando  en la reseña de nuestros ojeadores y parte de la comunidad.</p>
            </div>
            <!-- Caja 2 -->
            <div class="s-box">
                <img src="images/delivery-truck.png" alt="">
                <h3>Calidad</h3>
                <p>Nos caracteriza las buenas practicas para conocer buenos, nuevos y accesibles lugares para nuestro publico conocedor de nuevas gastronomias, alcanzando un puesto excelente en la sociedad para el publico.</p>
            </div>
            <!-- Caja 3-->
            <div class="s-box">
                <img src="images/shipping.png" alt="">
                <h3>Autenticidad</h3>
                <p>Esta pagina es creada por un grupo de desarrolladores, involucrados con la industria gastronomica, para que las pequeñas empresas dominicanas puedan dar un salto  hacia nuevos horizontes.</p>
            </div>
        </div>
    </section>

    <section class="connect">
        <div class="connect-text">
            <span>Haz tu reservación</span>
            <h2>Crea tu cuenta</h2>
        </div>
        <a href="#" class="btn">Crear Cuenta</a>
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
