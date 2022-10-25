<?php
// Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares. Hacer tres
// versiones, con un bucle: para, mientras y repetir. Repetir el ejercicio considerando que el número de
// valores se le solicita al usuario.

// $e = readline('ingrese los valores: ');
$cont = 0;
$contm = 0;
$contador = 0;
// while ($contador <9) {
//     if ($e % 2 ==0) {
//         $cont++;
//     }else{
//         $contm++;
//     }
//     $contador++
//     $e = readline('ingrese los valores: ');
// }
// $prompar=$contador/$cont;
// $prom=$contador/$contm;


// echo "el promedio de numeros pares es de $prompar y su promedio de impares es: $prom";

for ($i=0; $i < 10; $i++) { 
    $e = readline('ingrese los valores: ');
     if ($e % 2 ==0) {
         $cont++;
     }else{
         $contm++;
     }
     $contador++;
}
$prompar=$contador/$cont;
$prom=$contador/$contm;

 echo "el promedio de numeros pares es de $prompar y su promedio de impares es: $prom";

?>