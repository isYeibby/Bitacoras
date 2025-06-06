<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1 - Guardar nombre en sesión</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['nombre_usuario'] = $_POST['nombre'];
        echo "<p>Nombre guardado en la sesión.</p>";
        echo "<p><a href='mostrar_nombre.php'>Ir a la página siguiente</a></p>";
    } else {
    ?>
        <form method="post" action="">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Guardar</button>
        </form>
    <?php
    }
    ?>
</body>
</html>