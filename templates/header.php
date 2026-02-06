<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Max Manuel - Desarrollador Web</title>
  <link rel="icon" type="image/x-icon" href="assets/img/icons/dev.svg">
  <meta
    name="description"
    content="Portafolio de Max Manuel - Desarrollador Web Full Stack especializado en crear experiencias digitales." />

  <?php
  $current_page = strtolower(basename($_SERVER['PHP_SELF']));
  if ($current_page === 'curriculum.php') {
  ?>
    <link rel="stylesheet" href="assets/css/cv.css" />
  <?php
  } else {
  ?>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
  <?php
  }
  ?>
</head>

<body>

  <?php
  if ($current_page !== 'curriculum.php') {
  ?>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="color-primary">
            <polyline points="4 17 10 11 4 5"></polyline>
            <line x1="12" x2="20" y1="19" y2="19"></line>
          </svg>
          <span class="color-primary shadow-text">Max Manuel</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavHeader" aria-controls="navbarNavHeader" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <div class="hamburger">
            <input class="checkbox" type="checkbox" />
            <svg fill="none" viewBox="0 0 50 50" height="50" width="50">
              <path
                class="lineTop line"
                stroke-linecap="round"
                stroke-width="4"
                stroke="black"
                d="M6 11L44 11"></path>
              <path
                stroke-linecap="round"
                stroke-width="4"
                stroke="black"
                d="M6 24H43"
                class="lineMid line"></path>
              <path
                stroke-linecap="round"
                stroke-width="4"
                stroke="black"
                d="M6 37H43"
                class="lineBottom line"></path>
            </svg>
          </div>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavHeader">
          <div class="navbar-nav">
            <a class="nav-link <?php echo ($current_page === 'index.php') ? 'active' : ''; ?>" href="/">Inicio</a>
            <a class="nav-link <?php echo ($current_page === 'curriculum.php') ? 'active' : ''; ?>" href="/curriculum">Curriculum</a>
            <a class="nav-link <?php echo ($current_page === 'news.php') ? 'active' : ''; ?>" href="/news">News</a>
            <a class="nav-link <?php echo ($current_page === 'projects.php') ? 'active' : ''; ?>" href="/projects">Proyectos</a>
            <!-- <a class="nav-link" href="/servicios">Servicios</a> -->
            <!-- <a class="nav-link" href="/contacto">Contacto</a> -->
          </div>
        </div>
      </div>
    </nav>
  <?php
  }
  ?>