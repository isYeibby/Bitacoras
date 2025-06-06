<?php
// Lista de productos disponibles en la tienda
$productos = [
    1 => ['nombre' => 'Laptop', 'precio' => 12000, 'stock' => 5],
    2 => ['nombre' => 'Mouse', 'precio' => 250, 'stock' => 20],
    3 => ['nombre' => 'Teclado', 'precio' => 500, 'stock' => 10],
    4 => ['nombre' => 'Monitor', 'precio' => 3500, 'stock' => 7],
];

echo "<h2>Simulador de Compra</h2>";
echo "<form method='post'>";
foreach ($productos as $id => $producto) {
    echo "<label>{$producto['nombre']} (Stock: {$producto['stock']}, \$ {$producto['precio']}): 
        <input type='number' name='compra[$id]' min='0' max='{$producto['stock']}' value='0'>
    </label><br>";
}
echo "<br><input type='submit' value='Realizar compra'>";
echo "</form>";

// Procesar la compra si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['compra'])) {
    $compra = $_POST['compra'];
    $total = 0;
    $errores = [];

    foreach ($compra as $idProducto => $cantidadSolicitada) {
        $cantidadSolicitada = (int)$cantidadSolicitada;
        if ($cantidadSolicitada <= 0) continue;

        if (!isset($productos[$idProducto])) {
            $errores[] = "Producto con ID $idProducto no existe.";
            continue;
        }

        $producto = $productos[$idProducto];

        if ($cantidadSolicitada > $producto['stock']) {
            $errores[] = "No hay suficiente stock de {$producto['nombre']}. Solicitado: $cantidadSolicitada, Disponible: {$producto['stock']}.";
        } else {
            $subtotal = $producto['precio'] * $cantidadSolicitada;
            $total += $subtotal;
            // Descontar del stock (nota: esto solo es temporal, ya que se reinicia al recargar)
            $productos[$idProducto]['stock'] -= $cantidadSolicitada;
        }
    }

    // Mostrar resultados
    echo "<h2>Resumen de la compra</h2>";
    if ($errores) {
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<ul>";
        foreach ($compra as $idProducto => $cantidadSolicitada) {
            if ($cantidadSolicitada <= 0) continue;
            $producto = $productos[$idProducto];
            echo "<li>{$producto['nombre']} x $cantidadSolicitada = $" . ($producto['precio'] * $cantidadSolicitada) . "</li>";
        }
        echo "</ul>";
        echo "<strong>Total a pagar: $$total</strong>";
    }

    // Mostrar stock actualizado (sólo en memoria)
    echo "<h3>Stock actualizado:</h3><ul>";
    foreach ($productos as $p) {
        echo "<li>{$p['nombre']}: {$p['stock']} unidades</li>";
    }
    echo "</ul>";
}
?>
