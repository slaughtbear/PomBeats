<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$archivo = $_FILES["fileToUpload"]["tmp_name"];
$ruta = "uploads/" . $$target_file;
$titulo =$_POST["titulo"];
$lugar = $_POST["lugar"];
$fecha = $_POST["fecha"];
$descripcion = $_POST["descripcion"];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
            $img=$_FILES["fileToUpload"]["name"];
        
            require 'conexion.php';
            
            $sql = "INSERT INTO eventos (titulo, lugar, fecha, descripcion portada)
            VALUES ('John', 'Doe', 'john@example.com')";
            
            if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
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
  }pu
}
?>