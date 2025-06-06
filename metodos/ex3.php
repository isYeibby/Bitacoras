<?php

class Calculadora {
    // Método mágico __call
    public function __call($name, $arguments) {
        if ($name === "suma") {
            return array_sum($arguments);
        }
        echo "Método '$name' no disponible.\n";
    }
}

// Uso
$calc = new Calculadora();
echo $calc->suma(10, 20, 30) . "\n"; // 60
echo $calc->resta(10, 5);            // Mensaje de error

?>