<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Suma y Producto</title>
</head>
<body>
    <h1>Comparar Suma y Producto de Dos Números</h1>
    
    <form method="POST">
        <label for="num1">Introduce el primer número:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Introduce el segundo número:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" value="Evaluar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Tomamos los valores introducidos por el usuario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Calculamos la suma y el producto
        $suma = $num1 + $num2;
        $producto = $num1 * $num2;

        echo "<h2>Resultados:</h2>";

        // Comparamos la suma y el producto
        if ($suma > $producto) {
            echo "<p>La suma ($suma) es superior al producto ($producto).</p>";
        } elseif ($producto > $suma) {
            echo "<p>El producto ($producto) es superior a la suma ($suma).</p>";
        } else {
            echo "<p>La suma y el producto son iguales.</p>";
        }
    }
    ?>
</body>
</html>
