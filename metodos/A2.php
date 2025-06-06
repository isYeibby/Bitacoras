<?php

class Usuario {
    private $nombre;
    private $email;

    // Método mágico __set
    public function __set($key, $value) {
        if ($key === "nombre") {
            if (strlen($value) >= 3) {
                $this->nombre = $value;
            } else {
                echo "Error: El nombre debe tener al menos 3 caracteres.\n";
            }
        } elseif ($key === "email") {
            if (strpos($value, '@') !== false) {
                $this->email = $value;
            } else {
                echo "Error: El email debe contener un '@'.\n";
            }
        }
    }

    // Método mágico __get
    public function __get($key) {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
        return null;
    }
}

// Uso
$usuario = new Usuario();
$usuario->nombre = "Lu"; // Error: nombre demasiado corto
$usuario->nombre = "Luis"; // Correcto
$usuario->email = "correo"; // Error: falta '@'
$usuario->email = "correo@example.com"; // Correcto

echo "Nombre: " . $usuario->nombre . "\n";
echo "Email: " . $usuario->email . "\n";

?>