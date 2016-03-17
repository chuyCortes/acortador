<?php
	include 'core/functions.php';
	include 'core/querys.php';
	$master = new fun();
	$masterQuery = new Querys();
	if(isset($_POST["submit"]))
		{
			if($_POST["urlold"] != ""){
				$urlVieja = $_POST["urlold"];
				$urlNueva = "http://uanl.mx/".$master->microurl();
				$urls = "'".$urlVieja."'".","."'".$urlNueva."'";
				$urlsSC =$urlVieja.",".$urlNueva;
				$check = $masterQuery->agregar("urls",$urls,$urlsSC);
				if($check){
					$mostrar = true;
					$new = $masterQuery->newurl();
					header("Cache-Control: no-cache");
					header("Expires: -1");
				}
				else{ 
					$mostrar =false;
					}
			}
			else{
				
				$mostrar =false;
			}
		}
	else
	{
		$mostrar=false;			
	}

    session_start();
    // include 'core/querys.php';
    // $varQuery = new Querys();
    if(empty($_SESSION['username'])) {
        header('Location: index.php');
        //echo "empty";
    }
    else{
        
    
?>
<!DOCTYPE html>
<html>
	<head>
		<title>acortador url</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script>
			 function myFunction() {
                var url = document.getElementById("urlold").value;
                var pattern = /^(http|https)\:\/\/[a-z0-9\.-]+\.[a-z]{2,4}/gi;
               	if(url.match(pattern)){
                   //document.getElementById("myForm").submit(); 
                   return true;
               	}
                else{
                   alert("no es una url valida"); 
                   return false;
          //          document.getElementById('myForm').onsubmit = function() {
    						// 			return false;
										// }
 
                }
            }
			
		</script>
	</head>
	<body>
		<div class="contenedor">
			<header>
				<img src="images/logo_dti.png"alt="imagen dti">
				<div id="cs" class="right"><a href="index.php">Cerrar Sesión</a></div>
			</header>
			<main class="main">
				<!-- <h3 class="letra">cortador de url's </h3> -->
				<div id="url">
					<form action="" id="myForm" method="post" onsubmit="return myFunction();">
						<input type="text" id="urlold" name="urlold" class="register-input" placeholder="url">
						<input type="submit" name="submit" value="acortar" class="myButton right" >
					</form>
					<?php
						if($mostrar)
						{
							echo " <p class=\"short \" >La url corta es:<a href=\"".$new[1]."\">".$new[2]."</a></p><br><p class=\"short2 \">La url original:".$new[1]."</p>";
							$mostrar =false;
						}
					?>
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
<?php 
    }
?>