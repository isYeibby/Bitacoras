<?php
// Objetivo: Implementar un sistema de roles con constantes reutilizables en múltiples clases.

// Definición del trait con constantes
trait RolUsuario {
    const ADMIN = 'Administrador';
    const EDITOR = 'Editor';
    const USUARIO = 'Usuario Regular';
}

// Clase Usuario que utiliza el trait RolUsuario
class Usuario {

    private string $nombre;
    private string $rol;

    public function __construct(string $nombre, string $rol) {
        $this->nombre = $nombre;
        $this->rol = $rol;
    }

    public function mostrarInfo() {
        echo "Nombre: {$this->nombre}, Rol: {$this->rol} ";
    }
}

// Creación de usuarios con diferentes roles
$usuario1 = new Usuario('Goku', Usuario::ADMIN);
$usuario2 = new Usuario('Bulma', Usuario::EDITOR);
$usuario3 = new Usuario('Krillin', Usuario::USUARIO);

// Mostrar información de los usuarios
$usuario1->mostrarInfo();
$usuario2->mostrarInfo();
$usuario3->mostrarInfo();
?>