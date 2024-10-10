<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figura de Asteriscos</title>
</head>
<body>
    <h1>Figura de Asteriscos con do-while</h1>

    <h2>Triángulo de Asteriscos:</h2>
    <pre>
    <?php
    // Número de filas del triángulo
    $filas = 5; // Cambia este valor para ajustar el tamaño del triángulo

    // Inicializamos el contador de filas
    $i = 1;

    // Bucle do-while para las filas
    do {
        // Inicializamos el contador de columnas
        $j = 1;

        // Bucle do-while para imprimir los asteriscos en cada fila
        do {
            print "*"; // Imprime un asterisco
            $j++; // Incrementamos el contador de columnas
        } while ($j <= $i); // Se repite mientras el contador de columnas sea menor o igual que la fila

        // Nueva línea después de cada fila
        print "\n";

        $i++; // Incrementamos el contador de filas
    } while ($i <= $filas); // Se repite mientras el contador de filas sea menor o igual que el número de filas
    ?>
    </pre>
</body>
</html>
