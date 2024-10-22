<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de la Nota</title>
</head>
<body>
    <h1>Evaluación de la Nota</h1>
    
    <form method="POST">
        <label for="nota">Introduce una nota entre 0 y 10:</label><br>
        <input type="number" id="nota" name="nota" min="0" max="10" required><br><br>
        
        <input type="submit" value="Evaluar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos el valor de la nota introducido por el usuario
        $nota = $_POST['nota'];

        echo "<h2>Resultado:</h2>";
        
        // Estructura switch para evaluar la nota
        switch (true) {
            case ($nota >= 0 && $nota <= 2):
                echo "<p>Muy deficiente</p>";
                break;
            case ($nota == 3 || $nota == 4):
                echo "<p>Deficiente</p>";
                break;
            case ($nota == 5):
                echo "<p>Aprobado</p>";
                break;
            case ($nota == 6):
                echo "<p>Bien</p>";
                break;
            case ($nota == 7 || $nota == 8):
                echo "<p>Notable</p>";
                break;
            case ($nota == 9 || $nota == 10):
                echo "<p>Sobresaliente</p>";
                break;
            default:
                echo "<p>Error: Nota no válida</p>";
                break;
        }
    }
    ?>
</body>
</html>
