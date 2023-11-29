<?php
    include ("conexion.php");

    $idEventos = $_GET['idEventos'];
    $sql = "DELETE FROM eventos WHERE idEventos = '$idEventos'";
    $query = mysqli_query($conexion, $sql);
    
    if($query){
        header("Location: admin.php");
    };
?>