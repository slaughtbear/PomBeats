<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    

    $target_dir = "../img-events/";
    $target_file = $target_dir . basename($_FILES["portada"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $portada_tmp = $_FILES["portada"]["tmp_name"];
    $titulo = $_POST["titulo"];
    $lugar = $_POST["lugar"];
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];
    $ruta = $target_dir . $target_file;
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($portada_tmp);
      if($check !== false) {
                
               
    
                include 'conexion.php';
    
                move_uploaded_file($portada_tmp,$ruta);
    
                $sql = "INSERT INTO eventos (titulo,lugar,fecha,descripcion,
                portada)
                VALUES ('$titulo','$lugar','$fecha',$descripcion,$portada)";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    //header('Location: Mostrarimg.php');
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
    }
    
?>