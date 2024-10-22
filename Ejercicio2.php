<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación: Nota, Edad y Sexo</title>
</head>
<body>
    <h1>Validación de Nota, Edad y Sexo</h1>
    
    <form method="POST">
        <label for="nota">Introduce la nota:</label><br>
        <input type="number" id="nota" name="nota" step="0.1" required><br><br>
        
        <label for="edad">Introduce la edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="sexo">Introduce el sexo (V/M):</label><br>
        <input type="text" id="sexo" name="sexo" maxlength="1" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos los valores introducidos por el usuario
        $nota = $_POST['nota'];
        $edad = $_POST['edad'];
        $sexo = strtolower($_POST['sexo']);  // Convertimos a minúsculas para simplificar

        echo "<h2>Resultado:</h2>";

        // Comprobamos si la edad es menor de 18
        if ($edad < 18) {
            echo "<p>NO ES POSIBLE, es menor de edad.</p>";
        }
        // Comprobamos si la nota es menor de 5
        elseif ($nota < 5) {
            echo "<p>NO ES POSIBLE, nota suspensa.</p>";
        }
        // Si la nota es aprobada y la edad es mayor o igual a 18
        else {
            if ($sexo == 'v') {
                echo "<p>ACEPTADO.</p>";
            } elseif ($sexo == 'm') {
                echo "<p>ACEPTADA.</p>";
            } else {
                echo "<p>Sexo no válido, por favor introduce 'V' o 'M'.</p>";
            }
        }
    }
    ?>
</body>
</html>
