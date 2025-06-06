<?php
$persona = array (
    "nombre" => "Carlos",
    "edad" => 25,
    "ciudad" => "Madrid"
);

echo "Nombre: " . $persona["nombre"];

// Recorrer el array asociativo
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>