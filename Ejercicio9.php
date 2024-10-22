<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" step="any" required>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" step="any" required>

        <label for="operation">Operación:</label>
        <select id="operation" name="operation" required>
            <option value="">Seleccione una operación</option>
            <option value="sum">Suma</option>
            <option value="sub">Resta</option>
            <option value="mul">Multiplicación</option>
            <option value="div">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verificar si el formulario ha sido enviado
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        // Recoger los valores del formulario
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operation = $_POST['operation'];

        // Variable para almacenar el resultado
        $resultado = '';

        // Realizar la operación seleccionada
        switch ($operation) {
            case 'sum':
                $resultado = $num1 + $num2;
                $operacionRealizada = "Suma: $num1 + $num2 = $resultado";
                break;
            case 'sub':
                $resultado = $num1 - $num2;
                $operacionRealizada = "Resta: $num1 - $num2 = $resultado";
                break;
            case 'mul':
                $resultado = $num1 * $num2;
                $operacionRealizada = "Multiplicación: $num1 * $num2 = $resultado";
                break;
            case 'div':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    $operacionRealizada = "División: $num1 / $num2 = $resultado";
                } else {
                    $operacionRealizada = "Error: No se puede dividir entre cero.";
                }
                break;
            default:
                $operacionRealizada = "Operación no válida.";
                break;
        }

        // Mostrar el resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>$operacionRealizada</p>";
    }
    ?>
</body>
</html>
