<?php
// Calcular la nota promedio de un salón de clase y la nota mayor y el código del estudiante
// que la obtuvo, validar que las notas ingresadas se encuentren en el intervalo [0,10]. El
// ingreso de notas finaliza a pedido del operador.
$nombre = readline('ingrese el nombre del alumno: ');
$nota = readline('ingrese la nota correspondiente al alumno: ');
$nom="";
$notascurso=0;
$mayor=0;
$contador=0;
while ($nombre != "--") {
    if ($nota <= 10 && $nota >= 0) {
        if ($nota>$mayor) {
            $mayor=$nota;
            $nom=$nombre;
        }
        $notascurso+=$nota;
    }
    $contador++;
    $nombre = readline('ingrese el nombre del alumno: ');
    $nota = readline('ingrese la nota correspondiente al alumno: ');
}

$promedio=$notascurso/$contador;
echo "la nota promedio del curso gira en base a un $promedio, mientras que el alumno con mejor nota es $nom, con una nota final de $mayor";


?>