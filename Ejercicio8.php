<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Mayor de 50000</title>
</head>
<body>
    <h1>Números hasta que el factorial sea mayor de 50000</h1>

    <?php
    // Función para calcular el factorial de un número
    function factorial($n) {
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }

    $n = 1;  // Empezamos con el número 1

    // Vamos a visualizar los números y detenernos cuando el factorial sea mayor de 50000
    while (true) {
        echo $n . " ";  // Visualizamos el número actual

        $fact = factorial($n);  // Calculamos el factorial de $n

        if ($fact > 50000) {
            // Si el factorial es mayor de 50000, mostramos el número y salimos del bucle
            echo "<br><br>El número más pequeño cuyo factorial es mayor de 50000 es: $n";
            break;
        }

        $n++;  // Incrementamos el número para la siguiente iteración
    }
    ?>
</body>
</html>
