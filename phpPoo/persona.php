<?php
class persona {
    // Propiedades
    public $nombre;
    public $edad;
    public $genero;
    public $profesion;

    // Metodo constructor
    public function __construct($nombre, $edad, $genero, $profesion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
        $this->profesion = $profesion;
    }
    // Metodo para presentarse
    public function presentarse() {
        return "Hola, mi nombre es $this->nombre, tengo $this->edad años, soy $this->genero y trabajo como $this->profesion.";
    }
}

// Crear un objeto de la clase persona
$persona1 = new persona("Juan", 30, "masculino", "ingeniero");
echo $persona1->presentarse(); // Salida: Hola, mi nombre es Juan, tengo 30 años, soy masculino y trabajo como ingeniero.
?>