<?php
$conex = new mysqli("localhost", "root", "", "sena");

if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

$conex->set_charset("utf8");
?>
