<?php
// Crear un hash seguro de contraseña
$password = "MiContraseñaSegura123";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Hash generado: " . $hash . "\n";

// Verificar la contraseña ingresada
$contrasenaIngresada = "MiContraseñaSegura123";
if (password_verify($contrasenaIngresada, $hash)) {
    echo "¡Inicio de sesión exitoso! La contraseña es válida.\n";
} else {
    echo "Error: La contraseña es incorrecta.\n";
}

// Comprobar si el hash necesita ser actualizado
if (password_needs_rehash($hash, PASSWORD_DEFAULT)) {
    $nuevoHash = password_hash($password, PASSWORD_DEFAULT);
    echo "El hash fue actualizado: " . $nuevoHash . "\n";
}
?>