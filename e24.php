<?php
// Un galpón tiene al comienzo de la jornada una cantidad inicial (Stock inicial) de cajones
// con productos de un solo tipo, luego repetidamente, entran y salen camiones, que traen o
// llevan cantidades de cajones. Si no alcanza la cantidad a llevar, se debe mostrar un mensaje
// “NO ALCANZA”, se lleva todo lo que hay; se muestra lo que se lleva y el galpón queda vacío.
// Se muestra al final de la jornada cuantos cajones hay en el galpón (Stock final), y cuantos
// cajones ingresaron y cuantos cajones salieron en toda la jornada. Ejemplo:
$stock_inicial=1000;
$e= readline ("para determinar el ingreso o salida de cajones, seleccione 1 para un ingreso de prodcuto o 2 para una salida de los mismos: ");
$contadoretiro=0;
$contadoringreso=0;
while ($e == "1" || $e == "2") {
    if ($e == 1) {
        $cantidad = readline("Ingrese el valor para agregar al stock: ");
        $afirmacion = readline("Desea Continuar? S/N?");
        if ($afirmacion = "s") {
            $contadoringreso += $cantidad;
            $stock_inicial += $cantidad;
        }else {
            break;
        }
    }else if ($e == 2){ 
    if ($stock_inicial == 0) {
        echo "no hay stock bro ;";
    }else{
        $afirmacion2= readline("Ingrese la cantidad de cajones para retirar: ");
        if ($afirmacion2 > $stock_inicial) {
                echo "No alcanza, se lleva $stock_inicial";
            $decime = readline("Desea Continuar? S/N?");
            if ($decime = "s") {
                $contadoretiro += $stock_inicial;
                $stock_inicial= 0;
            }else {
                break;
            }
        }else {
            $decime2 = readline("Desea Continuar? S/N?");
            if ($decime2 = "s") {
                $stock_inicial -= $afirmacion2;
                $contadoretiro+=$afirmacion2;
            }else {break;}
        }
        }
    }
    $e= readline (" para determinar el ingreso o salida de cajones, seleccione 1 para un ingreso de prodcuto o 2 para una salida de los mismos");
    }
    echo "se finalizo la jornada con un un stock final de $stock_inicial, y se retiro una cantidad total de $contadoretiro, tan solo ingreso en el dia una cantidad de cajones equivalente a $contadoringreso";
?>