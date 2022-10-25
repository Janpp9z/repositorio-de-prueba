<?php
// Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
// negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?
$nota=readline('Ingrese una nota: ');
$cont=0;
$suma=0;
while ($nota>=0) {
    $suma = $suma+$nota;
    $cont++;
    $nota=readline('Ingrese una nota: ');
}

$promedio = $suma/$cont;
echo "$promedio";

?>