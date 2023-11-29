<?php
session_start(); // Inicia sesión

// Conexion con la base de datos
include 'conexion.php';

// Definicion de variables
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Validacion de usuario
$validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '$correo' and contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $correo; // Variable que verifica la sesión

    // Verificar si el usuario tiene rol de administrador
    if ($usuario['rol'] == 1) {
        header("Location: admin.php");
        exit;
    } else {
        header("Location: dashboard.php");
        exit;
    }
} else {
    echo '
    <script>
        alert("Usuario no existe o contraseña incorrecta, por favor verifique los datos introducidos");
        window.location = "ingresar.php";
    </script>
    ';
    exit;
}
?>
