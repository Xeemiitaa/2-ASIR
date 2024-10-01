//Dado un solo numero visualizar si es par o impar, usa formularios

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par o Impar</title>
</head>
<body>
    <h1>Verificar si un número es par o impar</h1>
    <form action="" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Verificar">
    </form>
    
    <?php
    // Código PHP para verificar si el número es par o impar
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        
        // Verificar si el número es par o impar
        if ($numero % 2 == 0) {
            echo "<p>El número $numero es par.</p>";
        } else {
            echo "<p>El número $numero es impar.</p>";
        }
    }
    ?>
</body>
</html>
