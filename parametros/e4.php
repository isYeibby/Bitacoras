<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de correo electrónico</title>
</head>
<body>
    <h2>Validación de correo electrónico</h2>
    <form method="POST" action="">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = trim($_POST["email"]);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:green;'>El correo es válido.</p>";
        } else {
            echo "<p style='color:red;'>El correo no es válido.</p>";
        }
    }
    ?>
</body>
</html>