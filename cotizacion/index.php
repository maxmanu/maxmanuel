<?php
// ── Datos de la cotización ── Edita solo esta sección para cada cliente
$quote_title    = 'Cotización — Be Green Heroes Platform | Max Manuel';
$quote_id       = 'COT-2026-003';
$quote_date     = '03 de marzo de 2026';
$quote_valid    = '03 de abril de 2026';
$client_name    = 'Be Green Heroes';
$client_company = 'begreenheroes.com';
$client_email   = '';
// ───────────────────────────────────────────────
require_once 'template/header.php';
?>

<!-- ══ CABECERA DEL DOCUMENTO ══ -->
<div class="quote-header">
  <div>
    <div class="quote-meta-label">Número de cotización</div>
    <div class="quote-id"><?php echo $quote_id; ?></div>
    <div class="mt-3 quote-meta-label">Preparado para</div>
    <div class="quote-meta-value"><?php echo $client_name; ?></div>
    <div style="color:var(--color-secondary);font-size:0.88rem;"><?php echo $client_company; ?></div>
    <div style="color:var(--color-secondary);font-size:0.85rem;"><?php echo $client_email; ?></div>
  </div>
  <div style="text-align:right;">
    <div class="quote-meta-label">Fecha de emisión</div>
    <div class="quote-meta-value"><?php echo $quote_date; ?></div>
    <div class="mt-3 quote-meta-label">Válido hasta</div>
    <div class="quote-meta-value"><?php echo $quote_valid; ?></div>
    <div class="mt-3 d-flex flex-wrap gap-1 justify-content-end">
      <span class="tag">LMS</span>
      <span class="tag">GHC Tokens</span>
      <span class="tag">Blockchain Wallet</span>
      <span class="tag">Governance</span>
    </div>
  </div>
</div>

<!-- ══ RESUMEN EJECUTIVO ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat resumen-ejecutivo.md
  </div>
  <p>
    <strong style="color:#fff;">Be Green Heroes (BGH)</strong> es una plataforma global de educación en sostenibilidad con el tagline
    <em style="color:var(--color-primary);">"Learn. Earn. Lead the Future."</em> Los participantes aprenden sobre sostenibilidad basada en ciencia,
    ganan <strong style="color:#fff;">Green Hero Coins (GHC)</strong> al completar módulos y quizzes,
    y acumulan <strong style="color:#fff;">Voting Power (VPo)</strong> para participar en la gobernanza descentralizada del ecosistema.
  </p>
  <p>
    La plataforma requiere una solución con múltiples capas: sistema LMS estructurado con ruta de aprendizaje obligatoria,
    motor de tokens propio (GHC / m-UC / p-UC), wallet integrado con estado por usuario, módulo de votación y
    propuestas con umbrales mínimos de participación, verificación de edad (KYC), y soporte multiidioma.
  </p>
  <p>
    Este documento compara dos enfoques de implementación teniendo en cuenta que el mockup original especifica
    <strong style="color:var(--color-warning);">WordPress + Elementor Pro</strong> como referencia de diseño,
    frente a una <strong style="color:var(--color-primary);">solución PHP personalizada</strong> que cubra la complejidad técnica completa del ecosistema BGH.
  </p>
  <div class="d-flex flex-wrap gap-2 mt-3">
    <span class="tag">LMS multinivelado</span>
    <span class="tag">GHC / m-UC / p-UC tokens</span>
    <span class="tag">Blockchain wallet</span>
    <span class="tag">KYC + verificación de edad</span>
    <span class="tag">Voting Power (VPo)</span>
    <span class="tag">Gobernanza y propuestas</span>
    <span class="tag">Multiidioma (6 idiomas)</span>
    <span class="tag">Panel de administración</span>
  </div>
</div>

