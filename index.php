<?php
	if(session_start() != NULL);
		session_destroy(); 
	
	error_reporting(0);
	include 'core/querys.php';
	$varQuery = new Querys();
		

?>
<!DOCTYPE html>
<html>
	<head>
		<title>acortador url</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
	<?php 

	?>
		<div class="contenedor">
			<header>
				<img src="images/logo_dti.png"alt="imagen dti">
			</header>
			<main class="main">
				<!-- <h3 class="letra">cortador de url's </h3> -->
				<div id="url">
					<?php
						if(isset($_POST['Submit'])){
							$correo ='"'.$_POST["correo"].'"';
							$contra ='"'.$_POST["contra"].'"';
							$tar = $correo.",".$contra;
						 	$var= $varQuery->inicio_secion($tar);
						 	if($var)
						 	{
						 		//echo $var;
						 		session_start();
						 		$_SESSION['username'] = $var;
						 		header('Location:home.php');
						 		//echo $_SESSION['username'];
						 	///
						 	?>
						 	<!--  -->
						 		
						 	<!--  -->
						 <?php	
						 	///
						}
						else{
							echo "<h1>No se tiene permisos para entrar en modo administrador</h1>";
						}
						}else{
						?>
						<div class="login">
						  <form method="post" action="">
						    <p><input type="text" name="correo" class="register-input" value="" placeholder="Usuario"required></p>
						    <p><input type="password" name="contra" class="register-input" value="" placeholder="Contraseña"required></p>
						    <p class="submit"><input type="submit" class="myButton right" name="Submit" value="Entrar"></p>
						  </form>
						</div>
					<?php }?>
				</div>
			</main>
			<footer>
				<p class="letra">DIRECCIÓN DE TECNOLOGÍAS DE INFORMACIÓN</p>
				<p class="letra">UNIVERSIDAD AUTÓNOMA DE NUEVO LEÓN | 2016 Pedro de Alba s/n, San Nicolás de Los Garza, Nuevo León</p>
			</footer> 
		</div>
	</body>
</html>
