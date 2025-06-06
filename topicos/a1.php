<?php
// Definición de la clase Vegeta
class Vegeta {
    public bool $modoUltraEgo;    // Atributo que indica si Vegeta está en modo Ultra Ego
    public int $nivelDePoder;     // Atributo que almacena el nivel de poder de Vegeta

    // Constructor para inicializar los atributos
    public function __construct(bool $modoUltraEgo, int $nivelDePoder) {
        $this->modoUltraEgo = $modoUltraEgo;
        $this->nivelDePoder = $nivelDePoder;
    }
}

// Definición de la función evaluarPoder
function evaluarPoder(Vegeta $vegeta): string|int {
    if ($vegeta->modoUltraEgo) {
        return "Incalculable"; // Si está en modo Ultra Ego, el poder es incalculable
    }
    return $vegeta->nivelDePoder; // De lo contrario, devuelve el nivel de poder
}

// Ejemplo de uso
// Vegeta en modo normal
$vegetaNormal = new Vegeta(false, 9000);
echo "Poder de Vegeta (modo normal): " . evaluarPoder($vegetaNormal) . "\n";

// Vegeta en modo Ultra Ego
$vegetaUltraEgo = new Vegeta(true, 9000);
echo "Poder de Vegeta (modo Ultra Ego): " . evaluarPoder($vegetaUltraEgo) . "\n";
?>