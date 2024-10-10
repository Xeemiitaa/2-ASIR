<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos entre dos valores</title>
</head>
<body>
    <h1>Números Primos entre dos valores</h1>

    <form method="POST">
        <!-- Formulario para ingresar dos números -->
        <label for="numero1">Introduce el primer número:</label><br>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Introduce el segundo número:</label><br>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los dos números ingresados
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        // Función para verificar si un número es primo
        function esPrimo($num) {
            if ($num <= 1) return false; // Números menores o iguales a 1 no son primos
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false; // No es primo si es divisible por algún número
            }
            return true; // Si no fue divisible por ningún número, es primo
        }

        // Asegurarse de que el primer número sea menor que el segundo
        if ($num1 > $num2) {
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
        }

        // Generar los números primos entre num1 y num2
        $primos = array();
        for ($i = $num1; $i <= $num2; $i++) {
            if (esPrimo($i)) {
                $primos[] = $i; // Añadir el número primo al array
            }
        }

        // Mostrar los números primos separados por comas y el último con punto
        if (count($primos) > 0) {
            echo "<h2>Números primos entre $num1 y $num2:</h2>";
            echo "<p>" . implode(", ", array_slice($primos, 0, -1)) . ", " . end($primos) . ".</p>";
        } else {
            echo "<h2>No hay números primos entre $num1 y $num2.</h2>";
        }
    }
    ?>
</body>
</html>
