<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Serie de Números</title>
</head>
<body>
    <h1>Generar Serie de Números</h1>

    <form method="POST">
        <label for="cantidad">Cantidad de valores (num):</label>
        <input type="number" id="cantidad" name="cantidad" required min="1"><br><br>
        <input type="submit" value="Generar Serie">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger la cantidad de valores ingresados
        $cantidad = intval($_POST['cantidad']);

        // Inicializar el array para la serie
        $serie = [];
        for ($i = 0; $i < $cantidad; $i++) {
            // Generar la serie con los patrones
            if ($i % 2 == 0) {
                // Para índices pares: 1, 3, 5, ...
                $serie[] = $i + 1;  // 1, 3, 5, ...
            } else {
                // Para índices impares: 6, 10, 14, ...
                $serie[] = ($i * 2) + 4;  // 6, 10, 14, ...
            }
        }

        // Visualizar la serie
        echo "<h2>Serie Generada:</h2>";
        echo implode(", ", $serie);  // Convierte el array a cadena separada por comas
    }
    ?>
</body>
</html>
