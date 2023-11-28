<?php
include 'conexion.php';

// Definicion de variables
$titulo = $_POST['titulo'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];
$descripcion= $_POST['descripcion'];
//$portada = $_POST['portada'];

$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion)
VALUES ('$titulo', '$lugar', '$fecha', '$descripcion')";

if ($conn->query($sql) === TRUE) {
  echo "Se ha registrado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>