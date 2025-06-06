<?php
session_start();

if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
    header('Location: a1-iniciar.php');
    exit();
}

$usuario = htmlspecialchars($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>
    <h2>¡Bienvenido, <?php echo $usuario; ?>!</h2>
    <p>Esta es tu página de perfil.</p>

    <form action="a3-cerrar.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
