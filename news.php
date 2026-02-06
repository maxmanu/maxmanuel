<?php include 'templates/header.php'; ?>

<section class="section-container">
  <div class="container">
    <div class="command-line text-center mb-5">
      <span class="color-secondary">$</span>
      <span class="color-primary"> ls -la news/</span>
    </div>
    <h2 class="section-title text-center mb-5">Noticias Destacadas</h2>

    <!-- Grid de noticias -->
    <div class="news-grid">

      <!-- Noticia 1 -->
      <article class="news-card">
        <div class="news-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
            <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
            <path d="M18 14h-8"></path>
            <path d="M15 18h-5"></path>
            <path d="M10 6h8v4h-8V6Z"></path>
          </svg>
          <h3 class="news-title">Lanzamiento de Nuevo Proyecto Web</h3>
        </div>
        <p class="news-description">Hemos lanzado un nuevo sistema de gestión empresarial con tecnologías de última generación, mejorando la eficiencia operativa de nuestros clientes.</p>
        <div class="news-meta">
          <span class="news-date">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            15 Enero 2026
          </span>
          <span class="news-category">Desarrollo Web</span>
        </div>
        <a href="#" class="news-link">Leer más →</a>
      </article>

      <!-- Noticia 2 -->
      <article class="news-card">
        <div class="news-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
            <polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline>
            <polyline points="7.5 19.79 7.5 14.6 3 12"></polyline>
            <polyline points="21 12 16.5 14.6 16.5 19.79"></polyline>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
            <line x1="12" y1="22.08" x2="12" y2="12"></line>
          </svg>
          <h3 class="news-title">Integración con Power BI</h3>
        </div>
        <p class="news-description">Implementamos dashboards interactivos con Power BI para visualización de datos en tiempo real, facilitando la toma de decisiones estratégicas.</p>
        <div class="news-meta">
          <span class="news-date">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            28 Diciembre 2025
          </span>
          <span class="news-category">Business Intelligence</span>
        </div>
        <a href="#" class="news-link">Leer más →</a>
      </article>

      <!-- Noticia 3 -->
      <article class="news-card">
        <div class="news-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12 6 12 12 16 14"></polyline>
          </svg>
          <h3 class="news-title">Optimización de Performance</h3>
        </div>
        <p class="news-description">Mejoramos los tiempos de carga de sitios web hasta en un 70%, implementando técnicas avanzadas de optimización y caching.</p>
        <div class="news-meta">
          <span class="news-date">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            10 Diciembre 2025
          </span>
          <span class="news-category">Performance</span>
        </div>
        <a href="#" class="news-link">Leer más →</a>
      </article>

      <!-- Noticia 4 -->
      <article class="news-card">
        <div class="news-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
          </svg>
          <h3 class="news-title">WordPress Multi-sitio</h3>
        </div>
        <p class="news-description">Configuración exitosa de una red WordPress multi-sitio para gestión centralizada de múltiples portales web con administración eficiente.</p>
        <div class="news-meta">
          <span class="news-date">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            25 Noviembre 2025
          </span>
          <span class="news-category">WordPress</span>
        </div>
        <a href="#" class="news-link">Leer más →</a>
      </article>

      <!-- Noticia 5 -->
      <article class="news-card">
        <div class="news-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <h3 class="news-title">Actualización de Seguridad</h3>
        </div>
        <p class="news-description">Implementación de nuevas medidas de seguridad y protocolos SSL/TLS para garantizar la protección de datos de nuestros clientes.</p>
        <div class="news-meta">
          <span class="news-date">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            5 Noviembre 2025
          </span>
          <span class="news-category">Seguridad</span>
        </div>
        <a href="#" class="news-link">Leer más →</a>
      </article>

      <!-- Noticia 6 -->
      <article class="news-card">
        <div class="news-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
          <h3 class="news-title">Nuevo Equipo de Desarrollo</h3>
        </div>
        <p class="news-description">Incorporación de nuevos talentos al equipo de desarrollo, fortaleciendo nuestras capacidades en tecnologías frontend y backend modernas.</p>
        <div class="news-meta">
          <span class="news-date">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            20 Octubre 2025
          </span>
          <span class="news-category">Equipo</span>
        </div>
        <a href="#" class="news-link">Leer más →</a>
      </article>

    </div>
  </div>
</section>

<?php include 'templates/footer.php'; ?>