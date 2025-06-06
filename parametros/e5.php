<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Mayor de tres números</title>
</head>
<body>
    <h2>Determinar el mayor de tres números</h2>
    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        <label for="num3">Número 3:</label>
        <input type="number" name="num3" id="num3" required><br><br>
        <input type="submit" value="Calcular mayor">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
        $num3 = isset($_POST['num3']) ? (float)$_POST['num3'] : 0;

        $mayor = max($num1, $num2, $num3);

        echo "<h3>El mayor de los tres números es: $mayor</h3>";
    }
    ?>
</body>
</html>