<!-- ══ ALCANCE FUNCIONAL ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat alcance-funcional.md
  </div>

  <!-- Módulo 1 -->
  <div style="color:var(--color-primary);font-weight:700;font-size:0.88rem;letter-spacing:0.05em;margin-bottom:0.75rem;opacity:0.7;">MÓDULO 01 — PLATAFORMA DE APRENDIZAJE (LMS)</div>
  <div class="row g-3 mb-4">
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Ruta obligatoria: BGH Capítulo 1 completo antes de acceder a otros contenidos</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Estructura jerárquica: Libro → Capítulo → Sección → Unidad → Punto de aprendizaje</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Contenido multimedia: lectura, podcast y vídeo por punto de aprendizaje</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Sistema de quizzes: aprobado → gana GHC | reprobado → revisa y reintenta (contenido rotativo)</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Seguimiento de progreso granular: secciones grises hasta completar la unidad anterior</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Descarga gratuita del Capítulo 1 sin registro (PDF en 6 idiomas)</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Breadcrumbs, búsqueda de contenido y navegación por teclado (accesibilidad)</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Soporte multiidioma: EN, ES, FR, IT, ZH, KO</li>
      </ul>
    </div>
  </div>

  <!-- Módulo 2 -->
  <div style="color:var(--color-primary);font-weight:700;font-size:0.88rem;letter-spacing:0.05em;margin-bottom:0.75rem;opacity:0.7;">MÓDULO 02 — TOKENS GHC Y WALLET</div>
  <div class="row g-3 mb-4">
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Dos tipos de tokens: <strong style="color:#d1d5db;">m-UC</strong> (adultos verificados, canjeables) y <strong style="color:#d1d5db;">p-UC</strong> (menores de edad, no canjeables)</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Wallet con tres estados: Total Minado, Bloqueado y Desbloqueado</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Historial de movimientos filtrable por Libro, Capítulo, Sección y fecha</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Integración con precios de mercado (BTC, ETH, SOL) y función de exchange</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Panel de wallet bloqueado visualmente para usuarios menores de edad</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Integración con smart contract (ICP/canister o equivalente)</li>
      </ul>
    </div>
  </div>

  <!-- Módulo 3 -->
  <div style="color:var(--color-primary);font-weight:700;font-size:0.88rem;letter-spacing:0.05em;margin-bottom:0.75rem;opacity:0.7;">MÓDULO 03 — GOBERNANZA: VOTACIÓN Y PROPUESTAS</div>
  <div class="row g-3 mb-4">
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Voting Power (VPo) = m-UC bloqueados en wallet</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Fase de Propuesta: mínimo 150 m-UC para proponer; 15.000 votos para avanzar a Fase de Aprobación</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Categorías de propuesta: Personal, Tesorería, Contenidos, Protocolos, Marketing, Plataforma y más</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Formularios de propuesta estructurados con dropdowns jerárquicos y validaciones</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Listado de ideas propuestas con ordenamiento y filtros por categoría, país, fecha y proponente</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Transparencia: publicación de resultados y justificaciones</li>
      </ul>
    </div>
  </div>

  <!-- Módulo 4 -->
  <div style="color:var(--color-primary);font-weight:700;font-size:0.88rem;letter-spacing:0.05em;margin-bottom:0.75rem;opacity:0.7;">MÓDULO 04 — USUARIOS, KYC Y ESTADOS</div>
  <div class="row g-3">
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;5 estados de usuario: Invitado / Registrado / KYC verificado / Menor de edad / Suspendido</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Verificación de edad obligatoria para ganar tokens (mayores de 15 años con protección)</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;KYC (Know Your Customer): verificación de identidad para habilitar canje de fondos</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul style="list-style:none;padding:0;margin:0;">
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Reglas de acceso por estado: qué puede ver/hacer cada tipo de usuario</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Manejo de errores: login fallido, KYC rechazado, 2FA, cuenta bloqueada</li>
        <li style="color:#9ca3af;font-size:0.87rem;padding:0.28rem 0;"><span style="color:var(--color-primary);">▸</span>&nbsp;Footer legal: Terms of Use, Privacy Policy, Risk Disclaimer, Cookie Notice</li>
      </ul>
    </div>
  </div>
</div>

