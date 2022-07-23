<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturantes - Restaurante YARJAJ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/paraRecomendacion.css">
    <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>

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



<section>

<br>
<h1>Mira nuestros mejores lugares</h1>
<div class="uk-column-1-2@s">
    <div class="uk-container-small uk-nav uk-nav-default" style="height:370px; overflow: scroll;">
        
        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-light">
            <div  style="float: left">
                <img src="img/YARJA SanMartin.jpg" style="height: 150px;">
            </div>
            <div>
                <p value="18.4883599,-69.9030394">
                    YARJA Avenida San Martin <br>
                    Santo Domingo, República Dominicana <br>
                    <br>
                    Teléfono: (809) 832-0808 <br>
                    <br>
                    Lunes a Viernes de 9:00 a 22:00 <br>
                    Sábados de 10:00 a 23:00 <br>
                </p>
            </div>   
            
        </div>
        <br>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-light">
            <div  style="float: left">
                <img src="img/YARJA Monte Plata.jpeg" style="height: 150px;">
            </div>
            <div>
                <p value="18.680622,-70.0151825">
                    YARJA Monte Plata <br>
                    Monte Plata, República Dominicana <br>
                    <br>
                    Teléfono: (809) 233-1855 <br>
                    <br>
                    Lunes a Viernes de 9:00 a 22:00 <br>
                    Sábados de 10:00 a 22:00 <br>
                </p>   
            </div>
        </div>
        <br>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-light">
            <div  style="float: left">
                <img src="img/YARJA Palenque.jpg" style="height: 150px;">
            </div>
            <div>
                <p value="18.2552436,-70.1990756">
                    YARJA Palenque <br>
                    Palenque, República Dominicana <br>
                    <br>
                    Teléfono: (809) 555-7215 <br>
                    <br>
                    Lunes a Viernes de 9:00 a 22:00 <br>
                    Sábados de 10:00 a 23:00 <br>
                </p>
            </div>
        </div>
        <br>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-light">
            <div  style="float: left">
                <img src="img/YARJA Churchill.jpg" style="height: 160px;">
            </div>
            <div>
                <p value="18.5151954,-69.8590074">
                    YARJA Avenida Churchill <br> 
                    Santo Domingo, República Dominicana <br>
                    <br>
                    Teléfono: (809) 535-1420 <br>
                    <br>
                    Lunes a Viernes de 9:00 a 22:00 <br>
                    Sábados de 10:00 a 23:00 <br>
                </p>      
            </div>
        </div>
        <br>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-light">
            <div  style="float: left">
                <img src="img/YARJA Independencia.jpg" style="height: 160px;">
            </div>
            <div>
                <p value="18.5151954,-69.8590074">
                    YARJA Avenida Independencia <br>
                    Santo Domingo, República Dominicana <br>
                    <br>
                    Teléfono: (809) 490-0850 <br>
                    <br>
                    Lunes a Viernes de 9:00 a 22:00 <br>
                    Sábados de 10:00 a 23:00 <br>
                </p>
            </div>    
        </div>
        <br>
    </div>
    <div class="uk-container-expand">
        <div id="map"></div>
    </div>
    
</div>

</section>



<section>
<div class="galeria">
<div class="foto">
    <img src="img/recomendaciones1.jpg" alt="">
</div>
<div class="pie">
    <strong><p>Mas visitado</p></strong>
  
</div>

</div>

<div class="galeria">
    <div class="foto">
        <img src="img/recomendaciones2.jpg" alt="">
    </div>
    <div class="pie">
        <strong><p>Mejor Calificado</p></strong>
      
    </div>
    
    </div>
    <div class="galeria">
        <div class="foto">
            <img src="img/recomendaciones3.jpg" alt="">
        </div>
        <div class="pie">
            <strong><p>Nuevo en la zona</p></strong>
      
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

         <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
 integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
 crossorigin=""></script>
        <!-- Link To JavaScript -->
        <script src="index.html"></script>
         <script src="js/mapa.js"></script>
    </body>

    </html>



    <script src="js/index.js"></script>

    </body>

    </html>

    </html>
