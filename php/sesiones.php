<?php
// Iniciar sesión
session_start();

// Asignar valor a la sesión
$_SESSION['nombre'] = 'Carlos';

// Acceder al valor de la sesión
echo "usuario: " . $_SESSION['nombre'];

// Cerrar sesión
session_destroy();
?>