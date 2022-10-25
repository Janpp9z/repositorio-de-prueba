<!-- En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones. Las
tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para
informar en que año la población del país B supera a la de A. -->
<?php
$a = 25000000;
$b = 19900000;
$año=2022;

while ($a > $b) {
    $a+=2*25000000/100;
    $b+=2*19900000/100;
    $año++;
}

echo "el año de superacion para la poblacion es: $año, con un total de $b habitantes";
?>