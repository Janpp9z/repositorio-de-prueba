<?php
// Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en
// letras que restan para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar
// octubre, noviembre y diciembre). Validar que se ingrese un número de mes válido y el proceso
// finaliza cuando el operador ingresa el valor cero. Muestre también los valores correctos e
// incorrectos ingresados por el usuario.
$q = readline('ingrese el mes con el que quiera calcular cuanto falta para finalizar el año: ');
$i = 0;
$c = 0;
while ($q != 0) {
    if ($q > 12 || $q < 1) {
       $i++; 
    }else{
        $c++;
        switch ($q) {
            case '1':
                echo "Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                break;
                case '2':
                    echo "Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                    break;
                    case '3':
                        echo "Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                        break;
                        case '4':
                            echo "Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                            break;
                            case '5':
                                echo "Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL; 
                                break;
                                case '6':
                                    echo "Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                                    break;
                                    case '7':
                                        echo "Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                                        break;
                                        case '8':
                                            echo "Agosto, Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                                            break;
                                            case '9':
                                                echo "Septiembre, Octubre, Noviembre, Diciembre" . PHP_EOL;
                                                break;
                                                case '10':
                                                    echo "Octubre, Noviembre, Diciembre" . PHP_EOL;
                                                    break;
                                                    case '11':
                                                        echo "Noviembre, Diciembre" . PHP_EOL;
                                                        break;
                                                        case '12':
                                                            echo "Diciembre" . PHP_EOL;
                                                            break;
        }
    }
    $q = readline('ingrese el mes con el que quiera calcular cuanto falta para finalizar el año: ');
}

if ($i>0) {
    echo "la cantidad de valores incorrectos ingresados son: $i, y los valores correctos fueron $c";
}else{
    echo "la cantidad de valores correctos fueron $c y no hubo fechas equivocadas";

}


?>