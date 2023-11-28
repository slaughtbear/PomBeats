 
<?php

// Retrieve form data
$titulo = $_POST['titulo'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];
$description = $_POST['Description'];
$portada = $_FILES['portada']['name'];

// File upload settings
$target_dir = "../public/img-events/";
$target_file = $target_dir . basename($_FILES["portada"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a valid image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["portada"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["portada"]["size"] > 50000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["portada"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["portada"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion, portada)
 VALUES ('$titulo', '$lugar', '$fecha', '$descripcion', '$portada')";

$sql->bind_param("ssssssssss", $titulo, $lugar, $fecha, $descripcion, $portada);

if ($sql->execute()) {
    echo "Registro exitoso";
    echo '<script>
            setTimeout(function() {
                window.location.href = "tablaagregar.php";
            }, 0);
          </script>';
} else {
    echo "Error: " . $sql->error;
}

// Close the connection after use
$conn->close();
?>

