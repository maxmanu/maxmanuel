const COLORS = ['#fff2', '#fff4', '#fff7', '#fffc'];
const generateSpaceLayer = (size, selector, totalStars, duration) => {
  const layer = [];
  for (let i = 0; i < totalStars; i++) {
    const color = COLORS[Math.floor(Math.random() * COLORS.length)];
    const x = Math.floor(Math.random() * 100);
    const y = Math.floor(Math.random() * 100);
    layer.push(`${x}vw ${y}vh 0 ${color}, ${x}vw ${y + 100}vh 0 ${color}`);
  }
  const container = document.querySelector(selector);
  container.style.setProperty('--space-layer', layer.join(','));
  container.style.setProperty('--size', size);
  container.style.setProperty('--duration', duration);
};

generateSpaceLayer('1px', '.space-1', 200, '25s');
generateSpaceLayer('2px', '.space-2', 100, '20s');
generateSpaceLayer('4px', '.space-3', 25, '15s');

// Animaciones al hacer scroll
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px',
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('aos-animate');
    }
  });
}, observerOptions);

// Observar todos los elementos con data-aos
document.addEventListener('DOMContentLoaded', () => {
  const animatedElements = document.querySelectorAll('[data-aos]');
  animatedElements.forEach((el) => observer.observe(el));

  // Smooth scroll para los enlaces del navbar
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start',
        });
      }
    });
  });

  // Animación de aparición de las secciones
  const sections = document.querySelectorAll('.section-container');
  sections.forEach((section) => {
    observer.observe(section);
  });

  // Efecto de typing en el comando principal
  const commandTexts = document.querySelectorAll('.command-line');
  commandTexts.forEach((cmd, index) => {
    cmd.style.opacity = '0';
    setTimeout(() => {
      cmd.style.transition = 'opacity 0.5s ease';
      cmd.style.opacity = '1';
    }, 300 * index);
  });

  // Animación de delay para las tarjetas de proyectos
  const projectCards = document.querySelectorAll('.project-card');
  projectCards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.1}s`;
  });

  // Easter egg: Comando secreto en consola
  console.log('%c> Hola, desarrollador curioso! 👋', 'color: #39ff14; font-size: 16px; font-family: monospace;');
  console.log(
    '%c> Si estás revisando el código, ¡te invito a contactarme!',
    'color: #6b7280; font-size: 14px; font-family: monospace;'
  );
  console.log('%c> contacto@maxmanuel.com', 'color: #39ff14; font-size: 14px; font-family: monospace;');
});

// Efecto parallax suave para el fondo de estrellas
let ticking = false;
window.addEventListener('scroll', () => {
  if (!ticking) {
    window.requestAnimationFrame(() => {
      const scrolled = window.pageYOffset;
      const parallax = document.querySelector('.container-space');
      if (parallax) {
        parallax.style.transform = `translateY(${scrolled * 0.3}px)`;
      }
      ticking = false;
    });
    ticking = true;
  }
});
