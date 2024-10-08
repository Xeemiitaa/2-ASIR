<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con PHP</title>
</head>
<body>
    <h2>Formulario de Registro</h2>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Procesar los datos recibidos
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $genero = $_POST['genero'];
        $intereses = isset($_POST['intereses']) ? implode(", ", $_POST['intereses']) : "Ninguno";
        $pais = $_POST['pais'];
        $comentarios = $_POST['comentarios'];

        // Mostrar los datos
        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: $nombre <br>";
        echo "Correo Electrónico: $email <br>";
        echo "Edad: $edad <br>";
        echo "Fecha de Nacimiento: $fecha_nacimiento <br>";
        echo "Género: $genero <br>";
        echo "Intereses: $intereses <br>";
        echo "País: $pais <br>";
        echo "Comentarios: $comentarios <br><br>";
    }
    ?>

    <!-- Mostrar el formulario si no se han enviado los datos -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Campo de texto -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Campo de correo electrónico -->
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Campo de número -->
        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>

        <!-- Campo de contraseña -->
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <!-- Campo de fecha -->
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <!-- Radio buttons -->
        <label>Género:</label><br>
        <input type="radio" id="masculino" name="genero" value="Masculino" required>
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="femenino" name="genero" value="Femenino" required>
        <label for="femenino">Femenino</label><br><br>

        <!-- Casillas de verificación -->
        <label>Intereses:</label><br>
        <input type="checkbox" id="deporte" name="intereses[]" value="Deporte">
        <label for="deporte">Deporte</label><br>
        <input type="checkbox" id="musica" name="intereses[]" value="Música">
        <label for="musica">Música</label><br>
        <input type="checkbox" id="lectura" name="intereses[]" value="Lectura">
        <label for="lectura">Lectura</label><br><br>

        <!-- Menú desplegable -->
        <label for="pais">País:</label><br>
        <select id="pais" name="pais" required>
            <option value="mexico">México</option>
            <option value="espana">España</option>
            <option value="argentina">Argentina</option>
            <option value="colombia">Colombia</option>
        </select><br><br>

        <!-- Área de texto -->
        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>

        <!-- Botón de envío -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>