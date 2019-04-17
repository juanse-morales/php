<?php 
// operadores en PHP

/* Operadores Aritméticos
Adición (+)
Substracción (-)
Multiplicación (*)
División (/)
Porcentaje (%) */
$adicion = 4 + 4; //El valor es 8
$multiplicacion = $adicion * 3;
echo $adicion."<br>".$multiplicacion."<br><br>";
/* Operador de Asignación
Asignación (=) */
$valor1 = "Hola";
$valor2 = 20;
echo $valor1."<br>".$valor2."<br><br>";
/* Operador de Cadena o Concatenación
Punto (.) */
$texto = "yo tengo ". 20 ." years";
echo $texto."<br>";
$tengo = "yo ";
$tengo .= "tengo ";
$tengo .= "20 years";
echo $tengo."<h3>Operadores de Comparación</h3>";
/* Operadores de Comparación 
Igual (==)
Idéntico (===)
Diferente (!= ó <>)
No Idénticos (!==)
Menor que (<)
Mayor que (>)
Menor o igual que (<=)
Mayor o igual que (>=) */
echo (6>=4).(5==11)."<br><br>";
/* Operador de control de errores
Arroba @*/
echo 'Hola';
@ define(); //Esto debería producir un error
echo "<br><br>";
/* Operador de Incremento (++) y de Decremento (--) */
$var = 3;
echo $var++; echo "<br>";
echo ++$var; echo "<br><br>";
/* Operadores de lógica 
Y (&&  ó and) - Devuelve 1 si ambos operandos son 1
O (|| ó or) - Devuelve 1 si algún operando es 1
O Exclusivo (xor) - Devuelve 1 si solo un operando es 1 */
echo ((2==2)&&(2!=1));
echo "<br>";
echo ((3==3)or(4!=4));
?>