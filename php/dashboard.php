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
<html lang="es" data-bs-theme="dark">
<head>
    <title>PomBeats</title>
    <!-- M E T A D A T O S -->
    <meta charset="UTF-8"> <!-- Permite mostrar acentos y cracateres en español correctamente -->
    <meta name="author" content="Ivan Aguirre"> <!-- Metadatos de autor -->
    <meta name="description" content="Sitio web de promocion de eventos musicales"> <!-- Metadatos de descripcion -->
    <meta name="keywords" content="Eventos, Conciertos, Musica"> <!-- Metadatos de palabras claves del proyecto -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Metadatos que permiten que se ajuste el tamaño de la ventana del navegador a la de un dispositivo más pequeño -->
    <!-- L I K S -->
    <!-- CDNs de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> <!-- Iconos -->
    <!-- Link con la hoja de estilos -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Icono -->
    <link rel="icon" type="image/x-icon" href="../img/nav-icon.png">
</head>
<body>
<!-- Barra de navegacion -->
<nav class="navbar navbar-expand-md custom-nav">
    <div class="container-fluid">
        <!-- Boton que muestra las opciones de la navbar en los dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler"> <!-- Mediante el id controlamos el boton de la navbar -->
            <!-- Icono de la pagina dentro de la navbar -->
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" width="80" alt="logo de la pagina web">
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="bienvenida.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar_sesion.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
      <section>
        <div class="contenedor">
            <div class="col-6 parrafo text-center">
                <h1 class="mt-5">Promoción de Eventos Musicales</h1>
                <h3>Creemos firmemente en el potencial artístico y creativo que existe en nuestra comunidad, y queremos ser parte del motor que impulse su crecimiento. </h3>
            </div>
            <div class="col-6">
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade m-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../img/carru.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="negro">Diversidad</h5>
                          <p class="negro">Eventos de distintos tipos de géneros musicales.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../img/carru2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Localidad</h5>
                          <p>Oportunidad de conocer la música de tú ciudad.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../img/carrusel1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Cultura</h5>
                          <p>Eventos artísticos y educativos.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
      </section>

      <section class="experiencia bg-exp">
        <div class="container text-center">
          <div class="row">
            <h1 class="mt-3 mb-5">Nuestros Servicios</h1>
            <!-- Comunidad -->
            <div class="columna col-12 col-md-4">
              <i class="bi bi-people"></i>
              <p class="experiencia-titulo mt-3">Comunidad</p>
              <p>Contamos con un feed para los usuarios, para conectar más nuestra comunidad</p>
              <div class="badges-contenedor">
                <span class="badge rounded-pill">Artistas</span>
                <span class="badge rounded-pill">Organizadores</span>
                <span class="badge rounded-pill">Asistentes</span>
              </div>
            </div>
             <!-- Promoción -->
             <div class="columna col-12 col-md-4">
              <i class="bi bi-calendar-event"></i>
              <p class="experiencia-titulo mt-3">Promoción</p>
              <p>Utilizamos estrategias de marketing digital para dar a conocer tu evento a la audiencia correcta.</p>
              <div class="badges-contenedor">
                <span class="badge rounded-pill">Eventos</span>
                <span class="badge rounded-pill">Publicidad</span>
                <span class="badge rounded-pill">Organización</span>
              </div>
            </div>
            <!-- Proyectos -->
            <div class="columna col-12 col-md-4">
              <i class="bi bi-music-note-list"></i>
              <p class="experiencia-titulo mt-3">Proyectos</p>
              <p>Promociona tus proyectos musicales para que la comunidad los vea.</p>
              <div class="badges-contenedor">
                <span class="badge rounded-pill">Discos</span>
                <span class="badge rounded-pill">EPs</span>
                <span class="badge rounded-pill">Sencillos</span>
              </div>
            </div>
        </div>
      </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Bootstrap JS -->
</body>

</html>