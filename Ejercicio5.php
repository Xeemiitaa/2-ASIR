<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Números Primos</title>
</head>
<body>
    <h1>Verificación de Números Primos</h1>

    <form method="POST">
        <label for="n1">Número 1:</label>
        <input type="number" id="n1" name="n1" required><br><br>

        <label for="n2">Número 2:</label>
        <input type="number" id="n2" name="n2" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los números ingresados
        $n1 = intval($_POST['n1']);
        $n2 = intval($_POST['n2']);

        // Función para verificar si un número es primo
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false; // Números menores o iguales a 1 no son primos
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false; // Si es divisible, no es primo
                }
            }
            return true; // Si no es divisible por ningún número, es primo
        }

        // Usar switch para determinar si n1 es primo
        $sw1 = esPrimo($n1) ? 1 : 0;

        // Usar switch para determinar si n2 es primo
        $sw2 = esPrimo($n2) ? 1 : 0;

        // Mostrar resultados
        echo "<h2>Resultados:</h2>";

        switch ($sw1) {
            case 1:
                echo "$n1 es primo.<br>";
                break;
            case 0:
                echo "$n1 no es primo.<br>";
                break;
        }

        switch ($sw2) {
            case 1:
                echo "$n2 es primo.<br>";
                break;
            case 0:
                echo "$n2 no es primo.<br>";
                break;
        }

        // Comprobar si ambos son primos y calcular la media
        if ($sw1 === 1 && $sw2 === 1) {
            $media = ($n1 + $n2) / 2;
            echo "AMBOS SON PRIMOS. La media de ambos es: $media";
        }
    }
    ?>
</body>
</html>
