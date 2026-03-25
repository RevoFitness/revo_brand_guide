<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/cropped-revo-favicon-2024-180x180.png" sizes="180x180" type="image/png">
  <link rel="preload" href="https://webforms.revofitness.com.au/assets/css/style.css?v=1772526762" as="style">
  <link rel="stylesheet" href="https://webforms.revofitness.com.au/assets/css/style.css?v=1772526762">
  <!-- No index / no follow -->
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <title>Brand Guidelines - Revo Fitness</title>

  <style>
    :root {
      --brand-red: #DD2B32;
      --dark-red: #AD212D;
      --brand-pink: #F392BD;
      --brand-yellow: #FED133;
      --brand-black: #333132;
      --pure-white: #FFFFFF;
      --warm-white: #FFFDF9;
      --light-grey: #F4F3F4;
      --grey-bg: #F5F5F5;
      --mid-grey: #C1BFBF;
      --cream: #FCF9F1;
      --light-pink: #FBEEE7;
      --eucalyptus: #8BC6C1;

      --text-primary: #333132;
      --text-secondary: #615D5F;
      --border: rgba(51, 49, 50, 0.10);
      --panel-bg: rgba(255,255,255,0.84);
      --panel-bg-soft: rgba(255,255,255,0.92);
      --panel-shadow: 0 10px 28px rgba(0,0,0,0.06);
      --panel-shadow-soft: 0 5px 14px rgba(0,0,0,0.045);
      --panel-shadow-hard:rgba(0,0,0,0.16) 0 0 4px, rgb(51,51,51) 0 3px 0 1px;
      --radius-sm: 8px;
      --radius-md: 14px;
      --radius-lg: 20px;
      --radius-xl: 26px;
      --radius-pill: 999px;

      --content-width: 1200px;

      --btn-shadow: 0 0 4px rgba(0, 0, 0, .16), 0 3px 0 1px #333;
      --btn-shadow-hover: 0 0 4px rgba(0, 0, 0, .16), 0 6px 0 1px #333;
    }

    * { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    .modal-demo {
      border:3px solid;
      min-height:400px;
      border-radius: var(--radius-xl);
      width:100%;
      background:var(--light-pink);
      box-shadow: var(--panel-shadow-hard);
      max-width:600px;
      position:relative;
    }
     .close-modal {
      cursor:pointer;
    }

   p {
        margin-bottom: 15px;
    }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: "Greycliff CF", Inter, "Segoe UI", Arial, sans-serif;
      color: var(--text-primary);
      background: #ECECEC;
      line-height: 1.45;
    }

    img, svg {
      display: block;
      max-width: 100%;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .overview-card.card-x {
      position: relative;
      min-height: 280px;
    }
    .overview-card.card-x button {
        position: absolute;
        bottom: 15px;
        width: calc(100% - 25px) !important;
    }

    button, input, textarea {
      font: inherit;
    }

    .container {
      width: min(calc(100% - 32px), var(--content-width));
      margin-inline: auto;
    }

    .glass {
      background: rgba(255,255,255,0.72);
      border: 1px solid var(--border);
      box-shadow: var(--panel-shadow);
      backdrop-filter: blur(14px) saturate(140%);
      -webkit-backdrop-filter: blur(14px) saturate(140%);
    }

    .topbar-wrap {
      padding-top: 14px;
    }

    .topbar {
      position: sticky;
      top: 14px;
      z-index: 30;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 10px 14px;
      border-radius: var(--radius-pill);
    }

    .brand-badge,
    .status-badge,
    .mini-chip,
    .token-label,
    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 7px 11px;
      border-radius: var(--radius-pill);
      background: rgba(255,255,255,0.78);
      border: 1px solid var(--border);
      min-width: 0;
    }

    .brand-badge strong,
    .status-badge span,
    .eyebrow,
    .token-label {
      font-size: 12px;
      font-weight: 800;
    }

    .brand-dot,
    .status-dot,
    .mini-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      flex: 0 0 auto;
    }

    .brand-dot { background: var(--brand-yellow); }
    .status-dot { background: var(--eucalyptus); }
    .mini-dot { background: var(--brand-pink); }

    .nav-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 8px;
      min-width: 0;
    }

    .nav-links a {
      padding: 7px 11px;
      border-radius: var(--radius-pill);
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.78);
      font-size: 11px;
      font-weight: 700;
      color: var(--text-secondary);
      white-space: nowrap;
      transition: .2s ease;
    }

    .nav-links a:hover,
    .nav-links a:focus-visible {
      background: rgba(255,255,255,0.98);
      color: var(--text-primary);
      transform: translateY(-1px);
      outline: none;
    }

    main {
      padding: 20px 0 48px;
    }

    .hero {
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(320px, .92fr);
      gap: 18px;
      margin-bottom: 24px;
      align-items: stretch;
    }

    .hero-copy,
    .hero-card,
    .section-card,
    .footer-card {
      border-radius: var(--radius-xl);
    }

    .hero-copy {
      padding: 26px;
      min-width: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .hero-card {
      padding: 18px;
      min-width: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      overflow: hidden;
    }

    h1,h2,h3,h4,h5,h6,p {
      margin: 0;
    }

    h1 {
      font-size: clamp(2.5rem, 4.4vw, 4.2rem);
      line-height: .95;
      font-weight: 900;
      margin-bottom: 12px;
      max-width: 8ch;
    }

    h2 {
      font-size: clamp(2rem, 2.7vw, 2.7rem);
      line-height: .98;
      font-weight: 900;
      margin-bottom: 8px;
    }

    h5 {
      font-size: 15px;
      line-height: 1.2;
      font-weight: 800;
    }

    .hero-copy p,
    .section-intro,
    .muted,
    .token-meta,
    .asset-meta,
    .component-meta,
    .download-meta,
    .copy-value small {
      color: var(--text-secondary);
    }

    .btn:hover:after, .btn:hover:after {
       transform: rotate(-45deg) !important;
    }

    .hero-copy p {
      font-size: 18px;
      line-height: 1.6;
      max-width: 52ch;
      margin-bottom: 18px;
    }

    .section-intro {
      max-width: 70ch;
      font-size: 18px;
      line-height: 1.55;
    }

    .hero-actions,
    .asset-actions,
    .copy-actions,
    .download-actions,
    .component-actions,
    .section-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      min-width: 0;
    }

    /* PRIMARY REVO BUTTON */
    .btn,
    .button-large,
    .is-button-large {
      --tw-border-opacity: 1;
      --tw-bg-opacity: 1;
      --tw-text-opacity: 1;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;

      align-items: center;
      background-color: rgb(221 43 50 / var(--tw-bg-opacity));
      border-color: rgb(51 49 50 / var(--tw-border-opacity));
      border-style: solid;
      border-width: 3px;
      border-radius: 9999px;
      box-shadow: var(--btn-shadow);
      color: rgb(255 253 249 / var(--tw-text-opacity));
      cursor: pointer;
      display: inline-flex;
      justify-content: space-between;
      gap: .75rem;
      font-size: 14px;
      font-weight: 800;
      line-height: 1.2;
      min-height: 42px;
      padding: .45rem .45rem .45rem 1rem;
      position: relative;
      transition: .2s;
      appearance: none;
      max-width: 100%;
      text-align: left;
    }

    .btn:hover,
    .btn:hover::after,
    .button-large:hover,
    .button-large:hover::after,
    .is-button-large:hover,
    .is-button-large:hover::after,
    .btn:focus-visible,
    .btn:focus-visible::after,
    .button-large:focus-visible,
    .button-large:focus-visible::after,
    .is-button-large:focus-visible,
    .is-button-large:focus-visible::after {
      transform:
        translate(var(--tw-translate-x), var(--tw-translate-y))
        rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x))
        skewY(var(--tw-skew-y))
        scaleX(var(--tw-scale-x))
        scaleY(var(--tw-scale-y));
    }

    .btn:hover,
    .button-large:hover,
    .is-button-large:hover,
    .btn:focus-visible,
    .button-large:focus-visible,
    .is-button-large:focus-visible {
      --tw-translate-y: -3px;
      box-shadow: var(--btn-shadow-hover);
      outline: none;
    }

    .btn::after,
    .button-large::after,
    .is-button-large::after {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='46' height='47' fill='none'%3E%3Cpath fill='%23FFFAF3' d='M22.723 0c4.494 0 8.888 1.372 12.624 3.942 3.737 2.57 6.65 6.223 8.37 10.496a24.026 24.026 0 0 1 1.293 13.514c-.877 4.537-3.041 8.704-6.22 11.975-3.177 3.271-7.226 5.499-11.634 6.401-4.408.903-8.976.44-13.129-1.33-4.152-1.771-7.7-4.769-10.197-8.615A23.88 23.88 0 0 1 0 23.389C0 17.186 2.394 11.237 6.655 6.85 10.917 2.464 16.697 0 22.723 0Z'/%3E%3Cpath stroke='%23DD2B32' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M24.833 14 34 23.5m0 0L24.833 33M34 23.5H12'/%3E%3C/svg%3E");
      background-position: 50%;
      background-repeat: no-repeat;
      background-size: contain;
      content: "";
      width: 34px;
      height: 34px;
      flex: 0 0 34px;
      transition-duration: .2s;
      position: relative;
    }

    @media (min-width: 1080px) {
      .btn,
      .button-large,
      .is-button-large {
        font-size: 1.125rem;
        line-height: 1.75rem;
        padding: .5rem .5rem .5rem 1.5rem;
      }

      .btn::after,
      .button-large::after,
      .is-button-large::after {
        width: 46px;
        height: 46px;
        flex-basis: 46px;
      }
    }

    /* SECONDARY ALT BUTTON */
    .btn-outline,
    .btn-alt,
    .btn-secondary {
      background-color: #FFFDF9;
      color: #333132;
      justify-content: center;
      padding: .5rem 1.1rem;
    }

    .btn-outline::after,
    .btn-alt::after,
    .btn-secondary::after {
      display: none;
      content: none;
    }

    .btn-ghost {
      background: rgba(255,255,255,.82);
      color: #333132;
      justify-content: center;
      padding: .5rem 1rem;
    }

    .btn-ghost::after {
      display: none;
      content: none;
    }

    .hero-showcase {
      border-radius: 22px;
      padding: 20px;
      background:
        radial-gradient(circle at top right, rgba(243,146,189,0.18), transparent 30%),
        linear-gradient(180deg, rgba(255,255,255,0.98), rgba(255,255,255,0.88));
      border: 1px solid rgba(51,49,50,0.08);
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);
      min-height: 210px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 18px;
    }

    .hero-showcase-top {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 12px;
    }

    .hero-bubbles {
      display: flex;
      gap: 6px;
      flex: 0 0 auto;
    }

    .hero-bubbles span {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      border: 1px solid rgba(51,49,50,0.12);
      background: rgba(255,255,255,0.65);
    }

    .hero-logo-wrap {
      max-width: 260px;
    }

    .hero-logo-wrap svg {
      width: 100%;
      height: auto;
    }

    .hero-kicker {
      font-size: 11px;
      font-weight: 700;
      color: var(--text-secondary);
      margin-bottom: 15px;

    }

    .hero-mono {
      font-size: clamp(24px, 3vw, 36px);
      line-height: 1.02;
      letter-spacing: 0.04em;
      color: #3C393A;
      max-width: 11ch;
    }

    .hero-caption {
      font-size: 12px;
      color: var(--text-secondary);
    }

    .hero-float {
      margin-top: 10px;
      width: fit-content;
      padding: 8px 12px;
      border-radius: var(--radius-pill);
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.88);
      font-size: 12px;
      font-weight: 700;
    }

    .section {
      margin-bottom: 24px;
      scroll-margin-top: 90px;
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      align-items: end;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 10px;
    }

    .section-card {
      padding: 12px;
    }

    .overview-grid,
    .palette-grid,
    .type-grid,
    .token-grid,
    .component-grid,
    .asset-grid,
    .download-grid {
      display: grid;
      gap: 10px;
      align-items: stretch;
    }

    .overview-grid { grid-template-columns: repeat(auto-fit, minmax(170px, 1fr)); }
    .asset-grid { 

      display:flex;
      flex-wrap:wrap;

     }
     .asset-grid .asset-card {
        width: calc(33.33% - 10PX);
    }
     .asset-grid .asset-card:nth-child(4),
     .asset-grid .asset-card:nth-child(5)
      {
        width: calc(50% - 10PX);
    }
    .palette-grid {
        display: flex;
        flex-wrap: wrap;
    }
     .palette-grid .token {
        width:calc(25% - 10px);
    }
    .type-grid { grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); }
    .token-grid { grid-template-columns: repeat(auto-fit, minmax(175px, 1fr)); }
    .component-grid { grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); }
    .download-grid { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }

    .overview-card,
    .asset-card,
    .component-card,
    .download-card,
    .token,
    .type-preview,
    .copy-row,
    .snippet {
      min-width: 0;
      background: var(--panel-bg-soft);
      border: 1px solid var(--border);
      box-shadow: var(--panel-shadow-soft);
      border-radius: var(--radius-lg);
    }

    .overview-card,
    .asset-card,
    .component-card,
    .download-card {
      padding: 12px;
    }

    .overview-card strong,
    .metric-value {
      display: block;
      font-size: 22px;
      line-height: 1.05;
      font-weight: 900;
      letter-spacing: -0.03em;
      margin-bottom: 6px;
      word-break: break-word;
      line-height:120%;
    }
    span.mini-chip {
        margin-bottom: 15px;
    }

    .muted,
    .component-meta,
    .asset-meta,
    .download-meta {
      font-size: 14px;
      line-height: 1.45;
    }

    .token {
      padding: 10px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .swatch {
      width: 100%;
      min-height: 56px;
      border-radius: 10px;
      border: 1px solid rgba(51,49,50,0.08);
    }

    .token-label {
      font-size: 11px;
      font-weight: 800;
    }

    .token-meta {
      display: flex;
      flex-direction: column;
      gap: 5px;
      font-size: 11px;
      line-height: 1.45;
      min-height:60px;
    }

   

    .token-meta strong {
      color: var(--text-primary);
      font-size: 12px;
    }

    .type-preview {
      padding: 14px;
    }

    .type-preview p {
      margin-top: 8px;
      font-size: 12px;
      line-height: 1.5;
      color: var(--text-secondary);
    }

    .copy-row {
      padding: 12px;
      display: flex;
      justify-content: space-between;
      gap: 10px;
      align-items: flex-start;
      flex-wrap:wrap;
    }

    .copy-value {
      display: flex;
      flex-direction: column;
      gap: 5px;
      min-width: 0;
      flex: 1 1 auto;
    }

    .copy-value strong {
      font-size: 13px;
      font-weight: 800;
    }

    .copy-value code,
    .snippet pre {
      font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
      font-size: 11px;
      line-height: 1.55;
      color: var(--text-primary);
      white-space: pre-wrap;
      word-break: break-word;
    }

    .copy-value small {
      font-size: 11px;
      line-height: 1.45;
    }

    .component-card {
      display: flex;
      flex-direction: column;
      gap: 10px;
      position:relative;
    }
    .component-card p.component-meta {
      min-height: 50px;
    }

    .component-preview {
      min-height: 110px;
      padding: 14px;
      border-radius: var(--radius-md);
      background: rgba(255,255,255,0.84);
      border: 1px solid var(--border);
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }

    h4 {
      font-size:30px;
      font-weight:800;
    }

    .input-demo,
    .textarea-demo {
      width: 100%;
      border: 2px solid var(--brand-black);
      border-radius: 8px;
      background: #fff;
      color: var(--brand-black);
      font-size: 14px;
      outline: none;
    }

    .input-demo {
      min-height: 46px;
      padding: 0 14px;
    }

    .textarea-demo {
      min-height: 110px;
      padding: 12px 14px;
      resize: vertical;
    }

    .asset-thumb {
      height: 96px;
      border-radius: var(--radius-md);
      display: grid;
      place-items: center;
      background: rgba(255,255,255,0.84);
      border: 1px solid var(--border);
      overflow: hidden;
      position: relative;
      padding: 12px;
    }

    .asset-thumb.dark {
      background: linear-gradient(135deg, #1F1F20, #4A4A4C);
    }

    .asset-thumb.light {
      background: linear-gradient(135deg, #FFFFFF, #F2F2F2);
    }

    .asset-thumb.alt {
      background: linear-gradient(135deg, rgba(243,146,189,0.16), rgba(139,198,193,0.14), rgba(255,255,255,0.88));
    }

    .asset-thumb svg {
      max-width: 100%;
      max-height: 100%;
    }

    .copy-row {
        position:relative;
        min-height:150px;
    }

     .copy-row button {
        position:absolute;
        bottom:15px;
    }

    .favicon-tile {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(221,43,50,.18);
      flex: 0 0 auto;
    }

    .spinner-demo {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      border: 4px solid rgba(51,49,50,0.12);
      border-top-color: var(--brand-red);
      border-right-color: var(--brand-pink);
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    .snippet {
      padding: 12px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .snippet pre {
      margin: 0;
      overflow: auto;
      width: 100%;
    }

    .footer {
      padding-bottom: 40px;
    }

    .footer-card {
      padding: 16px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 14px;
    }

    .toast {
      position: fixed;
      right: 20px;
      bottom: 20px;
      z-index: 50;
      padding: 12px 16px;
      border-radius: 14px;
      background: rgba(20,20,24,0.86);
      color: #fff;
      border: 1px solid rgba(255,255,255,0.12);
      box-shadow: 0 12px 32px rgba(0,0,0,0.22);
      opacity: 0;
      transform: translateY(10px);
      pointer-events: none;
      transition: .2s ease;
      font-size: 12px;
      font-weight: 700;
    }

    .toast.show {
      opacity: 1;
      transform: translateY(0);
    }

    @media (max-width: 980px) {
      .hero {
        grid-template-columns: 1fr;
      }

      .topbar {
        flex-direction: column;
        align-items: stretch;
        border-radius: 22px;
      }

      .brand-badge,
      .status-badge {
        justify-content: center;
      }
    }

    @media (max-width: 680px) {
      .container {
        width: min(calc(100% - 20px), var(--content-width));
      }

      .hero-copy,
      .hero-card,
      .section-card {
        padding: 12px;
      }

      .copy-row {
        flex-direction: column;
      }

      .hero-actions,
      .copy-actions,
      .asset-actions,
      .component-actions,
      .download-actions,
      .section-actions {
        width: 100%;
      }

      .hero-actions .btn,
      .copy-actions .btn,
      .asset-actions .btn,
      .component-actions .btn,
      .download-actions .btn,
      .section-actions .btn {
        flex: 1 1 100%;
      }

      h1 {
        max-width: 100%;
        font-size: 2.2rem;
      }
    }
  </style>
</head>
<body>
  <div class="topbar-wrap container">
    <div class="topbar glass">
      <div class="brand-badge">
        <span class="brand-dot"></span>
        <strong>Revo Fitness Brand Hub</strong>
      </div>

      <nav class="nav-links" aria-label="Section navigation">
        <a href="#overview">Overview</a>
        <a href="#logos">Assets</a>
        <a href="#colours">Colours</a>
        <a href="#type">Typography</a>
        <a href="#layout">Layout</a>
        <a href="#ui">UI</a>
        <a href="#downloads">Downloads</a>
        <a href="#snippets">Snippets</a>
      </nav>

      <div class="status-badge">
        <span class="status-dot"></span>
        <span>Dev Reference</span>
      </div>
    </div>
  </div>

  <main class="container">
    <section class="hero">
      <div class="hero-copy glass">
        <div class="eyebrow" style="margin-bottom:15px;">
          <span class="mini-dot"></span>
          <span>Designer + Developer reference</span>
        </div>

        <h1>Revo Fitness Brand Guidelines</h1>

        <p>
          A cleaner developer-facing brand hub for quickly copying tokens,
          reviewing UI patterns, using the official logo files and matching
          Revo’s real CTA styles.
        </p>

        <div class="hero-actions">
          <a class="btn" href="#logos">View assets</a>
          <a class="btn btn-outline" href="#snippets">Grab snippets</a>
          <button
            class="btn btn-ghost"
            type="button"
            data-copy='{"contentWidth":"1200px","fontFamily":"Greycliff CF, Inter, Arial, sans-serif","brandRed":"#DD2B32","brandBlack":"#333132"}'
          >
            Copy starter tokens
          </button>
        </div>
      </div>

      <div class="hero-card glass">
        <div class="hero-showcase">
          <div class="hero-showcase-top">
            <div>
              <div class="hero-kicker">Revo UI token card</div>

              <div class="hero-logo-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="398" height="30" fill="none" viewBox="0 0 398 30">
                  <path fill="#DD2B32" d="M55.852 29.25H36.976a1.5 1.5 0 0 1-1.494-1.509V2.2a1.5 1.5 0 0 1 1.494-1.51h18.69A1.5 1.5 0 0 1 57.16 2.2v4.338a1.5 1.5 0 0 1-1.493 1.509H44.782a1.5 1.5 0 0 0-1.494 1.51v.143a1.5 1.5 0 0 0 1.494 1.509H54a1.5 1.5 0 0 1 1.493 1.51v4.334A1.5 1.5 0 0 1 54 18.56h-9.22a1.5 1.5 0 0 0-1.493 1.51v.33a1.5 1.5 0 0 0 1.494 1.509h11.07a1.5 1.5 0 0 1 1.493 1.51v4.337a1.5 1.5 0 0 1-1.493 1.51v-.017ZM81.034 29.258H76.25c-.5 0-.95-.308-1.135-.78L64.833 2.392c-.321-.811.271-1.693 1.135-1.693h5.915c.512 0 .969.32 1.148.807l4.538 12.455c.392 1.079 1.9 1.079 2.296 0l4.538-12.455a1.22 1.22 0 0 1 1.148-.807h5.766c.864 0 1.456.882 1.136 1.693l-10.28 26.088c-.186.47-.636.78-1.136.78h-.003ZM119.202 15.054c0 4.07-2.885 7.141-6.711 7.141-3.868 0-6.787-3.102-6.787-7.216v-.074c0-4.07 2.885-7.138 6.713-7.138 3.869 0 6.785 3.102 6.785 7.215v.075-.003ZM123.139 4.5c-2.752-2.773-6.532-4.3-10.648-4.3-8.364 0-14.917 6.492-14.917 14.78v.075c0 3.98 1.49 7.671 4.196 10.403 2.749 2.772 6.529 4.3 10.647 4.3 8.365 0 14.918-6.492 14.918-14.778v-.074c0-3.98-1.49-7.672-4.196-10.403M25.168 29.672H18.13c-.348 0-.675-.178-.87-.47l-5.226-7.953a1.043 1.043 0 0 0-.87-.47H9.658c-.577 0-1.043.47-1.043 1.054v6.785c0 .583-.466 1.054-1.043 1.054H1.56c-.577 0-1.043-.47-1.043-1.054v-4.356c0-.222.071-.44.2-.62l7.168-9.967c.197-.271.509-.433.842-.433h4.921c2.256 0 3.551-1.045 3.551-2.863v-.078c0-1.712-.94-2.647-2.875-2.86h-.019c-.796-.087-1.203-1.013-.73-1.67L17.21.714c.259-.358.713-.517 1.135-.393 4.47 1.32 7.032 4.84 7.032 9.66v.082c0 3.748-1.534 6.708-4.372 8.538a1.062 1.062 0 0 0-.309 1.484l5.335 7.943c.469.698-.025 1.646-.864 1.646v-.003Z"></path>
                  <path fill="#333132" d="M147.81 2.013v25.942c0 .529.423.957.947.957h.143a.95.95 0 0 0 .946-.957V17.247c0-.529.424-.957.947-.957h13.578a.95.95 0 0 0 .946-.957.95.95 0 0 0-.946-.956h-13.584a.952.952 0 0 1-.947-.957V3.914c0-.528.424-.956.947-.956h15.334a.952.952 0 0 0 .947-.957.952.952 0 0 0-.947-.957h-17.364a.979.979 0 0 0-.947.97ZM185.267 1.05h-.137a.952.952 0 0 0-.947.957V27.95c0 .528.424.957.947.957h.137a.952.952 0 0 0 .947-.957V2.007a.952.952 0 0 0-.947-.956ZM229.375 2.004a.951.951 0 0 0-.947-.957h-19.201a.952.952 0 0 0-.947.957c0 .529.424.957.947.957h7.642c.523 0 .947.428.947.957v24.034a.95.95 0 0 0 .946.957h.143a.951.951 0 0 0 .947-.957V3.918c0-.529.424-.957.947-.957h7.642a.952.952 0 0 0 .947-.957h-.013ZM273.901 27.946V2.004a.951.951 0 0 0-.947-.957h-.062a.952.952 0 0 0-.947.957v20.522c0 .906-1.133 1.303-1.688.591L253.36 1.42a.936.936 0 0 0-.741-.365h-.511a.95.95 0 0 0-.946.956v25.942a.95.95 0 0 0 .946.957h.063a.95.95 0 0 0 .946-.957V6.914c0-.906 1.134-1.303 1.688-.591l17.284 22.214c.18.233.454.365.741.365h.118a.952.952 0 0 0 .947-.956h.006ZM317.3 27.968a.951.951 0 0 0-.947-.957h-15.726a.952.952 0 0 1-.947-.957v-9.272c0-.53.424-.957.947-.957h13.771a.95.95 0 0 0 .946-.957.95.95 0 0 0-.946-.957h-13.771a.952.952 0 0 1-.947-.957V3.921c0-.529.424-.957.947-.957h15.533a.952.952 0 0 0 .947-.957.952.952 0 0 0-.947-.956h-17.563a.951.951 0 0 0-.947.956V27.95c0 .528.423.957.947.957h17.756a.951.951 0 0 0 .947-.957v.019ZM357.765 21.71v-.082c0-4.06-2.653-6.364-8.987-7.68-6.484-1.353-7.966-3.14-7.966-6.087V7.78c0-2.902 2.659-5.25 6.683-5.25 2.728 0 5.101.718 7.442 2.544a.934.934 0 0 0 1.315-.158l.093-.12a.97.97 0 0 0-.181-1.372c-2.497-1.857-4.982-2.77-8.588-2.77-5.083 0-8.788 3.186-8.788 7.322v.081c0 4.218 2.653 6.484 9.217 7.838 6.21 1.271 7.736 2.983 7.736 5.93v.081c0 3.185-2.815 5.527-6.913 5.527-3.713 0-6.36-1.12-9.106-3.506a.938.938 0 0 0-1.327.1l-.081.095a.971.971 0 0 0 .119 1.372c3.051 2.55 6.228 3.809 10.276 3.809 5.269 0 9.062-3.104 9.062-7.598M398 21.71v-.082c0-4.06-2.653-6.364-8.987-7.68-6.484-1.353-7.966-3.14-7.966-6.087V7.78c0-2.902 2.653-5.25 6.683-5.25 2.728 0 5.101.718 7.442 2.544a.932.932 0 0 0 1.315-.158l.093-.12a.967.967 0 0 0-.187-1.372c-2.497-1.857-4.982-2.77-8.589-2.77-5.082 0-8.788 3.186-8.788 7.322v.081c0 4.218 2.654 6.484 9.218 7.838 6.21 1.271 7.736 2.983 7.736 5.93v.081c0 3.185-2.815 5.527-6.914 5.527-3.712 0-6.359-1.12-9.105-3.506a.938.938 0 0 0-1.327.1l-.081.095a.972.972 0 0 0 .118 1.372c3.052 2.55 6.229 3.809 10.277 3.809 5.275 0 9.062-3.104 9.062-7.598"></path>
                </svg>
              </div>
            </div>

            <div class="hero-bubbles">
              <span></span><span></span>
            </div>
          </div>

          <div>
            <div class="hero-mono">BRAND · UI · DEV · SYSTEM</div>
          </div>

          <div class="hero-caption">Gym made simple.</div>
        </div>

        <div class="hero-float">Click anything to copy</div>
      </div>
    </section>

    <section class="section" id="overview">
      <div class="section-head">
        <div>
          <h2>Overview</h2>
          <p class="section-intro">
            Key values developers should reference first when starting a new page, app flow, microsite or reusable component.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="overview-grid">
          <div class="overview-card">
            <strong>1200px</strong>
            <div class="muted">Standard max content width.</div>
          </div>

          <div class="overview-card">
            <strong>Greycliff CF</strong>
            <div class="muted">Primary font for headings, body, labels and buttons.</div>
          </div>

          <div class="overview-card">
            <strong>#DD2B32</strong>
            <div class="muted">Primary CTA and key highlight colour.</div>
          </div>

          <div class="overview-card">
            <strong>8 / 16 / 24 / pill</strong>
            <div class="muted">Core radius system for inputs, cards and buttons.</div>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="stylesheet-cdn">
    <div class="section-head">
      <div>
        <h2>Stylesheet CDN</h2>
        <p class="section-intro">
          Copy and paste the stylesheet tags below into your page head.
        </p>
      </div>
    </div>

    <div class="section-card glass">
      <div class="overview-grid">
        <div class="overview-card card-x" style="min-height:217px;">
          <strong>Revo stylesheet</strong>
          <div class="muted" style="margin-bottom: 10px;">
            Use both the preload and stylesheet tags.
          </div>

          <div class="snippet" style="margin-top: 10px;">
  <pre><code>&lt;link rel="preload" href="https://webforms.revofitness.com.au/assets/css/style.css?v=1772526762" as="style">
 link rel="stylesheet" href="https://webforms.revofitness.com.au/assets/css/style.css?v=1772526762"&gt;</code></pre>
          </div>

          <div class="asset-actions" style="margin-top: 10px;">
            <button
              class="btn btn-outline"
              type="button"
              data-copy='<link rel="preload" href="https://webforms.revofitness.com.au/assets/css/style.css?v=1772526762" as="style">
  <link rel="stylesheet" href="https://webforms.revofitness.com.au/assets/css/style.css?v=1772526762">'
            >
              Copy CDN tags
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="section" id="logos">
      <div class="section-head">
        <div>
          <h2>Brand Assets</h2>
          <p class="section-intro">
            Official logo and favicon usage, plus the real Revo button styling developers should follow.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="asset-grid">
          <div class="asset-card">
            <div class="asset-thumb light">
              <svg xmlns="http://www.w3.org/2000/svg" width="398" height="30" fill="none" viewBox="0 0 398 30">
                <path fill="#DD2B32" d="M55.852 29.25H36.976a1.5 1.5 0 0 1-1.494-1.509V2.2a1.5 1.5 0 0 1 1.494-1.51h18.69A1.5 1.5 0 0 1 57.16 2.2v4.338a1.5 1.5 0 0 1-1.493 1.509H44.782a1.5 1.5 0 0 0-1.494 1.51v.143a1.5 1.5 0 0 0 1.494 1.509H54a1.5 1.5 0 0 1 1.493 1.51v4.334A1.5 1.5 0 0 1 54 18.56h-9.22a1.5 1.5 0 0 0-1.493 1.51v.33a1.5 1.5 0 0 0 1.494 1.509h11.07a1.5 1.5 0 0 1 1.493 1.51v4.337a1.5 1.5 0 0 1-1.493 1.51v-.017ZM81.034 29.258H76.25c-.5 0-.95-.308-1.135-.78L64.833 2.392c-.321-.811.271-1.693 1.135-1.693h5.915c.512 0 .969.32 1.148.807l4.538 12.455c.392 1.079 1.9 1.079 2.296 0l4.538-12.455a1.22 1.22 0 0 1 1.148-.807h5.766c.864 0 1.456.882 1.136 1.693l-10.28 26.088c-.186.47-.636.78-1.136.78h-.003ZM119.202 15.054c0 4.07-2.885 7.141-6.711 7.141-3.868 0-6.787-3.102-6.787-7.216v-.074c0-4.07 2.885-7.138 6.713-7.138 3.869 0 6.785 3.102 6.785 7.215v.075-.003ZM123.139 4.5c-2.752-2.773-6.532-4.3-10.648-4.3-8.364 0-14.917 6.492-14.917 14.78v.075c0 3.98 1.49 7.671 4.196 10.403 2.749 2.772 6.529 4.3 10.647 4.3 8.365 0 14.918-6.492 14.918-14.778v-.074c0-3.98-1.49-7.672-4.196-10.403M25.168 29.672H18.13c-.348 0-.675-.178-.87-.47l-5.226-7.953a1.043 1.043 0 0 0-.87-.47H9.658c-.577 0-1.043.47-1.043 1.054v6.785c0 .583-.466 1.054-1.043 1.054H1.56c-.577 0-1.043-.47-1.043-1.054v-4.356c0-.222.071-.44.2-.62l7.168-9.967c.197-.271.509-.433.842-.433h4.921c2.256 0 3.551-1.045 3.551-2.863v-.078c0-1.712-.94-2.647-2.875-2.86h-.019c-.796-.087-1.203-1.013-.73-1.67L17.21.714c.259-.358.713-.517 1.135-.393 4.47 1.32 7.032 4.84 7.032 9.66v.082c0 3.748-1.534 6.708-4.372 8.538a1.062 1.062 0 0 0-.309 1.484l5.335 7.943c.469.698-.025 1.646-.864 1.646v-.003Z"></path>
                <path fill="#333132" d="M147.81 2.013v25.942c0 .529.423.957.947.957h.143a.95.95 0 0 0 .946-.957V17.247c0-.529.424-.957.947-.957h13.578a.95.95 0 0 0 .946-.957.95.95 0 0 0-.946-.956h-13.584a.952.952 0 0 1-.947-.957V3.914c0-.528.424-.956.947-.956h15.334a.952.952 0 0 0 .947-.957.952.952 0 0 0-.947-.957h-17.364a.979.979 0 0 0-.947.97ZM185.267 1.05h-.137a.952.952 0 0 0-.947.957V27.95c0 .528.424.957.947.957h.137a.952.952 0 0 0 .947-.957V2.007a.952.952 0 0 0-.947-.956ZM229.375 2.004a.951.951 0 0 0-.947-.957h-19.201a.952.952 0 0 0-.947.957c0 .529.424.957.947.957h7.642c.523 0 .947.428.947.957v24.034a.95.95 0 0 0 .946.957h.143a.951.951 0 0 0 .947-.957V3.918c0-.529.424-.957.947-.957h7.642a.952.952 0 0 0 .947-.957h-.013ZM273.901 27.946V2.004a.951.951 0 0 0-.947-.957h-.062a.952.952 0 0 0-.947.957v20.522c0 .906-1.133 1.303-1.688.591L253.36 1.42a.936.936 0 0 0-.741-.365h-.511a.95.95 0 0 0-.946.956v25.942a.95.95 0 0 0 .946.957h.063a.95.95 0 0 0 .946-.957V6.914c0-.906 1.134-1.303 1.688-.591l17.284 22.214c.18.233.454.365.741.365h.118a.952.952 0 0 0 .947-.956h.006ZM317.3 27.968a.951.951 0 0 0-.947-.957h-15.726a.952.952 0 0 1-.947-.957v-9.272c0-.53.424-.957.947-.957h13.771a.95.95 0 0 0 .946-.957.95.95 0 0 0-.946-.957h-13.771a.952.952 0 0 1-.947-.957V3.921c0-.529.424-.957.947-.957h15.533a.952.952 0 0 0 .947-.957.952.952 0 0 0-.947-.956h-17.563a.951.951 0 0 0-.947.956V27.95c0 .528.423.957.947.957h17.756a.951.951 0 0 0 .947-.957v.019ZM357.765 21.71v-.082c0-4.06-2.653-6.364-8.987-7.68-6.484-1.353-7.966-3.14-7.966-6.087V7.78c0-2.902 2.659-5.25 6.683-5.25 2.728 0 5.101.718 7.442 2.544a.934.934 0 0 0 1.315-.158l.093-.12a.97.97 0 0 0-.181-1.372c-2.497-1.857-4.982-2.77-8.588-2.77-5.083 0-8.788 3.186-8.788 7.322v.081c0 4.218 2.653 6.484 9.217 7.838 6.21 1.271 7.736 2.983 7.736 5.93v.081c0 3.185-2.815 5.527-6.913 5.527-3.713 0-6.36-1.12-9.106-3.506a.938.938 0 0 0-1.327.1l-.081.095a.971.971 0 0 0 .119 1.372c3.051 2.55 6.228 3.809 10.276 3.809 5.269 0 9.062-3.104 9.062-7.598M398 21.71v-.082c0-4.06-2.653-6.364-8.987-7.68-6.484-1.353-7.966-3.14-7.966-6.087V7.78c0-2.902 2.653-5.25 6.683-5.25 2.728 0 5.101.718 7.442 2.544a.932.932 0 0 0 1.315-.158l.093-.12a.967.967 0 0 0-.187-1.372c-2.497-1.857-4.982-2.77-8.589-2.77-5.082 0-8.788 3.186-8.788 7.322v.081c0 4.218 2.654 6.484 9.218 7.838 6.21 1.271 7.736 2.983 7.736 5.93v.081c0 3.185-2.815 5.527-6.914 5.527-3.712 0-6.359-1.12-9.105-3.506a.938.938 0 0 0-1.327.1l-.081.095a.972.972 0 0 0 .118 1.372c3.052 2.55 6.229 3.809 10.277 3.809 5.275 0 9.062-3.104 9.062-7.598"></path>
              </svg>
            </div>
            <h5 style="margin-top:10px;">Primary Logo</h5>
            <p class="asset-meta" style="margin-top:6px;">Official Revo wordmark for standard placements.</p>
            <div class="asset-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy="/assets/revo-logo.svg">Copy path</button>
              <button class="btn btn-ghost" type="button" data-download="primary-logo">Download</button>
            </div>
          </div>

          <div class="asset-card">
            <div class="asset-thumb alt">
              <div class="favicon-tile">
               <img src="https://revofitness.com.au/wp-content/uploads/2024/07/cropped-revo-favicon-2024-180x180.png" />
              </div>
            </div>
            <h5 style="margin-top:10px;">Favicon</h5>
            <p class="asset-meta" style="margin-top:6px;">Supplied Revo app-style favicon / icon tile.</p>
            <div class="asset-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy="/assets/revo-favicon.svg">Copy path</button>
              <button class="btn btn-ghost" type="button" data-download="favicon">Download</button>
            </div>
          </div>

          <div class="asset-card">
            <div class="asset-thumb light">
              <button class="btn" type="button">Primary CTA</button>
            </div>
            <h5 style="margin-top:10px;">Primary Button</h5>
            <p class="asset-meta" style="margin-top:6px;">Real Revo large CTA with the circular arrow icon.</p>
            <div class="asset-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy=".button-large,.is-button-large{align-items:center;background-color:#DD2B32;border-color:#333132;border-radius:9999px;border-width:3px;box-shadow:0 0 4px rgba(0,0,0,.16),0 3px 0 1px #333;color:#FFFDF9;cursor:pointer;display:flex;font-size:1.125rem;font-weight:800;gap:.75rem;justify-content:space-between;line-height:1.75rem;padding:.5rem .5rem .5rem 1.5rem;position:relative;transition-duration:.2s}.button-large:hover,.is-button-large:hover{transform:translateY(-3px);box-shadow:0 0 4px rgba(0,0,0,.16),0 6px 0 1px #333}.button-large:after,.is-button-large:after{background-image:url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='46' height='47' fill='none'%3E%3Cpath fill='%23FFFAF3' d='M22.723 0c4.494 0 8.888 1.372 12.624 3.942 3.737 2.57 6.65 6.223 8.37 10.496a24.026 24.026 0 0 1 1.293 13.514c-.877 4.537-3.041 8.704-6.22 11.975-3.177 3.271-7.226 5.499-11.634 6.401-4.408.903-8.976.44-13.129-1.33-4.152-1.771-7.7-4.769-10.197-8.615A23.88 23.88 0 0 1 0 23.389C0 17.186 2.394 11.237 6.655 6.85 10.917 2.464 16.697 0 22.723 0Z'/%3E%3Cpath stroke='%23DD2B32' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M24.833 14 34 23.5m0 0L24.833 33M34 23.5H12'/%3E%3C/svg%3E);background-position:50%;background-repeat:no-repeat;background-size:contain;content:'';height:46px;position:relative;transition-duration:.2s;width:46px}">Copy CSS</button>
            </div>
          </div>

          <div class="asset-card">
            <div class="asset-thumb light">
              <button class="btn btn-outline" type="button">Secondary CTA</button>
            </div>
            <h5 style="margin-top:10px;">Secondary Button</h5>
            <p class="asset-meta" style="margin-top:6px;">Same Revo button shell but without the icon.</p>
            <div class="asset-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy=".button-large.button-alt,.is-button-large.is-alt{background:#FFFDF9;color:#333132;justify-content:center;padding:.5rem 1.2rem}.button-large.button-alt:after,.is-button-large.is-alt:after{display:none;content:none}">Copy CSS</button>
            </div>
          </div>

          <div class="asset-card">
            <div class="asset-thumb alt">
              <div class="spinner-demo" aria-hidden="true"></div>
            </div>
            <h5 style="margin-top:10px;">Spinner HTML</h5>
            <p class="asset-meta" style="margin-top:6px;">Techy loading state placeholder for apps and forms.</p>
            <div class="asset-actions" style="margin-top:10px;">
              <button 
              class="btn btn-outline" 
              type="button" 
              data-copy='<div class="revo-spinner" aria-label="Loading"></div>'
              >Copy HTML</button>
              <button class="btn btn-ghost" type="button" data-download="spinner">Download</button>
            </div>
          </div>

           <div class="asset-card" style="width:100%;">
            <div class="asset-thumb alt" style="min-height:450px;">
              <span class="filter"></span>
              <div class="modal-demo px-6" aria-hidden="true">
                <div class="relative w-full mb-2" style="height:40px;">
                    <button type="button" id="raffle-popup-close" aria-label="Close popup" class="absolute right-4 top-4 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-2xl leading-none text-black hover:bg-black/20 close-modal mt-6">
                        <svg width="25px" height="25px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" style="
                            background: #c93d3b;
                            border-radius: 100%;
                            padding: 5px;
                            box-sizing: unset;
                            margin-bottom: 15px;
                            border:2px solid #000;
                        ">
                            <path fill="#ffffff" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-content  pt-6">
                  <h4>Modal Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. This is placeholder content to demonstrate how your modal will appear with text inside it.</p>

                  <p>You can use this space for descriptions, confirmations, or additional details that support user actions.</p>
                  </div>

              </div>
            </div>
            <h5 style="margin-top:10px;">Modal HTML</h5>
            <p class="asset-meta" style="margin-top:6px;">Base modal / section structure..</p>
            <div class="asset-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='<div class="modal-demo px-6" aria-hidden="true">
                <div class="relative w-full mb-2" style="height:40px;">
                    <button type="button" id="raffle-popup-close" aria-label="Close popup" class="absolute right-4 top-4 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-2xl leading-none text-black hover:bg-black/20 close-modal mt-6">
                        <svg width="25px" height="25px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" style="
                            background: #c93d3b;
                            border-radius: 100%;
                            padding: 5px;
                            box-sizing: unset;
                            margin-bottom: 15px;
                            border:2px solid #000;
                        ">
                            <path fill="#ffffff" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-content  pt-6">
                  <h4>Modal Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. This is placeholder content to demonstrate how your modal will appear with text inside it.</p>

                  <p>You can use this space for descriptions, confirmations, or additional details that support user actions.</p>
                  </div>

              </div>'>Copy HTML</button>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section" id="colours">
      <div class="section-head">
        <div>
          <h2>Colour Palette</h2>
          <p class="section-intro">
            Approved base palette for UI, surfaces, highlights, borders and supporting accents.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="palette-grid">
          <article class="token">
            <div class="swatch" style="background:#DD2B32"></div>
            <div class="token-label"><span class="mini-dot"></span> Brand Red</div>
            <div class="token-meta"><strong>#DD2B32</strong><span>Primary buttons and key highlights.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#DD2B32">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#AD212D"></div>
            <div class="token-label"><span class="mini-dot"></span> Dark Red</div>
            <div class="token-meta"><strong>#AD212D</strong><span>Hover states and darker accents.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#AD212D">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#F392BD"></div>
            <div class="token-label"><span class="mini-dot"></span> Brand Pink</div>
            <div class="token-meta"><strong>#F392BD</strong><span>Accent highlights and softer sections.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#F392BD">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#FED133"></div>
            <div class="token-label"><span class="mini-dot"></span> Brand Yellow</div>
            <div class="token-meta"><strong>#FED133</strong><span>Focus accents and supporting highlights.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#FED133">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#333132"></div>
            <div class="token-label"><span class="mini-dot"></span> Brand Black</div>
            <div class="token-meta"><strong>#333132</strong><span>Primary text, borders and icon colour.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#333132">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#FFFFFF"></div>
            <div class="token-label"><span class="mini-dot"></span> Pure White</div>
            <div class="token-meta"><strong>#FFFFFF</strong><span>Base backgrounds and clean surfaces.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#FFFFFF">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#FFFDF9"></div>
            <div class="token-label"><span class="mini-dot"></span> Warm White</div>
            <div class="token-meta"><strong>#FFFDF9</strong><span>Soft white surfaces and badge backgrounds.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#FFFDF9">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#F4F3F4"></div>
            <div class="token-label"><span class="mini-dot"></span> Light Grey</div>
            <div class="token-meta"><strong>#F4F3F4</strong><span>Section backgrounds and subtle panels.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#F4F3F4">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#F5F5F5"></div>
            <div class="token-label"><span class="mini-dot"></span> Grey Background</div>
            <div class="token-meta"><strong>#F5F5F5</strong><span>Neutral surface tone.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#F5F5F5">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#C1BFBF"></div>
            <div class="token-label"><span class="mini-dot"></span> Mid Grey</div>
            <div class="token-meta"><strong>#C1BFBF</strong><span>Dividers and low-contrast borders.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#C1BFBF">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#FCF9F1"></div>
            <div class="token-label"><span class="mini-dot"></span> Cream</div>
            <div class="token-meta"><strong>#FCF9F1</strong><span>Alternative warm background.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#FCF9F1">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#FBEEE7"></div>
            <div class="token-label"><span class="mini-dot"></span> Light Pink</div>
            <div class="token-meta"><strong>#FBEEE7</strong><span>Soft accent area background.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#FBEEE7">Copy hex</button>
          </article>

          <article class="token">
            <div class="swatch" style="background:#8BC6C1"></div>
            <div class="token-label"><span class="mini-dot"></span> Eucalyptus</div>
            <div class="token-meta"><strong>#8BC6C1</strong><span>Supporting accent colour.</span></div>
            <button class="btn btn-outline" type="button" data-copy="#8BC6C1">Copy hex</button>
          </article>
        </div>
      </div>
    </section>

    <section class="section" id="type">
      <div class="section-head">
        <div>
          <h2>Typography</h2>
          <p class="section-intro">
            Heading, paragraph and weight rules developers can copy directly into CSS, SCSS or token files.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="type-grid">
          <div class="type-preview">
            <h1 style="font-size:clamp(44px, 6vw, 88px); max-width:none; margin-bottom:8px;">Hero H1</h1>
            <p>Mobile 44px · desktop 60px–88px · extra large 128px · weight 900 · line-height 1.1</p>
          </div>

          <div class="type-preview">
            <h2 style="margin-bottom:8px;">Section H2</h2>
            <p>Mobile 36px · desktop 44px–60px · extra large 68px · weight 800 · line-height 1.1</p>
          </div>

          <div class="copy-row">
            <div class="copy-value">
              <strong>Font family</strong>
              <code>"Greycliff CF", Inter, "Segoe UI", Arial, sans-serif</code>
              <small>Adobe Typekit source: use.typekit.net / kit fsa7rfk</small>
            </div>
            <div class="copy-actions">
              <button class="btn btn-outline" type="button" data-copy='font-family: "Greycliff CF", Inter, "Segoe UI", Arial, sans-serif;'>Copy CSS</button>
            </div>
          </div>

          <div class="copy-row">
            <div class="copy-value">
              <strong>Heading scale</strong>
              <code>H1 44 / 60–88 / 128 · H2 36 / 44–60 / 68 · H3 24 / 30–36 · H4 24 / 30 / 36 · H5 20 · H6 18</code>
            </div>
            <div class="copy-actions">
              <button class="btn btn-outline" type="button" data-copy='{"h1":{"mobile":"44px","desktop":"60px-88px","xl":"128px","weight":900},"h2":{"mobile":"36px","desktop":"44px-60px","xl":"68px","weight":800},"h3":{"mobile":"24px","desktop":"30px-36px","weight":800},"h4":{"mobile":"24px","desktop":"30px","xl":"36px","weight":800},"h5":{"size":"20px","weight":800},"h6":{"size":"18px","weight":800}}'>Copy JSON</button>
            </div>
          </div>

          <div class="copy-row">
            <div class="copy-value">
              <strong>Body copy</strong>
              <code>Paragraph 16px / 1.6 / 400 · Large paragraph 18px / 1.6 / 400 · Small text 14px / 1.45 / 400–500</code>
            </div>
            <div class="copy-actions">
              <button class="btn btn-outline" type="button" data-copy='body{font-size:16px;line-height:1.6;font-weight:400;} .text-lg{font-size:18px;line-height:1.6;font-weight:400;} .text-sm{font-size:14px;line-height:1.45;font-weight:500;}'>Copy CSS</button>
            </div>
          </div>

          <div class="copy-row">
            <div class="copy-value">
              <strong>Weight system</strong>
              <code>400 Regular · 500 Medium · 700 Bold · 800 Extra Bold · 900 Black</code>
            </div>
            <div class="copy-actions">
              <button class="btn btn-outline" type="button" data-copy='{"regular":400,"medium":500,"bold":700,"extraBold":800,"black":900}'>Copy JSON</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="layout">
      <div class="section-head">
        <div>
          <h2>Layout, Spacing & Motion</h2>
          <p class="section-intro">
            Simple implementation reference for content width, spacing rhythm, breakpoints, radius and motion timing.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="token-grid">
          <div class="overview-card card-x">
            <span class="mini-chip"><span class="mini-dot"></span>Content width</span>
            <div class="metric-value">1200px</div>
            <p class="muted">Most site sections should use this max width.</p>
            <div class="section-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='max-width: 1200px;' style="width:100%;">Copy</button>
            </div>
          </div>

          <div class="overview-card card-x">
            <span class="mini-chip"><span class="mini-dot"></span>Page padding</span>
            <div class="metric-value">16px / 24px</div>
            <p class="muted">16px mobile, 24px tablet and desktop.</p>
            <div class="section-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='padding-inline: clamp(16px, 2vw, 24px);' style="width:100%;">Copy</button>
            </div>
          </div>

          <div class="overview-card card-x">
            <span class="mini-chip"><span class="mini-dot"></span>Spacing system</span>
            <div class="metric-value">12 / 16 / 20 / 24 / 32</div>
            <p class="muted">Tight gaps, standard gaps, button padding, card padding and large sections.</p>
            <div class="section-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='{"sm":"12px","md":"16px","btn":"20px","lg":"24px","xl":"32px"}' style="width:100%;">Copy</button>
            </div>
          </div>

          <div class="overview-card card-x">
            <span class="mini-chip"><span class="mini-dot"></span>Breakpoints</span>
            <div class="metric-value">640 / 768 / 1080 / 1250 / 1280 / 1690</div>
            <p class="muted">sm, md, lg, nav, xl and 2xl sizes.</p>
            <div class="section-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='{"sm":"640px","md":"768px","lg":"1080px","nav":"1250px","xl":"1280px","2xl":"1690px"}' style="width:100%;">Copy</button>
            </div>
          </div>

          <div class="overview-card card-x">
            <span class="mini-chip"><span class="mini-dot"></span>Radius system</span>
            <div class="metric-value">8 / 10 / 16 / 24 / pill</div>
            <p class="muted">Inputs, general radius, tiles, cards and pill buttons.</p>
            <div class="section-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='{"input":"8px","general":"10px","tile":"16px","card":"24px","pill":"9999px"}' style="width:100%;">Copy</button>
            </div>
          </div>

          <div class="overview-card card-x">
            <span class="mini-chip"><span class="mini-dot"></span>Motion</span>
            <div class="metric-value">20s / 7s / 0.75s</div>
            <p class="muted">Marquee, rotate and modal entrance timings.</p>
            <div class="section-actions" style="margin-top:10px;">
              <button class="btn btn-outline" type="button" data-copy='{"marquee":"20s linear infinite","rotate":"7s linear infinite","modal":"0.75s ease"}' style="width:100%;">Copy</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="ui">
      <div class="section-head">
        <div>
          <h2>Core UI</h2>
          <p class="section-intro">
            Implementation previews for buttons, form controls and handoff-ready patterns.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="component-grid">
          <div class="component-card">
            <h5>Primary Button</h5>
            <div class="component-preview">
              <button class="btn" type="button">Primary CTA</button>
            </div>
            <p class="component-meta">Official Revo CTA with 3px border, hard shadow and circular arrow icon.</p>
            <div class="component-actions">
              <button class="btn btn-outline" type="button" data-copy='.button-large{align-items:center;background-color:#DD2B32;border:3px solid #333132;border-radius:9999px;box-shadow:0 0 4px rgba(0,0,0,.16),0 3px 0 1px #333;color:#FFFDF9;display:flex;font-size:1.125rem;font-weight:800;gap:.75rem;justify-content:space-between;line-height:1.75rem;padding:.5rem .5rem .5rem 1.5rem;transition-duration:.2s}.button-large:hover{transform:translateY(-3px);box-shadow:0 0 4px rgba(0,0,0,.16),0 6px 0 1px #333}.button-large:after{content:"";width:46px;height:46px;background-position:50%;background-repeat:no-repeat;background-size:contain;background-image:url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2746%27 height=%2747%27 fill=%27none%27%3E%3Cpath fill=%27%23FFFAF3%27 d=%27M22.723 0c4.494 0 8.888 1.372 12.624 3.942 3.737 2.57 6.65 6.223 8.37 10.496a24.026 24.026 0 0 1 1.293 13.514c-.877 4.537-3.041 8.704-6.22 11.975-3.177 3.271-7.226 5.499-11.634 6.401-4.408.903-8.976.44-13.129-1.33-4.152-1.771-7.7-4.769-10.197-8.615A23.88 23.88 0 0 1 0 23.389C0 17.186 2.394 11.237 6.655 6.85 10.917 2.464 16.697 0 22.723 0Z%27/%3E%3Cpath stroke=%27%23DD2B32%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%274%27 d=%27M24.833 14 34 23.5m0 0L24.833 33M34 23.5H12%27/%3E%3C/svg%3E)}'>Copy CSS</button>
            </div>
          </div>

          <div class="component-card">
            <h5>Secondary Button</h5>
            <div class="component-preview">
              <button class="btn btn-outline" type="button">Secondary CTA</button>
            </div>
            <p class="component-meta">Same overall shell but no icon and warm-white background.</p>
            <div class="component-actions">
              <button class="btn btn-outline" type="button" data-copy='.button-large.button-alt{background:#FFFDF9;color:#333132;justify-content:center;padding:.5rem 1.2rem}.button-large.button-alt:after{display:none;content:none}'>Copy CSS</button>
            </div>
          </div>

          <div class="component-card">
            <h5>Form Input</h5>
            <div class="component-preview">
              <input class="input-demo" type="text" value="Revo input field" aria-label="Example input">
            </div>
            <p class="component-meta">46px height, 14px font, 2px black border, 8px radius.</p>
            <div class="component-actions">
              <button class="btn btn-outline" type="button" data-copy='.revo-input{height:46px;font-size:14px;padding:0 14px;border:2px solid #333132;border-radius:8px;}'>Copy CSS</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="downloads">
      <div class="section-head">
        <div>
          <h2>Developer Downloads</h2>
          <p class="section-intro">
            Starter files to help new developers move faster.
          </p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="download-grid">
          <div class="download-card">
            <h5>CSS Variables Starter</h5>
            <p class="download-meta" style="margin:8px 0 12px;">Brand colours, radii and layout tokens ready for copy or download.</p>
            <div class="download-actions">
              <button class="btn btn-outline" type="button" data-copy=':root{--brand-red:#DD2B32;--dark-red:#AD212D;--brand-pink:#F392BD;--brand-yellow:#FED133;--brand-black:#333132;--warm-white:#FFFDF9;--light-grey:#F4F3F4;--grey-bg:#F5F5F5;--mid-grey:#C1BFBF;--radius-sm:8px;--radius-md:16px;--radius-lg:24px;--radius-pill:9999px;--content-width:1200px;}'>Copy CSS</button>
              <button class="btn btn-ghost" type="button" data-download="css-tokens">Download</button>
            </div>
          </div>

          <div class="download-card">
            <h5>JSON Design Tokens</h5>
            <p class="download-meta" style="margin:8px 0 12px;">Useful for React apps, theme configs or token-driven UI setups.</p>
            <div class="download-actions">
              <button class="btn btn-outline" type="button" data-copy='{"colors":{"brandRed":"#DD2B32","darkRed":"#AD212D","brandPink":"#F392BD","brandYellow":"#FED133","brandBlack":"#333132","pureWhite":"#FFFFFF","warmWhite":"#FFFDF9","lightGrey":"#F4F3F4","greyBg":"#F5F5F5","midGrey":"#C1BFBF","cream":"#FCF9F1","lightPink":"#FBEEE7","eucalyptus":"#8BC6C1"},"radius":{"sm":"8px","md":"16px","lg":"24px","pill":"9999px"},"layout":{"contentWidth":"1200px","paddingMobile":"16px","paddingDesktop":"24px"}}'>Copy JSON</button>
              <button class="btn btn-ghost" type="button" data-download="json-tokens">Download</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="snippets">
      <div class="section-head">
        <div>
          <h2>Implementation Snippets</h2>
          <p class="section-intro">Ready-to-paste helpers for new developers joining the project.</p>
        </div>
      </div>

      <div class="section-card glass">
        <div class="snippet">
          <h5>Primary Button Markup</h5>
          <pre>&lt;a href="#" class="button-large"&gt;
  &lt;span&gt;Get Started&lt;/span&gt;
&lt;/a&gt;</pre>
          <button class="btn btn-outline" type="button" data-copy='&lt;a href="#" class="button-large"&gt;
  &lt;span&gt;Get Started&lt;/span&gt;
&lt;/a&gt;'>Copy snippet</button>
        </div>

        <div class="snippet" style="margin-top:10px;">
          <h5>Secondary Button Markup</h5>
          <pre>&lt;a href="#" class="button-large button-alt"&gt;
  &lt;span&gt;Learn More&lt;/span&gt;
&lt;/a&gt;</pre>
          <button class="btn btn-outline" type="button" data-copy='&lt;a href="#" class="button-large button-alt"&gt;
  &lt;span&gt;Learn More&lt;/span&gt;
&lt;/a&gt;'>Copy snippet</button>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer container">
    <div class="footer-card glass">
      <div>
        <h5>Revo Brand Hub</h5>
        <p class="muted" style="margin-top:6px;">
          Built as a developer-facing landing page using the official Revo logo, favicon direction and real CTA styling.
        </p>
      </div>

      <div class="hero-actions">
        <a class="btn" href="#overview">Back to top</a>
      </div>
    </div>
  </footer>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>

 <script>
  const toast = document.getElementById('toast');

  function showToast(message) {
    toast.textContent = message;
    toast.classList.add('show');
    clearTimeout(showToast._timeout);
    showToast._timeout = setTimeout(() => {
      toast.classList.remove('show');
    }, 1800);
  }

  async function copyText(text) {
    try {
      await navigator.clipboard.writeText(text);
      showToast('Copied to clipboard');
    } catch (error) {
      const area = document.createElement('textarea');
      area.value = text;
      document.body.appendChild(area);
      area.select();
      document.execCommand('copy');
      area.remove();
      showToast('Copied to clipboard');
    }
  }

  async function downloadFileFromUrl(fileUrl, filename) {
    try {
      const response = await fetch(fileUrl, {
        credentials: 'same-origin'
      });

      if (!response.ok) {
        throw new Error(`HTTP ${response.status}`);
      }

      const blob = await response.blob();
      const blobUrl = URL.createObjectURL(blob);

      const link = document.createElement('a');
      link.href = blobUrl;
      link.download = filename || '';
      document.body.appendChild(link);
      link.click();
      link.remove();

      URL.revokeObjectURL(blobUrl);
      showToast(`Downloaded ${filename || 'file'}`);
    } catch (error) {
      console.error('Download failed:', error);
      showToast('Download failed');
    }
  }

  const downloadMap = {
    'primary-logo': {
      url: './assets/images/revo-logo-black.svg',
      filename: 'revo-logo.svg'
    },
    'favicon': {
      url: './assets/images/cropped-revo-favicon-2024-180x180.png',
      filename: 'cropped-revo-favicon-2024-180x180.png'
    },
    'font-pack': {
      url: './assets/fonts/GreycliffCF-Fonts.zip',
      filename: 'GreycliffCF-Fonts.zip'
    },
    'font-regular': {
      url: './assets/fonts/GreycliffCF-Regular.otf',
      filename: 'GreycliffCF-Regular.otf'
    },
    'font-medium': {
      url: './assets/fonts/GreycliffCF-Medium.otf',
      filename: 'GreycliffCF-Medium.otf'
    },
    'font-bold': {
      url: './assets/fonts/GreycliffCF-Bold.otf',
      filename: 'GreycliffCF-Bold.otf'
    },
    'font-extrabold': {
      url: './assets/fonts/GreycliffCF-ExtraBold.otf',
      filename: 'GreycliffCF-ExtraBold.otf'
    },
    'font-heavy': {
      url: './assets/fonts/GreycliffCF-Heavy.otf',
      filename: 'GreycliffCF-Heavy.otf'
    },
    'spinner': {
      url: './assets/revo-spinner.html',
      filename: 'revo-spinner.html'
    },
    'css-tokens': {
      url: './assets/revo-tokens.css',
      filename: 'revo-tokens.css'
    },
    'json-tokens': {
      url: './assets/revo-tokens.json',
      filename: 'revo-tokens.json'
    }
  };

  document.addEventListener('click', async (event) => {
    const copyTarget = event.target.closest('[data-copy]');
    const directDownloadTarget = event.target.closest('[data-download-url]');
    const mappedDownloadTarget = event.target.closest('[data-download]');

    if (copyTarget) {
      copyText(copyTarget.getAttribute('data-copy'));
      return;
    }

    if (directDownloadTarget) {
      const url = directDownloadTarget.getAttribute('data-download-url');
      const filename = directDownloadTarget.getAttribute('data-download-filename') || '';

      if (!url) {
        showToast('Download not available');
        return;
      }

      await downloadFileFromUrl(url, filename);
      return;
    }

    if (mappedDownloadTarget) {
      const key = mappedDownloadTarget.getAttribute('data-download');
      const file = downloadMap[key];

      if (!file || !file.url) {
        showToast('Download not available');
        return;
      }

      await downloadFileFromUrl(file.url, file.filename);
    }
  });
</script>
</body>
</html>