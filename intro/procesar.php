<?php
// Manejo de formularios
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    echo "Hola, $nombre";
}
?>
