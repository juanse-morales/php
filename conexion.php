<?php

function conectarse(){
	$host = "localhost";
	$user = "root";
	$pw = "";
	$db = "codigofacilito";

	if(($link= mysqli_connect($host,$user,$pw,$db))){
		return $link;
	}else{
		echo "Error al conectarse al servidor de la base de datos";
	}
}

?>