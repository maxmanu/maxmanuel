<?php
include 'templates/header.php';

$cv = json_decode(file_get_contents(__DIR__ . '/data/cv/cv.json'));

// Prepare profile information for hotkeypad
$profilesInfo = [];
$hotkeys = ['ctrl+L', 'ctrl+X', 'ctrl+G'];
$index = 0;
foreach ($cv->basics->profiles as $profile) {
  $profilesInfo[] = [
    'id' => strtolower($profile->network),
    'title' => $current_lang === 'es' ? 'Ir a ' . $profile->network : 'Go to ' . $profile->network,
    'url' => $profile->url,
    'icon' => '<img src="' . $profile->image . '" alt="' . $profile->network . '" style="width: 16px; height: 16px; margin-right: 8px;">',
    'section' => $current_lang === 'es' ? 'Redes Sociales' : 'Social Networks',
    'hotkey' => $hotkeys[$index] ?? 'ctrl+' . strtolower(substr($profile->network, 0, 1))
  ];
  $index++;
}
?>

<main>

  <a onclick="history.back()" class="max-button cv-button no-print" title="Go back to the previous page">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M19 12H5"></path>
      <path d="M12 19l-7-7 7-7"></path>
    </svg>
    <span><?php echo $current_lang === 'es' ? 'Regresar' : 'Back'; ?></span>
  </a>

  <section class="hero-section">
    <div class="container">
      <div class="info">
        <h1><?php echo htmlspecialchars($cv->basics->name); ?></h1>
        <h2><?php echo htmlspecialchars($cv->basics->label); ?></h2>
        <span>
          <img src="assets/img/icons/worldmap.svg" alt="Location">
          <?php echo htmlspecialchars($cv->basics->location->address); ?>
        </span>
        <footer class="print">
          <?php echo htmlspecialchars($cv->basics->email); ?> • <?php echo htmlspecialchars($cv->basics->phone); ?>
        </footer>
        <footer class="no-print">
          <?php if ($cv->basics->email): ?>
            <a
              href="mailto:<?php echo htmlspecialchars($cv->basics->email); ?>"
              title="Send an email to <?php echo htmlspecialchars($cv->basics->name); ?> at <?php echo htmlspecialchars($cv->basics->email); ?>"
              target="_blank"
              rel="noopener noreferrer">
              <img src="assets/img/icons/mail.svg" alt="Email">
            </a>
          <?php endif; ?>

          <?php if ($cv->basics->phone): ?>
            <a
              href="tel:<?php echo htmlspecialchars($cv->basics->phone); ?>"
              title="Call <?php echo htmlspecialchars($cv->basics->name); ?> at <?php echo htmlspecialchars($cv->basics->phone); ?>"
              target="_blank"
              rel="noopener noreferrer">
              <img src="assets/img/icons/phone.svg" alt="Phone">
            </a>
          <?php endif; ?>

          <?php foreach ($cv->basics->profiles as $profile): ?>
            <a
              href="<?php echo htmlspecialchars($profile->url); ?>"
              title="Visit <?php echo htmlspecialchars($cv->basics->name); ?>'s profile on <?php echo htmlspecialchars($profile->network); ?>"
              target="_blank"
              rel="noopener noreferrer">
              <img src="<?php echo htmlspecialchars($profile->image); ?>" alt="<?php echo htmlspecialchars($profile->network); ?> profile">
            </a>
          <?php endforeach; ?>
        </footer>
      </div>
      <figure class="no-print">
        <img src="<?php echo htmlspecialchars($cv->basics->image); ?>" alt="<?php echo htmlspecialchars($cv->basics->name); ?>" />
      </figure>
    </div>
  </section>

  <section class="about-section">
    <h2>About Me</h2>
    <p class="texto">
      <?php echo htmlspecialchars($cv->basics->summary); ?>
    </p>
  </section>

  <section class="experience-section">
    <h2>Work Experience</h2>
    <ul>
      <?php foreach ($cv->work as $work): ?>
        <li>
          <article>
            <header>
              <div>
                <h3>
                  <a href="<?php echo htmlspecialchars($work->url); ?>" title="View <?php echo htmlspecialchars($work->name); ?>" target="_blank">
                    <?php echo htmlspecialchars($work->name); ?>
                  </a>
                </h3>
                <h4><?php echo htmlspecialchars($work->position); ?></h4>
              </div>

              <div>
                <time
                  datetime="<?php echo htmlspecialchars($work->startDate); ?>"
                  data-title="<?php echo htmlspecialchars($work->startDate); ?>">
                  <?php echo substr($work->startDate, 0, 8); ?>
                </time>
                <?php if ($work->endDate != null): ?> <span>-</span>
                  <time
                    datetime="<?php echo htmlspecialchars($work->endDate); ?>"
                    data-title="<?php echo htmlspecialchars($work->endDate); ?>">
                    <?php echo substr($work->endDate, 0, 8); ?>
                  </time>
                <?php else: ?>
                  <time> - Present</time>
                <?php endif; ?>
              </div>
            </header>

            <footer>
              <?php if (!empty($work->highlights)): ?>
                <ul class="highlights-list">
                  <?php foreach ($work->highlights as $highlight): ?>
                    <li><?php echo htmlspecialchars($highlight); ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </footer>
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="education-section">
    <h2>Education</h2>
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
                  datetime="<?php echo htmlspecialchars($education->endDate); ?>"
                  data-title="<?php echo htmlspecialchars($education->endDate); ?>">
                  <?php echo substr($education->endDate, 0, 4); ?>
                </time>
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

  <!-- <section class="projects-section">
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
  </section> -->

  <section class="skills-section">
    <h2>Skills</h2>
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
  <?php echo $current_lang === 'es' ? 'Presione <kbd>Ctrl</kbd> + <kbd>K</kbd> para abrir la paleta de comandos.' : 'Press <kbd>Ctrl</kbd> + <kbd>K</kbd> to open the command palette.'; ?>
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
  data-placeholder="<?php echo $current_lang === 'es' ? 'Buscar comando' : 'Search command'; ?>"
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
      title: "<?php echo $current_lang === 'es' ? 'Imprimir' : 'Print'; ?>",
      icon: `<svg style="margin-right: 8px" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
</svg>`,
      hotkey: "ctrl+P",
      section: "<?php echo $current_lang === 'es' ? 'Acciones' : 'Actions'; ?>",
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