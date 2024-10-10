<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Orden Ascendente</title>
</head>
<body>
    <h1>Verificar si los valores están ordenados ascendentemente</h1>

    <form method="POST">
        <!-- Cajas de texto para ingresar siete valores -->
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <label for="valor3">Valor 3:</label>
        <input type="number" id="valor3" name="valor3" required><br><br>

        <label for="valor4">Valor 4:</label>
        <input type="number" id="valor4" name="valor4" required><br><br>

        <label for="valor5">Valor 5:</label>
        <input type="number" id="valor5" name="valor5" required><br><br>

        <label for="valor6">Valor 6:</label>
        <input type="number" id="valor6" name="valor6" required><br><br>

        <label for="valor7">Valor 7:</label>
        <input type="number" id="valor7" name="valor7" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los valores ingresados
        $valores = array(
            $_POST['valor1'],
            $_POST['valor2'],
            $_POST['valor3'],
            $_POST['valor4'],
            $_POST['valor5'],
            $_POST['valor6'],
            $_POST['valor7']
        );

        // Verificar si los valores están ordenados de forma ascendente
        $ordenados = $valores;
        sort($ordenados);  // Ordena el array de forma ascendente

        // Comparar el array original con el ordenado
        if ($valores === $ordenados) {
            echo "<h2>Los valores están ordenados ascendentemente.</h2>";
        } else {
            echo "<h2>Los valores NO están ordenados ascendentemente.</h2>";
        }
    }
    ?>
</body>
</html>
