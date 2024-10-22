<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Exponenciales</title>
</head>
<body>
    <h1>Cálculo de Exponenciales</h1>

    <form method="POST">
        <h2>Primer Exponencial</h2>
        <label for="base1">Base 1:</label>
        <input type="number" id="base1" name="base1" required><br><br>
        <label for="exponente1">Exponente 1:</label>
        <input type="number" id="exponente1" name="exponente1" required><br><br>

        <h2>Segundo Exponencial</h2>
        <label for="base2">Base 2:</label>
        <input type="number" id="base2" name="base2" required><br><br>
        <label for="exponente2">Exponente 2:</label>
        <input type="number" id="exponente2" name="exponente2" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los valores ingresados
        $base1 = intval($_POST['base1']);
        $exponente1 = intval($_POST['exponente1']);
        $base2 = intval($_POST['base2']);
        $exponente2 = intval($_POST['exponente2']);

        // Función para calcular exponencial
        function calcularExponencial($base, $exponente) {
            $resultado = 1;
            for ($i = 0; $i < $exponente; $i++) {
                $resultado *= $base; // Multiplicamos la base
            }
            return $resultado; // Devolvemos el resultado
        }

        // Calcular ambos exponenciales
        $exponencial1 = calcularExponencial($base1, $exponente1);
        $exponencial2 = calcularExponencial($base2, $exponente2);

        // Mostrar resultados
        echo "<h2>Resultados:</h2>";
        echo "$base1 elevado a $exponente1 es: $exponencial1<br>";
        echo "$base2 elevado a $exponente2 es: $exponencial2<br>";

        // Comparar los exponenciales
        if ($exponencial1 == $exponencial2) {
            echo "Ambos exponenciales son iguales.";
        } elseif ($exponencial1 > $exponencial2) {
            echo "$exponencial1 es mayor que $exponencial2.";
        } else {
            echo "$exponencial2 es mayor que $exponencial1.";
        }
    }
    ?>
</body>
</html>
