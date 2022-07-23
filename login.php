<?php
session_start();
if(isset($_SESSION["session_usuario"])){
header("Location: index.php");
}
?>

<?php require_once("includes/conexion.php"); ?>

<?php
$con=conectar();

if(isset($_POST["login"])){

if(!empty($_POST["usuario"]) && !empty($_POST["contrasena"])) {
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

$sql = "SELECT * FROM LOGIN WHERE USUARIO= '$usuario' AND CONTRASENA= '$contrasena'";

$query= mysqli_query($con, $sql);
$numrows=mysqli_num_rows($query);
$numrows= mysqli_fetch_array($query);
if ($numrows['id_cargo']==1) {//admin
	$_SESSION["session_admin"]=$usuario;
	$_SESSION["session_usuario"]=$usuario;
	header("Location: admin.php");
}
else 
if($numrows['id_cargo']==2) {//cliente
	$_SESSION["session_usuario"]=$usuario;


}
if($numrows!=0)

{
while($row=mysqli_fetch_assoc($query))
{
$dbusername=$row['USUARIO'];
$dbpassword=$row['CONTRASENA'];
}

if($usuario == $dbusername && $contrasena == $dbpassword)

{
header("Location: index.php");
}
} else {

$message = "Nombre de usuario ó contraseña invalida!";
}

} else {
$message = "Todos los campos son requeridos!";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Iniciar Sesion - Restaurante YARJAJ</title>
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
					<h2 class="heading-section">Inicio de Sesion</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">¿Sientes el poder?</h3>
		      	<form class="signin-form" method="POST">
		      		<div class="form-group" >
		      			<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required>
		      		</div>
	            <div class="form-group">
	              <input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
	              <span toggle="#contrasena" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn">Iniciar Sesion</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Recuerdame
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Olvidaste la contraseña?</a>
								</div>
	            </div>
	          </form>
	          <?php if (!empty($message)) {echo "<p class=\"error\">" . $message . "</p>";} ?>
		      </div>
				</div>

			</div>
		</div>
	</section>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
<a href="registro.php" class="form-control btn2">Registrase</a>
</div>
</div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/login.js"></script>

	</body>
</html>