<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Sumar dos números</title>
</head>
<body>
    <h2>Sumar dos números</h2>
    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <button type="submit">Sumar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
        $suma = $num1 + $num2;
        echo "<h3>Resultado: $num1 + $num2 = $suma</h3>";
    }
    ?>
</body>
</html>