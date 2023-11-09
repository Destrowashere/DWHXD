<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c79eb308ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Registro admin</h1>
    <div class="container-fluid row">
        <div class="col-md-4">
        <form action="regi.php" method="post">
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" required>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" name="correo" class="form-control" id="correo" required>
    </div>
    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contrasena</label>
                    <input type="password" class="form-control" required id="exampleInputPassword1">
                </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

        </div>
        <div class="col-md-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha registro</th>
                    </tr>
                </thead>
                <tbody>
                <?php
include "conexion.php";


$sql = "SELECT * FROM usuario";
$result = $conex->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo '<td>';
        echo '<a href="editarpa.php?id=' . $row["id"] . '" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>';
        echo '<a href="eliminar.php?id=' . $row["id"] . '" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i> </a>';
        echo '</td>';
        echo "</tr>";
    }
} else {
    echo "No se encontraron registros en la base de datos.";
}

$result->close(); 
$conex->close(); 
?>



                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
