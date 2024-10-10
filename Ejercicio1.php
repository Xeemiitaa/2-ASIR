<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados y Sueldos</title>
</head>
<body>
    <h1>Empleados y Sueldos</h1>

    <form method="POST">
        <h2>Introduce los nombres de los empleados y sus sueldos:</h2>
        
        <!-- Formulario para ingresar los nombres y sueldos de los empleados -->
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "<label for='nombre$i'>Nombre del Empleado $i:</label><br>";
            echo "<input type='text' id='nombre$i' name='nombre[]' required><br><br>";
            
            echo "<label for='sueldo$i'>Sueldo del Empleado $i:</label><br>";
            echo "<input type='number' id='sueldo$i' name='sueldo[]' step='0.01' required><br><br>";
        }
        ?>
        <input type="submit" value="Procesar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recogemos los nombres y sueldos del formulario
        $nombres = $_POST['nombre'];
        $sueldos = $_POST['sueldo'];

        // A) Encontrar el nombre del empleado con el mayor sueldo
        $maxSueldo = max($sueldos);
        $indiceMax = array_search($maxSueldo, $sueldos);
        $empleadoMax = $nombres[$indiceMax];

        echo "<h2>Empleado con mayor sueldo:</h2>";
        echo "<p>El empleado con el mayor sueldo es: <strong>$empleadoMax</strong> con un sueldo de <strong>$$maxSueldo</strong>.</p>";

        // B) Calcular la media de los sueldos
        $mediaSueldo = array_sum($sueldos) / count($sueldos);

        echo "<h2>Empleados con sueldo superior a la media:</h2>";
        echo "<p>La media de los sueldos es: <strong>$$mediaSueldo</strong>.</p>";

        // Mostrar empleados con sueldo superior a la media
        $empleadosSuperiores = array();

        for ($i = 0; $i < count($sueldos); $i++) {
            if ($sueldos[$i] > $mediaSueldo) {
                $empleadosSuperiores[] = $nombres[$i];
            }
        }

        if (!empty($empleadosSuperiores)) {
            echo "<p>Los empleados con sueldos superiores a la media son:</p>";
            echo "<ul>";
            foreach ($empleadosSuperiores as $empleado) {
                echo "<li>$empleado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No hay empleados con sueldos superiores a la media.</p>";
        }
    }
    ?>
</body>
</html>
