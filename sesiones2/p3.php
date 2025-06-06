<?php
session_start();

// Niveles disponibles
$niveles = ['SSJ1', 'SSJ2', 'SSJ3', 'SSJ4'];

// Inicializar nivel si no existe
if (!isset($_SESSION['nivel'])) {
    $_SESSION['nivel'] = $niveles[0];
    session_regenerate_id(true); // Regenerar ID al iniciar
}

// Subir de nivel si se solicita
if (isset($_GET['subir'])) {
    $nivelActual = array_search($_SESSION['nivel'], $niveles);
    if ($nivelActual !== false && $nivelActual < count($niveles) - 1) {
        $_SESSION['nivel'] = $niveles[$nivelActual + 1];
        session_regenerate_id(true); // Regenerar ID al subir de nivel
        $mensaje = "¡Has subido de nivel a: " . $_SESSION['nivel'] . "!";
    } else {
        $mensaje = "¡Ya estás en el nivel máximo!";
    }
} else {
    $mensaje = "Nivel actual: " . $_SESSION['nivel'];
}

// Mostrar el ID de sesión y el nivel
echo "<h2>Dragon Ball Z - Sistema de Niveles</h2>";
echo "<p>$mensaje</p>";
echo "<p><strong>ID de sesión actual:</strong> " . session_id() . "</p>";
echo '<a href="?subir=1">Subir de nivel</a>';
?>