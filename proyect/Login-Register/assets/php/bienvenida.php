<?php
    session_start();
    if(!isset($_SESSION['usuario']))
    {
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
            </script>
        ';
        //header("location: index.php");
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="cerrar_sesion.php">Cerrar session</a>
</body>
</html>