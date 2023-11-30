<?php
    include ("conexion.php");

    $conexion = connection();

    $sql = "SELECT * FROM eventos";
    $query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Eventos CRUD</title>
</head>
<body>
    <div>
        <h2>Eventos registrados</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Lugar</th>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row["idEventos"] ?> </th>
                    <th> <?= $row["titulo"] ?> </th>
                    <th> <?= $row["lugar"] ?> </th>
                    <th> <?= $row["fecha"] ?> </th>
                    <th> <?= $row["descripcion"] ?> </th>

                    <th><a href="php/editarEvento.php?idEventos=<?= $row["idEventos"] ?>" class="btn btn-primary">Editar</a></th>
                    <th><a href="php/eliminarEvento.php?idEventos=<?=$row["idEventos"]?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>