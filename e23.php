<?php
// Escribir un programa que vaya pidiendo al usuario valores enteros hasta que introduzca un valor
// negativo, después debe indicar los 3 valores mayores. Por ejemplo, si el usuario introduce los
// números: 1, 34, 45, 3, 2, 10, 9, 8, 78, 55, 3, 78, 43 y -5, el programa deber a mostrar: 78, 55, 45.
// Nótese que en el ejemplo el valor 78 aparece dos veces, pero solo se considera una vez entre los tres
// mayores. Es decir, los valores máximos repetidos únicamente se tienen en cuenta una vez. El orden
// en el que aparezcan los 3 valores máximos es irrelevante. Aunque en el ejemplo salgan ordenados
// de mayor a menor, al revés o sin orden también es correcto. Si el usuario introduce menos de tres
// valores el programa sólo mostrará como mayores los que se han introducido. Por ejemplo, si el
// usuario introduce: 3, 78, -5, la solución será: 3, 78.
$valores=readline('ingrese un valor entero: ');
$mayor1 = 0;
$mayor2 = 0;
$mayor3 = 0;

while ($valores > 0) {
    if ($valores != $mayor1) {
        if ($valores >$mayor1) {
            $mayor1=$valores;
        }
    }
    if ($valores != $mayor2 && $valores != $mayor1) {
        if ($valores >$mayor2) {
            $mayor2=$valores;
        }
    }
    if ($valores != $mayor3 && $valores != $mayor2 && $valores != $mayor1) {
        if ($valores >$mayor3) {
            $mayor3=$valores;
        }
    }
    $valores=readline('ingrese un valor entero: ');
}

if ($mayor1 <= 0) {
  if ($mayor2 > $mayor3) {
      echo "los valores con mayor numeracion son $mayor2, presedido por $mayor3";
  }else{
      echo "los valores con mayor numeracion son $mayor3, presedido por $mayor2";
  }       
}
if ($mayor2 <= 0) {
    if ($mayor1 > $mayor3) {
        echo "los valores con mayor numeracion son $mayor1, presedido por $mayor3";
    }else{
        echo "los valores con mayor numeracion son $mayor3, presedido por $mayor1";
    }       
}
if ($mayor3 <= 0){
    if ($mayor1 > $mayor2) {
        echo "los valores con mayor numeracion son $mayor1, presedido por $mayor2";
    }else{
        echo "los valores con mayor numeracion son $mayor2, presedido por $mayor1";
    }   
}else{
    if ($mayor1 > $mayor2 && $mayor1 > $mayor3) {
        if ($mayor2 > $mayor3) {
            echo "los valores con mayor numeracion son $mayor1, presedido por $mayor2, y posteriormente $mayor3";
        }else{
            echo "los valores con mayor numeracion son $mayor1, presedido por $mayor3, y posteriormente $mayor2";
        }
    }else if ($mayor2 > $mayor1 && $mayor2 > $mayor3) {
       if ($mayor1 > $mayor3) {
            echo "los valores con mayor numeracion son $mayor2, presedido por $mayor1, y posteriormente $mayor3";
       }else{
            echo "los valores con mayor numeracion son $mayor2, presedido por $mayor3, y posteriormente $mayor1";
       }
    }else{
        if ($mayor2 > $mayor1) {
            echo "los valores con mayor numeracion son $mayor3, presedido por $mayor2, y posteriormente $mayor1";
       }else{
            echo "los valores con mayor numeracion son $mayor3, presedido por $mayor1, y posteriormente $mayor2";
       }
    }
}

    

?>