<?php
	/*
	Funciones para los querys 
	-ccortes DTI-
	*/
	require_once "conectar.php";
	class Querys extends Conectar
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function ejecutarSql($id){
	        $result = $this->_db->query("select * from  datos_firmas where id_firma=".$id." ;"); 
         	$row = mysqli_fetch_array($result);
         	return $row;
         	$this->_db->close(); 
	    }

	    public function lastid(){
	    	$result = $this->_db->query("SELECT MAX(id_url) FROM urls; "); 
         	$row = mysqli_fetch_array($result);
         	$row = $row[0];
         	return $row;
         	$this->_db->close(); 
	    }

	    public function newurl(){
	    	$id = $this->lastid();
	    	$result = $this->_db->query("select * from  urls where id_url=".$id." ;"); 
         	$row = mysqli_fetch_array($result);
         	return $row;
         	$this->_db->close(); 
	    }
	    
	    public function agregar($tabla , $campos){
	    	
	    	
	    	 $query= 'INSERT INTO'.' '.$tabla.'(url_original,url_corta)'.' '.'VALUES ('.$campos.');';
	    	 $result = $this->_db->query($query);
	    	if($result)
	    		return true;
		    	//echo "<script>console.log('jalo');</script>";
	    	else
	    		return false;
		    	//echo "<script>console.log('".$query."');</script>";

		    //header('Location:home.php');
	    }
      		    
	    public function inicio_secion($campos){
	    	$arraycampos = explode(",",$campos);
	    	$sql="SELECT d.nombre_firma, u.id_firma FROM usario u JOIN datos_firmas d on u.id_firma = d.id_firma where u.pass = ".$arraycampos[1]." AND d.correo =".$arraycampos[0]."";
			$result = $this->_db->query($sql);
			while ($fila = mysqli_fetch_array($result)) {
				$varNombre=utf8_encode($fila["nombre_firma"]);
				$varid=utf8_encode($fila["id_firma"]);
			}
			 return $varNombre.$varid;
	    }

	    public function limpiar($dirty){
				if (get_magic_quotes_gpc()) {
					$liberate = mysql_real_escape_string(stripslashes($dirty));
					}else{
					$liberate = mysql_real_escape_string($dirty);
					}
				return $liberate;
	    }




	}

?>