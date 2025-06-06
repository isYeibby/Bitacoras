<?php
session_start();

class Guerrero {
    public $nombre;
    public $nivelPoder;
    public $tecnicaEspecial;

    public function __construct($nombre, $nivelPoder, $tecnicaEspecial) {
        $this->nombre = $nombre;
        $this->nivelPoder = $nivelPoder;
        $this->tecnicaEspecial = $tecnicaEspecial;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Guerreros</title>
</head>
<body>
    <h2>Estadísticas de Guerreros</h2>
    <?php if (isset($_SESSION['vegeta']) && isset($_SESSION['gohan'])): ?>
        <h3>Vegeta</h3>
        <ul>
            <li><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['vegeta']->nombre); ?></li>
            <li><strong>Nivel de poder:</strong> <?php echo htmlspecialchars($_SESSION['vegeta']->nivelPoder); ?></li>
            <li><strong>Técnica especial:</strong> <?php echo htmlspecialchars($_SESSION['vegeta']->tecnicaEspecial); ?></li>
        </ul>
        <h3>Gohan</h3>
        <ul>
            <li><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['gohan']->nombre); ?></li>
            <li><strong>Nivel de poder:</strong> <?php echo htmlspecialchars($_SESSION['gohan']->nivelPoder); ?></li>
            <li><strong>Técnica especial:</strong> <?php echo htmlspecialchars($_SESSION['gohan']->tecnicaEspecial); ?></li>
        </ul>
    <?php else: ?>
        <p>No hay datos de guerreros en la sesión.</p>
        <p><a href="p1.php">Ir al formulario</a></p>
    <?php endif; ?>
    <p><a href="p1.php">Volver</a></p>
</body>
</html>