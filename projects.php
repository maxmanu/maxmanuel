<?php include 'templates/header.php'; ?>

<section id="portafolio" class="section-container">
  <div class="container">
    <div class="command-line text-center mb-5">
      <span class="color-secondary">$</span>
      <span class="color-primary"> <?php echo t('projects_page.command'); ?></span>
    </div>
    <h2 class="section-title text-center mb-5"><?php echo t('projects_page.title'); ?></h2>

    <!-- Fi ltros -->
    <div class="filters-container mb-5">
      <div class="command-line mb-3">
        <span class="color-secondary">$</span>
        <span class="color-primary"> <?php echo t('projects_page.filter_command'); ?></span>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="technology-filter" class="filter-label"><?php echo t('projects_page.filter_tech'); ?></label>
          <div class="select-wrapper">
            <select id="technology-filter" class="filter-select">
              <option value=""><?php echo t('projects_page.filter_tech_all'); ?></option>
              <option value="PHP">PHP</option>
              <option value="JavaScript">JavaScript</option>
              <option value="Wordpress">WordPress</option>
              <option value="HTML">HTML</option>
              <option value="CSS">CSS</option>
              <option value="MySQL">MySQL</option>
              <option value="Drupal">Drupal</option>
              <option value="Woocommerce">WooCommerce</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <label for="agency-filter" class="filter-label"><?php echo t('projects_page.filter_agency'); ?></label>
          <div class="select-wrapper">
            <select id="agency-filter" class="filter-select">
              <option value=""><?php echo t('projects_page.filter_agency_all'); ?></option>
              <option value="MINEDU">MINEDU</option>
              <option value="OBI Consulting">OBI Consulting</option>
              <option value="Manifiesto">Manifiesto</option>
              <option value="Freelance">Freelance</option>
            </select>
          </div>
        </div>
      </div>
      <div class="text-center mt-3">
        <button id="reset-filters" class="max-button max-button-secondary">
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
            <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
            <path d="M21 3v5h-5"></path>
            <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
            <path d="M3 21v-5h5"></path>
          </svg>
          <?php echo t('projects_page.reset_filters'); ?>
        </button>
      </div>
    </div>

    <!-- Indicador de carga -->
    <div id="loading-indicator" class="text-center my-4" style="display: none;">
      <div class="spinner-border color-primary" role="status">
        <span class="visually-hidden"><?php echo t('projects_page.loading'); ?>...</span>
      </div>
      <p class="color-primary mt-2"><?php echo t('projects_page.searching'); ?>...</p>
    </div>

    <!-- Contador de resultados -->
    <div id="results-count" class="text-center mb-4 color-secondary"></div>

    <div class="projects-grid" id="projects-container">
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
        <a href="https://observatorio-pen.cne.gob.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://haku.obi.com.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://www.rumiconcretos.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://vanedelgado.com/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://manifiesto.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://agenda.manifiesto.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://obi.com.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://www.laforse-hg.com/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://hansgross.com.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
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
        <a href="https://www.laeconomica.pe/" target="_blank" class="project-link"> Ver proyecto → </a>
      </div>
    </div>

    <!-- Mensaje cuando no hay resultados -->
    <div id="no-results" class="text-center my-5" style="display: none;">
      <p class="color-secondary terminal-text"><?php echo t('projects_page.no_results'); ?></p>
    </div>

    <div class="row text-center mt-5">
      <div class="col">
        <a href="/" class="max-button">
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
            <path d="M19 12H5"></path>
            <path d="M12 19l-7-7 7-7"></path>
          </svg>
          <?php echo t('menu.home'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  // Referencias a los elementos del DOM
  const technologyFilter = document.getElementById('technology-filter');
  const agencyFilter = document.getElementById('agency-filter');
  const resetButton = document.getElementById('reset-filters');
  const projectsContainer = document.getElementById('projects-container');
  const loadingIndicator = document.getElementById('loading-indicator');
  const noResults = document.getElementById('no-results');
  const resultsCount = document.getElementById('results-count');

  // Función para cargar proyectos
  async function loadProjects() {
    const technology = technologyFilter.value;
    const agency = agencyFilter.value;

    // Construir la URL con los parámetros
    const params = new URLSearchParams();
    if (technology) params.append('technology', technology);
    if (agency) params.append('agency', agency);

    const url = `api/filter-projects.php?${params.toString()}`;

    // Mostrar indicador de carga
    loadingIndicator.style.display = 'block';
    projectsContainer.style.opacity = '0.5';
    noResults.style.display = 'none';

    try {
      const response = await fetch(url);
      const projects = await response.json();

      // Ocultar indicador de carga
      loadingIndicator.style.display = 'none';
      projectsContainer.style.opacity = '1';

      // Actualizar contador de resultados
      resultsCount.textContent = `${projects.length} proyecto${projects.length !== 1 ? 's' : ''} encontrado${projects.length !== 1 ? 's' : ''}`;

      // Limpiar el contenedor
      projectsContainer.innerHTML = '';

      if (projects.length === 0) {
        noResults.style.display = 'block';
        return;
      }

      // Renderizar los proyectos
      projects.forEach((project, index) => {
        const projectCard = `
          <div class="project-card" data-aos="fade-up" data-aos-delay="${(index % 3) * 100}">
            <div class="project-header">
              <img src="${project.image}" class="img-fluid" alt="${project.title}">
              <h3 class="project-title">${project.title}</h3>
            </div>
            <p class="project-description">${project.description}</p>
            <div class="project-agency">
              <span class="agency-badge">${project.agency}</span>
            </div>
            <div class="project-tags">
              ${project.technologies.map(tech => `<span class="tag">${tech}</span>`).join('')}
            </div>
            <a href="${project.url}" target="_blank" class="project-link">Ver proyecto →</a>
          </div>
        `;
        projectsContainer.innerHTML += projectCard;
      });

      // Reiniciar animaciones AOS si está disponible
      if (typeof AOS !== 'undefined') {
        AOS.refresh();
      }
    } catch (error) {
      console.error('Error al cargar proyectos:', error);
      loadingIndicator.style.display = 'none';
      projectsContainer.style.opacity = '1';
      projectsContainer.innerHTML = '<p class="text-center color-secondary">Error al cargar los proyectos. Por favor, intenta de nuevo.</p>';
    }
  }

  // Event listeners para los filtros
  technologyFilter.addEventListener('change', loadProjects);
  agencyFilter.addEventListener('change', loadProjects);

  // Event listener para el botón de reset
  resetButton.addEventListener('click', () => {
    technologyFilter.value = '';
    agencyFilter.value = '';
    loadProjects();
  });

  // Cargar todos los proyectos al inicio
  document.addEventListener('DOMContentLoaded', loadProjects);
</script>

<?php include 'templates/footer.php'; ?>