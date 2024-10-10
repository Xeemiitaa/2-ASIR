<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Número Par o Impar</title>
</head>
<body>
    <h1>Verificación de Número Par o Impar</h1>
    
    <form method="POST">
        <label for="numero">Introduce un número:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        
        <input type="submit" value="Evaluar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos el valor introducido por el usuario
        $numero = $_POST['numero'];

        echo "<h2>Resultado:</h2>";

        // Verificamos si el número es par o impar
        if ($numero % 2 == 0) {
            echo "<p>El número $numero es par.</p>";
        } else {
            echo "<p>El número $numero es impar.</p>";
        }
    }
    ?>
</body>
</html>
