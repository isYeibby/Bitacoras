<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        echo "<h2>Gracias, $nombre. Hemos recibido tu mensaje.</h2>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    } else {
        echo "<h2>Por favor, completa todos los campos del formulario.</h2>";
    }
}
?>