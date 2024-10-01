//Dado dos numeros en un formulario y un boton de radio , pedir dos numeros y un boto de radio con dos opciones, sumar o restar
si el usuario pulsa en sumar , al pulsar en el boton de calcular se sumen los numeros 
y si el usuario le da a restar , cuando pulsemos en calcular se resten los numeros //

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <h1>Calculadora Simple</h1>
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br>

        <input type="radio" name="operacion" value="sumar" required> Sumar<br>
        <input type="radio" name="operacion" value="restar" required> Restar<br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Paso 2: Obtener los valores del formulario
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        // Paso 3: Realizar la operación deseada
        if ($operacion == 'sumar') {
            $resultado = $numero1 + $numero2;
            echo "<h2>El resultado de la suma es: $resultado</h2>";
        } elseif ($operacion == 'restar') {
            $resultado = $numero1 - $numero2;
            echo "<h2>El resultado de la resta es: $resultado</h2>";
        }
    }
    ?>
</body>
</html>
