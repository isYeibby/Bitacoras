<?php
class Operaciones {
    // Método mágico __call
    public function __call($name, $arguments) {
        if ($name === "saludar" && count($arguments) > 0) {
            return "¡Hola, " . $arguments[0] . "!\n";
        } else {
            echo "El método '$name' no está disponible.\n";
        }
    }
}

// Uso
$obj = new Operaciones();

echo $obj->saludar("Ana");    // Devuelve un saludo
$obj->despedir("Luis");       // Mensaje de método inexistente
?>