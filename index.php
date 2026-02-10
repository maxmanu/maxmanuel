<?php include 'templates/header.php'; ?>

<div class="container d-flex justify-content-center mt-5">
  <div class="wrapper-terminal">
    <div class="box-terminal">
      <div class="box-tab">
        <div class="box-top-icons">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-circle css-5cm1aq">
            <circle cx="12" cy="12" r="10"></circle>
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-circle css-5cm1aq">
            <circle cx="12" cy="12" r="10"></circle>
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-circle css-5cm1aq">
            <circle cx="12" cy="12" r="10"></circle>
          </svg>
        </div>
      </div>
      <div class="box-content">
        <div class="d-flex justify-content-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="65"
            height="65"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="color-secondary">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
          <h1 class="color-primary shadow-text">
            <span class="decor-comillas">"</span><?php echo t('hero.title'); ?><span class="decor-comillas">"</span><span class="color-secondary blink-underline">_</span>
          </h1>
        </div>
        <p class="text-white text-center terminal-text">
          <?php echo t('hero.subtitle'); ?><br />
          <?php echo t('hero.subtitle_line2'); ?>
        </p>
        <div class="hero-buttons justify-content-center">
          <a href="#portafolio" class="max-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <rect width="7" height="7" x="3" y="3" rx="1"></rect>
              <rect width="7" height="7" x="14" y="3" rx="1"></rect>
              <rect width="7" height="7" x="14" y="14" rx="1"></rect>
              <rect width="7" height="7" x="3" y="14" rx="1"></rect>
            </svg>
            <?php echo t('hero.btn_projects'); ?>
          </a>
          <a href="#servicios" class="max-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <rect width="18" height="18" x="3" y="3" rx="2"></rect>
              <path d="M7 7h10"></path>
              <path d="M7 12h10"></path>
              <path d="M7 17h10"></path>
            </svg>
            <?php echo t('hero.btn_services'); ?>
          </a>
          <a href="#contacto" class="max-button max-button-secondary">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <?php echo t('hero.btn_contact'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sección Sobre Mí -->
<section id="sobre-mi" class="section-container">
  <div class="container d-flex justify-content-center">
    <div class="wrapper-terminal">
      <div class="box-terminal">
        <div class="box-tab">
          <div class="box-top-icons">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
        </div>
        <div class="box-content">
          <div class="command-line">
            <span class="color-secondary">$</span>
            <span class="color-primary"> <?php echo t('about.command'); ?></span>
          </div>
          <div class="command-output">
            <h2 class="section-title"><?php echo t('about.title'); ?></h2>
            <p class="text-white terminal-text">
              <?php echo t('about.p1'); ?>
            </p>
            <p class="text-white terminal-text">
              <?php echo t('about.p2'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección Servicios -->
<section id="servicios" class="section-container">
  <div class="container d-flex justify-content-center">
    <div class="wrapper-terminal">
      <div class="box-terminal">
        <div class="box-tab">
          <div class="box-top-icons">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
        </div>
        <div class="box-content">
          <div class="command-line">
            <span class="color-secondary">$</span>
            <span class="color-primary"> <?php echo t('services.command'); ?></span>
          </div>
          <div class="command-output">
            <h2 class="section-title"><?php echo t('services.title'); ?></h2>
            <p class="text-white terminal-text mb-4">
              <?php echo t('services.intro'); ?>
            </p>

            <div class="projects-grid">
              <!-- Servicio 1 -->
              <div class="project-card" data-aos="fade-up">
                <div class="project-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="color-primary">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                  </svg>
                  <h3 class="project-title"><?php echo t('services.service1_title'); ?></h3>
                </div>
                <p class="project-description">
                  <?php echo t('services.service1_desc'); ?>
                </p>
              </div>

              <!-- Servicio 2 -->
              <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                <div class="project-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="color-primary">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    <path d="M2 12h20"></path>
                  </svg>
                  <h3 class="project-title"><?php echo t('services.service2_title'); ?></h3>
                </div>
                <p class="project-description">
                  <?php echo t('services.service2_desc'); ?>
                </p>
              </div>

              <!-- Servicio 3 -->
              <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                <div class="project-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="color-primary">
                    <circle cx="8" cy="21" r="1"></circle>
                    <circle cx="19" cy="21" r="1"></circle>
                    <path
                      d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                  </svg>
                  <h3 class="project-title"><?php echo t('services.service3_title'); ?></h3>
                </div>
                <p class="project-description">
                  <?php echo t('services.service3_desc'); ?>
                </p>
              </div>

              <!-- Servicio 4 -->
              <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                <div class="project-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="color-primary">
                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                  </svg>
                  <h3 class="project-title"><?php echo t('services.service4_title'); ?></h3>
                </div>
                <p class="project-description">
                  <?php echo t('services.service4_desc'); ?>
                </p>
              </div>

              <!-- Servicio 5 -->
              <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                <div class="project-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="color-primary">
                    <path
                      d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                  <h3 class="project-title"><?php echo t('services.service5_title'); ?></h3>
                </div>
                <p class="project-description">
                  <?php echo t('services.service5_desc'); ?>
                </p>
              </div>

              <!-- Servicio 6 -->
              <div class="project-card" data-aos="fade-up" data-aos-delay="500">
                <div class="project-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="color-primary">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                  </svg>
                  <h3 class="project-title"><?php echo t('services.service6_title'); ?></h3>
                </div>
                <p class="project-description">
                  <?php echo t('services.service6_desc'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección Portafolio -->
<section id="portafolio" class="section-container">
  <div class="container">
    <div class="command-line text-center mb-5">
      <span class="color-secondary">$</span>
      <span class="color-primary"> <?php echo t('portfolio.command'); ?></span>
    </div>
    <h2 class="section-title text-center mb-5"><?php echo t('portfolio.title'); ?></h2>

    <div class="projects-grid">
      <!-- Observatorio PEN -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="800">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Observatorio PEN</h3>
        </div>
        <p class="project-description">Sistema de datos y análisis gubernamental</p>
        <div class="project-tags">
          <span class="tag">PHP</span>
          <span class="tag">Power BI</span>
          <span class="tag">Wordpress</span>
        </div>
        <a href="https://observatorio-pen.cne.gob.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Haku -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="900">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Haku OBI</h3>
        </div>
        <p class="project-description">Plataforma web de cursos</p>
        <div class="project-tags">
          <span class="tag">PHP</span>
          <span class="tag">Wordpress</span>
          <span class="tag">Woocommerce</span>
        </div>
        <a href="https://haku.obi.com.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Rumi Concretos -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="100">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Rumi Concretos</h3>
        </div>
        <p class="project-description">Sitio web para empresa de construcción</p>
        <div class="project-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">PHP</span>
        </div>
        <a href="https://www.rumiconcretos.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Vane Delgado -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="200">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Vane Delgado</h3>
        </div>
        <p class="project-description">Portafolio personal y blog</p>
        <div class="project-tags">
          <span class="tag">WordPress</span>
          <span class="tag">PHP</span>
          <span class="tag">MySQL</span>
        </div>
        <a href="https://vanedelgado.com/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Manifiesto -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="300">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Manifiesto</h3>
        </div>
        <p class="project-description">Sitio Web para la agencia Manifiesto</p>
        <div class="project-tags">
          <span class="tag">PHP</span>
          <span class="tag">Drupal</span>
          <span class="tag">SEO</span>
        </div>
        <a href="https://manifiesto.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Agenda Bicentenario -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="400">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Agenda Bicentenario</h3>
        </div>
        <p class="project-description">Portal de eventos para la Universidad Pacífico</p>
        <div class="project-tags">
          <span class="tag">JavaScript</span>
          <span class="tag">PHP</span>
          <span class="tag">UI/UX</span>
        </div>
        <a href="https://agenda.manifiesto.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- OBI -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="500">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">OBI</h3>
        </div>
        <p class="project-description">Sitio web para la empresa OBI Consulting</p>
        <div class="project-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">Javascript</span>
        </div>
        <a href="https://obi.com.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Laforse HG -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="600">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Laforse HG</h3>
        </div>
        <p class="project-description">Sitio Web para la empresa Laforse HG</p>
        <div class="project-tags">
          <span class="tag">PHP</span>
          <span class="tag">Wordpress</span>
          <span class="tag">Admin Panel</span>
        </div>
        <a href="https://www.laforse-hg.com/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- Hans Gross -->
      <div class="project-card" data-aos="fade-up" data-aos-delay="700">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">Hans Gross</h3>
        </div>
        <p class="project-description">Landing page corporativa</p>
        <div class="project-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">Animations</span>
        </div>
        <a href="https://hansgross.com.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>

      <!-- La Económica -->
      <div class="project-card" data-aos="fade-up">
        <div class="project-header">
          <img src="assets/img/web.svg" class="img-fluid" alt="página web">
          <h3 class="project-title">La Económica</h3>
        </div>
        <p class="project-description">Sitio web corporativo</p>
        <div class="project-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">JavaScript</span>
        </div>
        <a href="https://www.laeconomica.pe/" target="_blank" class="project-link"> <?php echo t('portfolio.view_project'); ?> → </a>
      </div>
    </div>

    <div class="row text-center mt-5">
      <div class="col">
        <a href="/projects" class="max-button">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
          <?php echo t('portfolio.view_more'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sección Stack Tecnológico -->
<section id="stack" class="section-container">
  <div class="container d-flex justify-content-center">
    <div class="wrapper-terminal">
      <div class="box-terminal">
        <div class="box-tab">
          <div class="box-top-icons">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
        </div>
        <div class="box-content">
          <div class="command-line">
            <span class="color-secondary">$</span>
            <span class="color-primary"> <?php echo t('stack.command'); ?></span>
          </div>
          <div class="command-output">
            <h2 class="section-title"><?php echo t('stack.title'); ?></h2>

            <div class="tech-category">
              <h3 class="tech-category-title"><span class="color-secondary">├──</span> <?php echo t('stack.frontend'); ?></h3>
              <div class="tech-list">
                <span class="tech-item">HTML5</span>
                <span class="tech-item">CSS3 / Sass</span>
                <span class="tech-item">JavaScript (ES6+)</span>
                <span class="tech-item">React.js</span>
                <span class="tech-item">Angular.js</span>
                <span class="tech-item">TypeScript</span>
                <span class="tech-item">Bootstrap</span>
                <span class="tech-item">Tailwind CSS</span>
              </div>
            </div>

            <div class="tech-category">
              <h3 class="tech-category-title"><span class="color-secondary">├──</span> <?php echo t('stack.backend'); ?></h3>
              <div class="tech-list">
                <span class="tech-item">Node.js</span>
                <span class="tech-item">Express.js</span>
                <span class="tech-item">PHP</span>
                <span class="tech-item">Laravel</span>
                <span class="tech-item">Python</span>
                <span class="tech-item">Django</span>
                <span class="tech-item">MySQL</span>
                <span class="tech-item">MongoDB</span>
                <span class="tech-item">REST APIs</span>
              </div>
            </div>

            <div class="tech-category">
              <h3 class="tech-category-title"><span class="color-secondary">└──</span> <?php echo t('stack.tools'); ?></h3>
              <div class="tech-list">
                <span class="tech-item">Git / GitHub</span>
                <span class="tech-item">VS Code</span>
                <span class="tech-item">WordPress</span>
                <span class="tech-item">Figma / Affinity</span>
                <span class="tech-item">npm / Yarn</span>
                <span class="tech-item">Vite</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección Contacto -->
<section id="contacto" class="section-container">
  <div class="container d-flex justify-content-center">
    <div class="wrapper-terminal">
      <div class="box-terminal">
        <div class="box-tab">
          <div class="box-top-icons">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle css-5cm1aq">
              <circle cx="12" cy="12" r="10"></circle>
            </svg>
          </div>
        </div>
        <div class="box-content">
          <div class="command-line">
            <span class="color-secondary">$</span>
            <span class="color-primary"> <?php echo t('contact.command'); ?></span>
          </div>
          <div class="command-output">
            <h2 class="section-title"><?php echo t('contact.title'); ?></h2>
            <p class="text-white terminal-text mb-4">
              <?php echo t('contact.intro'); ?>
            </p>

            <div class="contact-buttons">
              <a href="https://github.com/maxmanu" target="_blank" class="max-button" title="GitHub">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <path
                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                  <path d="M9 18c-4.51 2-5-2-7-2"></path>
                </svg>
                GitHub
              </a>

              <a
                href="https://www.linkedin.com/in/maxmanuelcam/"
                target="_blank"
                class="max-button"
                title="LinkedIn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect width="4" height="12" x="2" y="9"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
                LinkedIn
              </a>

              <a href="mailto:maxcamina@gmail.com" class="max-button" title="Email">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                  <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg>
                Email
              </a>

              <a href="https://www.instagram.com/max.manu/" target="_blank" class="max-button" title="Instagram">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                </svg>
                Instagram
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'templates/footer.php'; ?>