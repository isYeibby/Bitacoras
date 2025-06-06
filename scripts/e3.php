<?php
session_start();

// 1. Inicializar la lista de tareas en la sesión si no existe
if (!isset($_SESSION['lista_tareas'])) {
    $_SESSION['lista_tareas'] = [];
}

// 3. Agregar tarea a la lista si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nueva_tarea = htmlspecialchars($_POST['tarea']);
    $_SESSION['lista_tareas'][] = $nueva_tarea;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas con Sesiones</title>
</head>
<body>
    <h2>Agregar una tarea</h2>
    <!-- 2. Formulario para agregar tarea -->
    <form method="post" action="">
        <label for="tarea">Agregar una tarea:</label>
        <input type="text" id="tarea" name="tarea" required>
        <input type="submit" value="Agregar">
    </form>

    <hr>

    <!-- 4. Mostrar la lista de tareas -->
    <?php
    if (!empty($_SESSION['lista_tareas'])) {
        echo "<h3>Lista de tareas:</h3><ul>";
        foreach ($_SESSION['lista_tareas'] as $tarea) {
            echo "<li>" . $tarea . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay tareas en la lista.</p>";
    }
    ?>
</body>
</html>