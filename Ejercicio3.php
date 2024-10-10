<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Números</title>
</head>
<body>
    <h1>Verificación de Valores</h1>
    
    <form method="POST">
        <h2>Introduce 7 valores numéricos:</h2>
        <!-- Cajas de texto para ingresar 7 números -->
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "<label for='numero$i'>Número $i:</label><br>";
            echo "<input type='number' id='numero$i' name='numeros[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los números ingresados
        $numeros = $_POST['numeros'];

        // Función para verificar si un número es primo
        function esPrimo($num) {
            if ($num <= 1) return false; // Números menores o iguales a 1 no son primos
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false; // No es primo si es divisible por algún número diferente de 1 y él mismo
            }
            return true; // Si no fue divisible por ningún número, es primo
        }

        // A) Verificar si hay tres números 9
        $contarNueves = 0;
        foreach ($numeros as $num) {
            if ($num == 9) {
                $contarNueves++;
            }
        }

        // B) Verificar si hay al menos dos números pares
        $contarPares = 0;
        foreach ($numeros as $num) {
            if ($num % 2 == 0) { // Si es divisible por 2, es par
                $contarPares++;
            }
        }

        // C) Verificar si hay al menos un número primo
        $hayPrimo = false;
        foreach ($numeros as $num) {
            if (esPrimo($num)) {
                $hayPrimo = true;
                break; // No necesitamos seguir buscando más primos
            }
        }

        // Verificar si todas las condiciones se cumplen
        if ($contarNueves == 3 && $contarPares >= 2 && $hayPrimo) {
            echo "<h2>Resultado: SI</h2>";
        } else {
            echo "<h2>Resultado: NO</h2>";
        }
    }
    ?>
</body>
</html>
