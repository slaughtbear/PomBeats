<?php
    // Conexion con la base de datos
    include 'conexion.php';

    // Definicion de variables
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    //Encriptamiento de las contraseñas
    $contrasena = hash('sha512', $contrasena); 
    $contrasena2 = hash('sha512', $contrasena2); 

    // Consulta SQL para registrar usuarios
    $query = "INSERT INTO users (nombre, correo, usuario, contrasena, contrasena2) VALUES ('$nombre', '$correo', '$usuario', '$contrasena', '$contrasena2')";

    // Verificar que las contrasenas sean iguales al momento de registrar
    $verificar_contrasenas = mysqli_query($conexion,"SELECT * FROM users WHERE contrasena = '$contrasena' and contrasena2 = '$contrasena2'");

    if(mysqli_num_rows($passwrd1!=$passwrd2)) {
        echo '
            <script>
                alert("Las contrasenas no coinciden, por favor intenta de nuevo");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    // Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM users WHERE correo = '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    // Verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM users WHERE usuario = '$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    // Variable que ejecuta la consulta en la base de datos
    $ejecutar = mysqli_query($conexion, $query); 

    //Si la ejecucion es correcta
    if ($ejecutar) 
    {
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Inténtalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
        </script>
        ';
    }

    // Se cierra la conexion
    mysqli_close($conexion);
?>
