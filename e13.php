<?php
// Escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los
// positivos y la media de los negativos
$e=readline('introducir valores: ');
$f=0;
$g=0;
$p=0;
$n=0;


while ($e!=0) {
    if ($e>0) {
        $p+=$e;
        $f++;
    }else{
        $n+=$e;
        $g++;
    }
    $e=readline('introducir valores: ');    
}

$promPlus = $p / $f;
$promNeg = $n / $g;

echo "Promedio de positivos es $promPlus y el promedio de negativos es $promNeg";
?>