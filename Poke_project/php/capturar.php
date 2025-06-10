<?php
// capturar.php
header('Content-Type: application/json');
require 'conexion.php';

$nombre = isset($_POST['nombre']) ? $conexion->real_escape_string(trim($_POST['nombre'])) : '';
$tipo = isset($_POST['tipo']) ? $conexion->real_escape_string(trim($_POST['tipo'])) : '';

if ($nombre === '' || $tipo === '') {
    echo json_encode(['error' => 'Faltan datos para guardar el Pokémon']);
    exit;
}

// Verificar si ya existe
$check = $conexion->query("SELECT id FROM pokemon WHERE nombre = '$nombre'");
if ($check->num_rows > 0) {
    echo json_encode(['error' => 'Este Pokémon ya está guardado']);
    exit;
}

// Insertar en BD
$insert = $conexion->query("INSERT INTO pokemon (nombre, tipo, ataque) VALUES ('$nombre', '$tipo', 0)");

if ($insert) {
    echo json_encode(['success' => "Pokémon $nombre guardado correctamente"]);
} else {
    echo json_encode(['error' => 'Error al guardar el Pokémon']);
}
?>