<!-- ══ ¿POR QUÉ NO WORDPRESS? ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat por-que-no-wordpress.md
  </div>

  <p>
    La primera pregunta natural es: ¿existe algún plugin de WordPress que sirva como base?
    El más cercano es <strong style="color:#fff;"><a href="https://mycred.me/" target="_blank" style="color:#fff;">MyCred</a></strong>,
    un sistema de puntos/tokens para WordPress con historial, badges y reglas configurables.
    Sin embargo, revisando el ecosistema actual de plugins, la respuesta es clara:
    <strong style="color:var(--color-warning);">no existe ninguna solución lista que cubra lo que BGH necesita.</strong>
  </p>

  <div style="overflow-x:auto;margin:1.5rem 0;">
    <table class="compare-table">
      <thead>
        <tr>
          <th style="min-width:220px;">Funcionalidad requerida por BGH</th>
          <th class="col-wp" style="min-width:180px;">MyCred / WP plugins</th>
          <th class="col-php" style="min-width:180px;">PHP Custom</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="color:#d1d5db;">LMS con ruta obligatoria y jerarquía Libro→Unidad</td>
          <td><span class="partial">⚡</span>&nbsp;<span style="font-size:0.87rem;">LearnDash se acerca, pero la lógica secuencial exacta del mockup requiere código custom dentro de WP</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">Implementado exactamente según el mockup</span></td>
        </tr>
        <tr>
          <td style="color:#d1d5db;">Dos clases de tokens (m-UC adultos / p-UC menores)</td>
          <td><span class="cross">✕</span>&nbsp;<span style="font-size:0.87rem;">MyCred solo maneja un tipo de punto; no soporta restricciones por verificación de edad</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">Nativo con reglas de edad y KYC</span></td>
        </tr>
        <tr>
          <td style="color:#d1d5db;">Wallet con mercado en tiempo real (BTC/ETH/SOL)</td>
          <td><span class="cross">✕</span>&nbsp;<span style="font-size:0.87rem;">No existe plugin WP equivalente</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">API integrada (CoinGecko o similar)</span></td>
        </tr>
        <tr>
          <td style="color:#d1d5db;">Gobernanza: Vote + Propose con umbrales VPo</td>
          <td><span class="cross">✕</span>&nbsp;<span style="font-size:0.87rem;">Sin equivalente; desarrollo 100% custom igual que en PHP puro, pero dentro de WP (peor)</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">Módulo propio con las fases y reglas exactas</span></td>
        </tr>
        <tr>
          <td style="color:#d1d5db;">Integración blockchain / smart contract</td>
          <td><span class="cross">✕</span>&nbsp;<span style="font-size:0.87rem;">WP no tiene capa para esto; plugin frágil e inseguro</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">SDK/API integrado en la capa de servicios</span></td>
        </tr>
        <tr>
          <td style="color:#d1d5db;">KYC + 5 estados de usuario</td>
          <td><span class="partial">⚡</span>&nbsp;<span style="font-size:0.87rem;">Plugins de terceros disponibles (~$150-300/mes), no nativos en WP</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">Integración directa con Veriff, Sumsub u otro proveedor</span></td>
        </tr>
        <tr>
          <td style="color:#d1d5db;">Seguridad financiera para dinero real</td>
          <td><span class="cross">✕</span>&nbsp;<span style="font-size:0.87rem;">Alto riesgo: WordPress + plugins de terceros = superficie de ataque grande para operar tokens reales</span></td>
          <td><span class="check">✓</span>&nbsp;<span style="font-size:0.87rem;">Código propio, auditado, sin dependencias innecesarias</span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="p-3" style="background:rgba(255,68,68,0.05);border:1px solid rgba(255,68,68,0.25);border-radius:6px;font-size:0.85rem;color:#9ca3af;">
    <strong style="color:var(--color-danger);">Conclusión:</strong>
    Usar WordPress como base para BGH significaría escribir igual cantidad de código custom
    pero dentro de las limitaciones y overhead del CMS — acumulando deuda técnica desde el día 1.
    La única diferencia sería pagar licencias anuales por plugins que cubren solo el 30% de lo necesario.
    <strong style="color:#fff;">BGH requiere una solución PHP a medida.</strong>
  </div>
</div>

