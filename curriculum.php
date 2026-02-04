<?php
include 'templates/header.php';

// Leer el archivo JSON y convertirlo a objeto
$cv = json_decode(file_get_contents('data/cv.json'));

// Preparar información de perfiles para hotkeypad
$profilesInfo = [];
$hotkeys = ['ctrl+L', 'ctrl+X', 'ctrl+G']; // LinkedIn, X, GitHub
$index = 0;
foreach ($cv->basics->profiles as $profile) {
  $profilesInfo[] = [
    'id' => strtolower($profile->network),
    'title' => 'Ir a ' . $profile->network,
    'url' => $profile->url,
    'icon' => '<img src="' . $profile->image . '" alt="' . $profile->network . '" style="width: 16px; height: 16px; margin-right: 8px;">',
    'section' => 'Redes Sociales',
    'hotkey' => $hotkeys[$index] ?? 'ctrl+' . strtolower(substr($profile->network, 0, 1))
  ];
  $index++;
}
?>

<main>

  <section class="hero-section">
    <div class="container">
      <div class="info">
        <h1><?php echo htmlspecialchars($cv->basics->name); ?></h1>
        <h2><?php echo htmlspecialchars($cv->basics->label); ?></h2>
        <span>
          <img src="assets/img/icons/worldmap.svg" alt="Ubicación">
          <?php echo htmlspecialchars($cv->basics->location->address); ?>
        </span>
        <footer class="print">
          <?php echo htmlspecialchars($cv->basics->email); ?> • <?php echo htmlspecialchars($cv->basics->phone); ?>
        </footer>
        <footer class="no-print">
          <?php if ($cv->basics->email): ?>
            <a
              href="mailto:<?php echo htmlspecialchars($cv->basics->email); ?>"
              title="Enviar un correo electrónico a <?php echo htmlspecialchars($cv->basics->name); ?> al correo <?php echo htmlspecialchars($cv->basics->email); ?>"
              target="_blank"
              rel="noopener noreferrer">
              <img src="assets/img/icons/mail.svg" alt="Correo electrónico">
            </a>
          <?php endif; ?>

          <?php if ($cv->basics->phone): ?>
            <a
              href="tel:<?php echo htmlspecialchars($cv->basics->phone); ?>"
              title="Llamar por teléfono a <?php echo htmlspecialchars($cv->basics->name); ?> al número <?php echo htmlspecialchars($cv->basics->phone); ?>"
              target="_blank"
              rel="noopener noreferrer">
              <img src="assets/img/icons/phone.svg" alt="Teléfono">
            </a>
          <?php endif; ?>

          <?php foreach ($cv->basics->profiles as $profile): ?>
            <a
              href="<?php echo htmlspecialchars($profile->url); ?>"
              title="Visitar el perfil de <?php echo htmlspecialchars($cv->basics->name); ?> en <?php echo htmlspecialchars($profile->network); ?>"
              target="_blank"
              rel="noopener noreferrer">
              <img src="<?php echo htmlspecialchars($profile->image); ?>" alt="Perfil de <?php echo htmlspecialchars($profile->network); ?>">
            </a>
          <?php endforeach; ?>
        </footer>
      </div>
      <figure>
        <img src="<?php echo htmlspecialchars($cv->basics->image); ?>" alt="<?php echo htmlspecialchars($cv->basics->name); ?>" />
      </figure>
    </div>
  </section>

  <section class="about-section">
    <h2>Sobre mí</h2>
    <p>
      <?php echo htmlspecialchars($cv->basics->summary); ?>
    </p>
  </section>

  <section class="experience-section">
    <h2>Experiencia laboral</h2>
    <ul>
      <?php foreach ($cv->work as $work): ?>
        <li>
          <article>
            <header>
              <div>
                <h3>
                  <a href="<?php echo htmlspecialchars($work->url); ?>" title="Ver <?php echo htmlspecialchars($work->name); ?>" target="_blank">
                    <?php echo htmlspecialchars($work->name); ?>
                  </a>
                </h3>
                <h4><?php echo htmlspecialchars($work->position); ?></h4>
              </div>

              <div>
                <time
                  datetime="<?php echo htmlspecialchars($work->startDate); ?>"
                  data-title="<?php echo htmlspecialchars($work->startDate); ?>">
                  <?php echo substr($work->startDate, 0, 4); ?>
                </time>
                <?php if ($work->endDate != null): ?> <span>-</span>
                  <time
                    datetime="<?php echo htmlspecialchars($work->endDate); ?>"
                    data-title="<?php echo htmlspecialchars($work->endDate); ?>">
                    <?php echo substr($work->endDate, 0, 4); ?>
                  </time>
                <?php else: ?>
                  <time> - Actualidad</time>
                <?php endif; ?>
              </div>
            </header>

            <footer>
              <p><?php echo htmlspecialchars($work->summary); ?></p>
            </footer>
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="education-section">
    <h2>Educación</h2>
    <ul>
      <?php foreach ($cv->education as $education): ?>
        <li>
          <article>
            <header>
              <div>
                <h3><?php echo htmlspecialchars($education->institution); ?></h3>
              </div>

              <div>
                <time
                  datetime="<?php echo htmlspecialchars($education->startDate); ?>"
                  data-title="<?php echo htmlspecialchars($education->startDate); ?>">
                  <?php echo substr($education->startDate, 0, 4); ?>
                </time>
                <?php if ($education->endDate != null): ?> <span>-</span>
                  <time
                    datetime="<?php echo htmlspecialchars($education->endDate); ?>"
                    data-title="<?php echo htmlspecialchars($education->endDate); ?>">
                    <?php echo substr($education->endDate, 0, 4); ?>
                  </time>
                <?php else: ?>
                  <time> - Actualidad</time>
                <?php endif; ?>
              </div>
            </header>

            <footer>
              <p><?php echo htmlspecialchars($education->area); ?></p>
            </footer>
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="projects-section">
    <h2>Proyectos</h2>
    <ul>
      <?php foreach ($cv->projects as $project): ?>
        <li>
          <article>
            <header>
              <h3>
                <a href="<?php echo htmlspecialchars($project->url); ?>" target="_blank" title={`Ver el proyecto <?php echo htmlspecialchars($project->name); ?>`}>
                  <?php echo htmlspecialchars($project->name); ?>
                </a>
                <?php if (isset($project->isActive)): ?> <span>•</span> <?php endif; ?>
                <?php if (isset($project->github)): ?>
                  <a
                    class="github-code-link"
                    href="<?php echo htmlspecialchars($project->github); ?>"
                    target="_blank"
                    title={`Ver código fuente del proyecto <?php echo htmlspecialchars($project->name); ?>`}>
                    <img src="assets/img/icons/github.svg" alt="GitHub">
                  </a>
                <?php endif; ?>
              </h3>
              <p><?php echo htmlspecialchars($project->description); ?></p>
            </header>
            <footer>
              <?php foreach ($project->highlights as $highlight): ?>
                <span><?php echo htmlspecialchars($highlight); ?></span>
              <?php endforeach; ?>
            </footer>
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="skills-section">
    <h2>Habilidades</h2>
    <ul>
      <?php foreach ($cv->skills as $skill): ?>
        <li>
          <img src="<?php echo htmlspecialchars($skill->icon); ?>" alt="<?php echo htmlspecialchars($skill->name); ?>">
          <span><?php echo htmlspecialchars($skill->name); ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

