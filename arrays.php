// Se declara array con 7 numeros numericos y obtener el mayor

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de 7 Números</title>
</head>
<body>
    <h2>Número Mayor de un Array Predefinido</h2>

    <?php
    // Declarar un array con 7 números
    $numeros = [45, 22, 89, 13, 90, 77, 56];

    // Obtener el número mayor
    $numero_mayor = max($numeros);

    // Mostrar el array de números
    echo "<h3>Los números son: " . implode(", ", $numeros) . "</h3>";

    // Mostrar el número mayor
    echo "<h3>El número mayor es: $numero_mayor</h3>";
    ?>

</body>
</html>
