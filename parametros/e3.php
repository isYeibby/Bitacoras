<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Calcular la edad</title>
</head>
<body>
    <h2>Calcular la edad</h2>
    <form method="get" action="">
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        <button type="submit">Calcular Edad</button>
    </form>

    <?php
    if (isset($_GET['fecha_nacimiento'])) {
        $fecha_nacimiento = $_GET['fecha_nacimiento'];
        $fecha_nac = DateTime::createFromFormat('Y-m-d', $fecha_nacimiento);
        $hoy = new DateTime();
        if ($fecha_nac && $fecha_nac <= $hoy) {
            $edad = $hoy->diff($fecha_nac)->y;
            echo "<p>La edad es: <strong>$edad</strong> años.</p>";
        } else {
            echo "<p>Por favor, ingresa una fecha válida.</p>";
        }
    }
    ?>
</body>
</html>