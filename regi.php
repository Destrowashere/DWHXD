<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"]; 

    
    $hashedPassword = password_hash($contrasena, PASSWORD_DEFAULT);


    $sql = "INSERT INTO usuario (apellido, correo, contrasena) VALUES ('$apellido', '$correo', '$hashedPassword')";
    if ($conex->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error al registrar los datos: " . $conex->error;
    }

    $conex->close(); 
}
?>
