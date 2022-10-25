<?php
// Leer 20 números y encontrar el mayor y el menor valor leídos

$e=readline('ingrese el valor: ');
$cont=0;
$ma=0;
$me=0;
while ($cont<18) {
    if ($e>$ma) {
        $ma=$e;
    }else{
        $me=$e;
    }
    $cont++;
    $e=readline('ingrese el valor: ');    
}

echo "el mayor numero encontrado es $ma y el menor numero $me";


?>