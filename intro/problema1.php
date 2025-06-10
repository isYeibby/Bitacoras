<?php
// Archivo: problema1.php

session_start();

// Inicializar el arreglo de estudiantes si no existe
if (!isset($_SESSION['estudiantes'])) {
    $_SESSION['estudiantes'] = [];
}

$mensaje = "";

// Procesar el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $edad = intval($_POST['edad']);
    $calificacion = floatval($_POST['calificacion']);

    if ($nombre && $edad > 0 && $calificacion >= 0 && $calificacion <= 10) {
        $_SESSION['estudiantes'][] = [
            'nombre' => $nombre,
            'edad' => $edad,
            'calificacion' => $calificacion
        ];
        $mensaje = "Estudiante registrado correctamente.";
    } else {
        $mensaje = "Datos inválidos. Intente de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión de Estudiantes</title>
</head>
<body>
    <h2>Registrar Estudiante</h2>
    <?php if (!empty($mensaje)) echo "<p><strong>$mensaje</strong></p>"; ?>

    <form method="post" action="problema1.php">
        Nombre: <input type="text" name="nombre" required><br>
        Edad: <input type="number" name="edad" min="1" required><br>
        Calificación: <input type="number" name="calificacion" min="0" max="10" step="0.01" required><br>
        <button type="submit">Registrar</button>
    </form>

    <h2>Lista de Estudiantes</h2>
    <?php if (empty($_SESSION['estudiantes'])): ?>
        <p>No hay estudiantes registrados.</p>
    <?php else: ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Calificación</th>
                <th>Estado</th>
            </tr>
            <?php foreach ($_SESSION['estudiantes'] as $est): ?>
                <tr>
                    <td><?= htmlspecialchars($est['nombre']) ?></td>
                    <td><?= $est['edad'] ?></td>
                    <td><?= $est['calificacion'] ?></td>
                    <td><?= $est['calificacion'] >= 6 ? 'Aprobado' : 'Reprobado' ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
