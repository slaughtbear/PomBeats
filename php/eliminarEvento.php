<?php
    include ("conexion.php");
    $con = connection();

    $idbanda = $_GET['idbanda'];
    $sql = "DELETE FROM bandas WHERE idbanda = '$idbanda'";
    $query = mysqli_query($con, $sql);
    
    if($query){
        header("Location: ../bandas.php");
    };
?>