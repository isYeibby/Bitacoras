<?php

class Persona {
    private $datos = [];

    // Método mágico __set
    public function __set($key, $value) {
        echo "Asignando '$value' a '$key'.\n";
        $this->datos[$key] = $value;
    }

    // Método mágico __get
    public function __get($key) {
        echo "Accediendo a '$key'.\n";
        return $this->datos[$key] ?? null;
    }
}

// Uso
$persona = new Persona();
$persona->nombre = "Ana";
echo $persona->nombre;
?>