<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Sueldo</title>
</head>
<body>
    <h1>Verificación de Sueldo</h1>
    
    <form method="POST">
        <label for="sueldo">Introduce tu sueldo:</label><br>
        <input type="number" id="sueldo" name="sueldo" step="0.01" required><br><br>
        
        <input type="submit" value="Evaluar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos el valor introducido por el usuario
        $sueldo = $_POST['sueldo'];

        echo "<h2>Resultado:</h2>";

        // Verificamos si el sueldo es superior a 600
        if ($sueldo > 600) {
            echo "<p>El sueldo es superior a 600.</p>";
        }

        // Verificamos si el sueldo es superior a 1200
        if ($sueldo > 1200) {
            echo "<p>El sueldo es superior a 1200.</p>";
        }

        // Verificamos si el sueldo es superior a 1800
        if ($sueldo > 1800) {
            echo "<p>El sueldo es superior a 1800.</p>";
        }
    }
    ?>
</body>
</html>
