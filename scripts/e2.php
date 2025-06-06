<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST['color'];
    setcookie('color_favorito', $color, time() + (86400 * 30)); // 30 días
    echo "Color guardado en la cookie.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2 - Color favorito</title>
</head>
<body style="background-color: <?= isset($_COOKIE['color_favorito']) ? $_COOKIE['color_favorito'] : 'white'; ?>;">
    <form method="post">
        <label for="color">Elige tu color favorito:</label>
        <input type="color" id="color" name="color">
        <input type="submit" value="Guardar color">
    </form>
</body>
</html>