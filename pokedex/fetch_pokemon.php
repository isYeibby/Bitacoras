<?php
header('Content-Type: application/json');

// Mostrar errores (para desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verificar si se envió el parámetro pokemon
if (!isset($_GET['pokemon'])) {
    echo json_encode(['error' => 'No se especificó un Pokémon']);
    exit;
}

$pokemon = strtolower(trim($_GET['pokemon']));

// Validar que no esté vacío
if (empty($pokemon)) {
    echo json_encode(['error' => 'El nombre del Pokémon no puede estar vacío']);
    exit;
}

// URL de la API de Pokémon
$url = "https://pokeapi.co/api/v2/pokemon/{$pokemon}";

// Inicializar cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Solo para pruebas

// Ejecutar la petición
$response = curl_exec($ch);

// Verificar errores de cURL
if (curl_errno($ch)) {
    curl_close($ch);
    echo json_encode(['error' => 'Error al conectar con la API']);
    exit;
}

// Obtener código de respuesta HTTP
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Validar el código de respuesta
if ($httpCode === 404) {
    echo json_encode(['error' => 'Pokémon no encontrado']);
    exit;
} elseif ($httpCode !== 200) {
    echo json_encode(['error' => 'Error en la API']);
    exit;
}

// Verificar si la respuesta está vacía
if (!empty($response)) {
    echo $response; // ✅ Aquí sí imprimimos el JSON
} else {
    echo json_encode(['error' => 'No se pudo obtener información del Pokémon']);
}
?>
