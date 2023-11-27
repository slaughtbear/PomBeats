<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$target_dir = "../img-events/";
$uploadOk = 1;

// Verifica si el formulario ha sido enviado y si el campo "portada" está presente en el array $_FILES

$target_dir = "../img-events/";
$uploadOk = 1;

if (isset($_POST["enviar"]) && isset($_FILES["portada"])) {
    $target_file = $target_dir . basename($_FILES["portada"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $portada_tmp = $_FILES["portada"]["tmp_name"];
    $titulo = $_POST["titulo"];
    $lugar = $_POST["lugar"];
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];
    $ruta = $target_file;

    if (array_key_exists("portada", $_FILES)) {
        $check = getimagesize($portada_tmp);

        if ($check !== false) {
            $portada = $_FILES["portada"]["name"];
            include 'conexion.php';

            // Corrige la ruta del archivo de destino
            move_uploaded_file($portada_tmp, $ruta);

            $sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion, portada)
                    VALUES ('$titulo', '$lugar', '$fecha', '$descripcion', '$portada')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                // header('Location: Mostrarimg.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

            echo "File is an image - " . $check["mime"] . ".";
            echo $target_file;
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    } else {
        echo "La clave 'portada' no está presente en el array \$_FILES.";
    }
} else {
    echo "Formulario no enviado o campo 'portada' no presente en el array \$_FILES.";
}
?>

