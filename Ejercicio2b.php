<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle For en PHP</title>
</head>
<body>
    <h1>Ejemplo de Bucles For en PHP</h1>

    <div>
        <h2>Bucle For de 50 a 500 de 25 en 25:</h2>
        <?php
        // a) Bucle for que cuenta desde 50 hasta 500 de 25 en 25
        for ($i = 50; $i <= 500; $i += 25) {
            echo $i . " "; // Mostramos el número actual
        }
        ?>
    </div>

    <div>
        <h2>División de $j entre 20 de 100 a 500:</h2>
        <?php
        // b) Bucle for que muestra el resultado de dividir $j por 20
        for ($j = 100; $j <= 500; $j += 100) {
            echo ($j / 20) . " "; // Mostramos el resultado de la división
        }
        ?>
    </div>
</body>
</html>