<!-- ══ PROPUESTA DE DESARROLLO ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat propuesta.md
  </div>
  <p>
    Dado que BGH requiere desarrollo a medida en cualquier escenario, la propuesta se divide en dos etapas:
    un <strong style="color:#fff;">MVP funcional</strong> para validar el producto con usuarios reales en el menor tiempo posible,
    y la <strong style="color:var(--color-primary);">Plataforma Completa</strong> con todos los m&oacute;dulos del mockup operativos.
  </p>

  <div class="option-cards" style="grid-template-columns: 1fr 1fr;">

    <!-- ── MVP ── -->
    <div class="option-card">
      <div class="option-card-title" style="color:var(--color-warning);">
        Opci&oacute;n A &mdash; MVP
        <span style="font-size:0.75rem;font-weight:400;color:var(--color-secondary);display:block;margin-top:0.2rem;">Validar el producto con costo reducido</span>
      </div>
      <ul>
        <li><span class="icon check">&#10003;</span> Registro, login y verificaci&oacute;n de edad b&aacute;sica (auto-declaraci&oacute;n)</li>
        <li><span class="icon check">&#10003;</span> LMS: ruta obligatoria Cap&iacute;tulo 1, jerarqu&iacute;a secci&oacute;n&rarr;unidad, quizzes con rotaci&oacute;n de contenido</li>
        <li><span class="icon check">&#10003;</span> Motor GHC <em>off-chain</em>: tokens en base de datos (sin blockchain), historial de minado, estados bloqueado/desbloqueado</li>
        <li><span class="icon check">&#10003;</span> Wallet b&aacute;sico: saldo y registros por libro/cap&iacute;tulo/secci&oacute;n</li>
        <li><span class="icon check">&#10003;</span> Descarga gratuita del Cap&iacute;tulo 1 en PDF (EN + ES)</li>
        <li><span class="icon check">&#10003;</span> UI responsive fiel al mockup en las pantallas principales</li>
        <li><span class="icon cross">&times;</span> Sin integraci&oacute;n blockchain ni smart contract</li>
        <li><span class="icon cross">&times;</span> Sin wallet con precios de mercado en tiempo real</li>
        <li><span class="icon cross">&times;</span> Sin KYC completo ni m&oacute;dulo de Gobernanza (Vote/Propose)</li>
        <li><span class="icon cross">&times;</span> Sin los 6 idiomas (EN + ES inicial)</li>
      </ul>
      <div class="mt-3 d-flex flex-wrap gap-1">
        <span class="tag tag-warning">~3 meses</span>
        <span class="tag tag-warning">Entrega r&aacute;pida</span>
        <span class="tag">Escalable a Fase 2</span>
      </div>
    </div>

    <!-- ── COMPLETA ── -->
    <div class="option-card recommended">
      <div class="option-card-title" style="color:var(--color-primary);">
        Opci&oacute;n B &mdash; Plataforma Completa
        <span class="recommended-badge">RECOMENDADA</span>
        <span style="font-size:0.75rem;font-weight:400;color:var(--color-secondary);display:block;margin-top:0.2rem;">Todo el mockup, operativo con tokens reales</span>
      </div>
      <ul>
        <li><span class="icon check">&#10003;</span> Todo lo del MVP, m&aacute;s:</li>
        <li><span class="icon check">&#10003;</span> KYC completo + 5 estados de usuario (Invitado / Registrado / KYC / Menor / Suspendido)</li>
        <li><span class="icon check">&#10003;</span> m-UC (adultos KYC, canjeables) y p-UC (menores, no canjeables)</li>
        <li><span class="icon check">&#10003;</span> Wallet completo: exchange, precios de mercado en tiempo real (BTC/ETH/SOL)</li>
        <li><span class="icon check">&#10003;</span> Gobernanza completa: Vote + Propose con fases, VPo y umbrales</li>
        <li><span class="icon check">&#10003;</span> Integraci&oacute;n blockchain / smart contract (ICP/canister u otro seg&uacute;n whitepaper)</li>
        <li><span class="icon check">&#10003;</span> LMS completo: todos los libros, 6 idiomas (EN, ES, FR, IT, ZH, KO)</li>
        <li><span class="icon check">&#10003;</span> Panel de administraci&oacute;n: usuarios, cursos, tokens, reportes</li>
        <li><span class="icon check">&#10003;</span> Accesibilidad WCAG, optimizaci&oacute;n de rendimiento y auditor&iacute;a de seguridad</li>
        <li><span class="icon check">&#10003;</span> 0 licencias de plataforma &mdash; c&oacute;digo 100% de BGH</li>
      </ul>
      <div class="mt-3 d-flex flex-wrap gap-1">
        <span class="tag">~9-12 meses</span>
        <span class="tag">Ecosistema completo</span>
        <span class="tag">Blockchain nativo</span>
        <span class="tag">Global</span>
      </div>
    </div>

  </div>
