<?php
	include 'core/functions.php';
	$master = new fun();
	//echo $master->microurl();
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
					<form action="">
						<input type="text" class="register-input" placeholder="url">
						<input type="submit"  value="acortar" class="myButton right" >
					</form>
					<p class="short " >La url corta es:<a href="https://bitly.com/">http://uanl.com/<?php echo $master->microurl();?></a></p>
				</div>
			</main>
			<footer>
				<p class="letra">DIRECCIÓN DE TECNOLOGÍAS DE INFORMACIÓN</p>
				<p class="letra">UNIVERSIDAD AUTÓNOMA DE NUEVO LEÓN | 2016 Pedro de Alba s/n, San Nicolás de Los Garza, Nuevo León</p>
			</footer> 
		</div>
	</body>
</html>
