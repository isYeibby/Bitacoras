<?php
// Conexióna MySql
// Este es un ejemplo de cómo conectarse a una base de datos MySQL usando PHP.

$servername = "localhost";
$username = "yhosmar";
$password = "-040042177Tb";

$dbname = "mi_base_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT id, nombre FROM usuarios";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar conexión
$conn->close();
?>