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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vegeta = new Guerrero(
        $_POST['nombre_vegeta'],
        $_POST['poder_vegeta'],
        $_POST['tecnica_vegeta']
    );
    $gohan = new Guerrero(
        $_POST['nombre_gohan'],
        $_POST['poder_gohan'],
        $_POST['tecnica_gohan']
    );
    $_SESSION['vegeta'] = $vegeta;
    $_SESSION['gohan'] = $gohan;
    echo "<p>Estadísticas guardadas en la sesión.</p>";
    echo "<p><a href='mostrar_guerreros.php'>Mostrar guerreros</a></p>";
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Estadísticas de Vegeta y Gohan</title>
</head>
<body>
    <h2>Guardar estadísticas de Vegeta y Gohan</h2>
    <form method="post" action="">
        <h3>Vegeta</h3>
        <label>Nombre: <input type="text" name="nombre_vegeta" value="Vegeta" required></label><br>
        <label>Nivel de poder: <input type="number" name="poder_vegeta" value="8500" required></label><br>
        <label>Técnica especial: <input type="text" name="tecnica_vegeta" value="Final Flash" required></label><br>
        <h3>Gohan</h3>
        <label>Nombre: <input type="text" name="nombre_gohan" value="Gohan" required></label><br>
        <label>Nivel de poder: <input type="number" name="poder_gohan" value="7800" required></label><br>
        <label>Técnica especial: <input type="text" name="tecnica_gohan" value="Masenko" required></label><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
<?php
}
?>