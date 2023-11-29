<?php
    include ("conexion.php");

    $idEventos = $_POST['idEventos'];
    $titulo = $_POST['titulo'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE eventos SET titulo = '$titulo', lugar = '$lugar', fecha = '$fecha', descripcion = '$descripcion' WHERE idEventos = '$idEventos'";

    $query = mysqli_query($conexion, $sql);

    if($query){
        header("Location: admin.php");
    };
?>