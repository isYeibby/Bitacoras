<?php
class coche {
    // Propiedades
    public $nombre;
    public $modelo;
    public $color;
    public $año;

    // Metodo constructor
    public function __construct($nombre, $modelo, $color, $año) {
        $this->nombre = $nombre;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->año = $año;
    }
    // Metodo para arrancar
    public function arrancar() {
        return "$this->nombre esta arrancando";
    }
    
}

// Crear un objeto de la clase coche
$miCoche = new coche("Toyota", "Corolla", "Rojo", 2020);
echo $miCoche->arrancar(); // Salida: Toyota esta arrancando
?>