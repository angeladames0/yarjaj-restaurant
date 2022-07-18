<?php
session_start();

if(isset($_SESSION["session_usuario"])){
// echo "Session is set"; // for testing purposes
header("Location: index.php");
}
?>
<?php require_once("includes/conexion.php"); ?>

<?php
$con=conectar();

if(isset($_POST["registro"])){

if(!empty($_POST["usuario"])  && !empty($_POST["nombre"]) && !empty($_POST["contrasena"]) && !empty($_POST["email"])) {
$usuario=$_POST["usuario"];
$nombre=$_POST["nombre"];
$contrasena=$_POST["contrasena"];
$email=$_POST["email"];

$chequsuario = "SELECT * FROM LOGIN WHERE USUARIO= '$usuario'";
$cheqemail = "SELECT * FROM LOGIN WHERE EMAIL= '$email'";

$query= mysqli_query($con, $chequsuario);
$query2= mysqli_query($con, $cheqemail);
$numrows=mysqli_num_rows($query);
$numrows2=mysqli_num_rows($query2);

if($numrows==0 & $numrows2==0)
{
$sql="INSERT INTO LOGIN
(USUARIO, NOMBRE, CONTRASENA, EMAIL)
VALUES('$usuario', '$nombre', '$contrasena', '$email')";

$result=mysqli_query($con, $sql);


if($result){
$message = "Cuenta Correctamente Creada";
} else {
$message = "Error al ingresar datos de la informacion!";
}

} else {
$message = "El nombre de usuario o email ya existe! Por favor, intenta con otro!";
}

} else {
$message = "Todos los campos no deben de estar vacios!";
}
}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">". $message . "</p>";} ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Registro - Restaurante YARJAJ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style2.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/loginbackground.jfif);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registro de Cuenta</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Registrarse es facil!</h3>
		      	<form action="registro.php" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
		      		</div>
		      		<div class="form-group">
		      		<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
		      		</div>
		      		<div class="form-group">
		      		<input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico" required>
		      		</div>
	            <div class="form-group">
	              <input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
	              <span toggle="#contrasena" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	    <input id="contrasena2" type="password" class="form-control" placeholder="Confirmar contraseña" required>
	              <span toggle="#contrasena2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              </div>
	            <div class="form-group">
	            	<button type="submit" name="registro" id="registro" class="form-control btn">Registrarse</button>
	            </div>
	            		<div class="w-50 text-md-right">
									<a href="login.php" style="color: #fff">¿Ya tienes una cuenta?</a>
								</div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/login.js"></script>

	</body>
</html>

