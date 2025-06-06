<?php
session_start();

$tiempoLimite = 60; // 60 segundos

if (isset($_SESSION['tiempoInicio'])) {
    $duracion = time() - $_SESSION['tiempoInicio'];
    if ($duracion > $tiempoLimite) {
        session_unset();
        session_destroy();
        echo "<strong>¡No lograste recolectar las esferas a tiempo!</strong>";
        echo '<br><a href="p2.php">Intentar de nuevo</a>';
        exit;
    }
} else {
    $_SESSION['tiempoInicio'] = time();
    $_SESSION['esferas'] = 0;
    echo "La misión ha comenzado, ¡recolecta rápido!";
}

// Lógica para recolectar esferas
if (isset($_POST['recolectar'])) {
    if (!isset($_SESSION['esferas'])) {
        $_SESSION['esferas'] = 0;
    }
    $_SESSION['esferas']++;
    if ($_SESSION['esferas'] >= 7) {
        echo "<strong>¡Felicidades! ¡Recolectaste las 7 esferas del dragón!</strong>";
        session_unset();
        session_destroy();
        echo '<br><a href="p2.php">Jugar de nuevo</a>';
        exit;
    }
}

$esferas = isset($_SESSION['esferas']) ? $_SESSION['esferas'] : 0;
$restante = $tiempoLimite - (time() - $_SESSION['tiempoInicio']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recolecta las Esferas del Dragón</title>
</head>
<body>
    <h2>Recolecta las Esferas del Dragón</h2>
    <p>Esferas recolectadas: <strong><?php echo $esferas; ?></strong> / 7</p>
    <p>Tiempo restante: <strong><?php echo $restante; ?></strong> segundos</p>
    <form method="post">
        <button type="submit" name="recolectar">¡Recolectar esfera!</button>
    </form>
</body>
</html>