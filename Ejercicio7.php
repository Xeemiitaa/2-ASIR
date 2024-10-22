<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Descendentes</title>
</head>
<body>
    <h1>Valores Enteros de 50 a 0 en Orden Descendente</h1>

    <h2>Números Descendentes:</h2>
    <ul>
    <?php
    // Empezamos desde 50 y restamos 2 hasta llegar a 0
    for ($i = 50; $i >= 0; $i -= 2) {
        echo "<li>$i</li>";
    }
    ?>
    </ul>
</body>
</html>
