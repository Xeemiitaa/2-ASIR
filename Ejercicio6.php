<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de 10x10</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        .gris {
            background-color: #d3d3d3; /* Gris claro */
        }
        .blanco {
            background-color: #ffffff; /* Blanco */
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Tabla de 10x10</h1>
    <table>
        <?php
        for ($i = 0; $i < 10; $i++) {
            // Determinar la clase de color para la fila
            $color = ($i % 2 == 0) ? 'gris' : 'blanco';
            echo "<tr class='$color'>";
            for ($j = 1; $j <= 10; $j++) {
                $numero = $i * 10 + $j; // Calcular el número
                echo "<td>$numero</td>"; // Mostrar el número en la celda
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
