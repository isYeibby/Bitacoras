<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $directorio = 'uploads/';
    $archivo = $directorio . basename($_FILES['archivo']['name']);

    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo)) {
        echo "El archivo se ha subido con éxito.";
    } else {
        echo "Hubo un error al subir el archivo.";
    }
}
?>