<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Nombre Guardado</title>
</head>
<body>
    <?php
    if (isset($_SESSION['nombre_usuario'])) {
        echo "<p>El nombre guardado en la sesión es: <strong>" . htmlspecialchars($_SESSION['nombre_usuario']) . "</strong></p>";
    } else {
        echo "<p>No hay ningún nombre guardado en la sesión.</p>";
    }
    ?>
    <p><a href="e1.php">Volver al formulario</a></p>
</body>
</html>