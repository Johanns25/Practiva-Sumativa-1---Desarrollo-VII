<?php
//Problema de Suma 
$numero1 = 5;
$numero2 = 3; 
$resultado = $numero1 + $numero2; 
echo "Suma: " . $resultado . "<br>"; 

//Problema de resta 
$numero1 = 10;
$numero2 = 4; 
$resultado = $numero1 - $numero2; 
echo "Resta: " . $resultado . "<br>"; 

//Problema de Multiplicacion 
$numero1 = 7;
$numero2 = 3; 
$resultado = $numero1 * $numero2; 
echo "Multiplicación: " . $resultado . "<br>"; 

//Orden de precedencia 
$resultado = 2+3*4; 
echo "Precedencia 2+3*4: " . $resultado . "<br>"; 

$resultado = (2+3)*4;
echo "Precedencia (2+3)*4: " . $resultado . "<br>";
?>