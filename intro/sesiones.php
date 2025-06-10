<?php
// Iniciar sesión
session_start();

// Asignar valor a la sesión
$_SESSION["usuario"] = "Juan";

// Acceder al valor de la sesión
echo "Usuario: " . $_SESSION["usuario"];

// Cerrar sesión
session_destroy();
?>