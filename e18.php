<!-- Un censista recopila ciertos datos aplicando encuestas para el último Censo Nacional de Población y
Vivienda. Desea procesar los datos de todas las personas que alcance a encuestar en un día y
obtener los porcentajes de estudios de niveles primario, secundario, superior no universitario,
universitario y de postgrado. -->
<?php
$contador=0;
$primariono=0;
$primariosi=0;
$secundariosi=0;
$secundariono=0;
$superiorsi=0;
$superiorno=0;
$universitariosi=0;
$universitariono=0;
$posgradosi=0;
$posgradono=0;

$e = readline('hay mas personas?');
while ($e != "no") {
    $primario=readline('la persona tiene estudios primarios? ');
    if ($primario == "si") {
        $primariosi++;
    }else{
        $primariono++;
    }
    $secundario=readline('la persona tiene estudios secundarios? ');
    if ($secundario == "si") {
        $secundariosi++;
    }else{
        $secundariono++;
    }
    $superior=readline('la persona tiene estudios superiores no universitarios? ');
    if ($superior == "si") {
        $superiorsi++;
    }else{
        $superiorno++;
    }
    $universitario=readline('la persona tiene estudios universitarios? ');
    if ($universitario == "si") {
        $universitariosi++;
    }else{
        $universitariono++;
    }
    $posgrado=readline('la persona tiene estudios de posgrado? ');
    if ($posgrado == "si") {
        $posgradosi++;
    }else{
        $posgradono++;
    }
    $contador++;
    $e = readline('hay mas personas?');    
}

$pprimariasi =  $primariosi / $contador ;
$pprimariano =  $primariono / $contador;
$psecundariosi = $secundariosi / $contador;
$psecundariono = $secundariono / $contador;
$psuperiorsi = $superiorsi / $contador;
$psuperiorno = $superiorno / $contador;
$puniversitariosi = $universitariosi / $contador;
$puniversitariono = $universitariono / $contador;
$pposgradosi = $posgradosi / $contador;
$pposgradono = $posgradono / $contador;

echo "el porcentaje de personas con primario finalizado es de $pprimariasi%, mientras que su contra parte es de $pprimariano%, a su vez la gente con estudioss secundarios son $psecundariosi%, mientras que su contra parte es de $psecundariono%, la gente con estudios superiores no universitarios son $psuperiorsi%, mientras que a la vez $psuperiorno%, no consta con ellos, las personas con estudios universitarios son $puniversitariosi%, mientras que a su vez $puniversitariono% no tiene estudios universitarios, y por ultimo las personas con posgrado son un total de $pposgradosi%, y las personas sin el mismo son $pposgradono%";










?>