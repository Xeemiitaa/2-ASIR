<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Serie</title>
</head>
<body>
    <h1>Generar Serie Numérica</h1>

    <form method="POST">
        <label for="num">Introduce la cantidad de valores de la serie:</label><br>
        <input type="number" id="num" name="num" required><br><br>
        <input type="submit" value="Generar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger el valor del número ingresado
        $num = $_POST['num'];

        // Inicializamos la serie
        $serie = array();
        
        // Generamos la serie alternando entre dos secuencias
        $secuencia1 = 1; // Comienza en 1
        $secuencia2 = 5; // Comienza en 5

        for ($i = 0; $i < $num; $i++) {
            if ($i % 2 == 0) {
                // Si el índice es par, añadimos un número de la secuencia1
                $serie[] = $secuencia1;
                $secuencia1 += 2; // Incrementamos en 2 para la siguiente vez
            } else {
                // Si el índice es impar, añadimos un número de la secuencia2
                $serie[] = $secuencia2;
                $secuencia2 += 2; // Incrementamos en 2 para la siguiente vez
            }
        }

        // Mostrar la serie generada
        echo "<h2>Serie Generada:</h2>";
        echo "<p>" . implode(", ", $serie) . "</p>";
    }
    ?>
</body>
</html>
