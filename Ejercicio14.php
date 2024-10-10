<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .tabla {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Tablas de Multiplicar</h1>
    
    <?php
    // Valores para las tablas de multiplicar
    $valores = [3, 4, 5, 6];

    // Inicializar el contador de valores
    $i = 0;

    // Bucle while para recorrer los valores
    while ($i < count($valores)) {
        $numero = $valores[$i]; // Obtener el valor actual

        echo "<div class='tabla'><h2>Tabla de Multiplicar del $numero</h2>";
        
        // Inicializar el contador para la multiplicación
        $j = 1;

        // Bucle while para imprimir la tabla de multiplicar del número actual
        while ($j <= 10) {
            print "$numero x $j = " . ($numero * $j) . "<br>"; // Imprime la multiplicación
            $j++; // Incrementar el contador de multiplicación
        }

        echo "</div>";
        $i++; // Incrementar el contador de valores
    }
    ?>
</body>
</html>
