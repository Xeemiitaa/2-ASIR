<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Sr. o Sra.</title>
</head>
<body>
    <h1>Alterar Nombre con Título según el Sexo</h1>

    <form method="POST">
        <!-- Campo para ingresar el nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Selección del sexo (H o M) -->
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoger el nombre y el sexo ingresados
        $nombre = $_POST['nombre'];
        $sexo = $_POST['sexo'];

        // Alterar el nombre según el sexo
        if ($sexo == 'H') {
            $nombre = "Sr. " . $nombre;
        } elseif ($sexo == 'M') {
            $nombre = "Sra. " . $nombre;
        }

        // Visualizar el nombre alterado
        echo "<h2>Nombre alterado: $nombre</h2>";
    }
    ?>
</body>
</html>
