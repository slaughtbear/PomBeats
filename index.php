<?php
    session_start();

    if(isset($_SESSION['usuario']))
    {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
<title>Bienvenido a PomBeats</title>
    <!-- M E T A D A T O S -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pombeats"> <!-- Metadatos de autor -->
    <meta name="desciption" content="Pagina de inicio de sesion"> <!-- Metadatos de descripcion -->
    <meta name="keywords" content="Iniciar, Registrar"> <!-- Metadatos de palabras clave -->
    <!-- L I N K S -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Bootstrap -->
    <link href="css/login.css" rel="stylesheet"> <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> <!-- Iconos de Bootstrap -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!-- Icono -->
    <link rel="icon" type="image/x-icon" href="img/nav-icon.png">
</head>
<body class="bg-custom">
    <!-- C A J A   D E   L O G I N -->
        <div class="container bg-login w-75 mt-5 mb-5 rounded shadow">
            <div class="row align-items-stretch">
                <div class="col bg-img d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                    <!-- Contenido izquierdo -->
                </div>
                <div class="col p-5 rounded-end">
                    <div class="text-end">
                        <img src="img/logo.png" width="88" alt="Logo">
                    </div>
                    <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                    <form action="php/ingresar.php" method="POST">
                        <div class="mb-4">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control custom-input" name="correo" id="correo" require>
                        </div>
                        <div class="mb-4">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control custom-input" name="contrasena" id="contrasena" require>
                        </div>
                        <div class="mb-4">
                            <label for="contrasena2" class="form-label">Repite tu contraseña</label>
                            <input type="password" class="form-control custom-input" name="contrasena2" id="contrasena2" require>
                        </div>
                        <!--
                        <div class="mb-4 form-check custom-checkbox">
                            <input type="checkbox" name="connected" class="form-check-input">
                            <label for="connected" class="form-check-label">Mantenerme conectado</label>
                        </div>
                        -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom fw-bold">Iniciar Sesión</button>
                        </div>
                    </form>
                    <hr class="#"> <!-- Aqui se colorea la linea de salto de renglon -->
                    <!-- R E G I S T E R -->
                    <div class="my-3">
                        <p class="fw-bold text-center">¿No tienes una cuenta? </p>
                        <div class="text-center">
                            <button type="button" class="btn btn-custom fw-bold w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Regístrarme
                            </button>
                        </div>
                        <!-- M O D A L -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-login">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-2 fw-bold text-center" id="staticBackdropLabel">Regístrate</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="php/registro.php" method="POST">
                                            <div class="mb-4">
                                                <label for="nombre" class="form-label text-white">Nombre completo</label>
                                                <input type="text" class="form-control custom-input" name="nombre" id="nombre" required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="correo" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control custom-input" name="correo" id="correo" required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="usuario" class="form-label text-white">Usuario</label>
                                                <input type="text" class="form-control custom-input" name="usuario" id="usuaro" required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="contrasena" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control custom-input" name="contrasena" id="contrasena" required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="contrasena2" class="form-label">Repite la contraseña</label>
                                                <input type="password" class="form-control custom-input" name="contrasena2" id="contrasena2" required>
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-custom fw-bold">Registrarme</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="">  
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Bootstrap JS -->
</body>
</html>