</main>

<footer id="normal-footer" class="no-print">
  Pulsa <kbd>Cmd</kbd> + <kbd>K</kbd> para abrir la paleta de comandos.
</footer>

<div id="footer-button" class="no-print">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    class="icon icon-tabler icon-tabler-command"
    width="32"
    height="32"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="#777"
    fill="none"
    stroke-linecap="round"
    stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path
      d="M7 9a2 2 0 1 1 2 -2v10a2 2 0 1 1 -2 -2h10a2 2 0 1 1 -2 2v-10a2 2 0 1 1 2 2h-10"></path>
  </svg>
</div>

<div
  id="hotkeypad"
  data-placeholder="Buscar comando"
  data-info="<?php echo htmlspecialchars(json_encode($profilesInfo)); ?>">
</div>

<script type="module">
  import HotKeyPad from 'https://unpkg.com/hotkeypad?module'
  const hotkeypad = new HotKeyPad()
  const info = hotkeypad.instance.getAttribute("data-info") ?? "[]"
  const parsedInfo = JSON.parse(info) || []

  const data = parsedInfo.map(
    ({
      url,
      hotkey,
      icon,
      id,
      section,
      title
    }) => {
      return {
        id,
        title,
        icon,
        hotkey,
        section,
        handler: () => {
          window.open(url, "_blank")
        }
      }
    }
  )
  hotkeypad.setCommands([{
      id: "print",
      title: "Imprimir",
      icon: `<svg style="margin-right: 8px" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
</svg>`,
      hotkey: "ctrl+P",
      section: "Acciones",
      handler: () => {
        window.print()
      }
    },
    ...data
  ])

  const footerButton = document.getElementById("footer-button")
  footerButton?.addEventListener("click", () => {
    var event = new KeyboardEvent("keydown", {
      key: "K",
      code: "KeyK",
      keyCode: 75,
      which: 75,
      ctrlKey: true,
      altKey: false,
      shiftKey: false,
      metaKey: false
    })

    document.dispatchEvent(event)
  })
</script>