<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $quote_title ?? 'Cotización — Max Manuel'; ?></title>
  <link rel="icon" type="image/x-icon" href="/assets/img/icons/dev.svg">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap">
  <style>
    :root {
      --color-primary: #39ff14;
      --color-secondary: #6b7280;
      --color-danger: #ff4444;
      --color-warning: #ffaa00;
      --color-info: #00aaff;
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: #000000;
      color: #e5e7eb;
      font-family: "Fira Code", monospace;
    }

    /* Background stars */
    .container-space {
      position: fixed;
      width: 100%;
      height: 100vh;
      background-image: linear-gradient(180deg, #051327 0%, #0a0a0a 30%, #000000 60%);
      top: 0;
      left: 0;
      z-index: -1;
    }

    /* Navbar */
    .navbar {
      z-index: 999;
    }

    .navbar-brand span {
      color: var(--color-primary);
      letter-spacing: .15em;
      text-shadow: 0 0 8px var(--color-primary);
      font-family: "Fira Code", monospace;
      font-weight: 600;
    }

    .navbar-brand svg {
      color: var(--color-primary);
    }

    /* ── Wrapper principal ── */
    .quote-wrapper {
      max-width: 960px;
      margin: 2rem auto 4rem;
      padding: 0 1rem;
    }

    /* ── Cabecera del documento ── */
    .quote-header {
      border: 2px solid var(--color-secondary);
      border-radius: 0.5rem;
      padding: 2rem;
      margin-bottom: 2rem;
      background: rgba(107, 114, 128, 0.05);
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .quote-meta-label {
      color: var(--color-secondary);
      font-size: 0.8rem;
      margin-bottom: 0.2rem;
    }

    .quote-meta-value {
      color: #fff;
      font-size: 1rem;
      font-weight: 600;
    }

    .quote-id {
      color: var(--color-primary);
      text-shadow: 0 0 8px var(--color-primary);
      font-size: 1.4rem;
      font-weight: 700;
    }

    /* ── Secciones generales ── */
    .section-block {
      border: 2px solid var(--color-secondary);
      border-radius: 0.5rem;
      padding: 2rem;
      margin-bottom: 2rem;
      background: rgba(107, 114, 128, 0.05);
    }

    .section-block-title {
      color: var(--color-primary);
      text-shadow: 0 0 8px var(--color-primary);
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 1.25rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid rgba(107, 114, 128, 0.4);
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .section-block-title .prompt {
      color: var(--color-secondary);
      font-weight: 400;
    }

    p {
      color: #9ca3af;
      line-height: 1.8;
      margin-bottom: 0.75rem;
    }

    p:last-child {
      margin-bottom: 0;
    }

    /* ── Tags / Chips ── */
    .tag {
      background: rgba(57, 255, 20, 0.1);
      color: var(--color-primary);
      padding: 0.2rem 0.65rem;
      border-radius: 4px;
      font-size: 0.8rem;
      border: 1px solid rgba(57, 255, 20, 0.3);
      display: inline-block;
    }

    .tag-gray {
      background: rgba(107, 114, 128, 0.15);
      color: var(--color-secondary);
      border-color: rgba(107, 114, 128, 0.4);
    }

    .tag-warning {
      background: rgba(255, 170, 0, 0.1);
      color: var(--color-warning);
      border-color: rgba(255, 170, 0, 0.35);
    }

    .tag-danger {
      background: rgba(255, 68, 68, 0.1);
      color: var(--color-danger);
      border-color: rgba(255, 68, 68, 0.35);
    }

    .tag-info {
      background: rgba(0, 170, 255, 0.1);
      color: var(--color-info);
      border-color: rgba(0, 170, 255, 0.35);
    }

    /* ── Tabla de comparativa ── */
    .compare-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.9rem;
    }

    .compare-table th {
      padding: 0.9rem 1rem;
      text-align: left;
      font-weight: 700;
      border-bottom: 2px solid rgba(107, 114, 128, 0.5);
    }

    .compare-table th:first-child {
      color: var(--color-secondary);
    }

    .compare-table th.col-wp {
      color: var(--color-warning);
    }

    .compare-table th.col-php {
      color: var(--color-primary);
    }

    .compare-table td {
      padding: 0.75rem 1rem;
      border-bottom: 1px solid rgba(107, 114, 128, 0.2);
      vertical-align: middle;
      color: #d1d5db;
    }

    .compare-table tr:last-child td {
      border-bottom: none;
    }

    .compare-table tr:hover td {
      background: rgba(255, 255, 255, 0.02);
    }

    .check {
      color: var(--color-primary);
    }

    .cross {
      color: var(--color-danger);
    }

    .partial {
      color: var(--color-warning);
    }

    /* ── Tabla de precios ── */
    .price-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.92rem;
    }

    .price-table th {
      padding: 0.8rem 1rem;
      text-align: left;
      color: var(--color-secondary);
      font-size: 0.8rem;
      border-bottom: 2px solid rgba(107, 114, 128, 0.4);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .price-table td {
      padding: 0.7rem 1rem;
      border-bottom: 1px solid rgba(107, 114, 128, 0.15);
      color: #d1d5db;
    }

    .price-table tr.total-row td {
      border-top: 2px solid rgba(107, 114, 128, 0.4);
      border-bottom: none;
      font-weight: 700;
      color: #fff;
      padding-top: 1rem;
    }

    .price-value {
      text-align: right;
      font-weight: 600;
      color: var(--color-primary);
      white-space: nowrap;
    }

    .price-note {
      font-size: 0.78rem;
      color: var(--color-secondary);
    }

    /* ── Timeline ── */
    .timeline {
      list-style: none;
      padding: 0;
      margin: 0;
      position: relative;
    }

    .timeline::before {
      content: '';
      position: absolute;
      left: 12px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: rgba(107, 114, 128, 0.3);
    }

    .timeline li {
      position: relative;
      padding-left: 2.5rem;
      margin-bottom: 1.25rem;
    }

    .timeline li:last-child {
      margin-bottom: 0;
    }

    .timeline li::before {
      content: '';
      position: absolute;
      left: 6px;
      top: 6px;
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: var(--color-secondary);
      border: 2px solid #000;
    }

    .timeline li.active::before {
      background: var(--color-primary);
      box-shadow: 0 0 8px var(--color-primary);
    }

    .timeline-phase {
      color: var(--color-primary);
      font-weight: 700;
      font-size: 0.9rem;
    }

    .timeline-desc {
      color: #9ca3af;
      font-size: 0.85rem;
      margin-top: 0.2rem;
    }

    .timeline-duration {
      display: inline-block;
      background: rgba(57, 255, 20, 0.1);
      color: var(--color-primary);
      border: 1px solid rgba(57, 255, 20, 0.3);
      padding: 0.1rem 0.5rem;
      border-radius: 4px;
      font-size: 0.78rem;
      margin-left: 0.5rem;
    }

    /* ── Dos columnas comparativa ── */
    .option-cards {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
    }

    @media (max-width: 640px) {
      .option-cards {
        grid-template-columns: 1fr;
      }

      .quote-header {
        flex-direction: column;
      }
    }

    .option-card {
      border: 2px solid var(--color-secondary);
      border-radius: 0.5rem;
      padding: 1.5rem;
      background: rgba(107, 114, 128, 0.05);
    }

    .option-card.recommended {
      border-color: var(--color-primary);
      box-shadow: 0 0 20px rgba(57, 255, 20, 0.15);
    }

    .option-card-title {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 1rem;
      padding-bottom: 0.5rem;
      border-bottom: 1px solid rgba(107, 114, 128, 0.3);
    }

    .option-card ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .option-card ul li {
      color: #9ca3af;
      font-size: 0.88rem;
      padding: 0.3rem 0;
      display: flex;
      gap: 0.5rem;
      align-items: flex-start;
    }

    .option-card ul li .icon {
      flex-shrink: 0;
      margin-top: 2px;
      font-style: normal;
    }

    .option-card ul li .icon.check {
      color: var(--color-primary);
    }

    .option-card ul li .icon.cross {
      color: #ef4444;
    }

    /* ── Badge recomendado ── */
    .recommended-badge {
      display: inline-block;
      background: var(--color-primary);
      color: #000;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 0.15rem 0.6rem;
      border-radius: 4px;
      margin-left: 0.5rem;
      vertical-align: middle;
    }

    /* ── CTA al final ── */
    .quote-cta {
      background: rgba(57, 255, 20, 0.05);
      border: 2px solid var(--color-primary);
      border-radius: 0.5rem;
      padding: 2rem;
      text-align: center;
      margin-top: 2rem;
    }

    .quote-cta h3 {
      color: var(--color-primary);
      text-shadow: 0 0 8px var(--color-primary);
      font-size: 1.3rem;
      margin-bottom: 0.75rem;
    }

    .quote-cta p {
      color: #9ca3af;
      margin-bottom: 1.5rem;
    }

    .max-button {
      color: #000;
      background: var(--color-primary);
      font-weight: 600;
      font-family: "Fira Code", monospace;
      cursor: pointer;
      border: 0;
      border-radius: 6px;
      padding: 0.75rem 1.5rem;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px rgba(57, 255, 20, 0.3);
    }

    .max-button:hover {
      background: #2ee600;
      box-shadow: 0 0 20px rgba(57, 255, 20, 0.6);
      transform: translateY(-2px);
      color: #000;
    }

    /* ── Print ── */
    @media print {

      .container-space,
      .navbar {
        display: none !important;
      }

      body {
        background: #fff !important;
        color: #111 !important;
      }

      .section-block,
      .quote-header,
      .option-card {
        border-color: #ccc !important;
        background: #fff !important;
      }

      .section-block-title,
      .quote-id,
      .option-card-title,
      .timeline-phase,
      .check {
        color: #000 !important;
        text-shadow: none !important;
      }

      p,
      td,
      li {
        color: #333 !important;
      }

      .quote-cta {
        display: none;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg px-3 py-2">
    <a class="navbar-brand d-flex align-items-center gap-2" href="/">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="4 17 10 11 4 5"></polyline>
        <line x1="12" x2="20" y1="19" y2="19"></line>
      </svg>
      <span>Max Manuel</span>
    </a>
    <span class="ms-auto" style="color:var(--color-secondary);font-size:0.85rem;">
      Documento de Cotización
    </span>
  </nav>

  <div class="quote-wrapper">