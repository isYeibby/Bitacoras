<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Saludo con nombre</title>
</head>
<body>
    <h1>Saludo con nombre</h1>
    <form method="get" action="">
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Saludar</button>
    </form>

    <?php
    if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
        $nombre = htmlspecialchars($_GET['nombre']);
        echo "<p>¡Hola, $nombre!</p>";
    }
    ?>
</body>
</html>