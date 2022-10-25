<?php
// Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.
$a = readline('ingrese el valor: ');
$b = readline('ingrese el exponente: ');
$cont=1;
$suma=1;
while ($cont<=$b) {
    $suma=$suma*$a;
    $cont++;
}
echo "el valor final es $suma";



?>