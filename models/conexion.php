<?php

$conexion = new mysqli("localhost", "root", "admin123", "asistech" );

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Establecer el conjunto de caracteres correcto
$conexion->set_charset("utf8");

?>