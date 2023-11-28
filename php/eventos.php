<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

   include 'conexion.php';
   
  
$sql = "SELECT * FROM eventos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $titulo=$row["titulo"];
    $lugar=$row["lugar"];
    $fecha=$row["fecha"];
    $descripcion=$row["descripcion"];
    $portada=$row["portada"];

  }
} else {
  echo "0 results";
}
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Uploads.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="titulo" required>
        <input type="text" name="lugar" placeholder="lugar" required>
        <input type="date" name="fecha" placeholder="fecha" required>
        <!-- Cambié 'textarea' a 'text' para el campo de descripción -->
        <input type="text" name="descripcion" placeholder="descripcion" required>
        <input type="file" name="portada" required>
        <input type="submit" name="enviar">
    </form>

   <img src="<?php echo $portada;?>" alt="">

</body>
</html>
