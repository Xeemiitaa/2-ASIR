// Dado cinco numeros en formulario utilizar dos checkbox que indique suma y resta , de forma que el usuario pueda elegir suma, resta o ambas o ninguna //

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Números</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Calculadora de Suma y Resta</h1>
    <form action="" method="POST">
        <label for="valor1">Número 1:</label>
        <input type="number" name="valor1" required><br><br>

        <label for="valor2">Número 2:</label>
        <input type="number" name="valor2" required><br><br>

        <label for="valor3">Número 3:</label>
        <input type="number" name="valor3" required><br><br>

        <label for="valor4">Número 4:</label>
        <input type="number" name="valor4" required><br><br>

        <label for="valor5">Número 5:</label>
        <input type="number" name="valor5" required><br><br>

        <h3>Seleccione la operación que desea realizar:</h3>
        <input type="checkbox" name="check1"> Sumar<br>
        <input type="checkbox" name="check2"> Restar<br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los valores ingresados
        $valores = [
            $_POST['valor1'],
            $_POST['valor2'],
            $_POST['valor3'],
            $_POST['valor4'],
            $_POST['valor5']
        ];

        // Inicializar resultados
        $suma = 0;
        $resta = $valores[0]; // Comenzar la resta con el primer número

        // Calcular la suma si está seleccionada
        if (isset($_POST['check1'])) {
            $suma = array_sum($valores);
            echo "<h2>La suma es: " . $suma . "</h2>";
        }

        // Calcular la resta si está seleccionada
        if (isset($_POST['check2'])) {
            for ($i = 1; $i < count($valores); $i++) {
                $resta -= $valores[$i];
            }
            echo "<h2>La resta es: " . $resta . "</h2>";
        }

        // Mensaje si no se seleccionó ninguna operación
        if (!isset($_POST['check1']) && !isset($_POST['check2'])) {
            echo "<h2>No se seleccionó ninguna operación.</h2>";
        }
    }
    ?>
</body>
</html>

