<?php
// mostrar_pokemones.php
header('Content-Type: application/json');
require 'conexion.php';

$resultado = $conexion->query("SELECT nombre, tipo FROM pokemon ORDER BY id DESC");

$pokemones = [];
while ($fila = $resultado->fetch_assoc()) {
    $pokemones[] = $fila;
}

echo json_encode($pokemones);
?>
