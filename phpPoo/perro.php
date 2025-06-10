<?php
class Perro {
    // Propiedades
    public $nombre;
    public $edad;

    // Metodo constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    // Metodo para ladrar
    public function ladrar() {
        return "$this->nombre esta ladrando";
    }
}

// Crear un objeto de la clase Perro
$miPerro = new Perro("Chilindrino", 3);
echo $miPerro->ladrar(); // Salida: Chilindrino esta ladrando
?>