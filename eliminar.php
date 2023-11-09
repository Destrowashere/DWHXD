<?php
include "conexion.php"; 

$id = $_GET['id']; 


$sql_delete = "DELETE FROM usuario WHERE id='$id'";
$query_delete = $conex->query($sql_delete);

if ($query_delete) {
    header('Location: crud.php'); 
    exit();
} else {
    echo "Error al eliminar el usuario: " . $conex->error;
}

$conex->close(); 
?>