</div>

<!-- ══ TIMELINE ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat timeline.md
  </div>

  <div class="row g-4">
    <div class="col-md-6">
      <div style="color:var(--color-warning);font-weight:700;font-size:0.9rem;margin-bottom:1rem;">
        Opci&oacute;n A &mdash; MVP <span style="color:var(--color-secondary);font-weight:400;">&asymp; 3 meses</span>
      </div>
      <ul class="timeline">
        <li class="active">
          <div class="timeline-phase">Setup, DB &amp; Auth <span class="timeline-duration">~2 sem</span></div>
          <div class="timeline-desc">Arquitectura, base de datos, registro/login, verificaci&oacute;n de edad b&aacute;sica</div>
        </li>
        <li class="active">
          <div class="timeline-phase">LMS &mdash; Cap&iacute;tulo 1 obligatorio <span class="timeline-duration">~3 sem</span></div>
          <div class="timeline-desc">Ruta secuencial, multimedia (texto/podcast/v&iacute;deo), quizzes rotativos, progreso</div>
        </li>
        <li class="active">
          <div class="timeline-phase">Motor GHC off-chain + Wallet b&aacute;sico <span class="timeline-duration">~2 sem</span></div>
          <div class="timeline-desc">Minado por quiz aprobado, historial, estados bloqueado/desbloqueado</div>
        </li>
        <li>
          <div class="timeline-phase">UI/UX &amp; frontend <span class="timeline-duration">~3 sem</span></div>
          <div class="timeline-desc">Maquetaci&oacute;n fiel al mockup (Home, Learn, Wallet), responsive, EN+ES</div>
        </li>
        <li>
          <div class="timeline-phase">QA &amp; deploy <span class="timeline-duration">~1 sem</span></div>
          <div class="timeline-desc">Pruebas, ajustes, puesta en producci&oacute;n, capacitaci&oacute;n b&aacute;sica</div>
        </li>
      </ul>
    </div>

    <div class="col-md-6">
      <div style="color:var(--color-primary);font-weight:700;font-size:0.9rem;margin-bottom:1rem;">
        Opci&oacute;n B &mdash; Plataforma Completa <span style="color:var(--color-secondary);font-weight:400;">&asymp; 9-12 meses</span>
      </div>
      <ul class="timeline">
        <li class="active">
          <div class="timeline-phase">Arquitectura &amp; Auth &amp; KYC <span class="timeline-duration">~3 sem</span></div>
          <div class="timeline-desc">DB, 5 estados de usuario, KYC provider (Veriff/Sumsub), verificaci&oacute;n de edad</div>
        </li>
        <li class="active">
          <div class="timeline-phase">LMS completo (todos los libros) <span class="timeline-duration">~6 sem</span></div>
          <div class="timeline-desc">Ruta obligatoria + contenido libre, 6 idiomas, multimedia, quizzes, progreso granular</div>
        </li>
        <li>
          <div class="timeline-phase">Motor GHC m-UC / p-UC + Wallet <span class="timeline-duration">~4 sem</span></div>
          <div class="timeline-desc">Tokens on-chain, exchange, precios de mercado en tiempo real, historial inmutable</div>
        </li>
        <li>
          <div class="timeline-phase">Gobernanza: Vote + Propose <span class="timeline-duration">~4 sem</span></div>
          <div class="timeline-desc">Fases Propuesta&rarr;Aprobaci&oacute;n, VPo, formularios jer&aacute;rquicos, resultados p&uacute;blicos</div>
        </li>
        <li>
          <div class="timeline-phase">Integraci&oacute;n blockchain <span class="timeline-duration">~3 sem</span></div>
          <div class="timeline-desc">ICP/canister o equivalente seg&uacute;n whitepaper BGH</div>
        </li>
        <li>
          <div class="timeline-phase">UI/UX pixel-perfect + accesibilidad <span class="timeline-duration">~4 sem</span></div>
          <div class="timeline-desc">WCAG, animaciones, todos los flujos del mockup, 6 idiomas</div>
        </li>
        <li>
          <div class="timeline-phase">Panel admin, QA &amp; deploy global <span class="timeline-duration">~3 sem</span></div>
          <div class="timeline-desc">Dashboard, reportes, auditor&iacute;a de seguridad, staging&rarr;producci&oacute;n, documentaci&oacute;n</div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- ══ INVERSIÓN ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat inversion.md
  </div>

  <div class="row g-4">

    <!-- Opción A: MVP -->
    <div class="col-md-6">
      <div style="color:var(--color-warning);font-weight:700;font-size:0.9rem;margin-bottom:1rem;">
        Opci&oacute;n A &mdash; MVP
      </div>
      <table class="price-table">
        <thead>
          <tr>
            <th>M&oacute;dulo</th>
            <th style="text-align:right;">Precio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Setup, DB &amp; Auth<div class="price-note">Arquitectura, registro/login, verificaci&oacute;n de edad b&aacute;sica</div>
            </td>
            <td class="price-value">$500</td>
          </tr>
          <tr>
            <td>LMS Cap&iacute;tulo 1 obligatorio<div class="price-note">Ruta secuencial, quizzes rotativos, multimedia, progreso</div>
            </td>
            <td class="price-value">$1,500</td>
          </tr>
          <tr>
            <td>Motor GHC off-chain + Wallet b&aacute;sico<div class="price-note">Tokens en DB, historial, estados bloqueado/desbloqueado</div>
            </td>
            <td class="price-value">$1,000</td>
          </tr>
          <tr>
            <td>UI/UX + frontend (EN + ES)<div class="price-note">Home, Learn, Wallet &mdash; fiel al mockup, responsive</div>
            </td>
            <td class="price-value">$1,400</td>
          </tr>
          <tr>
            <td>QA, deploy &amp; documentaci&oacute;n</td>
            <td class="price-value">$600</td>
          </tr>
          <tr class="total-row">
            <td><strong>Total MVP</strong>
              <div class="price-note">Entregable funcional en ~3 meses &middot; escalable a Fase 2 &middot; ~250 h @ $20/hr</div>
            </td>
            <td class="price-value" style="color:var(--color-warning);">$5,000</td>
          </tr>
        </tbody>
      </table>
      <!-- <div class="mt-3 p-3" style="background:rgba(255,170,0,0.05);border:1px solid rgba(255,170,0,0.2);border-radius:6px;font-size:0.83rem;color:#9ca3af;">
        Costo de operaci&oacute;n mensual (post-lanzamiento):<br>
        VPS ~S/&nbsp;150/mes + dominio ~S/&nbsp;60/a&ntilde;o.<br>
        <strong style="color:var(--color-warning);">Sin licencias de plataforma.</strong>
      </div> -->
    </div>

    <!-- Opción B: Completa -->
    <div class="col-md-6">
      <div style="color:var(--color-primary);font-weight:700;font-size:0.9rem;margin-bottom:1rem;">
        Opci&oacute;n B &mdash; Plataforma Completa
        <span class="recommended-badge">RECOMENDADA</span>
      </div>
      <table class="price-table">
        <thead>
          <tr>
            <th>M&oacute;dulo</th>
            <th style="text-align:right;">Precio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>MVP completo (Fase 1)<div class="price-note">Todo lo descrito en la Opci&oacute;n A</div>
            </td>
            <td class="price-value">$5,000</td>
          </tr>
          <tr>
            <td>KYC completo + 5 estados de usuario<div class="price-note">Integraci&oacute;n proveedor (Veriff/Sumsub), flujos por estado</div>
            </td>
            <td class="price-value">$1,200</td>
          </tr>
          <tr>
            <td>LMS ampliado (todos los libros, 6 idiomas)<div class="price-note">Contenido libre post-Cap.1, multilenguaje EN/ES/FR/IT/ZH/KO</div>
            </td>
            <td class="price-value">$2,400</td>
          </tr>
          <tr>
            <td>Wallet completo + Exchange + Mercado<div class="price-note">m-UC / p-UC on-chain, precios BTC/ETH/SOL en tiempo real</div>
            </td>
            <td class="price-value">$1,600</td>
          </tr>
          <tr>
            <td>Gobernanza: Vote + Propose<div class="price-note">Fases, VPo, umbrales, formularios jer&aacute;rquicos, transparencia</div>
            </td>
            <td class="price-value">$1,600</td>
          </tr>
          <tr>
            <td>Integraci&oacute;n blockchain / smart contract<div class="price-note">Seg&uacute;n whitepaper BGH (ICP/canister u otro)</div>
            </td>
            <td class="price-value">$1,600</td>
          </tr>
          <tr>
            <td>Panel admin + WCAG + auditor&iacute;a + deploy<div class="price-note">Dashboard, reportes, hardening, documentaci&oacute;n</div>
            </td>
            <td class="price-value">$1,600</td>
          </tr>
          <tr class="total-row">
            <td><strong>Total Plataforma Completa</strong>
              <div class="price-note">Pago por fases &middot; 0 licencias de plataforma &middot; ~750 h @ $20/hr &middot; c&oacute;digo 100% BGH</div>
            </td>
            <td class="price-value" style="color:var(--color-primary);">$15,000</td>
          </tr>
        </tbody>
      </table>
      <div class="mt-3 p-3" style="background:rgba(57,255,20,0.04);border:1px solid rgba(57,255,20,0.2);border-radius:6px;font-size:0.83rem;color:#9ca3af;">
        &#10003; <strong style="color:var(--color-primary);">Sin licencias de plataforma.</strong><br>
        VPS ~$150/mes + KYC API ~$50-200/mes seg&uacute;n volumen.<br>
        Soporte y mantenimiento opcional: <strong style="color:#fff;">$200/mes</strong>.
      </div>
    </div>
  </div>
