<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División mediante Restas Sucesivas</title>
</head>
<body>
    <h1>División mediante Restas Sucesivas</h1>

    <form method="POST">
        <!-- Formulario para ingresar dos números -->
        <label for="dividendo">Ingresa el dividendo:</label><br>
        <input type="number" id="dividendo" name="dividendo" required><br><br>

        <label for="divisor">Ingresa el divisor:</label><br>
        <input type="number" id="divisor" name="divisor" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los datos del formulario
        $dividendo = $_POST['dividendo'];
        $divisor = $_POST['divisor'];

        // Comprobar si el divisor es 0
        if ($divisor == 0) {
            echo "<h2>Error: No se puede dividir entre cero.</h2>";
        } else {
            // Inicializar el cociente a 0
            $cociente = 0;
            $residuo = $dividendo;

            // Realizar restas sucesivas mientras el residuo sea mayor o igual que el divisor
            while ($residuo >= $divisor) {
                $residuo -= $divisor; // Restamos el divisor al residuo
                $cociente++; // Incrementamos el cociente
            }

            // Mostrar el resultado
            echo "<h2>Resultado de la división:</h2>";
            echo "<p>Dividendo: $dividendo</p>";
            echo "<p>Divisor: $divisor</p>";
            echo "<p>Cociente: $cociente</p>";
            echo "<p>Residuo: $residuo</p>";
        }
    }
    ?>
</body>
</html>
