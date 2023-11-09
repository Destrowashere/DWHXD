<?php
include "conexion.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

   
    $sql = "UPDATE usuario SET apellido='$apellido', correo='$correo' WHERE id='$id'";

    $query = $conex->query($sql);

    if ($query) {
        header('Location: crud.php'); 
        exit();
    } else {
        echo "Error al actualizar los datos: " . $conex->error;
    }
}
?>
