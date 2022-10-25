<?php
// Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres
// algoritmos con cada estructura repetitiva.

//6 * 4 = 6+6+6+6
$a = readline('Ingrese el valor de a: ');
$b = readline('Ingrese el valor de b: ');

$cont=0;
$suma=0;
// while ($cont<$a) {
//     $suma+=$b;
//     $cont++;
// }
// echo $suma;

for ($cont=0, $suma; $cont < $a; $cont++) { 
    $suma+=$b;
}


?>