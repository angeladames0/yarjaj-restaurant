<?php
session_start();
require 'includes/conexion.php';

$id = (int)$_GET['id']; 

$con = conectar();
$sql = 'SELECT ID, NOMBRE,DE,HASTA,DIRECCION,INFORMACION, LATITUD, LONGITUD,IMG FROM RESTAURANTES WHERE ID= '.$id.'';
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$usuario=$_SESSION["session_usuario"];

$sql1="SELECT * FROM LOGIN WHERE USUARIO='$usuario'";
$query1=mysqli_query($con,$sql1);

$row1=mysqli_fetch_array($query1);

$cor1 = $row['LATITUD'];;
$cor2 = $row['LONGITUD'];;
$name = $row['NOMBRE'];;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['NOMBRE']; ?> - YARJAJ</title>
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


    <section class="home-page" id="home-page">

        <div class="home-text">
            <h2><?php echo $row['NOMBRE']; ?></h2>
        </div>

        <div class="home-img">
            <img src="<?php echo $row['IMG']; ?>" alt="">
        </div>
</section>

<section>
    <?php echo $row['INFORMACION']; ?><br><br>
             <div>
                        <h3>Mas informacion:</h3>
                        <ul>
                            <li><strong>Direccion: </strong><?php echo $row['DIRECCION']; ?></li>
                            <li><strong>Horario: </strong><?php echo $row['DE']; ?> - <?php echo $row['HASTA']; ?></li>
                        </ul>
                    </div>
</section>

<section class="mapa">
<h2>📍 Ubicacion del restaurante</h2>
<br>
<div id="map" style="width:100%;height:500px;"></div>


</section>

<section>
    <hr>
    <?php if(isset($_SESSION['session_usuario']))
    echo "
        <form method=\"POST\" action=\"php/enviarcomentario.php\">
            <section id=\"contact\">
                <div class=\"container1 px-4\">
                    <div class=\"row gx-4 justify-content-center\">
                        <div class=\"col-lg-8\">
                                <div class=\"col-xs-12\">
                                    <h2>✍️ ¡Haz una Reseña!</h2>
                                    <br>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" name=\"id\" style=\"width: 40px\" type=\"text\" value=". $row["ID"] . " id=\"usuario\" readonly>
                                    <label for=\"usuario\" class=\"form-label\">USUARIO</label>
                                    <input class=\"form-control\" name=\"usuario\" type=\"text\" value=" . $row1['USUARIO'] . " id=\"usuario\" readonly>
                                    <label for=\"nombre\" class=\"form-label\">NOMBRE</label>
                                    <input class=\"form-control\" name=\"nombre\" type=\"text\" value=" . $row1['NOMBRE'] . " id=\"nombre\"readonly>
                                    </div>  
                            
                                    
                            <br>
                                    <div class=\"form-group\">
                                    <label for=\"comentario\" class=\"form-label\">Comentario:</label>
                                    <textarea class=\"form-control\" name=\"comentario\" cols=\"30\" rows=\"5\" style=\"width: 800px\" type=\"text\" id=\"comentario\" 
                                    placeholder=\"Escribe tu comentario......\"></textarea>
                                    </div>
                            <br>

                                <p class=\"clasificacion\">
                                  <input id=\"calificacion5\" type=\"radio\" name=\"calificacion\" value=\"5\">
                                  <label for=\"calificacion5\">★</label>
                                  <input id=\"calificacion4\" type=\"radio\" name=\"calificacion\" value=\"4\">
                                  <label for=\"calificacion4\">★</label>
                                  <input id=\"calificacion3\" type=\"radio\" name=\"calificacion\" value=\"3\">
                                  <label for=\"calificacion3\">★</label>
                                  <input id=\"calificacion2\" type=\"radio\" name=\"calificacion\" value=\"2\">
                                  <label for=\"calificacion2\">★</label>
                                  <input id=\"calificacion1\" type=\"radio\" name=\"calificacion\" value=\"1\">
                                  <label for=\"calificacion1\">★</label>
                                </p>

                            <input class=\"btn btn-primary\" type=\"submit\"  value=\"Enviar Comentario\">
                            <br>
                            <br>
                            <br>"; ?> 


                                    <?php
$resultado= mysqli_query($con, "SELECT * FROM RESENAS WHERE IDR='$id'");

while($comentario = mysqli_fetch_object($resultado)){

    ?>

    <b><?php echo($comentario->NOMBRE);  ?></b> - Califico <?php echo($comentario->CALIFICACION);  ?>🌟 y comento: 
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



        <script>
                const jsvar = '<?=$cor1?>';
                const jsvar2 = '<?=$cor2?>';
                const name = '<?=$name?>';

                function myMap() {

                var mapProp= {
                  center: new google.maps.LatLng(jsvar, jsvar2),
                  zoom:13,
                };
                var map = new google.maps.Map(document.getElementById("map"),mapProp);


                  const marcador = new google.maps.Marker({
                            position: new google.maps.LatLng(jsvar, jsvar2),
                            map,
                            icon: 'images/marker.png',
                            title: name,
                          });


                }


        </script>





    </body>

    </html>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClu6eGasReFLpy8QJCfkvOu6MQ8k7Go2U&callback=myMap"></script>

    <script src="js/index.js"></script>

    </body>

    </html>

    </html>