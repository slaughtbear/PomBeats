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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Quicksand&display=swap" rel="stylesheet">
    <title>Bienvenido a PomBeats</title>
</head>
<body class="seccion-oscura">
    <!-- B A R R A   D E   N A V E G A C I O N -->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="#">
                <img src="../img/logo-navbar.png" alt="Logo PomBeats" width="65">
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href= "eventos.php">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="cerrar_sesion.php">Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- S E C C I O N   H E R O -->
    <section class="hero align-items-stretch">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
              <div class="carousel-item active c-item" data-bs-interval="5000">
                <img src="../img/carousel1.jpg" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">Promociona tús proyectos</p>
                    <h1 class="display-1 fw-bolder text-capitalize">Eventos Musicales</h1>
                  </div>
              </div>
              <div class="carousel-item c-item" data-bs-interval="5000">
                <img src="../img/carousel2.jpg" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">Variedad de eventos</p>
                    <h1 class="display-1 fw-bolder text-capitalize">Diversidad</h1>
                  </div>
              </div>
              <div class="carousel-item c-item" data-bs-interval="5000">
                <img src="../img/carousel3.jpg" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">Conecta con artistas locales</p>
                    <h1 class="display-1 fw-bolder text-capitalize">Comunidad</h1>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <!-- S O B R E   N O S O T R O S -->
    <div class="heading">
      <h1 class="seccion-titulo">Sobre Nosotros</h1>
    </div>
    <div class="container">
      <section class="about">
        <div class="about-image pb-5">
          <img src="../img/img1.jpg" alt="Imagen Sobre Nosotros">
        </div>
        <div class="about-content">
          <h2>Creando las bases de tus eventos</h2>
          <p>En nuestra plataforma especializada en promoción de eventos musicales, ofrecemos servicios para planificar, organizar, y publicitar conciertos y festivales. Nuestro objetivo es crear experiencias únicas que conecten a los amantes de la música con los artistas de sus comunidades.</p>
          <a href="#" class="leer-mas">Conocenos</a>
        </div>
      </section>
    </div>

    <!-- S E R V I C I O S -->
    <section class="servicios seccion-guinda">
      <div class="container text-center">
        <div class="row">
          <!-- P R O M O C I O N -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-graph-up-arrow"></i>
            <p class="servicios-titulo">Promoción</p>
            <p>Utilizamos estrategias de marketing para poder dar a conocer tu evento a la audiencia correcta.</p>
            <div class="badges-contenedor">
              <span class="badge text-bg-danger">Conciertos</span>
              <span class="badge text-bg-danger">Festivales</span>
              <span class="badge text-bg-danger">Cultura</span>
            </div>
          </div>
          <!-- G A L E R I A -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-easel"></i>
            <p class="servicios-titulo">Galería</p>
            <p>Contamos con una sección dedicada a mostrar eventos próximos con fechas, horarios, y ubicaciones. </p>
            <div class="badges-contenedor">
              <span class="badge text-bg-danger">Imagenes</span>
              <span class="badge text-bg-danger">Información</span>
              <span class="badge text-bg-danger">Eventos</span>
            </div>
          </div>
          <!-- A C C E S I B I L I D A D -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-upload"></i>
            <p class="servicios-titulo">Accesibilidad</p>
            <p>En nustra plataforma puedes compartir tú evento musical siendo artísta independiente u organizador.</p>
            <div class="badges-contenedor">
              <span class="badge text-bg-danger">Subir</span>
              <span class="badge text-bg-danger">Promocionar</span>
              <span class="badge text-bg-danger">Organizar</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- F O O T E R -->
    <footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center">
      <img class="footer-logo" src="../img/granada.png" alt="Logo">
      <p class="footer-texto text-center">Creando las bases de tus eventos. <br> ¡Publicita tus conciertos y festivales!</p>
      <div class="iconos-redes d-flex flex-wrap align-items-center justify-content-center">
        <!--Correo -->
        <a href="mailto:ivanaguirre368@gmail.com" target="_blank">
          <i class="bi bi-envelope"></i>
        </a>
        <!--Instagram-->
        <a href="#" target="_blank">
          <i class="bi bi-instagram"></i>
        </a>
        <!--GitHub -->
        <a href="https://github.com/slaughtbear/PomBeats" target="_blank">
          <i class="bi bi-github"></i>
        </a>
      </div>
      <div class="derechos-autor">PomBeats (2023) &#169;</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>