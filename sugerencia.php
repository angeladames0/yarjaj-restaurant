<?php
session_start();

if(!isset($_SESSION["session_usuario"])){
header("Location: index.php");
?>

<?php
}
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
    <title>Sugerencias - YARJAJ</title>
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


<div class="contact_form">
    <div class="formulario">  
        <center>
            <form action="includes/conexsug.php" method="POST" >       
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $row['NOMBRE']  ?>" readonly>
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="txtEmail" id="txtEmail" value="<?php echo $row['EMAIL']  ?>" readonly>
                </p>  
         
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">Sugerencia
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="txtSugerencia" class="texto_mensaje" id="txtSugerencia" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                </p>                    
              
                <button type="submit" name="enviar" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>          
          </form>
        </center>
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
