<?php

// Simulación de valores (puedes cambiarlos o recibirlos por POST/GET)
$h = 14;  // Hora (0-23)
$m = 25;  // Minuto (0-59)

// Validación
if ($h < 0 || $h > 23 || $m < 0 || $m > 59) {
    echo "Hora o minuto inválido.";
    exit;
}

// Convertir a formato 12 horas
$hh = $h % 12;

// Variables para hora y minuto final
$hf = 0;
$mf = 0;

// Cálculo del reloj espejo
if ($m == 0) {
    $mf = 0;
    $hf = 12 - $hh;
} else {
    $mf = 60 - $m;
    $hf = 12 - $hh - 1;
}

// Ajustes finales
if ($hf <= 0) {
    $hf += 12;
}

if ($hf == 0) {
    $hf = 12;
}

// Formatear con 2 dígitos
$horaFinal = str_pad($hf, 2, "0", STR_PAD_LEFT);
$minFinal = str_pad($mf, 2, "0", STR_PAD_LEFT);

// Mostrar resultado
echo "Hora espejo: " . $horaFinal . ":" . $minFinal;

?>
