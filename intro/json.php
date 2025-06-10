<?php

// Crear un array asociativo
$persona = array(
    "nombre" => "Viridiana",
    "edad" => 27,
    "ciudad" => "Oaxaca"
);

// Convertir el array a JSON
echo json_encode($persona);

$json = '{"nombre": "Irving", "edad": 31, "ciudad": "Miahuayork"}';
$persona = json_decode($json, true); // convertir el JSON a array 

// Imprimir un valor del array
echo $persona["nombre"];

?>