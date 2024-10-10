<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figura de Asteriscos</title>
</head>
<body>
    <h1>Figura de Asteriscos</h1>

    <h2>Triángulo de Asteriscos:</h2>
    <pre>
    <?php
    // Número de filas del triángulo
    $filas = 5; // Puedes cambiar el número de filas para hacer el triángulo más grande o más pequeño

    // Inicializamos el contador de filas
    $i = 1;

    // Bucle while para las filas
    while ($i <= $filas) {
        // Inicializamos el contador de columnas
        $j = 1;

        // Bucle while para imprimir los asteriscos en cada fila
        while ($j <= $i) {
            print "*"; // Imprime un asterisco
            $j++; // Incrementamos el contador de columnas
        }

        // Nueva línea después de cada fila
        print "\n";

        $i++; // Incrementamos el contador de filas
    }
    ?>
    </pre>
</body>
</html>
