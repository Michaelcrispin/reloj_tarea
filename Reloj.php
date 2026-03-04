<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $h = (int)$_POST["hora"];
    $m = (int)$_POST["minuto"];

    if ($h < 0 || $h > 23 || $m < 0 || $m > 59) {
        $resultado = "Datos inválidos";
    } else {

        $hh = $h % 12;

        if ($m == 0) {
            $mf = 0;
            $hf = 12 - $hh;
        } else {
            $mf = 60 - $m;
            $hf = 12 - $hh - 1;
        }

        if ($hf <= 0) $hf += 12;
        if ($hf == 0) $hf = 12;

        $resultado = "Hora espejo: " .
            str_pad($hf, 2, "0", STR_PAD_LEFT) . ":" .
            str_pad($mf, 2, "0", STR_PAD_LEFT);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reloj Espejo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }

        .container {
            background: white;
            width: 300px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input {
            width: 80px;
            padding: 5px;
            margin: 5px;
        }

        button {
            padding: 6px 12px;
            cursor: pointer;
        }

        .resultado {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Reloj Espejo</h2>

    <form method="POST">
        <input type="number" name="hora" placeholder="Hora (0-23)" required>
        <input type="number" name="minuto" placeholder="Min (0-59)" required>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>
</div>

</body>
</html>
