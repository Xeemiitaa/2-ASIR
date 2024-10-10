<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores de un Número</title>
</head>
<body>
    <h1>Encontrar Divisores de un Número</h1>
    
    <form method="POST">
        <label for="numero">Introduce un número entero positivo:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        
        <input type="submit" value="Encontrar Divisores">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos el valor introducido por el usuario
        $numero = $_POST['numero'];

        echo "<h2>Divisores de $numero:</h2>";
        echo "<ul>";

        // Encontrar y mostrar los divisores
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) { // Comprobar si i es un divisor de numero
                print "<li>$i</li>"; // Imprimir el divisor
            }
        }

        echo "</ul>";
    }
    ?>
</body>
</html>
