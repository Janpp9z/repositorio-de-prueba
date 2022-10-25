<?php
// Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial.
$a=readline('ubgrese el valor a calcular: ');
$i=1;
while ($i<=$a) {
    for ($j=$i; $j>=$i ; $j--) { 
        echo "$i = $j" . PHP_EOL;
    }
    $i++;
}
?>