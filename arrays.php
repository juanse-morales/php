<?php 
//Arrays o vectores

//Arrays predefinidos

$array = array("elemento 1", 2, "element 3");

echo $array[0]."<br>";
echo $array[1]."<br>";

//Arrays asociativos o personalizados

$asociativo = array("clave1"=>"Elemento #1", "num"=> 2, "bool"=>true);

echo $asociativo["bool"].$asociativo["num"].$asociativo["clave1"];
?>