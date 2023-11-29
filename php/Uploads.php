 
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$titulo = $_POST['titulo'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion, portada)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion', '$portada')";

if ($sql->execute()) {
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
$conn->close();
?>

