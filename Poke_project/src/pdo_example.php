<?php
// Conexión usando PDO
$dsn = 'mysql:host=localhost;dbname=pokedex';
$usuario = 'yhosmar';
$contraseña = '-040042177Tb';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);

    // Consultar el ataque de Pikachu
    $consulta = $conexion->query("SELECT ataque FROM pokemon WHERE nombre = 'Pikachu'");
    $resultado = $consulta->fetch();
    echo "⚡ Pikachu tiene un ataque de: " . $resultado['ataque'] . "<br>";

    // Actualizar el ataque de Charmander
    $nuevoAtaque = 70;
    $conexion->exec("UPDATE pokemon SET ataque = $nuevoAtaque WHERE nombre = 'Charmander'");
    echo "🔥 ¡Charmander ha entrenado y ahora tiene un ataque de $nuevoAtaque! 🔥";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>