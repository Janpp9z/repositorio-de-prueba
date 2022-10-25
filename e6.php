<?php
// Realizar la división entera a/b de dos valores enteros positivos mediante restas.

$a=readline('Introducir el primer valor: ');
$b=readline('Introducir el segundo valor: ');
$cont=0;
$resto=$a;

while ($resto>=$b) {
    $resto-=$b;
    $cont++;
}

echo "$a / $b = $cont";

?>