</div>

<!-- ══ CONDICIONES ══ -->
<div class="section-block">
  <div class="section-block-title">
    <span class="prompt">$</span> cat condiciones.md
  </div>
  <div class="row g-3" style="font-size:0.88rem;color:#9ca3af;">
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">Revisiones incluidas:</strong> 2 rondas de cambios por módulo.
    </div>
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">Garantía:</strong> 60 días post-lanzamiento para corrección de bugs sin costo.
    </div>
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">Hosting:</strong> No incluido. Se recomienda VPS mínimo 4 vCPU / 8 GB RAM para producción real con tokens.
    </div>
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">KYC Provider:</strong> No incluido. Se asesora en la selección e integración (Veriff, Sumsub, Onfido u otro).
    </div>
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">Whitepaper técnico:</strong> Se requiere acceso al BGH White Paper y especificación del smart contract para integrar correctamente los tokens.
    </div>
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">Contenido de cursos:</strong> No incluido. Se desarrolla el contenedor; el equipo BGH provee los módulos de aprendizaje.
    </div>
    <div class="col-md-6">
      <span style="color:var(--color-primary);">▸</span>&nbsp;<strong style="color:#d1d5db;">Documentos legales:</strong> Terms of Use, Privacy Policy, Risk Disclaimer, Cookie Notice a cargo del equipo legal BGH.
    </div>
    <!-- <div class="col-12 mt-2">
      <span style="color:var(--color-secondary);">// Los precios están expresados en USD. Esta cotización es válida por 30 días desde la fecha de emisión.</span>
    </div> -->
  </div>
</div>

<!-- ══ CTA ══ -->
<div class="quote-cta">
  <h3>Conversemos</h3>
  <p>Coordinemos una reunión para revisar a detalle todos los puntos de esta cotización y si es necesario, ajustar los términos según sus necesidades.</p>
  <a href="mailto:max@maxmanuel.com" class="max-button">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
      <polyline points="22,6 12,13 2,6"></polyline>
    </svg>
    Contactar
  </a>
</div>

<?php require_once 'template/footer.php'; ?>