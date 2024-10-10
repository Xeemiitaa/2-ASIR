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
    // Definimos el número de filas
    $filas = 10; // Puedes cambiar este número para aumentar o disminuir el tamaño del triángulo

    // Bucle para cada fila
    for ($i = 1; $i <= $filas; $i++) {
        // Bucle para imprimir los asteriscos en cada fila
        for ($j = 1; $j <= $i; $j++) {
            // Imprimir un asterisco sin usar echo en forma de cadena
            print "*"; // Alternativa a echo
        }
        // Nueva línea después de cada fila
        print "\n"; // Alternativa para crear nueva línea
    }
    ?>
    </pre>
</body>
</html>
