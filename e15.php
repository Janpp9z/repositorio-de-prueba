<!-- Escribir un programa que lea números enteros de teclado hasta que encuentre uno que cumpla las
siguientes condiciones:
• Múltiplo de 2.
• No múltiplo de 5.
• Mayor que 100.
• Menor que 10.000. -->

<?php

$e = readline('ingrese el valor : ');

while ($e % 2 == 0 && $e > 100 && $e <10000 && $e % 5 >=1) {
    echo "este es el elegido";
}





?>