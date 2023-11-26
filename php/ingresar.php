<?php
session_start(); // Inicia sesión
    // Conexion con la base de datos
    include 'conexion.php';

    // Definicion de variables
    $correo = $_POST['correo']; 
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    $contrasena2 = $_POST['contrasena2'];
    $contrasena2 = hash('sha512', $contrasena2);

    // Validacion de usuario
    $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '$correo' and contrasena = '$contrasena'");
    if ($contrasena!=$contrasena2) {
        echo '
        <script>
            alert("Contraseña incorrecta, por favor verifique los datos introducidos");
            window.location = "login-register.php";
        </script>
            ';
    } elseif(mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo; // Variable que verifica la sesion
        header("location: ../index.php");
        exit;
    } else {
        echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "login-register.php";
        </script>
            ';
            exit;
    }
?>
