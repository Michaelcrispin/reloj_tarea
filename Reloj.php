<?php

$h = 14;
$m = 25;

if ($h < 0 || $h > 23 || $m < 0 || $m > 59) {
    echo "Hora o minuto inválido.";
    exit;
}

$hh = $h % 12;

if ($m == 0) {
    $mf = 0;
    $hf = 12 - $hh;
} else {
    $mf = 60 - $m;
    $hf = 12 - $hh - 1;
}

if ($hf <= 0) {
    $hf += 12;
}

if ($hf == 0) {
    $hf = 12;
}

$horaFinal = str_pad($hf, 2, "0", STR_PAD_LEFT);
$minFinal = str_pad($mf, 2, "0", STR_PAD_LEFT);

echo $horaFinal . ":" . $minFinal;

?>
