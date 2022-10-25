<?php
// Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas.
$a = readline('ingrese el valor a dividir: ');
$b = readline('ingrese la cantidad de partes a dividir: ');
$cont = 0;
$resto=$a;
while ($resto>=$b) {
    $resto-=$b;
    $cont++;
}
echo "$a / $b = $resto";



?>
