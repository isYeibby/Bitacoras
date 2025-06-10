<?php
// conexion.php
$host = 'localhost';
$db = 'pokedex';
$user = 'yhosmar';
$pass = '-040042177Tb';

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
    die(json_encode(['error' => 'Error en la conexión: ' . $conexion->connect_error]));
}
$conexion->set_charset("utf8");
?>