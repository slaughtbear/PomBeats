 
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$titulo = $_POST['titulo'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];

/* Use prepared statements to prevent SQL injection
$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion')";

if ($sql->mysqli_num_rows()) {
    echo "Registro exitoso";
    echo '<script>
            setTimeout(function() {
                window.location.href = "galeriaEventos.php";
            }, 0);
          </script>';
} else {
    echo "Error: " . $sql->error;
}

// Close the connection after use
$conn->close();*/

$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion')";

if ($conexion->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
?>

