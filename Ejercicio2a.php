<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle While en PHP</title>
</head>
<body>
    <h1>Ejemplo de Bucles While en PHP</h1>

    <div>
        <h2>Bucle Decreciente de 50 a 40:</h2>
        <?php
        // a) Bucle while que cuenta desde 50 hasta 40
        $numero = 50; // Inicializamos la variable

        while ($numero >= 40) {
            echo $numero . " "; // Mostramos el número actual
            $numero--; // Decrementamos el número
        }
        ?>
    </div>

    <div>
        <h2>Doble del valor de $contador de 1 a 5:</h2>
        <?php
        // b) Bucle while que muestra el doble del valor de $contador de 1 a 5
        $contador = 1; // Inicializamos el contador

        while ($contador <= 5) {
            echo ($contador * 2) . " "; // Mostramos el doble del contador
            $contador++; // Incrementamos el contador
        }
        ?>
    </div>
</body>
</html>
