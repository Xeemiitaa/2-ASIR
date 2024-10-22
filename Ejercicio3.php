<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Perfectos en PHP</title>
</head>
<body>
    <h1>Verificación de Números Perfectos</h1>

    <form method="POST">
        <label for="valor1">Primer Valor:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Segundo Valor:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <label for="valor3">Tercer Valor:</label>
        <input type="number" id="valor3" name="valor3" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los valores ingresados
        $valor1 = intval($_POST['valor1']);
        $valor2 = intval($_POST['valor2']);
        $valor3 = intval($_POST['valor3']);

        // Función para verificar si un número es perfecto
        function esPerfecto($numero) {
            $sumaDivisores = 0;

            // Encontrar los divisores y sumarlos
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $sumaDivisores += $i; // Sumar el divisor
                }
            }

            return $sumaDivisores == $numero; // Comprobar si es perfecto
        }

        // Verificar cada número y mostrar resultados
        $resultado1 = esPerfecto($valor1) ? "SI" : "NO";
        $resultado2 = esPerfecto($valor2) ? "SI" : "NO";
        $resultado3 = esPerfecto($valor3) ? "SI" : "NO";

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "El número $valor1 es perfecto: $resultado1<br>";
        echo "El número $valor2 es perfecto: $resultado2<br>";
        echo "El número $valor3 es perfecto: $resultado3<br>";

        // Verificar si los tres son perfectos
        if ($resultado1 == "SI" && $resultado2 == "SI" && $resultado3 == "SI") {
            echo "Los tres números son perfectos.";
        } else {
            echo "No todos los números son perfectos.";
        }
    }
    ?>
</body>
</html>
