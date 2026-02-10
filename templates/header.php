<?php
// Cargar sistema de traducción
require_once __DIR__ . '/../includes/translations.php';
$current_lang = get_current_lang();
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo t('meta.title'); ?></title>
  <link rel="icon" type="image/x-icon" href="assets/img/icons/dev.svg">
  <meta
    name="description"
    content="<?php echo t('meta.description'); ?>" />

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
        <a class="navbar-brand" href="/">
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
          <div class="navbar-nav gap-2 gap-md-3">
            <a class="nav-link <?php echo ($current_page === 'index.php') ? 'active' : ''; ?>" href="/"><?php echo t('menu.home'); ?></a>
            <a class="nav-link <?php echo ($current_page === 'curriculum.php') ? 'active' : ''; ?>" href="/curriculum"><?php echo t('menu.curriculum'); ?></a>
            <a class="nav-link <?php echo ($current_page === 'news.php') ? 'active' : ''; ?>" href="/news"><?php echo t('menu.news'); ?></a>
            <a class="nav-link <?php echo ($current_page === 'projects.php') ? 'active' : ''; ?>" href="/projects"><?php echo t('menu.projects'); ?></a>
            <!-- Language Selector -->
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo strtoupper($current_lang); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                <li><a class="dropdown-item <?php echo ($current_lang === 'es') ? 'active' : ''; ?>" href="?lang=es">🇪🇸 Español</a></li>
                <li><a class="dropdown-item <?php echo ($current_lang === 'en') ? 'active' : ''; ?>" href="?lang=en">🇺🇸 English</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  <?php
  }
  ?>