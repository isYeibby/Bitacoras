<?php
class Saludo {
    private $nombre;

    // Método constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "¡Hola, {$this->nombre}!\n";
    }

    // Método destructor
    public function __destruct() {
        echo "Adiós, {$this->nombre}.\n";
    }
}

// Crear un objeto
$persona = new Saludo("Luis");
// El destructor se ejecuta automáticamente al final
?>