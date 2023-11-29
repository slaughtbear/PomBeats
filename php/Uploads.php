 
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'conexion.php';
$titulo = $_POST['titulo'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];

 //Use prepared statements to prevent SQL injection
$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion')";

if ($conexion->query($sql) === TRUE) {
    header ("location: galeriaEventos.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
  }
  
  $conexion->close();

/*$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion')";

if ($conexion->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?*/
?>

