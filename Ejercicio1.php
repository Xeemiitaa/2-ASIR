<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números: Positiva, Negativa o Cero</title>
</head>
<body>
    <h1>Comprobación de la suma de dos números</h1>
    
    <form method="POST">
        <label for="num1">Introduce el primer número (a):</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Introduce el segundo número (b):</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos los valores introducidos por el usuario
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $suma = $a + $b;

        echo "<h2>Resultado:</h2>";
        // Verificamos si la suma es positiva, negativa o cero
        if ($suma > 0) {
            echo "<p>La suma de $a y $b es $suma, que es positiva.</p>";
        } elseif ($suma < 0) {
            echo "<p>La suma de $a y $b es $suma, que es negativa.</p>";
        } else {
            echo "<p>La suma de $a y $b es $suma, que es igual a cero.</p>";
        }
    }
    ?>
</body>
</html>
