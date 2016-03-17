<?php
	include 'core/functions.php';
	$master = new fun();
	if(isset($_POST["submit"]))
		{
			echo $_POST["urlold"]."<br/>";
			if(!is_null($_POST["urlold"]))
				echo $master->microurl();
			else
				echo "holis";
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>acortador url</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<div class="contenedor">
			<header>
				<img src="images/logo_dti.png"alt="imagen dti">
			</header>
			<main class="main">
				<!-- <h3 class="letra">cortador de url's </h3> -->
				<div id="url">
					<form method="post" action="">
						<input type="text" name="urlold" class="register-input" placeholder="url">
						<input type="submit" name="submit" value="acortar" class="myButton right" >
					</form>
					<!-- <p class="short " >La url corta es:<a href="https://bitly.com/">http://uanl.com/</a></p> -->
				</div>
			</main>
			<footer>
				<p class="letra">DIRECCIÓN DE TECNOLOGÍAS DE INFORMACIÓN</p>
				<p class="letra">UNIVERSIDAD AUTÓNOMA DE NUEVO LEÓN | 2016 Pedro de Alba s/n, San Nicolás de Los Garza, Nuevo León</p>
			</footer> 
		</div>
	</body>
</html>
