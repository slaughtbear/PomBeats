<?php
    // Conexion con la base de datos
    include 'conexion.php';

    // Definicion de variables
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); //Encriptamiento de las contraseñas

    // Consulta SQL para registrar usuarios
    $query = "INSERT INTO users (nombre, correo, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

    // Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM users WHERE correo = '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "login-register.php";
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
                window.location = "login-register.php";
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
            window.location = "login-register.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Inténtalo de nuevo, usuario no almacenado");
            window.location = "login-register.php";
        </script>
        ';
    }

    // Se cierra la conexion
    mysqli_close($conexion);
?>