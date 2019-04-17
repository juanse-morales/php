<?php 
# Insertar datos en MySQL mediante PHP

include("conexion.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])) {
	
	$link = conectarse();
	$sentenciaSQL = "INSERT INTO codigof (NOMBRE,PW) VALUES ('$_POST[nombre]','$_POST[pw]')";

	mysqli_query($link,$sentenciaSQL);
	echo "Datos guardados";
}else{
	echo "Problemas al Insertar Datos";
}

?>