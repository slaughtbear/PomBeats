 
<?php


// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion, portada)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion', '$portada')";

if ($sql->execute()) {
    echo "Registro exitoso";
    echo '<script>
            setTimeout(function() {
                window.location.href = "eventos.php";
            }, 0);
          </script>';
} else {
    echo "Error: " . $sql->error;
}

// Close the connection after use
$conn->close();
?>

