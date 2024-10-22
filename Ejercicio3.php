<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresiones Condicionales</title>
</head>
<body>
    <h1>Expresiones Condicionales</h1>

    <form method="POST">
        <label for="europeo">Introduce el valor de europeo (1 o 0):</label><br>
        <input type="number" id="europeo" name="europeo" min="0" max="1" required><br><br>

        <label for="casado">Introduce el valor de casado (1 o 0):</label><br>
        <input type="number" id="casado" name="casado" min="0" max="1" required><br><br>

        <label for="edad">Introduce la edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="saldo">Introduce el saldo:</label><br>
        <input type="number" id="saldo" name="saldo" step="0.01" required><br><br>

        <input type="submit" value="Evaluar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos los valores introducidos por el usuario
        $europeo = $_POST['europeo'];
        $casado = $_POST['casado'];
        $edad = $_POST['edad'];
        $saldo = $_POST['saldo'];

        echo "<h2>Resultados:</h2>";

        // Condición 1: europeo es igual a 1 y casado es igual a 0
        if ($europeo == 1 && $casado == 0) {
            echo "<p>Condición 1 cumplida: Europeo es 1 y Casado es 0.</p>";
        } else {
            echo "<p>Condición 1 no se cumple.</p>";
        }

        // Condición 2: saldo es superior a 10000 o europeo es igual a 0 y edad divisible por 4
        if ($saldo > 10000 || ($europeo == 0 && $edad % 4 == 0)) {
            echo "<p>Condición 2 cumplida: Saldo es superior a 10000 o (Europeo es 0 y Edad es divisible por 4).</p>";
        } else {
            echo "<p>Condición 2 no se cumple.</p>";
        }
    }
    ?>
</body>
</html>
