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
				$check = $masterQuery->agregar("urls",$urls);
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
				echo "holis";
				$mostrar =false;
			}
		}
	else
	{
		$mostrar=false;			
	}
?>