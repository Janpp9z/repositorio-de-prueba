<?php
// Suponga que tiene usted una tienda y desea registrar las ventas en su computadora. Diseñe un
// algoritmo que lea por cada cliente, el monto total de su compra. Al final del día que escriba la
// cantidad total de ventas y el número de clientes atendidos.

$e=readline('nueva venta: ');
$clientes=0;
$total=0;

while ($e != "++") {
    if ($e == "si"){
        $venta = readline('Ingrese la cantidad de productos vendidos: ');
        $clientes++;
        $total +=$venta;
    }else if ($e != "si") {
        $venta = readline('Ingrese la cantidad de productos vendidos: ');
        $total +=$venta;
    }
    $e=readline('nueva venta: ');
}

echo "cantidad de clientes es $clientes y el total de ventas fue $total";
?>