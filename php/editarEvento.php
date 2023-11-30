<?php
    include ("conexion.php");
    $conexion = connection();

    $idEventos = $_GET['idEventos'];

    $sql = "SELECT * FROM eventos WHERE idEvento='$idEventos'";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
</head>
<body>
    <div>
        <form action="actualizarEvento.php" method="POST">
            <h1>Editar Evento</h1>
            <input type="hidden" name="idEventos" value="<?= $row["idEventos"] ?>">
            <input type="text" name="titulo" value="<?= $row["titulo"] ?>">
            <input type="text" name="lugar" value="<?= $row["lugar"] ?>">
            <input type="date" name="fecha" value="<?= $row["fecha"] ?>">
            <input type="text" name="descripcion" value="<?= $row["descripcion"] ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>