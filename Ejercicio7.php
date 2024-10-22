<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Par e Impar</title>
</head>
<body>
    <h1>Encontrar Números Par e Impar</h1>

    <form method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger el número ingresado
        $numero = intval($_POST['numero']);

        // Función para encontrar el primer número par y el primer número impar
        function encontrarNumeros($n) {
            // Encontrar el primer número par mayor
            $parSiguiente = $n + 1;
            if ($parSiguiente % 2 != 0) {
                $parSiguiente++; // Si es impar, sumar 1 más para hacerlo par
            }

            // Encontrar el primer número impar menor
            $imparInferior = $n - 1;
            if ($imparInferior % 2 == 0) {
                $imparInferior--; // Si es par, restar 1 para hacerlo impar
            }

            return [$parSiguiente, $imparInferior]; // Retornar ambos resultados
        }

        // Función para visualizar los resultados
        function visualizarResultados($par, $impar) {
            echo "<h2>Resultados:</h2>";
            echo "El primer número par mayor es: $par<br>";
            echo "El primer número impar menor es: $impar<br>";
        }

        // Llamar a la función para encontrar los números
        list($parSiguiente, $imparInferior) = encontrarNumeros($numero);
        
        // Llamar a la función para visualizar los resultados
        visualizarResultados($parSiguiente, $imparInferior);
    }
    ?>
</body>
</html>
