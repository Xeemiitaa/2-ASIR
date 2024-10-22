<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Completo</title>
</head>
<body>
    <h1>Obtener Nombre Completo</h1>

    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nom" required><br><br>

        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="ape1" required><br><br>

        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2" name="ape2" required><br><br>

        <input type="submit" value="Obtener Nombre Completo">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger los datos ingresados
        $nombre = htmlspecialchars(trim($_POST['nom']));
        $apellido1 = htmlspecialchars(trim($_POST['ape1']));
        $apellido2 = htmlspecialchars(trim($_POST['ape2']));

        // Función para crear el nombre completo
        function obtenerNombreCompleto($nom, $ape1, $ape2) {
            return "$nom $ape1 $ape2"; // Concatenar el nombre y apellidos
        }

        // Función para visualizar el nombre completo
        function visualizarNombreCompleto($nombreCompleto) {
            echo "<h2>Nombre Completo:</h2>";
            echo "<p>$nombreCompleto</p>"; // Mostrar el nombre completo
        }

        // Llamar a la función para obtener el nombre completo
        $nombreCompleto = obtenerNombreCompleto($nombre, $apellido1, $apellido2);
        
        // Llamar a la función para visualizar el nombre completo
        visualizarNombreCompleto($nombreCompleto);
    }
    ?>
</body>
</html>
