<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Editar Usuario</h1>
    <div class="container-fluid">
        <?php
        include "conexion.php"; 

       
        $id = $_GET['id'];

        $sql = "SELECT * FROM usuario WHERE id='$id'";
        $result = $conex->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="edit.php" method="post">
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" value="<?php echo $row['apellido']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" name="correo" class="form-control" id="correo" value="<?php echo $row['correo']; ?>" required>
            </div>
            <!-- Campo oculto para enviar el ID único del usuario a editar -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <?php
        } else {
            echo "No se encontró el usuario.";
        }

        $conex->close(); 
        ?>
        <a href="index.php" class="btn btn-secondary mt-3">Volver a la página principal</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
