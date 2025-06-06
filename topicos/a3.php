<?php
// Importar las clases necesarias del espacio de nombres Random
use Random\Engine\Secure;
use Random\Randomizer;

// Crear un motor seguro para la generación de números aleatorios
$engine = new Secure();
$randomizer = new Randomizer($engine);

// Lista de participantes
$participantes = ["Goku", "Vegeta", "Piccolo", "Gohan", "Bulma"];

// Generar un índice aleatorio para seleccionar al ganador
$indiceGanador = $randomizer->getInt(0, count($participantes) - 1);

// Mostrar el ganador
echo "El ganador del sorteo es: " . $participantes[$indiceGanador] . "\n";
?>