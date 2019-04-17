<?php 
# Bucle ForEach

//Array predefinido
$pre = array("elemtro 1","elemento 2");

foreach ($pre as $key => $value) {
	echo $key." = ".$value."<br>";
}
echo "<br>";
//Array asociativo
$aso = array('clave1' => "Elemento 1", 'llave 2' => "Dios", 'hash' => 3);

foreach ($aso as $key => $value) {
	echo $key." = ".$value."<br>";
}

?>