// Dado 7 valores en un formulario con sus respectivas cajas de texto de timpo numero, visualizar aquellos valores en PHP que sean superiores a la media de los numeros //

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Números</title>
</head>
<body>
    <h1>Ingrese 7 Números</h1>
    <form action="" method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br>

        <label for="num4">Número 4:</label>
        <input type="number" name="num4" required><br>

        <label for="num5">Número 5:</label>
        <input type="number" name="num5" required><br>

        <label for="num6">Número 6:</label>
        <input type="number" name="num6" required><br>

        <label for="num7">Número 7:</label>
        <input type="number" name="num7" required><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    // Comprobar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los valores de los inputs del formulario
        $numeros = [
            $_POST['num1'],
            $_POST['num2'],
            $_POST['num3'],
            $_POST['num4'],
            $_POST['num5'],
            $_POST['num6'],
            $_POST['num7']
        ];

        // Convertirlos a números flotantes
        $numeros = array_map('floatval', $numeros);

        // Calcular la media
        $media = array_sum($numeros) / count($numeros);

        echo "<h2>Valores superiores a la media ($media):</h2>";

        // Mostrar los valores superiores a la media
        $hayValoresSuperiores = false; // Variable para verificar si hay valores superiores
        foreach ($numeros as $numero) {
            if ($numero > $media) {
                echo $numero . "<br>";
                $hayValoresSuperiores = true; // Cambiar a true si hay un valor superior
            }
        }

        // Mensaje si no hay valores superiores
        if (!$hayValoresSuperiores) {
            echo "No hay valores superiores a la media.";
        }
    }
    ?>
</body>
</html>
