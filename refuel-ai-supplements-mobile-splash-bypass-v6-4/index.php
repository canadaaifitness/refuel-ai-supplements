<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta name="theme-color" content="#03090b" />
  <link rel="canonical" href="https://refuelaisupplements.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Refuel AI Supplements | Trusted Supplement Store" />
  <meta property="og:url" content="https://refuelaisupplements.com/" />
  <meta property="og:description" content="AI-assisted supplement education, product trust scoring and guided shopping in one responsive store." />
  <meta name="description" content="Refuel AI Supplements — a responsive AI-assisted supplement store with product education, trust scoring, expert review workflows and smart supplement guidance." />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="apple-mobile-web-app-title" content="Refuel AI Supplements" />

  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="format-detection" content="telephone=no,email=no,address=no" />
  <meta name="application-name" content="Refuel AI Supplements" />
  <meta name="screen-orientation" content="portrait" />
  <meta name="x5-orientation" content="portrait" />
  <meta name="msapplication-TileColor" content="#03090b" />
  <title><?php bloginfo('name'); ?> | Trusted Supplement Store</title>
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_template_directory_uri() . '/assets/refuel-app-icon-192.png?v=6.4.6'); ?>" />
  <link rel="apple-touch-icon" sizes="192x192" href="<?php echo esc_url(get_template_directory_uri() . '/assets/refuel-app-icon-192.png?v=6.4.6'); ?>" />

  <style>
    :root {
      --bg: #020708;
      --bg-soft: #061114;
      --surface: rgba(11, 27, 31, 0.78);
      --surface-solid: #0a1a1e;
      --surface-2: #10252a;
      --cyan: #20eee0;
      --cyan-2: #79fff7;
      --mint: #85ffc1;
      --gold: #f6c66d;
      --danger: #ff7c89;
      --text: #f2ffff;
      --muted: #91acb0;
      --line: rgba(32, 238, 224, 0.16);
      --line-strong: rgba(32, 238, 224, 0.42);
      --shadow: 0 28px 90px rgba(0, 0, 0, 0.48);
      --container: 1240px;
      --radius-xl: 32px;
      --radius-lg: 24px;
      --radius-md: 17px;
      --header-height: 78px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      min-height: 100vh;
      color: var(--text);
      background:
        radial-gradient(circle at 8% 7%, rgba(32, 238, 224, 0.13), transparent 27%),
        radial-gradient(circle at 92% 15%, rgba(133, 255, 193, 0.08), transparent 24%),
        radial-gradient(circle at 48% 72%, rgba(32, 238, 224, 0.04), transparent 36%),
        linear-gradient(180deg, #020607 0%, #061215 46%, #020708 100%);
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      line-height: 1.6;
      overflow-x: hidden;
    }

    body.modal-open { overflow: hidden; }
    button, input, select, textarea { font: inherit; }
    button, a { -webkit-tap-highlight-color: transparent; }
    button { color: inherit; }
    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    ::selection { color: #001314; background: var(--cyan); }

    .container { width: min(calc(100% - 38px), var(--container)); margin-inline: auto; }
    .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }

    .ambient-grid {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: -2;
      opacity: 0.2;
      background-image:
        linear-gradient(rgba(32,238,224,.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(32,238,224,.035) 1px, transparent 1px);
      background-size: 52px 52px;
      mask-image: linear-gradient(to bottom, black, transparent 88%);
    }

    .cursor-glow {
      position: fixed;
      width: 380px;
      height: 380px;
      z-index: -1;
      pointer-events: none;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(32,238,224,.11), transparent 67%);
      transform: translate(-50%, -50%);
      transition: opacity .25s ease;
      opacity: 0;
    }

    .topbar {
      padding: 9px 18px;
      color: #bbfffa;
      background: rgba(32, 238, 224, 0.07);
      border-bottom: 1px solid var(--line);
      text-align: center;
      font-size: .78rem;
      font-weight: 800;
      letter-spacing: .03em;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 70;
      background: rgba(2, 8, 10, 0.78);
      border-bottom: 1px solid rgba(255,255,255,.055);
      backdrop-filter: blur(22px) saturate(140%);
    }

    .nav {
      min-height: var(--header-height);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }

    .brand {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      min-width: max-content;
    }

    .brand-mark {
      width: 43px;
      height: 43px;
      position: relative;
      display: grid;
      place-items: center;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--mint));
      border-radius: 14px;
      font-size: 1rem;
      font-weight: 1000;
      box-shadow: 0 0 30px rgba(32,238,224,.22);
      overflow: hidden;
    }

    .brand-mark::after {
      content: "";
      position: absolute;
      inset: -70%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,.75), transparent);
      transform: rotate(25deg);
      animation: shine 5s linear infinite;
    }

    .brand-copy { line-height: 1.05; font-weight: 950; letter-spacing: -.03em; }
    .brand-copy b { color: var(--cyan); }
    .brand-copy small {
      display: block;
      margin-top: 5px;
      color: var(--muted);
      font-size: .56rem;
      font-weight: 800;
      letter-spacing: .16em;
      text-transform: uppercase;
    }

    .nav-links { display: flex; align-items: center; gap: 28px; color: #bdd0d3; font-size: .88rem; font-weight: 800; }
    .nav-links a { position: relative; padding: 8px 0; }
    .nav-links a::after { content: ""; position: absolute; left: 0; right: 100%; bottom: 0; height: 1px; background: var(--cyan); transition: .25s ease; }
    .nav-links a:hover { color: white; }
    .nav-links a:hover::after { right: 0; }

    .nav-actions { display: flex; align-items: center; gap: 9px; }
    .icon-button {
      width: 44px;
      height: 44px;
      position: relative;
      display: grid;
      place-items: center;
      border: 1px solid var(--line);
      border-radius: 14px;
      background: rgba(255,255,255,.035);
      cursor: pointer;
      transition: .22s ease;
    }
    .icon-button:hover { transform: translateY(-2px); border-color: var(--line-strong); background: rgba(32,238,224,.07); }
    .cart-badge { min-width: 18px; height: 18px; position: absolute; top: -5px; right: -5px; display: grid; place-items: center; padding: 0 4px; color: #001315; background: var(--cyan); border-radius: 999px; font-size: .65rem; font-weight: 1000; }
    .menu-button { display: none; }

    .mobile-menu { display: none; padding: 0 19px 18px; }
    .mobile-menu.open { display: grid; }
    .mobile-menu a { padding: 13px 0; color: #d5e6e8; border-bottom: 1px solid rgba(255,255,255,.055); font-weight: 800; }

    .button {
      min-height: 50px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 9px;
      padding: 0 22px;
      border: 1px solid transparent;
      border-radius: 15px;
      cursor: pointer;
      font-weight: 900;
      transition: transform .22s ease, box-shadow .22s ease, border-color .22s ease, background .22s ease;
    }
    .button:hover { transform: translateY(-3px); }
    .button-primary { color: #001315; background: linear-gradient(135deg, var(--cyan), var(--cyan-2)); box-shadow: 0 16px 42px rgba(32,238,224,.2); }
    .button-primary:hover { box-shadow: 0 20px 54px rgba(32,238,224,.28); }
    .button-secondary { color: white; background: rgba(255,255,255,.035); border-color: var(--line); }
    .button-secondary:hover { border-color: var(--line-strong); background: rgba(32,238,224,.06); }
    .button-small { min-height: 43px; padding-inline: 17px; border-radius: 13px; font-size: .84rem; }

    .hero {
      min-height: 790px;
      display: grid;
      align-items: center;
      padding: 82px 0 78px;
      overflow: hidden;
    }
    .hero-grid { display: grid; grid-template-columns: 1.02fr .98fr; align-items: center; gap: 70px; }
    .eyebrow { display: inline-flex; align-items: center; gap: 10px; color: var(--cyan); font-size: .74rem; font-weight: 950; letter-spacing: .16em; text-transform: uppercase; }
    .eyebrow::before { width: 26px; height: 1px; content: ""; background: var(--cyan); box-shadow: 0 0 10px var(--cyan); }
    h1, h2, h3 { line-height: 1.04; letter-spacing: -.045em; }
    h1 { max-width: 760px; margin-top: 18px; font-size: clamp(3.25rem, 6.6vw, 6.55rem); }
    h2 { font-size: clamp(2.3rem, 4.4vw, 4.25rem); }
    .gradient-text { color: transparent; background: linear-gradient(90deg, var(--cyan), var(--mint)); background-clip: text; -webkit-background-clip: text; }
    .hero-copy > p { max-width: 650px; margin: 25px 0 31px; color: var(--muted); font-size: 1.06rem; }
    .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; }
    .hero-proof { display: flex; flex-wrap: wrap; gap: 20px; margin-top: 27px; color: #a9c0c3; font-size: .82rem; font-weight: 800; }
    .hero-proof span::before { margin-right: 8px; color: var(--mint); content: "●"; }

    .hero-visual { min-height: 590px; position: relative; display: grid; place-items: center; perspective: 1200px; }
    .orb {
      width: min(545px, 90vw);
      aspect-ratio: 1;
      position: absolute;
      border: 1px solid rgba(32,238,224,.15);
      border-radius: 50%;
      background:
        radial-gradient(circle, rgba(32,238,224,.1), transparent 58%),
        repeating-radial-gradient(circle, transparent 0 42px, rgba(32,238,224,.035) 43px 44px);
      box-shadow: inset 0 0 80px rgba(32,238,224,.04);
      animation: breathe 5s ease-in-out infinite;
    }
    .orbit { width: 460px; height: 460px; position: absolute; border: 1px dashed rgba(32,238,224,.18); border-radius: 50%; animation: rotate 28s linear infinite; }
    .orbit::before, .orbit::after { content: ""; width: 10px; height: 10px; position: absolute; top: 38px; left: 75px; background: var(--cyan); border-radius: 50%; box-shadow: 0 0 18px var(--cyan); }
    .orbit::after { top: auto; left: auto; right: 58px; bottom: 52px; background: var(--mint); box-shadow: 0 0 18px var(--mint); }

    .ai-console {
      width: min(455px, 94%);
      position: relative;
      z-index: 2;
      padding: 26px;
      background: linear-gradient(145deg, rgba(15,38,43,.94), rgba(3,12,14,.96));
      border: 1px solid rgba(32,238,224,.28);
      border-radius: 30px;
      box-shadow: var(--shadow), inset 0 1px rgba(255,255,255,.045);
      transform: rotateY(-4deg) rotateX(2deg);
      transition: transform .22s ease;
      overflow: hidden;
    }
    .ai-console::before { content: ""; position: absolute; inset: 0; pointer-events: none; background: linear-gradient(120deg, transparent 15%, rgba(32,238,224,.055), transparent 60%); transform: translateX(-100%); animation: scan 4.5s ease-in-out infinite; }
    .console-head { display: flex; align-items: flex-start; justify-content: space-between; gap: 18px; }
    .console-head small, .muted { color: var(--muted); }
    .online { color: var(--mint); font-size: .72rem; font-weight: 950; letter-spacing: .05em; text-transform: uppercase; }
    .online::before { margin-right: 7px; content: "●"; }
    .profile-mini { display: grid; grid-template-columns: 132px 1fr; align-items: center; gap: 22px; margin: 28px 0 24px; }
    .score-ring { width: 132px; height: 132px; display: grid; place-items: center; border-radius: 50%; background: radial-gradient(circle, #071619 57%, transparent 59%), conic-gradient(var(--cyan) 0 88%, rgba(255,255,255,.10) 88%); box-shadow: 0 0 35px rgba(32,238,224,.1); }
    .score-ring strong { display: block; font-size: 2.25rem; line-height: .95; }
    .score-ring small { color: var(--muted); font-size: .6rem; font-weight: 900; text-transform: uppercase; }
    .metric-list { display: grid; gap: 13px; }
    .metric-top { display: flex; justify-content: space-between; color: #c8dcdf; font-size: .72rem; font-weight: 800; }
    .meter { height: 7px; margin-top: 6px; overflow: hidden; background: rgba(255,255,255,.065); border-radius: 999px; }
    .meter span { display: block; height: 100%; background: linear-gradient(90deg, #0caeb0, var(--cyan)); border-radius: inherit; transform-origin: left; animation: grow 1.5s ease both; }
    .stack-preview { display: grid; gap: 10px; padding: 16px; background: rgba(255,255,255,.035); border: 1px solid var(--line); border-radius: 18px; }
    .stack-preview-top { display: flex; align-items: center; justify-content: space-between; gap: 16px; }
    .stack-preview small { color: var(--cyan); font-weight: 950; letter-spacing: .05em; text-transform: uppercase; }
    .stack-chips { display: flex; flex-wrap: wrap; gap: 7px; }
    .chip { padding: 7px 10px; color: #c8eeee; background: rgba(32,238,224,.06); border: 1px solid var(--line); border-radius: 999px; font-size: .69rem; font-weight: 800; }

    .floating-data { position: absolute; z-index: 3; display: flex; align-items: center; gap: 10px; padding: 12px 14px; background: rgba(4,15,17,.82); border: 1px solid var(--line); border-radius: 15px; backdrop-filter: blur(15px); box-shadow: 0 18px 45px rgba(0,0,0,.3); font-size: .74rem; font-weight: 800; animation: float 4s ease-in-out infinite; }
    .floating-data strong { color: var(--cyan); }
    .float-one { left: -10px; top: 108px; }
    .float-two { right: -12px; bottom: 88px; animation-delay: -1.7s; }

    .trust-wrap { position: relative; z-index: 4; margin-top: -28px; }
    .trust-grid { display: grid; grid-template-columns: repeat(4, 1fr); overflow: hidden; background: rgba(7,21,24,.88); border: 1px solid var(--line); border-radius: 24px; box-shadow: var(--shadow); backdrop-filter: blur(18px); }
    .trust-card { min-height: 118px; display: flex; align-items: center; gap: 14px; padding: 22px; border-right: 1px solid var(--line); }
    .trust-card:last-child { border-right: 0; }
    .trust-icon { width: 48px; height: 48px; flex: 0 0 48px; display: grid; place-items: center; color: var(--cyan); background: rgba(32,238,224,.055); border: 1px solid var(--line); border-radius: 15px; font-size: 1.2rem; }
    .trust-card strong { display: block; }
    .trust-card small { color: var(--muted); }

    .section { padding: 96px 0; }
    .section-head { max-width: 760px; margin-bottom: 38px; }
    .section-head h2 { margin-top: 14px; }
    .section-head p { margin-top: 15px; color: var(--muted); }

    .experience-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
    .experience-card { min-height: 280px; position: relative; overflow: hidden; padding: 27px; background: linear-gradient(150deg, rgba(16,39,44,.92), rgba(5,15,18,.96)); border: 1px solid var(--line); border-radius: 24px; transition: .25s ease; }
    .experience-card:hover { transform: translateY(-7px); border-color: var(--line-strong); }
    .experience-number { position: absolute; top: -14px; right: 14px; color: rgba(32,238,224,.075); font-size: 7rem; font-weight: 1000; line-height: 1; }
    .experience-icon { width: 54px; height: 54px; display: grid; place-items: center; margin-bottom: 46px; color: var(--cyan); background: rgba(32,238,224,.065); border: 1px solid var(--line); border-radius: 17px; font-size: 1.35rem; }
    .experience-card p { margin-top: 11px; color: var(--muted); font-size: .9rem; }

    .goal-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 17px; }
    .goal-card { min-height: 250px; position: relative; display: flex; flex-direction: column; justify-content: flex-end; overflow: hidden; padding: 24px; background: radial-gradient(circle at 50% 25%, rgba(32,238,224,.16), transparent 34%), linear-gradient(180deg, #10262b, #071113); border: 1px solid var(--line); border-radius: 22px; cursor: pointer; transition: .25s ease; }
    .goal-card:hover { transform: translateY(-7px); border-color: var(--line-strong); }
    .goal-icon { width: 72px; height: 72px; position: absolute; top: 38px; left: 50%; display: grid; place-items: center; color: var(--cyan); background: rgba(32,238,224,.065); border: 1px solid var(--line); border-radius: 23px; transform: translateX(-50%); font-size: 1.9rem; }
    .goal-card p { margin-top: 8px; color: var(--muted); font-size: .84rem; }

    .shop-toolbar { display: flex; align-items: center; justify-content: space-between; gap: 18px; margin-bottom: 25px; }
    .filters { display: flex; flex-wrap: wrap; gap: 8px; }
    .filter-btn { padding: 10px 15px; color: var(--muted); background: rgba(255,255,255,.025); border: 1px solid var(--line); border-radius: 999px; cursor: pointer; font-size: .78rem; font-weight: 900; }
    .filter-btn.active { color: #001315; background: var(--cyan); border-color: var(--cyan); }
    .shop-note { color: var(--muted); font-size: .78rem; }

    .product-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
    .product-card { position: relative; overflow: hidden; background: linear-gradient(150deg, var(--surface-2), var(--surface-solid)); border: 1px solid var(--line); border-radius: 23px; transition: .25s ease; transform-style: preserve-3d; }
    .product-card:hover { transform: translateY(-7px); border-color: var(--line-strong); box-shadow: 0 24px 60px rgba(0,0,0,.28); }
    .product-card.hidden { display: none; }
    .product-badge { position: absolute; z-index: 3; top: 15px; left: 15px; padding: 7px 9px; color: #001315; background: var(--mint); border-radius: 999px; font-size: .64rem; font-weight: 1000; }
    .product-visual { min-height: 245px; position: relative; display: grid; place-items: center; background: radial-gradient(circle, rgba(32,238,224,.13), transparent 43%), rgba(255,255,255,.012); overflow: hidden; }
    .product-visual::after { content: ""; width: 150px; height: 24px; position: absolute; bottom: 34px; background: rgba(0,0,0,.4); filter: blur(12px); border-radius: 50%; }
    .bottle { width: 120px; height: 158px; position: relative; z-index: 2; display: grid; place-items: center; padding: 14px; background: linear-gradient(90deg, #0e1517, #39464b 50%, #090d0f); border-radius: 16px 16px 25px 25px; box-shadow: 0 25px 42px rgba(0,0,0,.45); transform: rotate(-4deg); transition: .35s ease; }
    .product-card:hover .bottle { transform: rotate(1deg) translateY(-6px) scale(1.04); }
    .bottle::before { width: 93px; height: 25px; position: absolute; top: -18px; content: ""; background: repeating-linear-gradient(90deg,#141b1d 0 5px,#2a3437 5px 9px); border-radius: 8px 8px 3px 3px; }
    .label { width: 100%; padding: 14px 4px; text-align: center; background: rgba(32,238,224,.08); border: 1px solid rgba(32,238,224,.38); }
    .label strong { display: block; color: var(--cyan); font-size: 1.05rem; }
    .label small { font-size: .52rem; text-transform: uppercase; }
    .product-body { padding: 20px; }
    .micro-label { color: var(--cyan); font-size: .66rem; font-weight: 950; letter-spacing: .11em; text-transform: uppercase; }
    .product-body h3 { min-height: 45px; margin: 7px 0 5px; font-size: 1.05rem; }
    .rating { color: var(--gold); font-size: .78rem; }
    .rating span { color: var(--muted); margin-left: 5px; font-size: .68rem; }
    .product-meta { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 12px; }
    .meta-chip { padding: 5px 8px; color: #a9c6c8; background: rgba(255,255,255,.025); border: 1px solid rgba(255,255,255,.055); border-radius: 999px; font-size: .63rem; font-weight: 800; }
    .product-bottom { display: flex; align-items: flex-end; justify-content: space-between; gap: 10px; margin-top: 18px; }
    .price strong { display: block; font-size: 1.08rem; }
    .price small { color: var(--muted); }
    .product-actions { display: flex; gap: 7px; }
    .square-btn { width: 43px; height: 43px; display: grid; place-items: center; color: #001315; background: var(--cyan); border: 0; border-radius: 13px; cursor: pointer; font-weight: 1000; }
    .square-btn.ghost { color: var(--cyan); background: rgba(32,238,224,.06); border: 1px solid var(--line); }

    .bundle-shell { display: grid; grid-template-columns: .9fr 1.1fr; overflow: hidden; background: linear-gradient(135deg, rgba(14,38,43,.94), rgba(3,13,15,.98)); border: 1px solid rgba(32,238,224,.24); border-radius: 31px; box-shadow: var(--shadow); }
    .bundle-copy { padding: clamp(36px, 6vw, 72px); }
    .bundle-copy h2 { margin-top: 14px; }
    .bundle-copy p { margin: 19px 0 25px; color: var(--muted); }
    .bundle-list { display: grid; gap: 12px; margin-bottom: 28px; }
    .bundle-list div::before { width: 22px; height: 22px; display: inline-grid; place-items: center; margin-right: 10px; color: #001315; background: var(--mint); border-radius: 50%; content: "✓"; font-size: .68rem; font-weight: 1000; }
    .bundle-visual { min-height: 560px; position: relative; display: grid; place-items: center; padding: 30px; background: radial-gradient(circle at 52% 42%, rgba(32,238,224,.11), transparent 36%), rgba(2,10,12,.55); border-left: 1px solid var(--line); }
    .bundle-card { width: min(470px, 100%); padding: 25px; background: rgba(8,23,26,.84); border: 1px solid var(--line); border-radius: 25px; backdrop-filter: blur(16px); }
    .bundle-card-head { display: flex; align-items: center; justify-content: space-between; gap: 15px; margin-bottom: 20px; }
    .bundle-card-head span { color: var(--cyan); font-size: .71rem; font-weight: 950; text-transform: uppercase; }
    .bundle-product { display: grid; grid-template-columns: 54px 1fr auto; align-items: center; gap: 13px; padding: 13px 0; border-bottom: 1px solid rgba(255,255,255,.055); }
    .bundle-product:last-of-type { border-bottom: 0; }
    .mini-product { width: 54px; height: 54px; display: grid; place-items: center; color: var(--cyan); background: rgba(32,238,224,.055); border: 1px solid var(--line); border-radius: 15px; font-size: .75rem; font-weight: 1000; }
    .bundle-product p { color: var(--muted); font-size: .7rem; }
    .bundle-price { color: #dff; font-size: .79rem; font-weight: 900; }
    .bundle-total { display: flex; align-items: center; justify-content: space-between; gap: 15px; margin-top: 19px; padding-top: 19px; border-top: 1px solid var(--line); }
    .bundle-total small { color: var(--muted); }
    .bundle-total strong { font-size: 1.3rem; }

    .brand-strip { display: grid; grid-template-columns: repeat(6, 1fr); gap: 12px; }
    .brand-box { min-height: 92px; display: grid; place-items: center; padding: 14px; color: #bdd0d3; background: rgba(255,255,255,.022); border: 1px solid var(--line); border-radius: 17px; text-align: center; font-size: .88rem; font-weight: 1000; transition: .22s ease; }
    .brand-box:hover { color: white; border-color: var(--line-strong); background: rgba(32,238,224,.045); }

    .safety-grid { display: grid; grid-template-columns: 1.1fr .9fr; gap: 20px; }
    .safety-card { padding: 30px; background: linear-gradient(145deg, rgba(13,34,39,.9), rgba(5,15,18,.96)); border: 1px solid var(--line); border-radius: 24px; }
    .safety-card h3 { margin-bottom: 12px; font-size: 1.5rem; }
    .safety-card p { color: var(--muted); }
    .safety-points { display: grid; gap: 11px; margin-top: 20px; }
    .safety-points div { padding: 12px 14px; background: rgba(255,255,255,.026); border: 1px solid rgba(255,255,255,.055); border-radius: 14px; color: #c9dcde; font-size: .86rem; }

    .cta { padding: clamp(42px, 7vw, 78px); background: radial-gradient(circle at 88% 30%, rgba(133,255,193,.12), transparent 28%), linear-gradient(135deg, #0c292e, #061316); border: 1px solid rgba(32,238,224,.25); border-radius: 31px; }
    .cta h2 { max-width: 780px; margin-top: 13px; }
    .cta p { max-width: 650px; margin: 18px 0 27px; color: var(--muted); }

    footer { padding: 66px 0 25px; background: #020708; border-top: 1px solid rgba(255,255,255,.055); }
    .footer-grid { display: grid; grid-template-columns: 1.4fr repeat(3,1fr); gap: 42px; }
    .footer-description { max-width: 370px; margin-top: 17px; color: var(--muted); font-size: .84rem; }
    .footer-column h4 { margin-bottom: 14px; }
    .footer-column a { display: block; margin: 8px 0; color: var(--muted); font-size: .84rem; }
    .footer-column a:hover { color: var(--cyan); }
    .footer-bottom { display: flex; justify-content: space-between; gap: 20px; margin-top: 44px; padding-top: 22px; color: #6f898d; border-top: 1px solid rgba(255,255,255,.055); font-size: .72rem; }

    .drawer-backdrop, .modal-backdrop { position: fixed; inset: 0; z-index: 110; display: none; background: rgba(0,0,0,.62); backdrop-filter: blur(9px); }
    .drawer-backdrop.show, .modal-backdrop.show { display: block; }
    .cart-drawer { width: min(420px, 92vw); height: 100%; position: fixed; z-index: 120; top: 0; right: 0; display: flex; flex-direction: column; padding: 23px; background: #071416; border-left: 1px solid var(--line); box-shadow: -25px 0 80px rgba(0,0,0,.45); transform: translateX(105%); transition: .3s ease; }
    .cart-drawer.open { transform: translateX(0); }
    .drawer-head { display: flex; align-items: center; justify-content: space-between; gap: 15px; padding-bottom: 18px; border-bottom: 1px solid var(--line); }
    .cart-items { flex: 1; display: grid; align-content: start; gap: 11px; overflow-y: auto; padding: 18px 0; }
    .empty-cart { padding: 35px 15px; color: var(--muted); text-align: center; }
    .cart-line { display: grid; grid-template-columns: 1fr auto; gap: 13px; padding: 13px; background: rgba(255,255,255,.025); border: 1px solid rgba(255,255,255,.055); border-radius: 15px; }
    .cart-line small { color: var(--muted); }
    .remove-item { color: var(--danger); background: transparent; border: 0; cursor: pointer; font-size: .75rem; font-weight: 900; }
    .drawer-total { display: flex; justify-content: space-between; gap: 15px; padding: 18px 0; border-top: 1px solid var(--line); }

    .assessment-modal { width: min(760px, calc(100vw - 28px)); max-height: min(760px, calc(100vh - 28px)); position: fixed; z-index: 130; top: 50%; left: 50%; display: none; overflow: hidden; background: linear-gradient(145deg, rgba(15,39,44,.98), rgba(3,13,15,.99)); border: 1px solid rgba(32,238,224,.28); border-radius: 28px; box-shadow: 0 40px 110px rgba(0,0,0,.62); transform: translate(-50%,-48%) scale(.97); opacity: 0; transition: .25s ease; }
    .assessment-modal.show { display: block; transform: translate(-50%,-50%) scale(1); opacity: 1; }
    .modal-head { display: flex; align-items: flex-start; justify-content: space-between; gap: 18px; padding: 23px 24px; border-bottom: 1px solid var(--line); }
    .modal-head small { color: var(--cyan); font-weight: 900; text-transform: uppercase; }
    .modal-body { max-height: calc(100vh - 190px); overflow-y: auto; padding: 24px; }
    .progress-track { height: 7px; margin-bottom: 24px; overflow: hidden; background: rgba(255,255,255,.07); border-radius: 999px; }
    .progress-track span { display: block; height: 100%; width: 20%; background: linear-gradient(90deg, var(--cyan), var(--mint)); border-radius: inherit; transition: width .28s ease; }
    .step-label { color: var(--cyan); font-size: .7rem; font-weight: 950; letter-spacing: .12em; text-transform: uppercase; }
    .question-title { margin: 9px 0 20px; font-size: clamp(1.65rem,4vw,2.5rem); }
    .choice-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 12px; }
    .choice { min-height: 96px; display: flex; align-items: center; gap: 12px; padding: 16px; color: #d7e9eb; background: rgba(255,255,255,.026); border: 1px solid rgba(255,255,255,.065); border-radius: 17px; cursor: pointer; text-align: left; transition: .22s ease; }
    .choice:hover, .choice.selected { color: white; background: rgba(32,238,224,.075); border-color: var(--line-strong); }
    .choice-icon { width: 42px; height: 42px; flex: 0 0 42px; display: grid; place-items: center; color: var(--cyan); background: rgba(32,238,224,.06); border: 1px solid var(--line); border-radius: 13px; }
    .choice small { display: block; color: var(--muted); font-size: .7rem; }
    .text-input { width: 100%; min-height: 52px; margin-top: 10px; padding: 0 15px; color: white; background: rgba(255,255,255,.035); border: 1px solid var(--line); border-radius: 14px; outline: none; }
    .text-input:focus { border-color: var(--cyan); }
    .modal-actions { display: flex; justify-content: space-between; gap: 12px; margin-top: 25px; }
    .result-card { padding: 22px; background: rgba(32,238,224,.05); border: 1px solid var(--line-strong); border-radius: 20px; }
    .result-card h3 { margin: 8px 0; font-size: 1.75rem; }
    .result-products { display: grid; gap: 10px; margin: 18px 0; }
    .result-product { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 12px 13px; background: rgba(0,0,0,.18); border: 1px solid rgba(255,255,255,.055); border-radius: 14px; }
    .medical-warning { margin-top: 15px; padding: 13px 14px; color: #ffd5da; background: rgba(255,124,137,.075); border: 1px solid rgba(255,124,137,.22); border-radius: 14px; font-size: .82rem; }

    .chat-launcher { width: 60px; height: 60px; position: fixed; z-index: 88; right: 22px; bottom: 22px; display: grid; place-items: center; color: #001315; background: linear-gradient(135deg, var(--cyan), var(--mint)); border: 0; border-radius: 19px; box-shadow: 0 20px 50px rgba(32,238,224,.28); cursor: pointer; font-size: 1.35rem; transition: .22s ease; }
    .chat-launcher:hover { transform: translateY(-4px) scale(1.03); }
    .chat-panel { width: min(390px, calc(100vw - 24px)); height: min(590px, calc(100vh - 110px)); position: fixed; z-index: 90; right: 22px; bottom: 94px; display: flex; flex-direction: column; overflow: hidden; background: rgba(5,18,21,.98); border: 1px solid var(--line-strong); border-radius: 24px; box-shadow: 0 30px 90px rgba(0,0,0,.55); transform: translateY(18px) scale(.97); opacity: 0; pointer-events: none; transition: .25s ease; }
    .chat-panel.open { transform: translateY(0) scale(1); opacity: 1; pointer-events: auto; }
    .chat-head { display: flex; align-items: center; justify-content: space-between; gap: 15px; padding: 17px; border-bottom: 1px solid var(--line); }
    .chat-profile { display: flex; align-items: center; gap: 11px; }
    .chat-avatar { width: 43px; height: 43px; display: grid; place-items: center; color: var(--cyan); background: rgba(32,238,224,.07); border: 1px solid var(--line); border-radius: 14px; }
    .chat-messages { flex: 1; display: flex; flex-direction: column; gap: 11px; overflow-y: auto; padding: 17px; }
    .message { max-width: 86%; padding: 12px 14px; border-radius: 16px; font-size: .83rem; }
    .message.bot { align-self: flex-start; color: #dcebed; background: rgba(255,255,255,.035); border: 1px solid var(--line); border-bottom-left-radius: 5px; }
    .message.user { align-self: flex-end; color: #001315; background: linear-gradient(135deg, var(--cyan), var(--cyan-2)); border-bottom-right-radius: 5px; font-weight: 800; }
    .quick-prompts { display: flex; gap: 7px; overflow-x: auto; padding: 0 17px 10px; }
    .quick-prompts button { min-width: max-content; padding: 7px 10px; color: #bcd5d8; background: rgba(255,255,255,.03); border: 1px solid var(--line); border-radius: 999px; cursor: pointer; font-size: .68rem; font-weight: 800; }
    .chat-form { display: grid; grid-template-columns: 1fr 48px; gap: 9px; padding: 13px; border-top: 1px solid var(--line); }
    .chat-form input { min-width: 0; min-height: 48px; padding: 0 13px; color: white; background: rgba(255,255,255,.035); border: 1px solid var(--line); border-radius: 13px; outline: none; }
    .chat-form button { color: #001315; background: var(--cyan); border: 0; border-radius: 13px; cursor: pointer; font-weight: 1000; }

    .toast { position: fixed; z-index: 200; right: 22px; bottom: 22px; max-width: min(360px, calc(100vw - 44px)); padding: 14px 17px; color: #001315; background: var(--mint); border-radius: 14px; box-shadow: var(--shadow); font-size: .82rem; font-weight: 950; opacity: 0; pointer-events: none; transform: translateY(20px); transition: .25s ease; }
    .toast.show { opacity: 1; transform: translateY(0); }
    .install-banner { position: fixed; z-index: 85; left: 50%; bottom: 20px; display: none; align-items: center; gap: 12px; width: min(520px, calc(100vw - 30px)); padding: 13px; background: rgba(7,21,24,.96); border: 1px solid var(--line-strong); border-radius: 17px; box-shadow: var(--shadow); transform: translateX(-50%); }
    .install-banner.show { display: flex; }
    .install-banner p { flex: 1; color: #d7e9eb; font-size: .78rem; }
    .install-banner small { display: block; color: var(--muted); }

    .reveal { opacity: 0; transform: translateY(26px); transition: opacity .7s ease, transform .7s ease; }
    .reveal.visible { opacity: 1; transform: none; }

    @keyframes shine { from { transform: translateX(-120%) rotate(25deg); } to { transform: translateX(120%) rotate(25deg); } }
    @keyframes breathe { 0%,100% { transform: scale(.97); opacity: .68; } 50% { transform: scale(1.03); opacity: 1; } }
    @keyframes rotate { to { transform: rotate(360deg); } }
    @keyframes scan { 0%,15% { transform: translateX(-110%); } 55%,100% { transform: translateX(110%); } }
    @keyframes grow { from { transform: scaleX(0); } }
    @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { animation-duration: .01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: .01ms !important; }
    }

    @media (max-width: 1040px) {
      .nav-links { display: none; }
      .menu-button { display: grid; }
      .hero-grid, .bundle-shell, .safety-grid { grid-template-columns: 1fr; }
      .hero-copy { text-align: center; }
      .hero-copy > p { margin-inline: auto; }
      .hero-actions, .hero-proof { justify-content: center; }
      .hero-visual { margin-top: 14px; }
      .trust-grid, .product-grid { grid-template-columns: repeat(2,1fr); }
      .goal-grid { grid-template-columns: repeat(2,1fr); }
      .bundle-visual { border-top: 1px solid var(--line); border-left: 0; }
      .brand-strip { grid-template-columns: repeat(3,1fr); }
    }

    @media (max-width: 720px) {
      :root { --header-height: 70px; }
      .container { width: min(calc(100% - 26px), var(--container)); }
      .topbar { font-size: .69rem; }
      .nav .button-primary { display: none; }
      .hero { min-height: auto; padding: 65px 0 58px; }
      h1 { font-size: clamp(3rem, 15vw, 4.8rem); }
      .hero-visual { min-height: 510px; }
      .orbit { width: 390px; height: 390px; }
      .ai-console { transform: none; }
      .float-one { left: 4px; top: 55px; }
      .float-two { right: 2px; bottom: 55px; }
      .profile-mini { grid-template-columns: 1fr; justify-items: center; }
      .metric-list { width: 100%; }
      .trust-wrap { margin-top: 0; }
      .trust-grid, .experience-grid, .goal-grid, .product-grid, .brand-strip, .footer-grid { grid-template-columns: 1fr; }
      .trust-card { border-right: 0; border-bottom: 1px solid var(--line); }
      .trust-card:last-child { border-bottom: 0; }
      .section { padding: 74px 0; }
      .shop-toolbar { align-items: flex-start; flex-direction: column; }
      .bundle-visual { min-height: 500px; padding: 20px; }
      .choice-grid { grid-template-columns: 1fr; }
      .footer-bottom { flex-direction: column; }
      .chat-panel { right: 12px; bottom: 86px; }
      .chat-launcher { right: 14px; bottom: 14px; }
      .install-banner { bottom: 86px; }
    }

    @media (max-width: 430px) {
      .brand-copy small { display: none; }
      .hero-actions .button { width: 100%; }
      .hero-proof { display: grid; gap: 8px; }
      .hero-visual { min-height: 560px; }
      .ai-console { padding: 20px; }
      .floating-data { display: none; }
      .filters { flex-wrap: nowrap; max-width: 100%; overflow-x: auto; padding-bottom: 4px; }
      .filter-btn { min-width: max-content; }
      .product-grid { grid-template-columns: 1fr; }
      .modal-body { padding: 19px; }
      .modal-head { padding: 19px; }
      .modal-actions { flex-direction: column-reverse; }
      .modal-actions .button { width: 100%; }
    }

    /* AI Stack Builder hero upgrade */
    .brand-mark-image {
      overflow: hidden;
      padding: 0;
      background: #020708;
    }
    .brand-mark-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: scale(1.18);
      filter: hue-rotate(135deg) saturate(1.5) brightness(1.18);
    }

    .ai-stack-hero {
      min-height: auto;
      display: block;
      padding: 72px 0 58px;
      overflow: hidden;
    }
    .ai-stack-hero-grid {
      display: grid;
      grid-template-columns: 1.08fr .92fr;
      align-items: stretch;
      gap: 24px;
    }
    .stack-builder-pane,
    .ai-jawad-card {
      position: relative;
      overflow: hidden;
      border: 1px solid var(--line-strong);
      background:
        radial-gradient(circle at 15% 0%, rgba(32,238,224,.08), transparent 28%),
        linear-gradient(145deg, rgba(8,23,27,.97), rgba(2,8,10,.99));
      box-shadow: var(--shadow), inset 0 1px rgba(255,255,255,.035);
    }
    .stack-builder-pane {
      min-height: 650px;
      padding: clamp(28px, 5vw, 58px);
      border-radius: 32px;
    }
    .stack-builder-pane::after,
    .ai-jawad-card::after {
      width: 55%;
      height: 1px;
      position: absolute;
      top: 0;
      left: 8%;
      content: "";
      background: linear-gradient(90deg, transparent, var(--cyan), transparent);
      box-shadow: 0 0 20px var(--cyan);
      opacity: .75;
    }
    .stack-builder-pane h1 {
      max-width: 820px;
      margin-top: 18px;
      font-size: clamp(3rem, 5.4vw, 5.85rem);
    }
    .stack-builder-intro {
      max-width: 720px;
      margin: 24px 0 25px;
      color: var(--muted);
      font-size: 1rem;
    }
    .goal-selector-shell {
      padding: 18px;
      border: 1px solid var(--line);
      border-radius: 21px;
      background: rgba(255,255,255,.025);
    }
    .selector-heading {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 15px;
      margin-bottom: 13px;
    }
    .selector-heading span {
      font-size: .82rem;
      font-weight: 950;
      letter-spacing: .06em;
      text-transform: uppercase;
    }
    .selector-heading small { color: var(--muted); }
    .hero-goal-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 9px;
    }
    .hero-goal-chip {
      min-height: 105px;
      display: grid;
      align-content: center;
      justify-items: start;
      gap: 4px;
      padding: 14px;
      color: var(--text);
      background: rgba(2,12,14,.78);
      border: 1px solid var(--line);
      border-radius: 16px;
      cursor: pointer;
      text-align: left;
      transition: .22s ease;
    }
    .hero-goal-chip:hover,
    .hero-goal-chip.active {
      transform: translateY(-4px);
      border-color: var(--cyan);
      background: rgba(32,238,224,.075);
      box-shadow: 0 13px 34px rgba(0,0,0,.33), 0 0 20px rgba(32,238,224,.08);
    }
    .hero-goal-chip > span { color: var(--cyan); font-size: 1.3rem; }
    .hero-goal-chip strong { font-size: .83rem; }
    .hero-goal-chip small { color: var(--muted); font-size: .67rem; }

    .profile-input-preview {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 9px;
      margin: 15px 0 19px;
    }
    .profile-input-preview > div {
      min-height: 86px;
      display: grid;
      align-content: center;
      padding: 13px;
      border: 1px solid var(--line);
      border-radius: 15px;
      background: rgba(255,255,255,.018);
    }
    .profile-input-preview span {
      color: var(--cyan);
      font-size: .62rem;
      font-weight: 950;
    }
    .profile-input-preview strong { margin: 3px 0; font-size: .77rem; }
    .profile-input-preview small { color: var(--muted); font-size: .65rem; }
    .ai-stack-actions { margin-top: 3px; }

    .ai-jawad-stage {
      min-height: 650px;
      position: relative;
      display: grid;
      place-items: center;
      perspective: 1200px;
    }
    .jawad-orb {
      width: 530px;
      height: 530px;
      position: absolute;
      border: 1px solid rgba(32,238,224,.13);
      border-radius: 50%;
      background:
        radial-gradient(circle, rgba(32,238,224,.10), transparent 61%),
        repeating-radial-gradient(circle, transparent 0 43px, rgba(32,238,224,.025) 44px 45px);
      animation: breathe 5s ease-in-out infinite;
    }
    .ai-jawad-card {
      width: min(470px, 96%);
      position: relative;
      z-index: 2;
      border-radius: 30px;
      transform: rotateY(-3deg) rotateX(1deg);
      transition: transform .22s ease;
    }
    .jawad-portrait {
      height: 310px;
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(circle at 50% 25%, rgba(32,238,224,.23), transparent 35%),
        #041012;
    }
    .jawad-portrait::after {
      position: absolute;
      inset: auto 0 0;
      height: 50%;
      content: "";
      background: linear-gradient(transparent, rgba(3,12,14,.96));
    }
    .jawad-portrait img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 25%;
    }
    .jawad-live {
      position: absolute;
      z-index: 2;
      top: 16px;
      left: 16px;
      display: flex;
      align-items: center;
      gap: 7px;
      padding: 8px 11px;
      color: #cffffa;
      background: rgba(3,15,17,.78);
      border: 1px solid var(--line);
      border-radius: 999px;
      backdrop-filter: blur(12px);
      font-size: .61rem;
      font-weight: 950;
      letter-spacing: .08em;
    }
    .jawad-live span {
      width: 7px;
      height: 7px;
      background: var(--mint);
      border-radius: 50%;
      box-shadow: 0 0 12px var(--mint);
    }
    .jawad-profile { padding: 18px 22px 12px; }
    .jawad-title-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
    }
    .jawad-title-row small {
      color: var(--cyan);
      font-size: .61rem;
      font-weight: 950;
      letter-spacing: .09em;
    }
    .jawad-title-row h3 {
      margin-top: 3px;
      color: var(--cyan-2);
      font-size: 2rem;
    }
    .founder-badge {
      padding: 7px 11px;
      color: var(--cyan);
      border: 1px solid var(--cyan);
      border-radius: 999px;
      font-size: .65rem;
      font-weight: 950;
    }
    .jawad-profile > p { margin-top: 6px; color: var(--muted); font-size: .82rem; }

    .jawad-message {
      position: relative;
      margin: 0 22px 13px;
      padding: 15px 16px 15px 43px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(32,238,224,.04);
    }
    .quote-mark {
      position: absolute;
      top: 8px;
      left: 14px;
      color: var(--cyan);
      font-size: 2rem;
      font-weight: 950;
    }
    .jawad-message p { color: #c6d9db; font-size: .77rem; line-height: 1.52; }

    .coach-instruction-list {
      display: grid;
      gap: 8px;
      padding: 0 22px 16px;
    }
    .coach-instruction-list > div {
      display: grid;
      grid-template-columns: 31px 1fr;
      align-items: center;
      gap: 10px;
      padding: 9px 10px;
      border: 1px solid rgba(32,238,224,.11);
      border-radius: 12px;
      background: rgba(255,255,255,.016);
    }
    .coach-instruction-list > div > span {
      width: 31px;
      height: 31px;
      display: grid;
      place-items: center;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border-radius: 10px;
      font-size: .72rem;
      font-weight: 1000;
    }
    .coach-instruction-list p { display: grid; }
    .coach-instruction-list strong { font-size: .72rem; }
    .coach-instruction-list small { color: var(--muted); font-size: .64rem; }
    .jawad-chat-button {
      width: calc(100% - 44px);
      min-height: 45px;
      margin: 0 22px 22px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border: 0;
      border-radius: 14px;
      cursor: pointer;
      font-weight: 950;
    }

    .ai-journey-strip {
      display: grid;
      grid-template-columns: 1fr auto 1fr auto 1fr auto 1fr auto 1fr;
      align-items: center;
      gap: 10px;
      margin-top: 24px;
      padding: 16px;
      border: 1px solid var(--line);
      border-radius: 22px;
      background: rgba(5,17,20,.78);
      box-shadow: 0 20px 55px rgba(0,0,0,.28);
    }
    .ai-journey-strip > div {
      min-height: 78px;
      display: grid;
      align-content: center;
      padding: 12px;
      border: 1px solid rgba(32,238,224,.11);
      border-radius: 15px;
      background: rgba(255,255,255,.018);
    }
    .ai-journey-strip span { color: var(--cyan); font-size: .62rem; font-weight: 950; }
    .ai-journey-strip strong { margin: 3px 0; font-size: .76rem; }
    .ai-journey-strip small { color: var(--muted); font-size: .64rem; }
    .ai-journey-strip i { color: var(--cyan); font-style: normal; }

    .ai-readiness-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      margin-top: 13px;
    }
    .ai-readiness-grid article {
      min-height: 90px;
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 15px;
      border: 1px solid var(--line);
      border-radius: 17px;
      background: linear-gradient(145deg, rgba(10,27,31,.85), rgba(3,12,14,.94));
    }
    .ai-readiness-grid article > span {
      width: 42px;
      height: 42px;
      flex: 0 0 42px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      background: rgba(32,238,224,.055);
      border: 1px solid var(--line);
      border-radius: 13px;
    }
    .ai-readiness-grid small {
      display: block;
      color: var(--cyan);
      font-size: .59rem;
      font-weight: 950;
      letter-spacing: .07em;
    }
    .ai-readiness-grid strong {
      display: block;
      margin-top: 4px;
      color: #d8e8e9;
      font-size: .72rem;
    }

    @media (max-width: 1080px) {
      .ai-stack-hero-grid { grid-template-columns: 1fr; }
      .stack-builder-pane { min-height: auto; }
      .ai-jawad-stage { min-height: 680px; }
      .hero-goal-grid,
      .profile-input-preview { grid-template-columns: repeat(2, 1fr); }
      .ai-journey-strip {
        grid-template-columns: 1fr;
      }
      .ai-journey-strip i { display: none; }
      .ai-readiness-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 650px) {
      .ai-stack-hero { padding: 44px 0 40px; }
      .stack-builder-pane { padding: 24px 18px; border-radius: 24px; }
      .stack-builder-pane h1 { font-size: clamp(2.6rem, 13vw, 4.25rem); }
      .selector-heading { display: grid; }
      .hero-goal-grid { grid-template-columns: 1fr 1fr; }
      .profile-input-preview { grid-template-columns: 1fr 1fr; }
      .ai-stack-actions .button { width: 100%; }
      .ai-jawad-stage { min-height: 650px; }
      .jawad-orb { width: 390px; height: 390px; }
      .ai-jawad-card { width: 100%; transform: none; }
      .jawad-portrait { height: 285px; }
      .ai-readiness-grid { grid-template-columns: 1fr; }
    }


    /* V4: guaranteed visible AI Jawad hero */
    .new-release-badge {
      width: fit-content;
      margin-bottom: 16px;
      padding: 8px 12px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border-radius: 999px;
      font-size: .64rem;
      font-weight: 1000;
      letter-spacing: .09em;
      text-transform: uppercase;
      box-shadow: 0 0 24px rgba(32,238,224,.18);
    }

    .ai-stack-hero-grid {
      grid-template-columns: minmax(0, 1.04fr) minmax(430px, .96fr) !important;
      align-items: stretch !important;
    }

    .stack-builder-pane,
    .ai-jawad-stage,
    .ai-journey-strip,
    .ai-readiness-grid {
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }

    .ai-jawad-stage {
      min-height: 710px !important;
      display: block !important;
      position: relative !important;
      padding: 0 !important;
    }

    .jawad-orb {
      display: block !important;
      top: 50% !important;
      left: 50% !important;
      transform: translate(-50%, -50%) !important;
    }

    .ai-jawad-card {
      width: 100% !important;
      max-width: none !important;
      min-height: 710px !important;
      display: flex !important;
      flex-direction: column !important;
      position: relative !important;
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
      border: 1px solid rgba(32,238,224,.62) !important;
      box-shadow:
        0 28px 80px rgba(0,0,0,.58),
        inset 0 1px rgba(255,255,255,.04),
        0 0 38px rgba(32,238,224,.08) !important;
    }

    .jawad-portrait {
      height: 345px !important;
      min-height: 345px !important;
      display: block !important;
      opacity: 1 !important;
      visibility: visible !important;
    }

    .jawad-portrait img {
      display: block !important;
      width: 100% !important;
      height: 100% !important;
      opacity: 1 !important;
      visibility: visible !important;
      object-fit: cover !important;
      object-position: center 23% !important;
    }

    .jawad-profile,
    .jawad-message,
    .coach-instruction-list,
    .jawad-live-assistant,
    .jawad-chat-button {
      position: relative !important;
      z-index: 5 !important;
      opacity: 1 !important;
      visibility: visible !important;
    }

    .jawad-live-assistant {
      margin: 0 22px 12px;
      padding: 14px;
      border: 1px solid rgba(32,238,224,.25);
      border-radius: 16px;
      background: rgba(32,238,224,.035);
    }

    .jawad-live-assistant label {
      display: block;
      margin-bottom: 9px;
      color: var(--cyan);
      font-size: .69rem;
      font-weight: 950;
      letter-spacing: .06em;
      text-transform: uppercase;
    }

    .jawad-input-row {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 8px;
    }

    .jawad-input-row input {
      min-width: 0;
      min-height: 43px;
      padding: 0 12px;
      color: white;
      background: #041013;
      border: 1px solid var(--line);
      border-radius: 11px;
      outline: none;
    }

    .jawad-input-row input:focus {
      border-color: var(--cyan);
      box-shadow: 0 0 0 3px rgba(32,238,224,.07);
    }

    .jawad-input-row button {
      min-height: 43px;
      padding: 0 15px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border: 0;
      border-radius: 11px;
      cursor: pointer;
      font-weight: 950;
    }

    .jawad-quick-prompts {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      margin-top: 9px;
    }

    .jawad-quick-prompts button {
      padding: 7px 9px;
      color: #bed5d7;
      background: rgba(255,255,255,.025);
      border: 1px solid var(--line);
      border-radius: 999px;
      cursor: pointer;
      font-size: .61rem;
      font-weight: 850;
    }

    .jawad-quick-prompts button:hover {
      color: var(--cyan);
      border-color: var(--cyan);
    }

    @media (max-width: 1080px) {
      .ai-stack-hero-grid {
        grid-template-columns: 1fr !important;
      }
      .ai-jawad-stage,
      .ai-jawad-card {
        min-height: auto !important;
      }
    }

    @media (max-width: 650px) {
      .jawad-input-row {
        grid-template-columns: 1fr;
      }
      .jawad-portrait {
        height: 300px !important;
        min-height: 300px !important;
      }
    }


    /* COMPACT COMMERCIAL STOREFRONT V5 */
    .compact-commerce-hero {
      padding: 46px 0 24px;
      overflow: hidden;
    }

    .compact-hero-shell {
      display: grid;
      grid-template-columns: minmax(0, 1.12fr) minmax(350px, .88fr);
      align-items: center;
      gap: 22px;
      min-height: 455px;
      padding: clamp(24px, 4vw, 44px);
      border: 1px solid var(--line-strong);
      border-radius: 30px;
      background:
        radial-gradient(circle at 78% 12%, rgba(32,238,224,.09), transparent 25%),
        linear-gradient(145deg, rgba(8,22,26,.97), rgba(2,8,10,.99));
      box-shadow: var(--shadow), inset 0 1px rgba(255,255,255,.03);
    }

    .compact-hero-copy {
      opacity: 1 !important;
      transform: none !important;
    }

    .compact-hero-copy h1 {
      max-width: 760px;
      margin-top: 13px;
      font-size: clamp(2.65rem, 5vw, 5.25rem);
      line-height: .94;
    }

    .compact-hero-copy > p {
      max-width: 680px;
      margin: 20px 0 22px;
      color: var(--muted);
      font-size: .96rem;
    }

    .compact-hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .compact-proof-row {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      margin-top: 19px;
      color: #bdd0d2;
      font-size: .72rem;
      font-weight: 850;
    }

    .compact-proof-row span::before {
      margin-right: 7px;
      color: var(--mint);
      content: "●";
    }

    .compact-jawad-stage {
      min-height: 390px !important;
      display: grid !important;
      place-items: center !important;
      opacity: 1 !important;
      visibility: visible !important;
      perspective: 1100px;
    }

    .compact-card-breeze {
      width: min(410px, 100%);
      animation: compactCardBreeze 5.2s ease-in-out infinite;
      transform-origin: center;
      will-change: transform;
    }

    .compact-jawad-card {
      width: 100%;
      min-height: 390px;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(32,238,224,.52);
      border-radius: 25px;
      background: linear-gradient(155deg, rgba(7,25,29,.98), rgba(2,8,10,.99));
      box-shadow:
        0 24px 65px rgba(0,0,0,.52),
        0 0 28px rgba(32,238,224,.07);
      transition: transform .18s ease-out, box-shadow .22s ease;
      transform: rotateY(-4deg) rotateX(2deg);
      will-change: transform;
    }

    .compact-jawad-card:hover {
      box-shadow:
        0 30px 78px rgba(0,0,0,.58),
        0 0 38px rgba(32,238,224,.13);
    }

    .compact-jawad-image {
      height: 205px;
      position: relative;
      overflow: hidden;
      background: #041013;
    }

    .compact-jawad-image::after {
      position: absolute;
      inset: auto 0 0;
      height: 45%;
      content: "";
      background: linear-gradient(transparent, rgba(3,13,15,.96));
    }

    .compact-jawad-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 23%;
    }

    .compact-online {
      position: absolute;
      z-index: 3;
      top: 13px;
      left: 13px;
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 7px 9px;
      color: #cffffa;
      background: rgba(2,12,14,.76);
      border: 1px solid var(--line);
      border-radius: 999px;
      backdrop-filter: blur(10px);
      font-size: .57rem;
      font-weight: 950;
      letter-spacing: .07em;
    }

    .compact-online i {
      width: 7px;
      height: 7px;
      background: var(--mint);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--mint);
    }

    .compact-jawad-content {
      padding: 15px 17px 17px;
    }

    .compact-jawad-heading {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }

    .compact-jawad-heading small {
      color: var(--cyan);
      font-size: .56rem;
      font-weight: 950;
      letter-spacing: .08em;
    }

    .compact-jawad-heading h3 {
      margin-top: 2px;
      color: var(--cyan-2);
      font-size: 1.55rem;
    }

    .compact-jawad-heading > span {
      padding: 6px 9px;
      color: var(--cyan);
      border: 1px solid var(--cyan);
      border-radius: 999px;
      font-size: .56rem;
      font-weight: 950;
    }

    .compact-jawad-content > p {
      margin: 9px 0 11px;
      color: #c1d5d7;
      font-size: .71rem;
      line-height: 1.48;
    }

    .compact-jawad-input {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 7px;
    }

    .compact-jawad-input input {
      min-width: 0;
      min-height: 39px;
      padding: 0 10px;
      color: white;
      background: #031013;
      border: 1px solid var(--line);
      border-radius: 10px;
      outline: none;
      font-size: .69rem;
    }

    .compact-jawad-input input:focus {
      border-color: var(--cyan);
      box-shadow: 0 0 0 3px rgba(32,238,224,.06);
    }

    .compact-jawad-input button {
      min-height: 39px;
      padding: 0 13px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border: 0;
      border-radius: 10px;
      cursor: pointer;
      font-size: .66rem;
      font-weight: 1000;
    }

    .compact-prompts {
      margin-top: 8px !important;
    }

    .compact-full-coach {
      width: 100%;
      min-height: 39px;
      margin-top: 9px;
      color: var(--cyan);
      background: rgba(32,238,224,.035);
      border: 1px solid var(--line);
      border-radius: 10px;
      cursor: pointer;
      font-size: .66rem;
      font-weight: 950;
    }

    .compact-goal-section {
      padding: 28px 0 15px;
    }

    .compact-goal-shell {
      display: grid;
      grid-template-columns: minmax(230px, .7fr) minmax(0, 1.7fr);
      align-items: center;
      gap: 22px;
      padding: 20px;
      border: 1px solid var(--line);
      border-radius: 22px;
      background: rgba(5,18,21,.78);
    }

    .compact-goal-copy h2 {
      margin-top: 7px;
      font-size: clamp(1.55rem, 2.5vw, 2.35rem);
    }

    .compact-goal-copy p {
      margin-top: 8px;
      color: var(--muted);
      font-size: .76rem;
    }

    .compact-goal-buttons {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 8px;
    }

    .compact-goal-buttons .hero-goal-chip,
    .compact-all-products {
      min-height: 82px !important;
      display: grid;
      align-content: center;
      justify-items: start;
      gap: 2px;
      padding: 11px !important;
      color: var(--text);
      background: rgba(2,12,14,.8);
      border: 1px solid var(--line);
      border-radius: 14px;
      cursor: pointer;
      text-align: left;
      transition: .2s ease;
    }

    .compact-goal-buttons .hero-goal-chip:hover,
    .compact-goal-buttons .hero-goal-chip.active,
    .compact-all-products:hover,
    .compact-all-products.active {
      transform: translateY(-3px);
      border-color: var(--cyan);
      background: rgba(32,238,224,.07);
    }

    .compact-goal-buttons button > span {
      color: var(--cyan);
      font-size: 1.05rem;
    }

    .compact-goal-buttons button strong {
      font-size: .7rem;
    }

    .compact-goal-buttons button small {
      color: var(--muted);
      font-size: .57rem;
    }

    .compact-goal-status {
      grid-column: 1 / -1;
      display: flex;
      align-items: center;
      gap: 9px;
      padding-top: 12px;
      border-top: 1px solid var(--line);
      font-size: .68rem;
    }

    .compact-goal-status span { color: var(--muted); }
    .compact-goal-status strong { color: var(--cyan); }
    .compact-goal-status small { color: #9db3b5; }

    .compact-ai-banner-section {
      padding: 26px 0;
    }

    .compact-ai-banner {
      min-height: 130px;
      display: grid;
      grid-template-columns: auto 1fr auto;
      align-items: center;
      gap: 18px;
      padding: 20px 23px;
      border: 1px solid var(--line-strong);
      border-radius: 22px;
      background:
        radial-gradient(circle at 88% 20%, rgba(32,238,224,.10), transparent 24%),
        linear-gradient(145deg, #0a2024, #041013);
    }

    .compact-ai-banner-icon {
      width: 58px;
      height: 58px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      background: rgba(32,238,224,.055);
      border: 1px solid var(--line);
      border-radius: 17px;
      font-size: 1.45rem;
    }

    .compact-ai-banner h2 {
      margin-top: 4px;
      font-size: clamp(1.25rem, 2vw, 1.9rem);
    }

    .compact-ai-banner p {
      margin-top: 5px;
      color: var(--muted);
      font-size: .76rem;
    }

    .compact-ai-banner-actions {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-end;
      gap: 8px;
    }

    .header-ai-button {
      white-space: nowrap;
    }

    /* Shorter overall page */
    .section {
      padding: 58px 0 !important;
    }

    .trust-wrap {
      margin-top: 16px !important;
    }

    .trust-card {
      min-height: 95px !important;
      padding: 17px !important;
    }

    .product-visual {
      min-height: 205px !important;
    }

    .product-body {
      padding: 17px !important;
    }

    #brands.section,
    #safety.section {
      padding-top: 44px !important;
      padding-bottom: 44px !important;
    }

    @keyframes compactCardBreeze {
      0%, 100% { transform: translate3d(0, 0, 0) rotate(-.35deg); }
      35% { transform: translate3d(5px, -7px, 0) rotate(.45deg); }
      68% { transform: translate3d(-4px, -3px, 0) rotate(-.15deg); }
    }

    @media (max-width: 1080px) {
      .compact-hero-shell {
        grid-template-columns: 1fr;
      }

      .compact-jawad-stage {
        min-height: 400px !important;
      }

      .compact-goal-shell {
        grid-template-columns: 1fr;
      }

      .compact-goal-buttons {
        grid-template-columns: repeat(5, minmax(125px, 1fr));
        overflow-x: auto;
        padding-bottom: 5px;
      }

      .compact-ai-banner {
        grid-template-columns: auto 1fr;
      }

      .compact-ai-banner-actions {
        grid-column: 1 / -1;
        justify-content: flex-start;
      }
    }

    @media (max-width: 720px) {
      .compact-commerce-hero {
        padding-top: 30px;
      }

      .compact-hero-shell {
        min-height: auto;
        padding: 21px 16px;
        border-radius: 23px;
      }

      .compact-hero-copy h1 {
        font-size: clamp(2.45rem, 12vw, 4rem);
      }

      .compact-hero-actions .button {
        width: 100%;
      }

      .compact-jawad-stage {
        min-height: 390px !important;
      }

      .compact-card-breeze {
        width: 100%;
      }

      .compact-jawad-card {
        transform: none;
      }

      .compact-goal-buttons {
        grid-template-columns: repeat(5, 66vw);
        scroll-snap-type: x mandatory;
      }

      .compact-goal-buttons button {
        scroll-snap-align: center;
      }

      .compact-ai-banner {
        grid-template-columns: 1fr;
      }

      .compact-ai-banner-icon {
        display: none;
      }

      .compact-ai-banner-actions .button {
        width: 100%;
      }

      .header-ai-button {
        display: none;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .compact-card-breeze {
        animation: none !important;
      }
    }


    /* COMPACT DASHBOARD V6 */
    .ai-journey-strip,
    .ai-readiness-grid {
      display: none !important;
    }

    .mini-commerce-hero {
      padding: 25px 0 10px !important;
    }

    .mini-hero-shell {
      min-height: 325px !important;
      grid-template-columns: minmax(0, 1.28fr) minmax(285px, .72fr) !important;
      gap: 17px !important;
      padding: 23px 26px !important;
      border-radius: 24px !important;
    }

    .mini-hero-copy h1 {
      max-width: 690px !important;
      margin-top: 9px !important;
      font-size: clamp(2.15rem, 3.8vw, 4.05rem) !important;
      line-height: .96 !important;
    }

    .mini-hero-copy > p {
      max-width: 640px !important;
      margin: 14px 0 16px !important;
      font-size: .84rem !important;
      line-height: 1.48 !important;
    }

    .mini-hero-actions .button {
      min-height: 44px !important;
      padding-inline: 17px !important;
      font-size: .77rem !important;
    }

    .mini-proof-row {
      gap: 13px !important;
      margin-top: 13px !important;
      font-size: .65rem !important;
    }

    .mini-jawad-stage {
      min-height: 285px !important;
      display: grid !important;
      place-items: center !important;
    }

    .mini-card-breeze {
      width: min(315px, 100%) !important;
      animation: miniPaperBreeze 5.4s ease-in-out infinite !important;
    }

    .mini-jawad-card {
      width: 100% !important;
      min-height: 285px !important;
      border-radius: 21px !important;
      transform: rotateY(-3deg) rotateX(1.4deg) !important;
    }

    .mini-jawad-image {
      height: 125px !important;
    }

    .mini-jawad-content {
      padding: 11px 13px 13px !important;
    }

    .mini-jawad-heading small {
      font-size: .48rem !important;
    }

    .mini-jawad-heading h3 {
      font-size: 1.25rem !important;
    }

    .mini-jawad-heading > span {
      padding: 5px 7px !important;
      font-size: .48rem !important;
    }

    .mini-jawad-content > p {
      margin: 6px 0 8px !important;
      font-size: .62rem !important;
      line-height: 1.38 !important;
    }

    .mini-jawad-input input,
    .mini-jawad-input button {
      min-height: 34px !important;
      font-size: .59rem !important;
    }

    .mini-jawad-input input {
      padding-inline: 8px !important;
    }

    .mini-jawad-input button {
      padding-inline: 10px !important;
    }

    .mini-prompts {
      gap: 5px !important;
      margin-top: 6px !important;
    }

    .mini-prompts button {
      padding: 5px 7px !important;
      font-size: .51rem !important;
    }

    .mini-full-coach {
      min-height: 33px !important;
      margin-top: 6px !important;
      font-size: .55rem !important;
    }

    .top-journey-cta-section {
      padding: 11px 0 6px;
    }

    .top-journey-cta {
      min-height: 94px;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 20px;
      padding: 17px 21px;
      border: 1px solid var(--line-strong);
      border-radius: 19px;
      background:
        radial-gradient(circle at 88% 15%, rgba(32,238,224,.10), transparent 24%),
        linear-gradient(145deg, rgba(7,23,27,.95), rgba(2,10,12,.98));
      box-shadow: 0 15px 42px rgba(0,0,0,.28);
      opacity: 1 !important;
      transform: none !important;
    }

    .top-journey-copy .eyebrow {
      margin-bottom: 5px !important;
      font-size: .61rem !important;
    }

    .top-journey-copy h2 {
      font-size: clamp(1.28rem, 2.3vw, 2rem);
      line-height: 1.04;
    }

    .top-journey-copy p {
      margin-top: 6px;
      color: var(--muted);
      font-size: .69rem;
    }

    .top-journey-cta > .button {
      min-height: 43px;
      white-space: nowrap;
      font-size: .73rem;
    }

    .trust-wrap {
      margin-top: 10px !important;
    }

    @keyframes miniPaperBreeze {
      0%, 100% {
        transform: translate3d(0, 0, 0) rotate(-.28deg);
      }
      32% {
        transform: translate3d(4px, -6px, 0) rotate(.38deg);
      }
      66% {
        transform: translate3d(-3px, -2px, 0) rotate(-.12deg);
      }
    }

    @media (max-width: 900px) {
      .mini-hero-shell {
        grid-template-columns: 1fr !important;
      }

      .mini-jawad-stage {
        min-height: 295px !important;
      }

      .top-journey-cta {
        grid-template-columns: 1fr;
      }

      .top-journey-cta > .button {
        width: fit-content;
      }
    }

    @media (max-width: 650px) {
      .mini-commerce-hero {
        padding-top: 18px !important;
      }

      .mini-hero-shell {
        min-height: auto !important;
        padding: 19px 15px !important;
      }

      .mini-hero-copy h1 {
        font-size: clamp(2.1rem, 11vw, 3.45rem) !important;
      }

      .mini-hero-actions .button {
        width: 100%;
      }

      .mini-card-breeze {
        width: min(300px, 100%) !important;
      }

      .top-journey-cta {
        padding: 16px;
      }

      .top-journey-cta > .button {
        width: 100%;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .mini-card-breeze {
        animation: none !important;
      }
    }


    /* V7 — reveal bug and blank-space correction */
    .reveal,
    .reveal.visible,
    .section-head.reveal,
    .shop-toolbar.reveal,
    .product-card.reveal,
    .trust-card.reveal,
    .brand-card.reveal,
    .top-journey-cta.reveal,
    .compact-ai-banner.reveal {
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }

    .trust-wrap {
      margin-top: 9px !important;
    }

    .trust-grid {
      gap: 8px !important;
    }

    .trust-card {
      min-height: 76px !important;
      padding: 12px 14px !important;
      border-radius: 14px !important;
    }

    .trust-icon {
      width: 37px !important;
      height: 37px !important;
      flex-basis: 37px !important;
      border-radius: 11px !important;
      font-size: 1rem !important;
    }

    .trust-card strong {
      font-size: .7rem !important;
    }

    .trust-card small {
      font-size: .59rem !important;
    }

    .compact-goal-section {
      padding-top: 19px !important;
      padding-bottom: 0 !important;
    }

    .compact-goal-shell {
      margin-bottom: 0 !important;
    }

    #shop.section {
      padding-top: 21px !important;
      padding-bottom: 48px !important;
    }

    #shop .section-head {
      margin-bottom: 15px !important;
    }

    #shop .section-head h2 {
      font-size: clamp(1.65rem, 2.8vw, 2.7rem) !important;
    }

    #shop .section-head p {
      margin-top: 7px !important;
      font-size: .76rem !important;
    }

    #shop .shop-toolbar {
      margin-bottom: 15px !important;
    }

    #shop .product-grid {
      gap: 14px !important;
    }

    #shop .product-card {
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }

    @media (max-width: 720px) {
      .trust-grid {
        grid-template-columns: 1fr 1fr !important;
      }

      #shop.section {
        padding-top: 17px !important;
      }
    }


    /* MEMBERSHIP & SAVINGS V9 */
    .membership-section {
      padding: 22px 0 18px;
    }

    .membership-shell {
      padding: 22px;
      border: 1px solid var(--line-strong);
      border-radius: 24px;
      background:
        radial-gradient(circle at 92% 0%, rgba(32,238,224,.10), transparent 24%),
        linear-gradient(145deg, rgba(7,23,27,.97), rgba(2,9,11,.99));
      box-shadow: 0 20px 56px rgba(0,0,0,.32);
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }

    .membership-head {
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: end;
      gap: 20px;
    }

    .membership-head h2 {
      margin-top: 6px;
      font-size: clamp(1.55rem, 2.8vw, 2.65rem);
    }

    .membership-head p {
      max-width: 720px;
      margin-top: 8px;
      color: var(--muted);
      font-size: .76rem;
      line-height: 1.48;
    }

    .billing-toggle {
      display: flex;
      padding: 4px;
      border: 1px solid var(--line);
      border-radius: 14px;
      background: rgba(2,12,14,.78);
    }

    .billing-button {
      min-height: 40px;
      padding: 0 14px;
      color: #a9c0c2;
      background: transparent;
      border: 0;
      border-radius: 10px;
      cursor: pointer;
      font-size: .68rem;
      font-weight: 900;
    }

    .billing-button span {
      display: inline-block;
      margin-left: 4px;
      padding: 3px 6px;
      color: #001315;
      background: var(--mint);
      border-radius: 999px;
      font-size: .52rem;
    }

    .billing-button.active {
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      box-shadow: 0 8px 22px rgba(32,238,224,.12);
    }

    .annual-saving-banner {
      min-height: 70px;
      display: grid;
      grid-template-columns: auto 1fr auto;
      align-items: center;
      gap: 13px;
      margin: 17px 0 14px;
      padding: 13px 15px;
      border: 1px solid rgba(32,238,224,.24);
      border-radius: 16px;
      background: rgba(32,238,224,.045);
    }

    .saving-icon {
      width: 45px;
      height: 45px;
      display: grid;
      place-items: center;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--mint));
      border-radius: 13px;
      font-size: .72rem;
      font-weight: 1000;
    }

    .annual-saving-banner strong {
      display: block;
      color: #e9ffff;
      font-size: .78rem;
    }

    .annual-saving-banner small {
      display: block;
      margin-top: 3px;
      color: var(--muted);
      font-size: .63rem;
    }

    .billing-status {
      padding: 7px 10px;
      color: var(--cyan);
      border: 1px solid var(--line);
      border-radius: 999px;
      font-size: .59rem;
      font-weight: 900;
    }

    .membership-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .membership-card {
      min-height: 310px;
      position: relative;
      display: flex;
      flex-direction: column;
      padding: 17px;
      border: 1px solid var(--line);
      border-radius: 19px;
      background: linear-gradient(155deg, rgba(8,24,28,.96), rgba(2,9,11,.99));
      transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease;
    }

    .membership-card:hover,
    .membership-card.selected {
      transform: translateY(-4px);
      border-color: var(--cyan);
      box-shadow: 0 18px 40px rgba(0,0,0,.34), 0 0 24px rgba(32,238,224,.07);
    }

    .membership-card.featured {
      border-color: rgba(32,238,224,.58);
      background:
        radial-gradient(circle at 90% 0%, rgba(32,238,224,.10), transparent 28%),
        linear-gradient(155deg, rgba(8,28,32,.98), rgba(2,10,12,.99));
    }

    .popular-plan {
      position: absolute;
      top: -9px;
      right: 14px;
      padding: 5px 9px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--mint));
      border-radius: 999px;
      font-size: .51rem;
      font-weight: 1000;
      letter-spacing: .06em;
    }

    .plan-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }

    .plan-top small {
      color: var(--cyan);
      font-size: .52rem;
      font-weight: 950;
      letter-spacing: .08em;
    }

    .plan-top h3 {
      margin-top: 3px;
      font-size: 1.45rem;
    }

    .plan-icon {
      width: 40px;
      height: 40px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      border: 1px solid var(--line);
      border-radius: 12px;
      background: rgba(32,238,224,.04);
    }

    .plan-price {
      margin: 15px 0 13px;
      padding-bottom: 13px;
      border-bottom: 1px solid var(--line);
    }

    .plan-price strong {
      display: inline-block;
      font-size: 1.65rem;
      letter-spacing: -.04em;
    }

    .plan-price > small {
      margin-left: 4px;
      color: var(--muted);
      font-size: .62rem;
    }

    .plan-price em {
      display: block;
      margin-top: 5px;
      color: var(--cyan);
      font-size: .59rem;
      font-style: normal;
    }

    .membership-card ul {
      display: grid;
      gap: 8px;
      margin: 0 0 17px;
      padding: 0;
      list-style: none;
    }

    .membership-card li {
      position: relative;
      padding-left: 17px;
      color: #bfd1d3;
      font-size: .66rem;
    }

    .membership-card li::before {
      position: absolute;
      left: 0;
      color: var(--mint);
      content: "✓";
      font-weight: 1000;
    }

    .choose-plan-button {
      min-height: 41px;
      margin-top: auto;
      color: var(--cyan);
      background: rgba(32,238,224,.035);
      border: 1px solid var(--line);
      border-radius: 11px;
      cursor: pointer;
      font-size: .66rem;
      font-weight: 950;
    }

    .choose-plan-button.primary,
    .membership-card.selected .choose-plan-button {
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border-color: transparent;
    }

    .membership-selection {
      min-height: 70px;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 15px;
      margin-top: 13px;
      padding: 13px 15px;
      border: 1px solid var(--line);
      border-radius: 15px;
      background: rgba(255,255,255,.018);
    }

    .membership-selection small {
      display: block;
      color: var(--cyan);
      font-size: .53rem;
      font-weight: 950;
      letter-spacing: .08em;
    }

    .membership-selection strong {
      display: block;
      margin-top: 3px;
      font-size: .8rem;
    }

    .membership-selection span {
      display: block;
      margin-top: 2px;
      color: var(--muted);
      font-size: .61rem;
    }

    .membership-checkout {
      min-height: 41px;
      padding: 0 15px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border: 0;
      border-radius: 11px;
      cursor: pointer;
      font-size: .65rem;
      font-weight: 950;
    }

    .membership-checkout:disabled {
      color: #789194;
      background: rgba(255,255,255,.04);
      border: 1px solid var(--line);
      cursor: not-allowed;
    }

    .membership-modal-backdrop {
      position: fixed;
      inset: 0;
      z-index: 260;
      display: none;
      background: rgba(0,0,0,.72);
      backdrop-filter: blur(10px);
    }

    .membership-modal-backdrop.show { display: block; }

    .membership-details-modal {
      width: min(620px, calc(100vw - 32px));
      max-height: calc(100vh - 32px);
      max-height: calc(100dvh - 32px);
      position: fixed;
      z-index: 265;
      top: 50%;
      left: 50%;
      display: none;
      flex-direction: column;
      overflow: hidden;
      border: 1px solid rgba(32,238,224,.34);
      border-radius: 26px;
      background: linear-gradient(145deg, rgba(15,39,44,.995), rgba(3,13,15,.998));
      box-shadow: 0 40px 110px rgba(0,0,0,.68);
      transform: translate(-50%, -47%) scale(.97);
      opacity: 0;
    }

    .membership-details-modal.show {
      display: flex;
      transform: translate(-50%, -50%) scale(1);
      opacity: 1;
    }

    .membership-modal-head {
      flex: 0 0 auto;
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 18px;
      padding: 19px 22px;
      border-bottom: 1px solid var(--line);
      background: rgba(5,18,21,.96);
    }

    .membership-modal-head small {
      color: var(--cyan);
      font-size: .63rem;
      font-weight: 950;
      letter-spacing: .09em;
      text-transform: uppercase;
    }

    .membership-modal-head h3 {
      margin-top: 3px;
      font-size: clamp(1.35rem, 3vw, 1.85rem);
    }

    .membership-modal-body {
      flex: 1 1 auto;
      min-height: 0;
      overflow-y: auto;
      overscroll-behavior: contain;
      padding: 21px 22px 23px;
    }

    .membership-modal-price {
      display: flex;
      align-items: baseline;
      gap: 8px;
      padding-bottom: 15px;
      border-bottom: 1px solid var(--line);
    }

    .membership-modal-price strong { font-size: 1.8rem; }
    .membership-modal-price span { color: var(--muted); font-size: .72rem; }
    .membership-modal-note { margin: 8px 0 18px; color: var(--cyan); font-size: .67rem; }

    .membership-modal-features {
      display: grid;
      gap: 10px;
      margin: 0 0 19px;
      padding: 0;
      list-style: none;
    }

    .membership-modal-features li {
      position: relative;
      padding-left: 21px;
      color: #d4e4e6;
      font-size: .75rem;
      line-height: 1.45;
    }

    .membership-modal-features li::before {
      position: absolute;
      left: 0;
      color: var(--mint);
      content: "✓";
      font-weight: 1000;
    }

    .membership-coming-soon {
      padding: 15px;
      border: 1px solid rgba(32,238,224,.24);
      border-radius: 15px;
      background: rgba(32,238,224,.045);
    }

    .membership-coming-soon span {
      display: inline-block;
      margin-bottom: 6px;
      padding: 5px 8px;
      color: #001315;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--cyan), var(--mint));
      font-size: .55rem;
      font-weight: 1000;
      letter-spacing: .08em;
    }

    .membership-coming-soon strong { display: block; font-size: .85rem; }
    .membership-coming-soon p { margin-top: 5px; color: var(--muted); font-size: .68rem; line-height: 1.5; }

    .membership-modal-disabled {
      width: 100%;
      min-height: 45px;
      margin-top: 15px;
      color: #789194;
      border: 1px solid var(--line);
      border-radius: 12px;
      background: rgba(255,255,255,.04);
      cursor: not-allowed;
      font-size: .7rem;
      font-weight: 950;
    }

    /* Keep the header clean: cart and menu only */
    .nav-actions {
      gap: 8px !important;
    }

    /* The single journey CTA is the only stack-building action above the fold */
    .top-journey-cta {
      grid-template-columns: 1fr auto !important;
    }

    @media (max-width: 920px) {
      .membership-head {
        grid-template-columns: 1fr;
        align-items: start;
      }

      .billing-toggle {
        width: fit-content;
      }

      .membership-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 650px) {
      .membership-shell {
        padding: 17px 13px;
      }

      .annual-saving-banner {
        grid-template-columns: auto 1fr;
      }

      .billing-status {
        grid-column: 1 / -1;
        width: fit-content;
      }

      .membership-selection {
        grid-template-columns: 1fr;
      }

      .membership-checkout {
        width: 100%;
      }

      .membership-details-modal {
        width: calc(100vw - 18px);
        max-height: calc(100vh - 18px);
        max-height: calc(100dvh - 18px);
        border-radius: 22px;
      }

      .membership-modal-head { padding: 16px; }
      .membership-modal-body { padding: 17px 16px 18px; }
    }


    /* TOP BRANDS CAROUSEL V10 */
    .premium-brands-section {
      padding: 38px 0 24px;
    }

    .premium-brands-shell {
      position: relative;
      overflow: hidden;
      padding: 26px;
      border: 1px solid var(--line-strong);
      border-radius: 27px;
      background:
        radial-gradient(circle at 50% 38%, rgba(32,238,224,.11), transparent 31%),
        linear-gradient(145deg, rgba(5,18,21,.98), rgba(1,7,9,.995));
      box-shadow:
        0 28px 78px rgba(0,0,0,.45),
        inset 0 1px rgba(255,255,255,.035);
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }

    .premium-brands-shell::after {
      width: 50%;
      height: 1px;
      position: absolute;
      top: 0;
      left: 25%;
      content: "";
      background: linear-gradient(90deg, transparent, var(--cyan), transparent);
      box-shadow: 0 0 22px var(--cyan);
      opacity: .75;
    }

    .premium-brands-head {
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: end;
      gap: 18px;
      margin-bottom: 18px;
    }

    .premium-brands-head h2 {
      margin-top: 5px;
      font-size: clamp(2rem, 4vw, 4rem);
      letter-spacing: -.045em;
    }

    .premium-brands-head p {
      max-width: 680px;
      margin-top: 8px;
      color: var(--muted);
      font-size: .76rem;
      line-height: 1.5;
    }

    .brand-carousel-controls {
      display: flex;
      gap: 8px;
    }

    .brand-carousel-controls button {
      width: 43px;
      height: 43px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      background: rgba(32,238,224,.035);
      border: 1px solid var(--line);
      border-radius: 13px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 950;
      transition: .2s ease;
    }

    .brand-carousel-controls button:hover {
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border-color: transparent;
      transform: translateY(-2px);
    }

    .brand-stage {
      position: relative;
      padding: 25px 0 20px;
      isolation: isolate;
    }

    .brand-stage::before,
    .brand-stage::after {
      width: 90px;
      position: absolute;
      z-index: 5;
      top: 0;
      bottom: 0;
      content: "";
      pointer-events: none;
    }

    .brand-stage::before {
      left: -2px;
      background: linear-gradient(90deg, #031013, transparent);
    }

    .brand-stage::after {
      right: -2px;
      background: linear-gradient(270deg, #031013, transparent);
    }

    .brand-stage-glow {
      height: 1px;
      position: absolute;
      z-index: 0;
      top: 52%;
      left: 2%;
      right: 2%;
      background: linear-gradient(90deg, transparent, var(--cyan), var(--cyan), transparent);
      box-shadow:
        0 0 16px var(--cyan),
        0 0 45px rgba(32,238,224,.4);
      opacity: .72;
    }

    .brand-carousel {
      position: relative;
      z-index: 2;
      overflow-x: auto;
      overflow-y: hidden;
      cursor: grab;
      scrollbar-width: none;
      overscroll-behavior-inline: contain;
      touch-action: pan-y;
      -webkit-mask-image: linear-gradient(
        90deg,
        transparent,
        black 7%,
        black 93%,
        transparent
      );
      mask-image: linear-gradient(
        90deg,
        transparent,
        black 7%,
        black 93%,
        transparent
      );
    }

    .brand-carousel::-webkit-scrollbar {
      display: none;
    }

    .brand-carousel.dragging {
      cursor: grabbing;
      user-select: none;
    }

    .brand-carousel-track {
      width: max-content;
      display: flex;
      align-items: center;
      gap: 13px;
      padding: 8px 75px 12px;
    }

    .premium-brand-card {
      width: 180px;
      min-width: 180px;
      height: 176px;
      position: relative;
      display: grid;
      align-content: center;
      justify-items: center;
      gap: 7px;
      overflow: hidden;
      padding: 17px;
      border: 1px solid rgba(32,238,224,.42);
      border-radius: 22px;
      background:
        linear-gradient(160deg, rgba(11,28,32,.96), rgba(2,9,11,.99));
      box-shadow:
        0 18px 44px rgba(0,0,0,.45),
        inset 0 1px rgba(255,255,255,.035),
        0 0 20px rgba(32,238,224,.045);
      text-align: center;
      transform: perspective(800px) rotateY(-3deg);
      transition:
        transform .24s ease,
        border-color .24s ease,
        box-shadow .24s ease,
        background .24s ease;
    }

    .premium-brand-card::before {
      width: 70%;
      height: 1px;
      position: absolute;
      top: 0;
      left: 15%;
      content: "";
      background: linear-gradient(90deg, transparent, var(--cyan), transparent);
      box-shadow: 0 0 15px var(--cyan);
      opacity: .65;
    }

    .premium-brand-card::after {
      position: absolute;
      inset: 0;
      content: "";
      background: linear-gradient(
        115deg,
        transparent 24%,
        rgba(32,238,224,.10),
        transparent 73%
      );
      transform: translateX(-145%);
      transition: transform .65s ease;
      pointer-events: none;
    }

    .premium-brand-card:hover {
      z-index: 4;
      transform: perspective(800px) rotateY(0deg) translateY(-9px) scale(1.045);
      border-color: var(--cyan);
      background:
        radial-gradient(circle at 50% 0%, rgba(32,238,224,.12), transparent 30%),
        linear-gradient(160deg, rgba(11,31,35,.99), rgba(2,9,11,.99));
      box-shadow:
        0 28px 65px rgba(0,0,0,.55),
        0 0 35px rgba(32,238,224,.12);
    }

    .premium-brand-card:hover::after {
      transform: translateX(145%);
    }

    .brand-emblem {
      min-width: 58px;
      height: 58px;
      display: grid;
      place-items: center;
      padding: 0 8px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border-radius: 17px;
      box-shadow: 0 0 23px rgba(32,238,224,.13);
      font-size: .8rem;
      font-weight: 1000;
      letter-spacing: -.03em;
    }

    
    .brand-logo-box {
      width: 118px;
      height: 66px;
      display: grid;
      place-items: center;
      padding: 10px 14px;
      border-radius: 18px;
      background:
        radial-gradient(circle at 50% 0%, rgba(255,255,255,.11), transparent 72%),
        linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.015));
      border: 1px solid rgba(32,238,224,.18);
      box-shadow:
        inset 0 1px rgba(255,255,255,.08),
        0 0 20px rgba(32,238,224,.08);
    }

    .brand-logo-box img {
      max-width: 100%;
      max-height: 36px;
      width: auto;
      height: auto;
      object-fit: contain;
      filter: drop-shadow(0 0 10px rgba(255,255,255,.06));
    }

    .premium-brand-card.logo-card strong {
      min-height: 28px;
      font-size: .8rem;
      letter-spacing: .01em;
    }

    .premium-brand-card.logo-card small {
      font-size: .58rem;
    }

    .premium-brand-card.logo-card:hover .brand-logo-box {
      border-color: rgba(32,238,224,.4);
      box-shadow:
        inset 0 1px rgba(255,255,255,.11),
        0 0 25px rgba(32,238,224,.14);
    }

    .premium-brand-card strong {
      min-height: 35px;
      display: grid;
      place-items: center;
      color: #f0ffff;
      font-size: .77rem;
      line-height: 1.08;
      letter-spacing: .015em;
    }

    .premium-brand-card small {
      color: var(--muted);
      font-size: .57rem;
    }

    .premium-brand-card.refuel-pick {
      border-color: rgba(122,255,195,.58);
    }

    .premium-brand-card.refuel-pick .brand-emblem {
      background: linear-gradient(135deg, var(--cyan), var(--mint));
    }

    .brand-motion-status {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin: 0 auto 16px;
      color: #b8ced0;
      font-size: .61rem;
    }

    .brand-motion-status strong {
      color: var(--cyan);
      font-size: .62rem;
    }

    .brand-live-dot {
      width: 7px;
      height: 7px;
      background: var(--mint);
      border-radius: 50%;
      box-shadow: 0 0 11px var(--mint);
      animation: brandPulse 1.5s ease-in-out infinite;
    }

    .brand-trust-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 9px;
      padding: 12px;
      border: 1px solid var(--line);
      border-radius: 17px;
      background: rgba(255,255,255,.017);
    }

    .brand-trust-grid article {
      min-height: 60px;
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px;
      border-right: 1px solid var(--line);
    }

    .brand-trust-grid article:last-child {
      border-right: 0;
    }

    .brand-trust-grid article > span {
      width: 34px;
      height: 34px;
      flex: 0 0 34px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      border: 1px solid var(--line);
      border-radius: 10px;
      background: rgba(32,238,224,.04);
      font-size: .85rem;
    }

    .brand-trust-grid strong {
      display: block;
      font-size: .66rem;
    }

    .brand-trust-grid small {
      display: block;
      margin-top: 2px;
      color: var(--muted);
      font-size: .55rem;
    }

    @keyframes brandPulse {
      0%, 100% { opacity: .45; transform: scale(.82); }
      50% { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 900px) {
      .premium-brands-head {
        grid-template-columns: 1fr;
        align-items: start;
      }

      .brand-carousel-controls {
        justify-content: flex-end;
      }

      .brand-trust-grid {
        grid-template-columns: 1fr 1fr;
      }

      .brand-trust-grid article:nth-child(2) {
        border-right: 0;
      }
    }

    @media (max-width: 650px) {
      .premium-brands-section {
        padding-top: 28px;
      }

      .premium-brands-shell {
        padding: 18px 11px;
        border-radius: 21px;
      }

      .brand-stage::before,
      .brand-stage::after {
        width: 35px;
      }

      .brand-carousel-track {
        gap: 10px;
        padding-inline: 34px;
      }

      .premium-brand-card {
        width: 148px;
        min-width: 148px;
        height: 152px;
        border-radius: 18px;
      }

      .brand-emblem {
        min-width: 50px;
        height: 50px;
        border-radius: 14px;
      }

      .brand-motion-status {
        flex-wrap: wrap;
        text-align: center;
      }

      .brand-trust-grid {
        grid-template-columns: 1fr;
      }

      .brand-trust-grid article,
      .brand-trust-grid article:nth-child(2) {
        border-right: 0;
        border-bottom: 1px solid var(--line);
      }

      .brand-trust-grid article:last-child {
        border-bottom: 0;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .brand-live-dot {
        animation: none !important;
      }
    }


    /* V12 — premium shiny, soft real brand logos */
    .real-logo-card {
      width: 190px !important;
      min-width: 190px !important;
      height: 184px !important;
      padding: 16px !important;
      gap: 8px !important;
      background:
        radial-gradient(circle at 50% -10%, rgba(255,255,255,.07), transparent 43%),
        linear-gradient(155deg, rgba(9,27,31,.97), rgba(2,9,11,.995)) !important;
    }

    .real-brand-logo {
      width: 142px;
      height: 78px;
      position: relative;
      display: grid;
      place-items: center;
      overflow: hidden;
      padding: 13px 15px;
      border: 1px solid rgba(255,255,255,.12);
      border-radius: 20px;
      background:
        radial-gradient(circle at 50% 10%, rgba(255,255,255,.20), transparent 58%),
        linear-gradient(145deg, rgba(255,255,255,.11), rgba(255,255,255,.025));
      box-shadow:
        inset 0 1px rgba(255,255,255,.18),
        inset 0 -1px rgba(32,238,224,.05),
        0 10px 26px rgba(0,0,0,.27),
        0 0 20px rgba(32,238,224,.07);
      backdrop-filter: blur(10px);
    }

    .real-brand-logo::before {
      width: 74%;
      height: 1px;
      position: absolute;
      top: 0;
      left: 13%;
      content: "";
      background: linear-gradient(90deg, transparent, rgba(255,255,255,.75), transparent);
      box-shadow: 0 0 10px rgba(255,255,255,.28);
      opacity: .65;
    }

    .real-brand-logo::after {
      width: 70px;
      height: 135%;
      position: absolute;
      top: -18%;
      left: -85px;
      content: "";
      background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.22),
        transparent
      );
      transform: rotate(18deg);
      animation: softLogoShine 4.8s ease-in-out infinite;
      pointer-events: none;
    }

    .real-brand-logo img {
      max-width: 100%;
      max-height: 52px;
      width: auto;
      height: auto;
      position: relative;
      z-index: 2;
      object-fit: contain;
      filter:
        brightness(1.08)
        contrast(1.04)
        drop-shadow(0 1px 1px rgba(255,255,255,.28))
        drop-shadow(0 0 9px rgba(32,238,224,.08));
      transition:
        transform .28s ease,
        filter .28s ease;
    }

    .real-brand-logo.logo-wide img {
      max-width: 124px;
      max-height: 46px;
    }

    .real-brand-logo.logo-square img {
      max-width: 72px;
      max-height: 58px;
    }

    .real-brand-logo.logo-tall img {
      max-width: 102px;
      max-height: 62px;
    }

    .real-logo-card strong {
      min-height: 27px !important;
      display: grid !important;
      place-items: center !important;
      font-size: .7rem !important;
      letter-spacing: .02em !important;
    }

    .real-logo-card small {
      font-size: .56rem !important;
    }

    .real-logo-card:hover .real-brand-logo {
      border-color: rgba(32,238,224,.42);
      background:
        radial-gradient(circle at 50% 0%, rgba(255,255,255,.23), transparent 62%),
        linear-gradient(145deg, rgba(255,255,255,.14), rgba(32,238,224,.035));
      box-shadow:
        inset 0 1px rgba(255,255,255,.22),
        0 14px 32px rgba(0,0,0,.33),
        0 0 27px rgba(32,238,224,.13);
    }

    .real-logo-card:hover .real-brand-logo img {
      transform: scale(1.055);
      filter:
        brightness(1.14)
        contrast(1.06)
        drop-shadow(0 1px 1px rgba(255,255,255,.34))
        drop-shadow(0 0 13px rgba(32,238,224,.13));
    }

    .logo-shine {
      width: 74%;
      height: 24px;
      position: absolute;
      z-index: 1;
      top: 3px;
      left: 13%;
      border-radius: 50%;
      background: radial-gradient(ellipse, rgba(255,255,255,.16), transparent 70%);
      filter: blur(4px);
      pointer-events: none;
    }

    @keyframes softLogoShine {
      0%, 22% {
        left: -85px;
        opacity: 0;
      }
      35% {
        opacity: .7;
      }
      53% {
        left: calc(100% + 25px);
        opacity: 0;
      }
      100% {
        left: calc(100% + 25px);
        opacity: 0;
      }
    }

    @media (max-width: 650px) {
      .real-logo-card {
        width: 158px !important;
        min-width: 158px !important;
        height: 160px !important;
      }

      .real-brand-logo {
        width: 122px;
        height: 65px;
        padding: 10px 12px;
        border-radius: 17px;
      }

      .real-brand-logo.logo-wide img {
        max-width: 105px;
        max-height: 38px;
      }

      .real-brand-logo.logo-square img {
        max-width: 61px;
        max-height: 48px;
      }

      .real-brand-logo.logo-tall img {
        max-width: 83px;
        max-height: 51px;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .real-brand-logo::after {
        animation: none !important;
      }
    }


    /* V13 — Shop by Brand & Category */
    .brand-category-shop {
      padding: 28px 0 38px;
    }

    .brand-category-shell {
      padding: 23px;
      border: 1px solid var(--line-strong);
      border-radius: 27px;
      background:
        radial-gradient(circle at 88% 0%, rgba(32,238,224,.09), transparent 25%),
        linear-gradient(145deg, rgba(6,20,23,.98), rgba(2,8,10,.995));
      box-shadow: 0 26px 72px rgba(0,0,0,.4);
    }

    .brand-category-head {
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: end;
      gap: 20px;
      opacity: 1 !important;
      transform: none !important;
    }

    .brand-category-head h2 {
      margin-top: 7px;
      font-size: clamp(2rem, 4vw, 4rem);
      letter-spacing: -.045em;
    }

    .brand-category-head p {
      max-width: 720px;
      margin-top: 7px;
      color: var(--muted);
      font-size: .76rem;
    }

    .shop-ai-note {
      min-width: 290px;
      display: flex;
      align-items: center;
      gap: 11px;
      padding: 13px 15px;
      border: 1px solid rgba(32,238,224,.35);
      border-radius: 16px;
      background: rgba(32,238,224,.05);
    }

    .shop-ai-note > span {
      width: 39px;
      height: 39px;
      flex: 0 0 39px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      border: 1px solid var(--line);
      border-radius: 12px;
    }

    .shop-ai-note strong {
      display: block;
      color: var(--cyan);
      font-size: .72rem;
    }

    .shop-ai-note small {
      display: block;
      margin-top: 3px;
      color: var(--muted);
      font-size: .6rem;
    }

    .brand-shop-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 9px;
      margin-top: 19px;
      opacity: 1 !important;
      transform: none !important;
    }

    .brand-shop-button {
      min-height: 72px;
      display: grid;
      grid-template-columns: 58px 1fr;
      align-items: center;
      gap: 10px;
      padding: 10px;
      color: var(--text);
      border: 1px solid var(--line);
      border-radius: 15px;
      background:
        radial-gradient(circle at 50% 0%, rgba(255,255,255,.045), transparent 70%),
        rgba(255,255,255,.018);
      cursor: pointer;
      text-align: left;
      transition: .2s ease;
    }

    .brand-shop-button:hover,
    .brand-shop-button.active {
      transform: translateY(-3px);
      border-color: var(--cyan);
      background: rgba(32,238,224,.065);
      box-shadow: 0 12px 30px rgba(0,0,0,.32), 0 0 20px rgba(32,238,224,.07);
    }

    .brand-shop-logo {
      width: 58px;
      height: 46px;
      display: grid;
      place-items: center;
      overflow: hidden;
      padding: 6px;
      border: 1px solid rgba(255,255,255,.09);
      border-radius: 11px;
      background: rgba(255,255,255,.05);
    }

    .brand-shop-logo img {
      max-width: 100%;
      max-height: 31px;
      object-fit: contain;
      filter: brightness(1.12) drop-shadow(0 0 6px rgba(32,238,224,.08));
    }

    .brand-wordmark {
      color: var(--cyan);
      font-size: .57rem;
      font-weight: 1000;
      text-align: center;
      line-height: 1.05;
    }

    .brand-shop-button strong {
      display: block;
      font-size: .68rem;
    }

    .brand-shop-button small {
      display: block;
      margin-top: 3px;
      color: var(--cyan);
      font-size: .56rem;
    }

    .category-shop-toolbar {
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 15px;
      margin: 13px 0 17px;
      padding: 11px;
      border: 1px solid var(--line);
      border-radius: 15px;
      background: rgba(255,255,255,.015);
      opacity: 1 !important;
      transform: none !important;
    }

    .category-shop-filters {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
    }

    .category-shop-button {
      min-height: 35px;
      padding: 0 11px;
      color: #b8ced0;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(32,238,224,.025);
      cursor: pointer;
      font-size: .6rem;
      font-weight: 900;
    }

    .category-shop-button:hover,
    .category-shop-button.active {
      color: #001315;
      border-color: transparent;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
    }

    .shop-result-summary {
      min-width: 170px;
      text-align: right;
    }

    .shop-result-summary strong {
      display: block;
      color: var(--cyan);
      font-size: .68rem;
    }

    .shop-result-summary small {
      display: block;
      margin-top: 2px;
      color: var(--muted);
      font-size: .55rem;
    }

    .brand-product-grid {
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 12px !important;
    }

    .real-product-card {
      display: grid;
      grid-template-columns: minmax(145px, .83fr) minmax(0, 1.17fr);
      min-height: 260px;
      opacity: 1 !important;
      visibility: visible !important;
      transform: none;
      border-radius: 19px !important;
    }

    .real-product-card:hover {
      transform: translateY(-5px) !important;
    }

    .real-product-visual {
      min-height: 260px !important;
      padding: 20px 8px 10px;
      background:
        radial-gradient(circle at 50% 42%, rgba(32,238,224,.13), transparent 44%),
        linear-gradient(145deg, rgba(7,23,27,.96), rgba(2,9,11,.99)) !important;
    }

    .real-product-visual::after {
      width: 110px !important;
      bottom: 23px !important;
    }

    .real-product-image {
      width: 100%;
      max-width: 180px;
      max-height: 220px;
      position: relative;
      z-index: 2;
      object-fit: contain;
      filter: drop-shadow(0 20px 18px rgba(0,0,0,.45));
      transition: .28s ease;
    }

    .real-product-card:hover .real-product-image {
      transform: translateY(-6px) scale(1.035);
      filter: drop-shadow(0 26px 22px rgba(0,0,0,.55));
    }

    .product-brand-corner {
      position: absolute;
      z-index: 3;
      top: 11px;
      left: 11px;
      padding: 5px 7px;
      color: var(--cyan);
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(2,12,14,.72);
      font-size: .49rem;
      font-weight: 950;
      backdrop-filter: blur(8px);
    }

    .real-product-card .product-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 16px !important;
    }

    .real-product-card .product-body h3 {
      min-height: auto !important;
      margin: 6px 0 5px !important;
      font-size: .93rem !important;
    }

    .real-product-card .rating {
      font-size: .66rem !important;
    }

    .real-product-card .product-meta {
      margin-top: 9px !important;
    }

    .type-chip {
      color: var(--cyan) !important;
      border-color: rgba(32,238,224,.26) !important;
    }

    .real-product-card .product-bottom {
      margin-top: 13px !important;
    }

    .real-product-card .price strong {
      font-size: .86rem !important;
    }

    .real-product-card .price small {
      font-size: .54rem;
    }

    .real-product-card .square-btn {
      width: 37px !important;
      height: 37px !important;
      border-radius: 10px !important;
    }

    .shop-confidence-strip {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 8px;
      margin-top: 14px;
      padding: 11px;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: rgba(255,255,255,.015);
      opacity: 1 !important;
      transform: none !important;
    }

    .shop-confidence-strip article {
      min-height: 55px;
      display: flex;
      align-items: center;
      gap: 9px;
      padding: 8px;
      border-right: 1px solid var(--line);
    }

    .shop-confidence-strip article:last-child {
      border-right: 0;
    }

    .shop-confidence-strip article > span {
      width: 32px;
      height: 32px;
      flex: 0 0 32px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      border: 1px solid var(--line);
      border-radius: 10px;
    }

    .shop-confidence-strip strong {
      display: block;
      font-size: .61rem;
    }

    .shop-confidence-strip small {
      display: block;
      margin-top: 2px;
      color: var(--muted);
      font-size: .51rem;
    }

    @media (max-width: 1180px) {
      .brand-shop-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .brand-product-grid {
        grid-template-columns: repeat(2, 1fr) !important;
      }

      .shop-confidence-strip {
        grid-template-columns: repeat(2, 1fr);
      }

      .shop-confidence-strip article {
        border-right: 0;
      }
    }

    @media (max-width: 760px) {
      .brand-category-shell {
        padding: 17px 12px;
        border-radius: 21px;
      }

      .brand-category-head {
        grid-template-columns: 1fr;
      }

      .shop-ai-note {
        min-width: 0;
      }

      .brand-shop-grid {
        grid-template-columns: repeat(6, 72vw);
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        padding-bottom: 5px;
      }

      .brand-shop-button {
        scroll-snap-align: center;
      }

      .category-shop-toolbar {
        grid-template-columns: 1fr;
      }

      .shop-result-summary {
        text-align: left;
      }

      .brand-product-grid {
        grid-template-columns: 1fr !important;
      }

      .real-product-card {
        grid-template-columns: 130px 1fr;
        min-height: 235px;
      }

      .real-product-visual {
        min-height: 235px !important;
      }

      .real-product-image {
        max-height: 190px;
      }

      .shop-confidence-strip {
        grid-template-columns: 1fr;
      }
    }


    /* V14 — Elite Monthly Reward: 10% from the 1st–10th */
    .elite-reward-banner {
      border-color: rgba(122,255,195,.38) !important;
      background:
        radial-gradient(circle at 88% 10%, rgba(122,255,195,.11), transparent 30%),
        rgba(32,238,224,.045) !important;
    }

    .elite-reward-status {
      display: grid;
      justify-items: end;
      gap: 7px;
    }

    .elite-promo-status {
      max-width: 270px;
      padding: 7px 10px;
      color: #bcd2d4;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(2,12,14,.58);
      font-size: .56rem;
      font-weight: 850;
      text-align: center;
    }

    .elite-promo-status.active {
      color: #001315;
      border-color: transparent;
      background: linear-gradient(135deg, var(--mint), var(--cyan));
      box-shadow: 0 0 20px rgba(122,255,195,.13);
    }

    .elite-plan-card {
      border-color: rgba(122,255,195,.42) !important;
      background:
        radial-gradient(circle at 88% 0%, rgba(122,255,195,.09), transparent 30%),
        linear-gradient(155deg, rgba(8,28,29,.98), rgba(2,10,12,.99)) !important;
    }

    .elite-reward-badge {
      position: absolute;
      top: -9px;
      right: 14px;
      padding: 5px 9px;
      color: #001315;
      background: linear-gradient(135deg, var(--mint), var(--cyan));
      border-radius: 999px;
      font-size: .49rem;
      font-weight: 1000;
      letter-spacing: .055em;
      box-shadow: 0 0 18px rgba(122,255,195,.12);
    }

    .drawer-price-summary {
      display: grid;
      gap: 7px;
      padding: 13px 0;
      border-top: 1px solid var(--line);
    }

    .drawer-price-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      color: #afc3c5;
      font-size: .7rem;
    }

    .drawer-price-row strong {
      color: #eaffff;
      font-size: .74rem;
    }

    .elite-cart-discount {
      color: var(--mint);
    }

    .elite-cart-discount strong {
      color: var(--mint);
    }

    .elite-cart-note {
      min-height: 14px;
      color: var(--muted);
      font-size: .55rem;
      line-height: 1.35;
    }

    @media (max-width: 650px) {
      .elite-reward-status {
        grid-column: 1 / -1;
        justify-items: start;
      }

      .elite-promo-status {
        max-width: 100%;
        text-align: left;
      }
    }


    /* V15 — expanded catalogue with compact Show More control */
    .brand-shop-grid {
      grid-template-columns: repeat(7, 1fr) !important;
    }

    .catalogue-more-wrap {
      display: grid;
      justify-items: center;
      gap: 7px;
      margin-top: 16px;
      opacity: 1 !important;
      transform: none !important;
    }

    .catalogue-more-button {
      min-height: 42px;
      padding: 0 19px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
      border: 0;
      border-radius: 12px;
      cursor: pointer;
      font-size: .66rem;
      font-weight: 950;
      box-shadow: 0 10px 28px rgba(32,238,224,.10);
    }

    .catalogue-more-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 34px rgba(32,238,224,.15);
    }

    .catalogue-more-wrap small {
      color: var(--muted);
      font-size: .55rem;
    }

    .real-product-card.catalogue-collapsed {
      display: none !important;
    }

    @media (max-width: 1180px) {
      .brand-shop-grid {
        grid-template-columns: repeat(4, 1fr) !important;
      }
    }

    @media (max-width: 760px) {
      .brand-shop-grid {
        grid-template-columns: repeat(7, 72vw) !important;
      }
    }


    /* V16 — assessment modal completion, scaling and progress layout */
    .assessment-modal {
      width: min(920px, calc(100vw - 34px)) !important;
      max-height: min(850px, calc(100vh - 30px)) !important;
      border-radius: 30px !important;
    }

    .modal-head {
      padding: 21px 25px 17px !important;
    }

    .modal-head h3 {
      margin-top: 2px;
      font-size: clamp(1.12rem, 2vw, 1.48rem);
    }

    .modal-body {
      max-height: calc(100vh - 125px) !important;
      padding: 20px 25px 25px !important;
      scroll-behavior: smooth;
    }

    .assessment-progress-shell {
      position: sticky;
      z-index: 8;
      top: -20px;
      margin: -2px -4px 20px;
      padding: 12px 4px 10px;
      background:
        linear-gradient(
          180deg,
          rgba(10,31,35,.99) 0%,
          rgba(10,31,35,.96) 74%,
          rgba(10,31,35,0) 100%
        );
      backdrop-filter: blur(10px);
    }

    .assessment-progress-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-bottom: 8px;
    }

    .assessment-stage-badge {
      display: inline-flex;
      align-items: center;
      min-height: 29px;
      padding: 0 10px;
      color: #cffffa;
      background: rgba(32,238,224,.055);
      border: 1px solid rgba(32,238,224,.26);
      border-radius: 999px;
      font-size: .59rem;
      font-weight: 950;
      letter-spacing: .055em;
      text-transform: uppercase;
      white-space: nowrap;
    }

    .assessment-percent {
      min-width: 48px;
      min-height: 29px;
      display: grid;
      place-items: center;
      padding: 0 9px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--mint));
      border-radius: 999px;
      box-shadow: 0 0 18px rgba(32,238,224,.12);
      font-size: .62rem;
      font-weight: 1000;
    }

    .progress-track {
      height: 11px !important;
      margin-bottom: 0 !important;
      padding: 2px;
      overflow: hidden;
      background: rgba(255,255,255,.065) !important;
      border: 1px solid rgba(255,255,255,.055);
      border-radius: 999px;
      box-shadow: inset 0 1px 3px rgba(0,0,0,.35);
    }

    .progress-track span {
      height: 100% !important;
      min-width: 8px;
      background:
        linear-gradient(90deg, var(--cyan), var(--mint), var(--cyan)) !important;
      background-size: 180% 100% !important;
      box-shadow: 0 0 13px rgba(32,238,224,.28);
      transition: width .32s ease !important;
      animation: assessmentBarFlow 2.2s linear infinite;
    }

    .step-label {
      display: none !important;
    }

    .question-title {
      max-width: 760px;
      margin: 4px 0 18px !important;
      font-size: clamp(1.5rem, 3vw, 2.35rem) !important;
      line-height: 1.06;
    }

    .choice-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 11px !important;
    }

    .choice {
      min-height: 88px !important;
      padding: 14px !important;
      border-radius: 16px !important;
    }

    .result-card {
      padding: 21px !important;
    }

    .result-products {
      max-height: 290px;
      overflow-y: auto;
      padding-right: 4px;
    }

    .assessment-result-ready {
      animation: assessmentResultIn .28s ease both;
    }

    @keyframes assessmentBarFlow {
      from { background-position: 0 0; }
      to { background-position: 180% 0; }
    }

    @keyframes assessmentResultIn {
      from { opacity: 0; transform: translateY(9px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 680px) {
      .assessment-modal {
        width: calc(100vw - 18px) !important;
        max-height: calc(100vh - 18px) !important;
        border-radius: 22px !important;
      }

      .modal-head {
        padding: 16px 15px 13px !important;
      }

      .modal-body {
        max-height: calc(100vh - 92px) !important;
        padding: 15px !important;
      }

      .assessment-progress-shell {
        top: -15px;
        margin: -1px -1px 16px;
      }

      .assessment-stage-badge {
        max-width: 70%;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .choice-grid {
        grid-template-columns: 1fr !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .progress-track span,
      .assessment-result-ready {
        animation: none !important;
      }
    }


    /* V18 — slightly brighter embossed Top Brands logos (logos only) */
    .premium-brands-shell {
      background:
        radial-gradient(circle at 50% 34%, rgba(255,255,255,.035), transparent 34%),
        linear-gradient(145deg, #090b0c, #020304) !important;
    }

    .premium-brand-card.real-logo-card {
      border-color: rgba(255,255,255,.12) !important;
      background:
        linear-gradient(145deg, #15181a 0%, #080a0b 52%, #020304 100%) !important;
      box-shadow:
        inset 1px 1px 0 rgba(255,255,255,.07),
        inset -2px -2px 0 rgba(0,0,0,.92),
        0 18px 42px rgba(0,0,0,.52) !important;
    }

    .premium-brand-card.real-logo-card::before {
      background:
        linear-gradient(90deg, transparent, rgba(255,255,255,.22), transparent) !important;
      box-shadow: 0 0 10px rgba(255,255,255,.07) !important;
      opacity: .48 !important;
    }

    .premium-brand-card.real-logo-card::after {
      background:
        linear-gradient(
          115deg,
          transparent 24%,
          rgba(255,255,255,.055),
          transparent 72%
        ) !important;
    }

    .real-brand-logo {
      background:
        linear-gradient(145deg, #34383b 0%, #24272a 46%, #111315 100%) !important;
      border: 1px solid rgba(255,255,255,.13) !important;
      box-shadow:
        inset 3px 3px 7px rgba(255,255,255,.10),
        inset -5px -5px 10px rgba(0,0,0,.88),
        0 9px 21px rgba(0,0,0,.48) !important;
    }

    .real-brand-logo::before {
      background:
        linear-gradient(
          90deg,
          transparent,
          rgba(255,255,255,.36),
          transparent
        ) !important;
      box-shadow: 0 0 8px rgba(255,255,255,.08) !important;
      opacity: .48 !important;
    }

    .real-brand-logo::after {
      background:
        linear-gradient(
          90deg,
          transparent,
          rgba(255,255,255,.10),
          transparent
        ) !important;
      opacity: .45;
    }

    .real-brand-logo img {
      filter:
        grayscale(1)
        brightness(.11)
        contrast(2.25)
        drop-shadow(-1px -1px 0 rgba(255,255,255,.34))
        drop-shadow(1px 1px 0 rgba(0,0,0,1))
        drop-shadow(2px 3px 2px rgba(0,0,0,.92)) !important;
      opacity: .98;
    }

    .logo-shine {
      background:
        radial-gradient(
          ellipse,
          rgba(255,255,255,.10),
          transparent 72%
        ) !important;
      opacity: .62;
    }

    .real-logo-card strong {
      color: #aeb4b7 !important;
      text-shadow:
        0 1px 0 rgba(255,255,255,.08),
        0 -1px 0 rgba(0,0,0,.95) !important;
    }

    .real-logo-card small {
      color: #646b6f !important;
    }

    .real-logo-card:hover {
      border-color: rgba(255,255,255,.27) !important;
      background:
        linear-gradient(145deg, #202427 0%, #0d1012 53%, #030405 100%) !important;
      box-shadow:
        inset 1px 1px 0 rgba(255,255,255,.095),
        inset -2px -2px 0 rgba(0,0,0,.95),
        0 26px 58px rgba(0,0,0,.63),
        0 0 23px rgba(255,255,255,.035) !important;
    }

    .real-logo-card:hover .real-brand-logo {
      border-color: rgba(255,255,255,.23) !important;
      background:
        linear-gradient(145deg, #41464a 0%, #292d30 48%, #121416 100%) !important;
      box-shadow:
        inset 4px 4px 8px rgba(255,255,255,.09),
        inset -6px -6px 12px rgba(0,0,0,.92),
        0 13px 29px rgba(0,0,0,.55) !important;
    }

    .real-logo-card:hover .real-brand-logo img {
      transform: translateY(-1px) scale(1.045) !important;
      filter:
        grayscale(1)
        brightness(.14)
        contrast(2.4)
        drop-shadow(-1px -1px 0 rgba(255,255,255,.48))
        drop-shadow(1px 1px 0 rgba(0,0,0,1))
        drop-shadow(3px 4px 3px rgba(0,0,0,.96)) !important;
    }

    .brand-stage-glow {
      background:
        linear-gradient(
          90deg,
          transparent,
          rgba(255,255,255,.12),
          rgba(255,255,255,.12),
          transparent
        ) !important;
      box-shadow:
        0 0 18px rgba(255,255,255,.055),
        0 0 42px rgba(255,255,255,.025) !important;
      opacity: .55 !important;
    }

    .brand-motion-status strong,
    .brand-live-dot {
      color: #858d91 !important;
    }

    .brand-live-dot {
      background: #23272a !important;
      box-shadow:
        inset 1px 1px rgba(255,255,255,.14),
        0 0 8px rgba(255,255,255,.08) !important;
    }


    /* V19 — make every embossed logo clearly visible without restoring brand colours */
    .real-brand-logo {
      background:
        linear-gradient(145deg, #4a4f53 0%, #303438 45%, #181b1e 100%) !important;
      border-color: rgba(255,255,255,.19) !important;
      box-shadow:
        inset 4px 4px 9px rgba(255,255,255,.12),
        inset -6px -6px 12px rgba(0,0,0,.86),
        0 11px 24px rgba(0,0,0,.48) !important;
    }

    .real-brand-logo img {
      opacity: 1 !important;
      filter:
        grayscale(1)
        brightness(.30)
        contrast(1.72)
        drop-shadow(-1px -1px 0 rgba(255,255,255,.58))
        drop-shadow(1px 1px 0 rgba(0,0,0,1))
        drop-shadow(2px 3px 3px rgba(0,0,0,.95)) !important;
    }

    .real-logo-card:hover .real-brand-logo {
      background:
        linear-gradient(145deg, #5a6065 0%, #383d41 47%, #1b1e21 100%) !important;
      border-color: rgba(255,255,255,.29) !important;
    }

    .real-logo-card:hover .real-brand-logo img {
      filter:
        grayscale(1)
        brightness(.38)
        contrast(1.78)
        drop-shadow(-1px -1px 0 rgba(255,255,255,.70))
        drop-shadow(1px 1px 0 rgba(0,0,0,1))
        drop-shadow(3px 4px 4px rgba(0,0,0,.98)) !important;
    }

    .real-logo-card strong {
      color: #d1d5d7 !important;
      text-shadow:
        0 1px 0 rgba(255,255,255,.10),
        0 -1px 0 rgba(0,0,0,1) !important;
    }

    .real-logo-card small {
      color: #858c90 !important;
    }

    .premium-brand-card.real-logo-card {
      border-color: rgba(255,255,255,.15) !important;
    }


    /* V20 — Offer of the Month */
    .monthly-offer-section {
      padding: 18px 0 10px;
    }

    .monthly-offer-shell {
      position: relative;
      overflow: hidden;
      padding: 22px;
      border: 1px solid rgba(32,238,224,.27);
      border-radius: 25px;
      background:
        radial-gradient(circle at 88% 0%, rgba(32,238,224,.13), transparent 29%),
        radial-gradient(circle at 8% 100%, rgba(122,255,195,.06), transparent 28%),
        linear-gradient(145deg, rgba(7,23,27,.98), rgba(2,8,10,.995));
      box-shadow:
        0 24px 65px rgba(0,0,0,.40),
        inset 0 1px rgba(255,255,255,.035);
    }

    .monthly-offer-shell::before {
      width: 48%;
      height: 1px;
      position: absolute;
      top: 0;
      left: 26%;
      content: "";
      background: linear-gradient(90deg, transparent, var(--cyan), transparent);
      box-shadow: 0 0 18px rgba(32,238,224,.45);
    }

    .monthly-offer-head {
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: end;
      gap: 20px;
      margin-bottom: 16px;
    }

    .monthly-offer-head h2 {
      margin-top: 6px;
      font-size: clamp(1.9rem, 3.6vw, 3.6rem);
      letter-spacing: -.045em;
    }

    .monthly-offer-head p {
      max-width: 700px;
      margin-top: 7px;
      color: var(--muted);
      font-size: .74rem;
      line-height: 1.5;
    }

    .monthly-offer-countdown {
      min-width: 195px;
      padding: 12px 15px;
      border: 1px solid rgba(32,238,224,.28);
      border-radius: 16px;
      background: rgba(32,238,224,.045);
      text-align: right;
    }

    .monthly-offer-countdown span {
      display: block;
      color: var(--muted);
      font-size: .56rem;
      text-transform: uppercase;
      letter-spacing: .08em;
    }

    .monthly-offer-countdown strong {
      display: block;
      margin-top: 4px;
      color: var(--cyan);
      font-size: 1.12rem;
      letter-spacing: .02em;
    }

    .monthly-offer-countdown small {
      display: block;
      margin-top: 2px;
      color: #c7d8da;
      font-size: .55rem;
    }

    .monthly-offer-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 11px;
    }

    .monthly-offer-card {
      min-height: 235px;
      display: grid;
      grid-template-columns: 150px 1fr;
      overflow: hidden;
      border: 1px solid var(--line);
      border-radius: 18px;
      background:
        linear-gradient(150deg, rgba(9,28,32,.97), rgba(2,9,11,.995));
      transition:
        transform .22s ease,
        border-color .22s ease,
        box-shadow .22s ease;
    }

    .monthly-offer-card:hover {
      transform: translateY(-4px);
      border-color: rgba(32,238,224,.65);
      box-shadow: 0 18px 40px rgba(0,0,0,.38), 0 0 22px rgba(32,238,224,.07);
    }

    .monthly-offer-visual {
      min-height: 235px;
      position: relative;
      display: grid;
      place-items: center;
      padding: 27px 10px 12px;
      background:
        radial-gradient(circle at 50% 47%, rgba(32,238,224,.13), transparent 45%),
        linear-gradient(145deg, rgba(8,25,29,.97), rgba(2,9,11,.995));
    }

    .monthly-offer-visual::after {
      width: 92px;
      height: 16px;
      position: absolute;
      bottom: 17px;
      content: "";
      background: rgba(0,0,0,.60);
      border-radius: 50%;
      filter: blur(8px);
    }

    .monthly-offer-visual img {
      max-width: 128px;
      max-height: 190px;
      position: relative;
      z-index: 2;
      object-fit: contain;
      filter: drop-shadow(0 17px 15px rgba(0,0,0,.46));
      transition: transform .24s ease;
    }

    .monthly-offer-card:hover .monthly-offer-visual img {
      transform: translateY(-4px) scale(1.035);
    }

    .monthly-offer-discount,
    .monthly-offer-tag {
      position: absolute;
      z-index: 4;
      top: 10px;
      padding: 5px 7px;
      border-radius: 999px;
      font-size: .48rem;
      font-weight: 1000;
      letter-spacing: .05em;
    }

    .monthly-offer-discount {
      left: 9px;
      color: #001315;
      background: linear-gradient(135deg, var(--cyan), var(--mint));
    }

    .monthly-offer-tag {
      right: 9px;
      color: #d9eeee;
      border: 1px solid var(--line);
      background: rgba(2,12,14,.76);
      backdrop-filter: blur(8px);
    }

    .monthly-offer-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 15px;
    }

    .monthly-offer-info > small {
      color: var(--cyan);
      font-size: .52rem;
      font-weight: 900;
      letter-spacing: .05em;
      text-transform: uppercase;
    }

    .monthly-offer-info h3 {
      margin-top: 5px;
      font-size: .93rem;
      line-height: 1.1;
    }

    .monthly-offer-info p {
      margin-top: 6px;
      color: var(--muted);
      font-size: .58rem;
      line-height: 1.4;
    }

    .monthly-offer-pricing {
      display: flex;
      align-items: baseline;
      gap: 8px;
      margin-top: 12px;
    }

    .monthly-offer-pricing span {
      color: #6d7d80;
      font-size: .58rem;
      text-decoration: line-through;
    }

    .monthly-offer-pricing strong {
      color: #f0ffff;
      font-size: .86rem;
    }

    .monthly-offer-actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 7px;
      margin-top: 12px;
    }

    .monthly-offer-actions button,
    .monthly-offer-shop-all {
      min-height: 38px;
      border-radius: 10px;
      cursor: pointer;
      font-size: .58rem;
      font-weight: 950;
    }

    .offer-view-button {
      color: var(--cyan);
      border: 1px solid var(--line);
      background: rgba(32,238,224,.025);
    }

    .offer-cart-button,
    .monthly-offer-shop-all {
      color: #001315;
      border: 0;
      background: linear-gradient(135deg, var(--cyan), var(--cyan-2));
    }

    .monthly-offer-footer {
      min-height: 59px;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 14px;
      margin-top: 12px;
      padding: 10px 12px 10px 15px;
      border: 1px solid var(--line);
      border-radius: 14px;
      background: rgba(255,255,255,.015);
    }

    .monthly-offer-footer strong {
      color: var(--mint);
      font-size: .64rem;
    }

    .monthly-offer-footer span {
      margin-left: 5px;
      color: #afc3c5;
      font-size: .59rem;
    }

    .monthly-offer-shop-all {
      padding: 0 14px;
    }

    @media (max-width: 1100px) {
      .monthly-offer-grid {
        grid-template-columns: 1fr;
      }

      .monthly-offer-card {
        grid-template-columns: 180px 1fr;
      }
    }

    @media (max-width: 700px) {
      .monthly-offer-section {
        padding-top: 11px;
      }

      .monthly-offer-shell {
        padding: 16px 11px;
        border-radius: 20px;
      }

      .monthly-offer-head {
        grid-template-columns: 1fr;
        align-items: start;
      }

      .monthly-offer-countdown {
        min-width: 0;
        width: 100%;
        text-align: left;
      }

      .monthly-offer-card {
        grid-template-columns: 118px 1fr;
        min-height: 215px;
      }

      .monthly-offer-visual {
        min-height: 215px;
      }

      .monthly-offer-visual img {
        max-width: 100px;
        max-height: 170px;
      }

      .monthly-offer-actions {
        grid-template-columns: 1fr;
      }

      .monthly-offer-footer {
        grid-template-columns: 1fr;
      }

      .monthly-offer-shop-all {
        width: 100%;
      }
    }

  

    /* V21 — shop brands + top brands visibility with premium yellow/sky accents */
    .brand-category-shell,
    .premium-brands-shell {
      position: relative;
      border-color: rgba(246, 198, 109, .22) !important;
      box-shadow:
        0 26px 72px rgba(0,0,0,.42),
        0 0 0 1px rgba(246,198,109,.05) inset !important;
    }

    .brand-category-shell::before,
    .premium-brands-shell::before {
      content: "";
      position: absolute;
      top: 0;
      left: 20%;
      width: 60%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(246,198,109,.9), transparent);
      box-shadow: 0 0 18px rgba(246,198,109,.26);
      pointer-events: none;
    }

    .brand-shop-button {
      border-color: rgba(246,198,109,.16) !important;
      background:
        radial-gradient(circle at 50% 0%, rgba(125, 245, 255, .05), transparent 70%),
        linear-gradient(145deg, rgba(8,22,26,.96), rgba(3,10,12,.995)) !important;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,.02),
        inset 0 -1px 0 rgba(0,0,0,.55),
        0 12px 26px rgba(0,0,0,.22);
    }

    .brand-shop-button:hover,
    .brand-shop-button.active {
      border-color: rgba(246,198,109,.58) !important;
      background:
        radial-gradient(circle at 50% 0%, rgba(125,245,255,.10), transparent 72%),
        linear-gradient(145deg, rgba(10,25,29,.985), rgba(2,9,11,.998)) !important;
      box-shadow:
        0 14px 34px rgba(0,0,0,.34),
        0 0 0 1px rgba(246,198,109,.08) inset,
        0 0 18px rgba(246,198,109,.08);
    }

    .brand-shop-logo,
    .real-brand-logo {
      border-color: rgba(246,198,109,.42) !important;
      background:
        radial-gradient(circle at 30% 18%, rgba(255,255,255,.75), transparent 30%),
        linear-gradient(145deg, rgba(205, 242, 255, .98) 0%, rgba(178, 225, 245, .96) 42%, rgba(137, 192, 222, .96) 100%) !important;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,.75),
        inset 0 -8px 16px rgba(16,65,90,.18),
        0 7px 18px rgba(0,0,0,.32),
        0 0 0 1px rgba(246,198,109,.08) !important;
    }

    .brand-shop-button:hover .brand-shop-logo,
    .brand-shop-button.active .brand-shop-logo,
    .premium-brand-card.real-logo-card:hover .real-brand-logo {
      border-color: rgba(246,198,109,.68) !important;
      background:
        radial-gradient(circle at 30% 18%, rgba(255,255,255,.82), transparent 30%),
        linear-gradient(145deg, rgba(223, 248, 255, .99) 0%, rgba(193, 233, 250, .98) 45%, rgba(147, 204, 231, .98) 100%) !important;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,.8),
        inset 0 -10px 18px rgba(11,56,82,.20),
        0 10px 24px rgba(0,0,0,.36),
        0 0 18px rgba(246,198,109,.10) !important;
    }

    .brand-shop-logo img,
    .real-brand-logo img {
      filter:
        grayscale(1)
        saturate(0)
        brightness(.42)
        contrast(1.45)
        drop-shadow(0 1px 0 rgba(255,255,255,.55))
        drop-shadow(0 0 1px rgba(17,38,49,.35)) !important;
      opacity: 1 !important;
    }

    .brand-wordmark {
      color: #23353e !important;
      text-shadow: 0 1px 0 rgba(255,255,255,.35);
    }

    .brand-shop-button strong,
    .real-logo-card strong {
      color: #f7fbfb !important;
    }

    .brand-shop-button small,
    .real-logo-card small {
      color: #f6c66d !important;
    }

    .premium-brand-card.real-logo-card {
      border-color: rgba(246,198,109,.18) !important;
      background:
        linear-gradient(145deg, #121618 0%, #090b0c 52%, #030405 100%) !important;
      box-shadow:
        inset 1px 1px 0 rgba(255,255,255,.04),
        inset -2px -2px 0 rgba(0,0,0,.90),
        0 18px 42px rgba(0,0,0,.52) !important;
    }

    .premium-brand-card.real-logo-card:hover {
      border-color: rgba(246,198,109,.54) !important;
      box-shadow:
        inset 1px 1px 0 rgba(255,255,255,.05),
        inset -2px -2px 0 rgba(0,0,0,.92),
        0 22px 46px rgba(0,0,0,.54),
        0 0 18px rgba(246,198,109,.08) !important;
    }

    .premium-brand-card.real-logo-card::before {
      background:
        linear-gradient(90deg, transparent, rgba(246,198,109,.18), transparent) !important;
      box-shadow: 0 0 10px rgba(246,198,109,.08) !important;
      opacity: .6 !important;
    }

    .premium-brand-card.real-logo-card::after {
      background:
        linear-gradient(115deg, transparent 24%, rgba(125,245,255,.06), transparent 72%) !important;
    }

    .brand-shop-button .brand-shop-logo,
    .premium-brand-card.real-logo-card .real-brand-logo {
      transition: transform .24s ease, box-shadow .24s ease, background .24s ease, border-color .24s ease;
    }

    .brand-shop-button:hover .brand-shop-logo,
    .premium-brand-card.real-logo-card:hover .real-brand-logo {
      transform: translateY(-1px);
    }

  
    /* V22 — Our Facility & History */
    .facility-history-section {
      padding: 22px 0 14px;
    }

    .facility-history-shell {
      position: relative;
      display: grid;
      grid-template-columns: minmax(0, .92fr) minmax(0, 1.28fr);
      gap: 22px;
      padding: 24px;
      overflow: hidden;
      border: 1px solid rgba(246,198,109,.27);
      border-radius: 27px;
      background:
        radial-gradient(circle at 86% 4%, rgba(125,245,255,.10), transparent 27%),
        radial-gradient(circle at 4% 96%, rgba(246,198,109,.07), transparent 29%),
        linear-gradient(145deg, rgba(7,22,25,.985), rgba(2,8,10,.998));
      box-shadow:
        0 26px 70px rgba(0,0,0,.42),
        inset 0 1px rgba(255,255,255,.035);
    }

    .facility-history-shell::before {
      content: "";
      position: absolute;
      top: 0;
      left: 22%;
      width: 56%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(246,198,109,.95), transparent);
      box-shadow: 0 0 20px rgba(246,198,109,.28);
    }

    .facility-history-copy {
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-width: 0;
    }

    .facility-history-copy h2 {
      margin-top: 8px;
      font-size: clamp(2rem, 4.2vw, 4.4rem);
      line-height: .98;
      letter-spacing: -.052em;
    }

    .facility-history-lead {
      max-width: 640px;
      margin-top: 14px;
      color: #afc5c8;
      font-size: .74rem;
      line-height: 1.65;
    }

    .facility-history-points {
      display: grid;
      gap: 9px;
      margin-top: 19px;
    }

    .facility-history-points article {
      display: grid;
      grid-template-columns: 42px 1fr;
      gap: 10px;
      align-items: center;
      min-height: 63px;
      padding: 9px 11px;
      border: 1px solid rgba(125,245,255,.12);
      border-radius: 14px;
      background: rgba(255,255,255,.018);
    }

    .facility-history-points article > span {
      width: 38px;
      height: 38px;
      display: grid;
      place-items: center;
      color: #17252a;
      border: 1px solid rgba(246,198,109,.62);
      border-radius: 11px;
      background: linear-gradient(145deg, #f8d58f, #d7a84b);
      font-size: .58rem;
      font-weight: 1000;
      box-shadow: inset 0 1px rgba(255,255,255,.55), 0 7px 16px rgba(0,0,0,.25);
    }

    .facility-history-points strong {
      display: block;
      color: #eefafa;
      font-size: .65rem;
    }

    .facility-history-points small {
      display: block;
      margin-top: 3px;
      color: #7f9699;
      font-size: .54rem;
      line-height: 1.4;
    }

    .facility-history-signature {
      display: flex;
      align-items: center;
      gap: 11px;
      margin-top: 16px;
      padding-top: 14px;
      border-top: 1px solid rgba(255,255,255,.07);
    }

    .facility-history-mark {
      width: 43px;
      height: 43px;
      display: grid;
      place-items: center;
      color: #dffcff;
      border: 1px solid rgba(125,245,255,.34);
      border-radius: 13px;
      background: linear-gradient(145deg, rgba(125,245,255,.12), rgba(246,198,109,.07));
      font-size: .68rem;
      font-weight: 1000;
    }

    .facility-history-signature strong {
      display: block;
      color: #eefafa;
      font-size: .66rem;
    }

    .facility-history-signature small {
      display: block;
      margin-top: 2px;
      color: #7f9699;
      font-size: .53rem;
    }

    .facility-gallery {
      display: grid;
      grid-template-columns: minmax(0, 1.42fr) minmax(190px, .76fr);
      gap: 10px;
      min-height: 510px;
    }

    .facility-photo-stack {
      display: grid;
      grid-template-rows: 1fr 1fr;
      gap: 10px;
    }

    .facility-photo {
      position: relative;
      min-width: 0;
      overflow: hidden;
      padding: 0;
      cursor: pointer;
      border: 1px solid rgba(246,198,109,.25);
      border-radius: 19px;
      background: #060a0c;
      box-shadow: 0 18px 36px rgba(0,0,0,.35);
      transition: transform .24s ease, border-color .24s ease, box-shadow .24s ease;
    }

    .facility-photo::before {
      content: "";
      position: absolute;
      z-index: 2;
      inset: 0;
      background:
        linear-gradient(180deg, transparent 48%, rgba(2,8,10,.86) 100%),
        radial-gradient(circle at 80% 8%, rgba(125,245,255,.10), transparent 30%);
      pointer-events: none;
    }

    .facility-photo::after {
      content: "";
      position: absolute;
      z-index: 3;
      top: 0;
      left: 20%;
      width: 60%;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(246,198,109,.9), transparent);
      box-shadow: 0 0 14px rgba(246,198,109,.25);
    }

    .facility-photo img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      transition: transform .42s ease, filter .42s ease;
    }

    .facility-photo-main img {
      object-position: 56% center;
    }

    .facility-photo-stack .facility-photo:first-child img {
      object-position: 48% 42%;
    }

    .facility-photo-stack .facility-photo:last-child img {
      object-position: 64% center;
    }

    .facility-photo > span {
      position: absolute;
      z-index: 4;
      right: 13px;
      bottom: 12px;
      left: 13px;
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 10px;
      text-align: left;
    }

    .facility-photo strong {
      color: #f6fbfb;
      font-size: .66rem;
    }

    .facility-photo small {
      color: #f6c66d;
      font-size: .52rem;
      font-weight: 850;
    }

    .facility-photo:hover {
      transform: translateY(-4px);
      border-color: rgba(246,198,109,.66);
      box-shadow: 0 24px 48px rgba(0,0,0,.44), 0 0 20px rgba(125,245,255,.06);
    }

    .facility-photo:hover img {
      transform: scale(1.035);
      filter: brightness(1.05) contrast(1.03);
    }

    .facility-lightbox {
      position: fixed;
      z-index: 9999;
      inset: 0;
      display: grid;
      place-items: center;
      padding: 24px;
      background: rgba(0,5,7,.88);
      backdrop-filter: blur(13px);
    }

    .facility-lightbox[hidden] {
      display: none !important;
    }

    .facility-lightbox-content {
      width: min(1120px, 94vw);
      overflow: hidden;
      border: 1px solid rgba(246,198,109,.45);
      border-radius: 23px;
      background: #05090b;
      box-shadow: 0 35px 95px rgba(0,0,0,.68), 0 0 25px rgba(246,198,109,.07);
    }

    .facility-lightbox-content img {
      width: 100%;
      max-height: 78vh;
      display: block;
      object-fit: contain;
      background: #020405;
    }

    .facility-lightbox-content p {
      margin: 0;
      padding: 12px 16px 14px;
      color: #dceced;
      font-size: .65rem;
      text-align: center;
    }

    .facility-lightbox-close {
      position: fixed;
      z-index: 10000;
      top: 18px;
      right: 20px;
      width: 44px;
      height: 44px;
      display: grid;
      place-items: center;
      color: #001315;
      border: 0;
      border-radius: 50%;
      background: linear-gradient(145deg, #f8d58f, #7df5ff);
      cursor: pointer;
      font-size: 1.15rem;
      font-weight: 900;
    }

    @media (max-width: 980px) {
      .facility-history-shell {
        grid-template-columns: 1fr;
      }

      .facility-gallery {
        min-height: 460px;
      }
    }

    @media (max-width: 680px) {
      .facility-history-section {
        padding-top: 14px;
      }

      .facility-history-shell {
        padding: 17px 12px;
        border-radius: 21px;
      }

      .facility-history-copy h2 {
        font-size: clamp(2rem, 12vw, 3.2rem);
      }

      .facility-gallery {
        grid-template-columns: 1fr;
        min-height: 0;
      }

      .facility-photo-main {
        min-height: 290px;
      }

      .facility-photo-stack {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: none;
      }

      .facility-photo-stack .facility-photo {
        min-height: 180px;
      }

      .facility-photo > span {
        align-items: start;
        flex-direction: column;
        gap: 2px;
      }
    }

  
    /* V23 — premium Our History button and January 2017–2026 timeline */
    .history-nav-button {
      min-height: 42px;
      display: inline-flex !important;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      gap: 1px;
      padding: 6px 12px !important;
      color: #efffff !important;
      border: 1px solid rgba(246,198,109,.42);
      border-radius: 12px;
      background:
        radial-gradient(circle at 50% 0%, rgba(125,245,255,.075), transparent 72%),
        linear-gradient(145deg, rgba(12,29,32,.96), rgba(3,10,12,.995));
      box-shadow:
        inset 0 1px rgba(255,255,255,.045),
        0 9px 22px rgba(0,0,0,.25);
      line-height: 1 !important;
      transition:
        transform .2s ease,
        border-color .2s ease,
        box-shadow .2s ease;
    }

    .history-nav-button span {
      font-size: .62rem;
      font-weight: 950;
      white-space: nowrap;
    }

    .history-nav-button small {
      color: #f6c66d;
      font-size: .43rem;
      font-weight: 850;
      letter-spacing: .045em;
      white-space: nowrap;
      text-transform: uppercase;
    }

    .history-nav-button:hover {
      transform: translateY(-2px);
      border-color: rgba(246,198,109,.74);
      box-shadow:
        inset 0 1px rgba(255,255,255,.06),
        0 13px 27px rgba(0,0,0,.34),
        0 0 17px rgba(246,198,109,.08);
    }

    .history-era-line {
      position: relative;
      display: grid;
      gap: 10px;
      margin-top: 20px;
    }

    .history-era-line::before {
      content: "";
      position: absolute;
      top: 24px;
      bottom: 24px;
      left: 55px;
      width: 1px;
      background:
        linear-gradient(
          180deg,
          rgba(246,198,109,.8),
          rgba(125,245,255,.48),
          rgba(246,198,109,.8)
        );
      box-shadow: 0 0 11px rgba(246,198,109,.14);
    }

    .history-era-line article {
      position: relative;
      display: grid;
      grid-template-columns: 96px 1fr;
      gap: 12px;
      align-items: center;
      min-height: 78px;
      padding: 11px 12px;
      border: 1px solid rgba(125,245,255,.12);
      border-radius: 15px;
      background:
        linear-gradient(145deg, rgba(255,255,255,.025), rgba(255,255,255,.009));
      box-shadow: inset 0 1px rgba(255,255,255,.025);
    }

    .history-era-line article::before {
      content: "";
      position: absolute;
      z-index: 2;
      top: 50%;
      left: 50px;
      width: 11px;
      height: 11px;
      border: 2px solid #081114;
      border-radius: 50%;
      background: #f6c66d;
      box-shadow:
        0 0 0 3px rgba(246,198,109,.18),
        0 0 13px rgba(246,198,109,.28);
      transform: translateY(-50%);
    }

    .history-year {
      min-height: 38px;
      display: grid;
      place-items: center;
      padding: 6px 8px;
      color: #17252a;
      border: 1px solid rgba(246,198,109,.72);
      border-radius: 11px;
      background:
        linear-gradient(145deg, #f8d994, #d7a84b);
      box-shadow:
        inset 0 1px rgba(255,255,255,.55),
        0 7px 16px rgba(0,0,0,.24);
      font-size: .53rem;
      font-weight: 1000;
      letter-spacing: .035em;
      text-align: center;
    }

    .history-era-line strong {
      display: block;
      color: #eefafa;
      font-size: .66rem;
    }

    .history-era-line small {
      display: block;
      margin-top: 4px;
      color: #839b9e;
      font-size: .54rem;
      line-height: 1.45;
    }

    .history-era-current {
      border-color: rgba(246,198,109,.34) !important;
      background:
        radial-gradient(circle at 88% 0%, rgba(125,245,255,.07), transparent 34%),
        linear-gradient(145deg, rgba(246,198,109,.04), rgba(255,255,255,.012))
        !important;
    }

    .history-era-current::after {
      content: "NOW";
      position: absolute;
      top: 8px;
      right: 9px;
      padding: 4px 7px;
      color: #001315;
      border-radius: 999px;
      background: linear-gradient(135deg, #7df5ff, #f6c66d);
      font-size: .43rem;
      font-weight: 1000;
      letter-spacing: .06em;
    }

    @media (max-width: 1180px) {
      .history-nav-button {
        padding: 6px 9px !important;
      }

      .history-nav-button span {
        font-size: .56rem;
      }

      .history-nav-button small {
        font-size: .39rem;
      }
    }

    @media (max-width: 760px) {
      .history-era-line article {
        grid-template-columns: 78px 1fr;
      }

      .history-era-line::before {
        left: 45px;
      }

      .history-era-line article::before {
        left: 40px;
      }

      .history-year {
        font-size: .47rem;
      }
    }

  
    /* V24 — cinematic, interactive Refuel history experience */
    .rf-history-experience {
      scroll-margin-top: 96px;
      padding: 28px 0 80px;
      background:
        radial-gradient(circle at 83% 12%, rgba(246,198,109,.075), transparent 28%),
        radial-gradient(circle at 12% 56%, rgba(38,199,255,.055), transparent 29%);
    }

    .rf-history-wrap { display: grid; gap: 13px; }

    .rf-history-hero {
      min-height: 410px;
      position: relative;
      display: grid;
      grid-template-columns: minmax(0, .92fr) minmax(530px, 1.35fr);
      overflow: hidden;
      border: 1px solid rgba(246,198,109,.24);
      border-radius: 25px;
      background: #030506;
      box-shadow: 0 28px 75px rgba(0,0,0,.52), inset 0 1px rgba(255,255,255,.035);
    }

    .rf-history-hero::before {
      content: "";
      position: absolute;
      z-index: 5;
      inset: 0;
      border-radius: inherit;
      pointer-events: none;
      box-shadow: inset 0 0 0 1px rgba(38,199,255,.055);
    }

    .rf-history-hero-media { position: relative; grid-column: 2; min-height: 410px; }
    .rf-history-hero-media img { width: 100%; height: 100%; object-fit: cover; object-position: center; filter: saturate(.9) contrast(1.04) brightness(.82); }
    .rf-history-hero-shade { position: absolute; inset: 0; background: linear-gradient(90deg, #030506 0%, rgba(3,5,6,.92) 3%, rgba(3,5,6,.32) 42%, rgba(3,5,6,.06) 72%), linear-gradient(0deg, rgba(0,0,0,.36), transparent 58%); }

    .rf-history-hero-copy {
      position: absolute;
      z-index: 7;
      left: 35px;
      top: 50%;
      width: min(570px, 52%);
      transform: translateY(-50%);
    }

    .rf-history-kicker { display: inline-flex; align-items: center; gap: 7px; color: #6bdcff; font-size: .58rem; font-weight: 950; letter-spacing: .12em; text-transform: uppercase; }
    .rf-history-kicker i { width: 7px; height: 7px; border-radius: 50%; background: #f6c66d; box-shadow: 0 0 12px rgba(246,198,109,.48); }
    .rf-history-hero-copy h2 { margin-top: 10px; font-size: clamp(3.2rem, 6vw, 6.6rem); line-height: .87; letter-spacing: -.072em; color: #fff; }
    .rf-history-hero-copy h2 span { color: #6bdcff; text-shadow: 0 0 30px rgba(38,199,255,.15); }
    .rf-history-hero-copy h3 { margin-top: 18px; color: #d6e1e3; font-size: 1.08rem; font-weight: 520; }
    .rf-history-hero-copy p { max-width: 510px; margin-top: 11px; color: #9eafb2; font-size: .72rem; line-height: 1.55; }

    .rf-history-hero-actions { display: flex; flex-wrap: wrap; gap: 9px; margin-top: 18px; }
    .rf-history-primary, .rf-history-secondary { min-height: 46px; padding: 0 16px; border-radius: 11px; cursor: pointer; font-size: .64rem; font-weight: 950; transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease; }
    .rf-history-primary { color: #001315; border: 0; background: linear-gradient(135deg, #55d9ff, #29b9ed); box-shadow: 0 13px 27px rgba(38,199,255,.14); }
    .rf-history-primary b { margin-left: 13px; font-size: .9rem; }
    .rf-history-secondary { color: #d5e1e2; border: 1px solid rgba(255,255,255,.16); background: rgba(3,7,9,.64); backdrop-filter: blur(9px); }
    .rf-history-secondary span { margin-left: 10px; color: #f6c66d; }
    .rf-history-primary:hover, .rf-history-secondary:hover { transform: translateY(-2px); }

    .rf-history-hero-brand { position: absolute; z-index: 8; right: 18px; bottom: 17px; display: grid; justify-items: center; gap: 5px; padding: 9px 12px; border: 1px solid rgba(246,198,109,.24); border-radius: 13px; background: rgba(2,5,6,.68); backdrop-filter: blur(12px); }
    .rf-history-hero-brand img { width: 48px; height: 48px; object-fit: contain; border-radius: 9px; }
    .rf-history-hero-brand small { color: #e5bd68; font-size: .43rem; font-weight: 850; }

    .rf-history-timeline { position: relative; padding: 17px 17px 13px; border: 1px solid rgba(38,199,255,.15); border-radius: 18px; background: linear-gradient(145deg, rgba(8,17,20,.98), rgba(2,6,8,.995)); box-shadow: inset 0 1px rgba(255,255,255,.025); }
    .rf-history-line { position: absolute; top: 24px; left: 7%; right: 7%; height: 2px; overflow: hidden; background: rgba(255,255,255,.09); }
    .rf-history-line span { display: block; width: 0%; height: 100%; background: linear-gradient(90deg, #2cc8ff, #55d9ff, #f6c66d); box-shadow: 0 0 13px rgba(38,199,255,.3); transition: width .42s ease; }
    .rf-history-nodes { position: relative; z-index: 2; display: grid; grid-template-columns: repeat(5, 1fr); gap: 6px; }
    .rf-history-node { display: grid; justify-items: center; gap: 4px; padding: 0 5px; color: #6e858a; border: 0; background: transparent; cursor: pointer; }
    .rf-history-node-dot { width: 13px; height: 13px; border: 3px solid #071014; border-radius: 50%; background: #18313b; box-shadow: 0 0 0 2px rgba(38,199,255,.28); transition: background .22s ease, box-shadow .22s ease, transform .22s ease; }
    .rf-history-node strong { color: #668d9a; font-size: .78rem; }
    .rf-history-node small { color: #65787c; font-size: .46rem; text-align: center; }
    .rf-history-node.is-active .rf-history-node-dot { background: #f6c66d; box-shadow: 0 0 0 3px rgba(246,198,109,.16), 0 0 15px rgba(246,198,109,.24); transform: scale(1.15); }
    .rf-history-node.is-active strong { color: #f6c66d; }
    .rf-history-node.is-active small { color: #e7c985; }

    .rf-history-chapter { min-height: 76px; display: grid; grid-template-columns: 88px 1fr auto; align-items: center; gap: 14px; margin-top: 14px; padding: 12px 14px; border: 1px solid rgba(255,255,255,.07); border-radius: 13px; background: rgba(255,255,255,.015); }
    .rf-history-chapter > span { color: #57d6ff; font-size: .72rem; font-weight: 1000; text-align: center; }
    .rf-history-chapter strong { color: #edf9f9; font-size: .7rem; }
    .rf-history-chapter p { margin-top: 4px; color: #7f9599; font-size: .55rem; line-height: 1.45; }
    .rf-history-chapter em { padding: 6px 8px; color: #e4bd6a; border: 1px solid rgba(246,198,109,.22); border-radius: 999px; font-size: .45rem; font-style: normal; font-weight: 900; white-space: nowrap; }

    .rf-history-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)) 1.55fr; gap: 9px; }
    .rf-history-place, .rf-history-resources { min-width: 0; overflow: hidden; border: 1px solid rgba(255,255,255,.095); border-radius: 16px; background: linear-gradient(145deg, rgba(13,17,19,.98), rgba(4,7,8,.995)); box-shadow: 0 16px 38px rgba(0,0,0,.3), inset 0 1px rgba(255,255,255,.025); }
    .rf-history-place { position: relative; display: grid; grid-template-rows: auto 205px; padding: 0; color: inherit; text-align: left; cursor: pointer; }
    .rf-history-place-head { min-height: 76px; display: flex; align-items: center; gap: 10px; padding: 12px; }
    .rf-history-place-head > span { width: 34px; height: 34px; display: grid; flex: 0 0 34px; place-items: center; color: #eaf9fa; border: 1px solid rgba(255,255,255,.13); border-radius: 9px; background: rgba(255,255,255,.025); font-size: .9rem; }
    .rf-history-place-head strong { display: block; color: #f0fafa; font-size: .68rem; }
    .rf-history-place-head small { display: block; margin-top: 3px; color: #87999c; font-size: .48rem; line-height: 1.35; }
    .rf-history-place > img { width: 100%; height: 205px; object-fit: cover; filter: saturate(.82) contrast(1.05) brightness(.78); transition: transform .38s ease, filter .38s ease; }
    .rf-history-training > img, .rf-history-cardio > img { object-position: center 45%; }
    .rf-history-place > b { position: absolute; right: 8px; bottom: 8px; padding: 5px 7px; color: #f5d995; border: 1px solid rgba(246,198,109,.25); border-radius: 999px; background: rgba(2,6,7,.7); backdrop-filter: blur(8px); font-size: .42rem; opacity: 0; transform: translateY(4px); transition: opacity .22s ease, transform .22s ease; }
    .rf-history-place:hover { border-color: rgba(246,198,109,.35); }
    .rf-history-place:hover > img { transform: scale(1.035); filter: saturate(.95) contrast(1.05) brightness(.9); }
    .rf-history-place:hover > b { opacity: 1; transform: translateY(0); }

    .rf-history-resources { padding: 0 12px 12px; }
    .rf-history-resources .rf-history-place-head { padding-left: 0; padding-right: 0; }
    .rf-history-resource-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 7px; }
    .rf-history-resource-grid > div { min-height: 82px; display: flex; align-items: center; gap: 8px; padding: 9px; border: 1px solid rgba(255,255,255,.075); border-radius: 11px; background: rgba(255,255,255,.014); }
    .rf-history-resource-grid i { width: 28px; height: 28px; display: grid; flex: 0 0 28px; place-items: center; color: #e9fafa; border: 1px solid rgba(255,255,255,.09); border-radius: 8px; font-style: normal; }
    .rf-history-resource-grid strong { display: block; color: #55d9ff; font-size: .54rem; }
    .rf-history-resource-grid small { display: block; margin-top: 3px; color: #879a9e; font-size: .43rem; line-height: 1.35; }

    .rf-history-trust { min-height: 128px; display: grid; grid-template-columns: 76px minmax(260px, 1.35fr) minmax(390px, 1.5fr) 170px; align-items: center; gap: 15px; padding: 15px 17px; border: 1px solid rgba(255,255,255,.095); border-radius: 17px; background: linear-gradient(145deg, rgba(10,15,17,.99), rgba(3,6,7,.997)); box-shadow: 0 18px 45px rgba(0,0,0,.34); }
    .rf-history-trust-icon { width: 62px; height: 62px; display: grid; place-items: center; color: #fff; border: 2px solid #f6c66d; border-radius: 50%; box-shadow: 0 0 0 6px rgba(246,198,109,.04), 0 0 18px rgba(246,198,109,.1); font-size: 1.35rem; }
    .rf-history-trust-copy { padding-right: 13px; border-right: 1px solid rgba(255,255,255,.075); }
    .rf-history-trust-copy h3 { color: #f1f9f9; font-size: 1rem; }
    .rf-history-trust-copy h3 span { color: #56d8ff; }
    .rf-history-trust-copy p { margin-top: 6px; color: #83969a; font-size: .54rem; line-height: 1.48; }
    .rf-history-proof-list { display: grid; grid-template-columns: repeat(5, 1fr); }
    .rf-history-proof-list span { min-height: 70px; display: grid; place-items: center; gap: 4px; padding: 5px; border-right: 1px solid rgba(255,255,255,.07); text-align: center; }
    .rf-history-proof-list span:last-child { border-right: 0; }
    .rf-history-proof-list i { color: #edf9f9; font-size: 1.08rem; font-style: normal; }
    .rf-history-proof-list small { color: #9caeb1; font-size: .42rem; line-height: 1.35; }
    .rf-history-since-badge { min-height: 94px; display: grid; place-items: center; align-content: center; gap: 1px; border: 1px solid rgba(246,198,109,.3); border-radius: 13px; background: radial-gradient(circle, rgba(246,198,109,.07), transparent 68%); text-align: center; }
    .rf-history-since-badge small { color: #f6c66d; font-size: .5rem; font-weight: 950; letter-spacing: .1em; }
    .rf-history-since-badge strong { color: #f6c66d; font-size: 1.7rem; line-height: 1; }
    .rf-history-since-badge span { color: #f6c66d; font-size: .52rem; letter-spacing: .12em; }

    .history-nav-button { border-color: rgba(246,198,109,.58) !important; box-shadow: 0 0 0 1px rgba(246,198,109,.05) inset, 0 10px 24px rgba(0,0,0,.28) !important; }

    @media (max-width: 1260px) {
      .rf-history-grid { grid-template-columns: repeat(4, 1fr); }
      .rf-history-resources { grid-column: 1 / -1; }
      .rf-history-trust { grid-template-columns: 70px 1fr 1.5fr 145px; }
    }

    @media (max-width: 980px) {
      .rf-history-hero { grid-template-columns: 1fr; min-height: 570px; }
      .rf-history-hero-media { grid-column: 1; min-height: 570px; }
      .rf-history-hero-shade { background: linear-gradient(0deg, #030506 4%, rgba(3,5,6,.78) 48%, rgba(3,5,6,.2) 100%); }
      .rf-history-hero-copy { left: 25px; right: 25px; top: auto; bottom: 28px; width: auto; transform: none; }
      .rf-history-hero-copy h2 { font-size: clamp(3.3rem, 10vw, 5.8rem); }
      .rf-history-hero-brand { top: 14px; bottom: auto; }
      .rf-history-grid { grid-template-columns: repeat(2, 1fr); }
      .rf-history-resources { grid-column: 1 / -1; }
      .rf-history-trust { grid-template-columns: 66px 1fr 135px; }
      .rf-history-proof-list { grid-column: 1 / -1; order: 4; border-top: 1px solid rgba(255,255,255,.07); padding-top: 8px; }
    }

    @media (max-width: 680px) {
      .rf-history-experience { padding-top: 16px; padding-bottom: 55px; }
      .rf-history-hero { min-height: 615px; border-radius: 20px; }
      .rf-history-hero-media { min-height: 615px; }
      .rf-history-hero-copy { left: 17px; right: 17px; bottom: 21px; }
      .rf-history-hero-copy h2 { font-size: 3.5rem; }
      .rf-history-hero-copy h3 { font-size: .86rem; }
      .rf-history-hero-copy p { font-size: .61rem; }
      .rf-history-hero-actions { display: grid; grid-template-columns: 1fr; }
      .rf-history-primary, .rf-history-secondary { width: 100%; }
      .rf-history-hero-brand small { display: none; }
      .rf-history-nodes { grid-template-columns: repeat(5, 80px); overflow-x: auto; justify-content: start; padding-bottom: 5px; scrollbar-width: none; }
      .rf-history-line { display: none; }
      .rf-history-chapter { grid-template-columns: 70px 1fr; }
      .rf-history-chapter em { grid-column: 1 / -1; justify-self: start; }
      .rf-history-grid { grid-template-columns: 1fr; }
      .rf-history-resources { grid-column: auto; }
      .rf-history-place { grid-template-rows: auto 245px; }
      .rf-history-place > img { height: 245px; }
      .rf-history-resource-grid { grid-template-columns: 1fr; }
      .rf-history-trust { grid-template-columns: 58px 1fr; }
      .rf-history-since-badge { grid-column: 1 / -1; }
      .rf-history-proof-list { grid-template-columns: repeat(5, 105px); overflow-x: auto; justify-content: start; scrollbar-width: none; }
      .rf-history-trust-copy { border-right: 0; padding-right: 0; }
    }

  
    /* V25 — soft premium right-to-left Top Brands motion */
    .premium-brands-shell {
      overflow: hidden;
    }

    .brand-carousel {
      position: relative;
      cursor: grab;
      scroll-behavior: auto !important;
      scrollbar-width: none;
      overscroll-behavior-x: contain;
      -webkit-mask-image:
        linear-gradient(
          90deg,
          transparent 0%,
          #000 5%,
          #000 95%,
          transparent 100%
        );
      mask-image:
        linear-gradient(
          90deg,
          transparent 0%,
          #000 5%,
          #000 95%,
          transparent 100%
        );
    }

    .brand-carousel::-webkit-scrollbar {
      display: none;
    }

    .brand-carousel.dragging {
      cursor: grabbing;
      user-select: none;
      scroll-behavior: auto !important;
    }

    .brand-track {
      will-change: transform;
      transform: translateZ(0);
    }

    .premium-brand-card {
      transform: translateZ(0);
      backface-visibility: hidden;
      transition:
        transform .42s cubic-bezier(.2,.7,.2,1),
        border-color .32s ease,
        box-shadow .32s ease,
        background .32s ease !important;
    }

    .premium-brand-card:hover {
      transform: translateY(-5px) scale(1.012) !important;
    }

    .premium-brands-shell::after {
      content: "";
      position: absolute;
      inset: 0;
      pointer-events: none;
      background:
        linear-gradient(
          90deg,
          rgba(2,7,9,.92) 0%,
          transparent 8%,
          transparent 92%,
          rgba(2,7,9,.92) 100%
        );
      z-index: 4;
    }

    .brand-stage-glow {
      opacity: .42 !important;
      filter: blur(.2px);
      animation: brandSoftPulse 6.5s ease-in-out infinite;
    }

    .premium-brand-card::before {
      animation-duration: 8s !important;
      opacity: .42 !important;
    }

    .brand-prev,
    .brand-next {
      z-index: 7 !important;
      backdrop-filter: blur(12px);
      box-shadow:
        0 10px 28px rgba(0,0,0,.34),
        0 0 18px rgba(32,238,224,.08) !important;
      transition:
        transform .22s ease,
        border-color .22s ease,
        box-shadow .22s ease !important;
    }

    .brand-prev:hover,
    .brand-next:hover {
      transform: translateY(-50%) scale(1.06) !important;
      border-color: rgba(246,198,109,.58) !important;
      box-shadow:
        0 12px 32px rgba(0,0,0,.42),
        0 0 21px rgba(246,198,109,.10) !important;
    }

    @keyframes brandSoftPulse {
      0%, 100% { opacity: .30; transform: scaleX(.96); }
      50% { opacity: .52; transform: scaleX(1); }
    }

    @media (max-width: 760px) {
      .brand-carousel {
        -webkit-mask-image:
          linear-gradient(90deg, transparent 0%, #000 3%, #000 97%, transparent 100%);
        mask-image:
          linear-gradient(90deg, transparent 0%, #000 3%, #000 97%, transparent 100%);
      }

      .premium-brand-card:hover {
        transform: none !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .brand-stage-glow,
      .premium-brand-card::before {
        animation: none !important;
      }
    }

  
    /* V26 — visible transform-based brand motion */
    #brandCarousel {
      overflow: hidden !important;
      scroll-behavior: auto !important;
      touch-action: pan-y;
    }

    #brandTrack {
      will-change: transform;
      transform: translate3d(0, 0, 0);
      transition: none !important;
    }

    #brandCarousel.dragging {
      cursor: grabbing !important;
      user-select: none;
    }

  
    /* V27 — locked final customer journey order */
    #monthlyOffer,
    #brands,
    #home,
    #goals,
    #shop,
    #membership,
    #safety,
    #history {
      scroll-margin-top: 96px;
    }

    .premium-brands-section {
      padding-top: 24px;
    }

    .compact-commerce-hero {
      padding-top: 22px;
    }

    .rf-history-experience {
      margin-bottom: 30px;
    }

  
    /* V29 — premium AI Jawad consultation + subtle light around all major sections */
    .v29-ai-section {
      padding: 30px 0 10px;
    }

    .v29-ai-shell {
      min-height: 620px;
      position: relative;
      isolation: isolate;
      display: grid;
      grid-template-columns: minmax(0, 1.08fr) minmax(440px, .92fr);
      align-items: center;
      gap: 36px;
      overflow: hidden;
      padding: clamp(28px, 4vw, 54px);
      border: 1px solid rgba(92, 216, 255, .30);
      border-radius: 30px;
      background:
        radial-gradient(circle at 90% 8%, rgba(35, 188, 255, .13), transparent 29%),
        radial-gradient(circle at 8% 92%, rgba(246, 198, 109, .055), transparent 31%),
        linear-gradient(145deg, rgba(6,20,24,.985), rgba(1,7,9,.997));
      box-shadow:
        0 28px 80px rgba(0,0,0,.45),
        0 0 0 1px rgba(82,205,255,.04) inset,
        0 0 30px rgba(38,185,244,.045);
    }

    .v29-ai-shell::before {
      content: "";
      position: absolute;
      z-index: -1;
      width: 520px;
      height: 520px;
      right: -170px;
      top: -190px;
      border: 1px solid rgba(66,202,255,.09);
      border-radius: 50%;
      box-shadow:
        0 0 0 70px rgba(66,202,255,.018),
        0 0 0 145px rgba(66,202,255,.010);
    }

    .v29-ai-copy {
      position: relative;
      z-index: 2;
    }

    .v29-ai-copy h1 {
      max-width: 780px;
      margin-top: 13px;
      font-size: clamp(3rem, 5.1vw, 5.8rem);
      line-height: .94;
      letter-spacing: -.058em;
    }

    .v29-ai-copy .gradient-text {
      display: block;
      margin-top: 8px;
    }

    .v29-ai-lead {
      max-width: 690px;
      margin-top: 20px;
      color: #96aeb2;
      font-size: clamp(.8rem, 1.1vw, .97rem);
      line-height: 1.65;
    }

    .v29-benefit-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 9px;
      margin-top: 24px;
    }

    .v29-benefit-grid article {
      min-height: 88px;
      display: grid;
      grid-template-columns: 38px 1fr;
      align-items: center;
      gap: 10px;
      padding: 12px;
      border: 1px solid rgba(86,210,255,.15);
      border-radius: 15px;
      background: rgba(255,255,255,.018);
      box-shadow: inset 0 1px rgba(255,255,255,.025);
    }

    .v29-benefit-grid article > span {
      width: 35px;
      height: 35px;
      display: grid;
      place-items: center;
      color: #07171d;
      border-radius: 11px;
      background: linear-gradient(145deg, #dff8ff, #72c9e8);
      font-size: .55rem;
      font-weight: 1000;
    }

    .v29-benefit-grid strong,
    .v29-benefit-grid small {
      display: block;
    }

    .v29-benefit-grid strong {
      color: #effcfe;
      font-size: .67rem;
    }

    .v29-benefit-grid small {
      margin-top: 4px;
      color: #738b90;
      font-size: .51rem;
      line-height: 1.35;
    }

    .v29-ai-primary {
      min-height: 52px;
      margin-top: 24px;
      padding-inline: 22px;
      font-size: .75rem;
      box-shadow: 0 14px 30px rgba(24,198,225,.14);
    }

    .v29-ai-disclaimer {
      max-width: 610px;
      margin-top: 11px;
      color: #61767b;
      font-size: .53rem;
      line-height: 1.5;
    }

    .v29-console-stage {
      position: relative;
      z-index: 3;
      perspective: 1200px;
    }

    .v29-ai-console {
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(121,224,255,.55);
      border-radius: 27px;
      background:
        radial-gradient(circle at 85% 0%, rgba(27,177,238,.15), transparent 36%),
        linear-gradient(150deg, #0b1a20, #03080b 68%, #020405);
      box-shadow:
        0 30px 68px rgba(0,0,0,.55),
        0 0 0 1px rgba(255,255,255,.035) inset,
        0 0 34px rgba(24,181,239,.095);
      transform: rotateY(-2.2deg) rotateX(.7deg);
      transition: transform .35s ease, box-shadow .35s ease;
    }

    .v29-ai-console:hover {
      transform: rotateY(0) rotateX(0) translateY(-4px);
      box-shadow:
        0 36px 78px rgba(0,0,0,.60),
        0 0 0 1px rgba(255,255,255,.045) inset,
        0 0 40px rgba(24,181,239,.13);
    }

    .v29-ai-console::after {
      content: "";
      position: absolute;
      inset: 0;
      pointer-events: none;
      background: linear-gradient(112deg, transparent 33%, rgba(255,255,255,.065) 49%, transparent 65%);
      transform: translateX(-130%);
      animation: v29ConsoleShine 8s ease-in-out infinite;
    }

    .v29-console-topbar {
      min-height: 51px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 0 16px;
      border-bottom: 1px solid rgba(103,218,255,.16);
      background: rgba(2,8,11,.76);
    }

    .v29-online {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      color: #dffbff;
      font-size: .55rem;
      font-weight: 950;
      letter-spacing: .055em;
    }

    .v29-online i {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #50f1b4;
      box-shadow: 0 0 12px rgba(80,241,180,.80);
      animation: v29Pulse 1.7s ease-in-out infinite;
    }

    .v29-console-mode {
      color: #55d7ff;
      font-size: .46rem;
      font-weight: 900;
      letter-spacing: .10em;
    }

    .v29-console-layout {
      display: grid;
      grid-template-columns: .82fr 1.18fr;
      min-height: 500px;
    }

    .v29-portrait-panel {
      min-height: 500px;
      position: relative;
      overflow: hidden;
      border-right: 1px solid rgba(103,218,255,.15);
      background: #061015;
    }

    .v29-portrait-panel::after {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(180deg, transparent 45%, rgba(1,7,9,.68) 70%, #020607 100%),
        linear-gradient(90deg, transparent 70%, rgba(3,11,14,.45));
      pointer-events: none;
    }

    .v29-portrait-panel img {
      width: 100%;
      height: 100%;
      position: absolute;
      inset: 0;
      object-fit: cover;
      object-position: 50% 18%;
      filter: saturate(.9) contrast(1.04) brightness(.87);
      transform: scale(1.04);
    }

    .v29-portrait-scan {
      position: absolute;
      z-index: 2;
      left: 0;
      right: 0;
      height: 2px;
      top: 18%;
      background: linear-gradient(90deg, transparent, #55d7ff, transparent);
      box-shadow: 0 0 16px rgba(85,215,255,.78);
      animation: v29Scan 5.8s ease-in-out infinite;
    }

    .v29-profile-label {
      position: absolute;
      z-index: 3;
      left: 16px;
      right: 16px;
      bottom: 17px;
      padding: 13px;
      border: 1px solid rgba(130,225,255,.24);
      border-radius: 14px;
      background: rgba(2,9,12,.72);
      backdrop-filter: blur(13px);
    }

    .v29-profile-label small,
    .v29-profile-label strong,
    .v29-profile-label span {
      display: block;
    }

    .v29-profile-label small {
      color: #54d6ff;
      font-size: .43rem;
      font-weight: 900;
      letter-spacing: .055em;
    }

    .v29-profile-label strong {
      margin-top: 5px;
      color: white;
      font-size: 1.18rem;
    }

    .v29-profile-label span {
      margin-top: 4px;
      color: #8da4a9;
      font-size: .49rem;
    }

    .v29-console-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 20px;
    }

    .v29-live-analysis {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding-bottom: 13px;
      border-bottom: 1px solid rgba(101,216,255,.14);
    }

    .v29-live-analysis small,
    .v29-live-analysis strong {
      display: block;
    }

    .v29-live-analysis small {
      color: #56d8ff;
      font-size: .45rem;
      font-weight: 900;
      letter-spacing: .07em;
    }

    .v29-live-analysis strong {
      margin-top: 5px;
      font-size: .72rem;
    }

    .v29-wave {
      height: 28px;
      display: flex;
      align-items: center;
      gap: 3px;
    }

    .v29-wave i {
      width: 3px;
      height: 10px;
      border-radius: 999px;
      background: #55d7ff;
      box-shadow: 0 0 7px rgba(85,215,255,.48);
      animation: v29Wave 1s ease-in-out infinite alternate;
    }

    .v29-wave i:nth-child(2) { animation-delay: -.2s; height: 18px; }
    .v29-wave i:nth-child(3) { animation-delay: -.4s; height: 25px; }
    .v29-wave i:nth-child(4) { animation-delay: -.6s; height: 16px; }
    .v29-wave i:nth-child(5) { animation-delay: -.8s; height: 9px; }

    #aiJawadMessage {
      min-height: 72px;
      margin-top: 15px;
      color: #b8cbd0;
      font-size: .66rem;
      line-height: 1.55;
    }

    .v29-jawad-input {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 7px;
      margin-top: 12px;
    }

    .v29-jawad-input input {
      min-width: 0;
      height: 43px;
      padding: 0 12px;
      color: #eafeff;
      border: 1px solid rgba(113,221,255,.20);
      border-radius: 11px;
      background: rgba(0,0,0,.24);
      outline: none;
      font-size: .59rem;
    }

    .v29-jawad-input input:focus {
      border-color: rgba(96,218,255,.68);
      box-shadow: 0 0 0 3px rgba(65,205,255,.07);
    }

    .v29-jawad-input button {
      min-width: 75px;
      color: #061a22;
      border: 0;
      border-radius: 11px;
      background: linear-gradient(145deg, #dff8ff, #65c5e7);
      cursor: pointer;
      font-size: .54rem;
      font-weight: 1000;
    }

    .v29-prompts {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr);
      gap: 6px !important;
      margin-top: 9px !important;
    }

    .v29-prompts button {
      min-height: 31px;
      padding: 5px !important;
      color: #a9c4ca !important;
      border-color: rgba(97,214,255,.16) !important;
      background: rgba(255,255,255,.018) !important;
      font-size: .47rem !important;
    }

    .v29-prompts button:hover {
      color: #effcff !important;
      border-color: rgba(97,214,255,.52) !important;
      background: rgba(71,203,247,.07) !important;
    }

    .v29-full-coach {
      min-height: 40px;
      margin-top: 10px;
      color: #58d9ff;
      border: 1px solid rgba(92,216,255,.22);
      border-radius: 11px;
      background: rgba(53,198,244,.035);
      cursor: pointer;
      font-size: .57rem;
      font-weight: 950;
    }

    .v29-console-trust {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 5px;
      margin-top: 9px;
    }

    .v29-console-trust span {
      padding: 6px 3px;
      color: #728d93;
      border: 1px solid rgba(103,218,255,.10);
      border-radius: 8px;
      text-align: center;
      font-size: .40rem;
    }

    .v29-process-section {
      padding: 12px 0 6px;
    }

    .v29-process-ribbon {
      position: relative;
      isolation: isolate;
      display: grid;
      grid-template-columns: minmax(210px,.72fr) minmax(0,1.65fr);
      align-items: center;
      gap: 20px;
      overflow: hidden;
      padding: 17px 20px;
      border: 1px solid rgba(84,211,255,.24);
      border-radius: 19px;
      background:
        radial-gradient(circle at 8% 50%, rgba(246,198,109,.045), transparent 26%),
        linear-gradient(145deg, rgba(6,20,24,.94), rgba(2,8,10,.985));
      box-shadow: 0 16px 42px rgba(0,0,0,.30);
    }

    .v29-process-intro strong {
      display: block;
      margin-top: 6px;
      font-size: .76rem;
    }

    .v29-process-steps {
      display: grid;
      grid-template-columns: 1fr auto 1fr auto 1fr auto 1fr;
      align-items: center;
      gap: 8px;
    }

    .v29-process-steps article {
      min-height: 70px;
      display: grid;
      align-content: center;
      padding: 9px 11px;
      border: 1px solid rgba(87,211,255,.13);
      border-radius: 12px;
      background: rgba(255,255,255,.015);
    }

    .v29-process-steps b,
    .v29-process-steps span,
    .v29-process-steps small {
      display: block;
    }

    .v29-process-steps b {
      color: #f6c66d;
      font-size: .45rem;
    }

    .v29-process-steps span {
      margin-top: 2px;
      color: #f1fcfe;
      font-size: .63rem;
      font-weight: 900;
    }

    .v29-process-steps small {
      margin-top: 4px;
      color: #6f858a;
      font-size: .42rem;
      line-height: 1.25;
    }

    .v29-process-steps > i {
      color: #55d7ff;
      font-style: normal;
      font-size: .75rem;
    }

    /* Dedicated soft travelling border layer; it does not replace section backgrounds. */
    .v29-lit-shell,
    #safety > .container,
    .v29-ai-shell,
    .v29-process-ribbon {
      position: relative;
      isolation: isolate;
      border-color: rgba(88,213,255,.28) !important;
      box-shadow:
        0 20px 58px rgba(0,0,0,.34),
        0 0 0 1px rgba(86,211,255,.035) inset,
        0 0 22px rgba(42,190,242,.040) !important;
    }

    .v29-outline-glint {
      position: absolute;
      z-index: 12;
      inset: -1px;
      padding: 1px;
      pointer-events: none;
      border-radius: inherit;
      background:
        linear-gradient(
          112deg,
          transparent 7%,
          rgba(102,222,255,.20) 23%,
          rgba(102,222,255,.72) 35%,
          transparent 47%,
          rgba(246,198,109,.38) 64%,
          transparent 80%
        );
      background-size: 260% 100%;
      -webkit-mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      opacity: .60;
      animation: v29OutlineTravel 11s linear infinite;
    }

    @keyframes v29OutlineTravel {
      from { background-position: 260% 0; }
      to { background-position: -260% 0; }
    }

    @keyframes v29ConsoleShine {
      0%, 62%, 100% { transform: translateX(-135%); opacity: 0; }
      73% { opacity: .62; }
      88% { transform: translateX(135%); opacity: 0; }
    }

    @keyframes v29Pulse {
      0%,100% { transform: scale(.82); opacity: .65; }
      50% { transform: scale(1.15); opacity: 1; }
    }

    @keyframes v29Scan {
      0%,100% { top: 16%; opacity: .25; }
      50% { top: 78%; opacity: .75; }
    }

    @keyframes v29Wave {
      from { transform: scaleY(.45); opacity: .55; }
      to { transform: scaleY(1.15); opacity: 1; }
    }

    @media (max-width: 1120px) {
      .v29-ai-shell {
        grid-template-columns: 1fr;
      }

      .v29-ai-copy h1,
      .v29-ai-lead {
        max-width: 850px;
      }

      .v29-console-stage {
        max-width: 760px;
        width: 100%;
        margin: 0 auto;
      }
    }

    @media (max-width: 760px) {
      .v29-ai-section {
        padding-top: 14px;
      }

      .v29-ai-shell {
        min-height: auto;
        gap: 23px;
        padding: 20px 13px;
        border-radius: 22px;
      }

      .v29-ai-copy h1 {
        font-size: clamp(2.35rem, 12vw, 3.7rem);
      }

      .v29-benefit-grid {
        grid-template-columns: 1fr;
      }

      .v29-console-layout {
        grid-template-columns: 1fr;
      }

      .v29-portrait-panel {
        min-height: 360px;
        border-right: 0;
        border-bottom: 1px solid rgba(103,218,255,.15);
      }

      .v29-console-body {
        padding: 17px 13px;
      }

      .v29-process-ribbon {
        grid-template-columns: 1fr;
      }

      .v29-process-steps {
        grid-template-columns: 1fr 1fr;
      }

      .v29-process-steps > i {
        display: none;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .v29-outline-glint,
      .v29-ai-console::after,
      .v29-portrait-scan,
      .v29-wave i,
      .v29-online i {
        animation: none !important;
      }
    }

  
    /* V30 — compact Top Brands + laptop-fit AI Jawad section */

    /* ---------- TOP BRANDS: 20–25% more compact ---------- */
    .premium-brands-section {
      padding: 20px 0 14px !important;
    }

    .premium-brands-shell {
      padding: 18px 20px !important;
      border-radius: 23px !important;
    }

    .premium-brands-head {
      gap: 12px !important;
      margin-bottom: 10px !important;
    }

    .premium-brands-head h2 {
      margin-top: 3px !important;
      font-size: clamp(1.75rem, 3vw, 3rem) !important;
      line-height: .98 !important;
    }

    .premium-brands-head p {
      max-width: 620px !important;
      margin-top: 5px !important;
      font-size: .66rem !important;
      line-height: 1.4 !important;
    }

    .brand-carousel-controls button {
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
    }

    .brand-carousel-track {
      gap: 10px !important;
      padding: 5px 55px 7px !important;
    }

    .premium-brand-card {
      width: 154px !important;
      min-width: 154px !important;
      height: 150px !important;
      gap: 5px !important;
      padding: 12px !important;
      border-radius: 18px !important;
    }

    .real-brand-logo {
      width: 118px !important;
      height: 66px !important;
      border-radius: 14px !important;
    }

    .real-brand-logo img {
      max-width: 96px !important;
      max-height: 42px !important;
    }

    .premium-brand-card strong {
      font-size: .58rem !important;
    }

    .premium-brand-card small {
      font-size: .47rem !important;
      line-height: 1.25 !important;
    }

    .brand-carousel-note {
      margin-top: 4px !important;
      font-size: .48rem !important;
    }

    .brand-trust-grid {
      margin-top: 9px !important;
    }

    .brand-trust-grid article {
      min-height: 54px !important;
      padding: 8px 10px !important;
    }

    .brand-trust-grid article > span {
      width: 30px !important;
      height: 30px !important;
    }

    .brand-trust-grid strong {
      font-size: .56rem !important;
    }

    .brand-trust-grid small {
      margin-top: 2px !important;
      font-size: .45rem !important;
    }

    /* ---------- AI SECTION: fit normal laptop viewport ---------- */
    .v29-ai-section {
      padding: 16px 0 8px !important;
    }

    .v29-ai-shell {
      min-height: 500px !important;
      grid-template-columns: minmax(0, 1.03fr) minmax(390px, .97fr) !important;
      gap: 24px !important;
      padding: 24px 28px !important;
      border-radius: 25px !important;
    }

    .v29-ai-copy {
      min-width: 0 !important;
    }

    .v29-ai-copy h1 {
      max-width: 650px !important;
      margin-top: 8px !important;
      font-size: clamp(2.25rem, 3.75vw, 4.2rem) !important;
      line-height: .94 !important;
      letter-spacing: -.052em !important;
      overflow-wrap: normal !important;
      word-break: normal !important;
    }

    .v29-ai-copy .gradient-text {
      display: block !important;
      max-width: 650px !important;
      margin-top: 5px !important;
    }

    .v29-ai-lead {
      max-width: 610px !important;
      margin-top: 12px !important;
      font-size: .73rem !important;
      line-height: 1.48 !important;
    }

    .v29-benefit-grid {
      gap: 7px !important;
      margin-top: 14px !important;
    }

    .v29-benefit-grid article {
      min-height: 65px !important;
      grid-template-columns: 31px 1fr !important;
      gap: 8px !important;
      padding: 8px 9px !important;
      border-radius: 12px !important;
    }

    .v29-benefit-grid article > span {
      width: 29px !important;
      height: 29px !important;
      border-radius: 9px !important;
      font-size: .47rem !important;
    }

    .v29-benefit-grid strong {
      font-size: .57rem !important;
    }

    .v29-benefit-grid small {
      margin-top: 2px !important;
      font-size: .43rem !important;
    }

    .v29-ai-primary {
      min-height: 43px !important;
      margin-top: 14px !important;
      padding-inline: 17px !important;
      font-size: .62rem !important;
    }

    .v29-ai-disclaimer {
      margin-top: 7px !important;
      font-size: .43rem !important;
    }

    .v29-console-stage {
      width: 100% !important;
      max-width: 500px !important;
      justify-self: end !important;
    }

    .v29-ai-console {
      width: 100% !important;
      border-radius: 22px !important;
      transform: rotateY(-1.3deg) rotateX(.4deg) !important;
    }

    .v29-console-topbar {
      min-height: 39px !important;
      padding: 0 12px !important;
    }

    .v29-online {
      font-size: .45rem !important;
    }

    .v29-online i {
      width: 6px !important;
      height: 6px !important;
    }

    .v29-console-mode {
      font-size: .38rem !important;
    }

    .v29-console-layout {
      grid-template-columns: .76fr 1.24fr !important;
      min-height: 382px !important;
    }

    .v29-portrait-panel {
      min-height: 382px !important;
    }

    .v29-portrait-panel img {
      height: 100% !important;
      min-height: 382px !important;
      object-fit: cover !important;
      object-position: center top !important;
    }

    .v29-portrait-caption {
      padding: 11px !important;
    }

    .v29-portrait-caption strong {
      font-size: .68rem !important;
    }

    .v29-portrait-caption small {
      font-size: .42rem !important;
    }

    .v29-consultation-panel {
      padding: 15px !important;
    }

    .v29-live-label {
      font-size: .39rem !important;
    }

    .v29-consultation-panel h3 {
      margin-top: 6px !important;
      font-size: .82rem !important;
    }

    .v29-consultation-panel > p {
      margin-top: 7px !important;
      font-size: .50rem !important;
      line-height: 1.42 !important;
    }

    .v29-waveform {
      height: 25px !important;
      margin-top: 9px !important;
    }

    .v29-ai-input-row {
      margin-top: 10px !important;
      gap: 6px !important;
    }

    .v29-ai-input-row input {
      min-height: 36px !important;
      padding: 0 10px !important;
      font-size: .47rem !important;
    }

    .v29-ai-input-row button {
      min-width: 52px !important;
      min-height: 36px !important;
      font-size: .47rem !important;
    }

    .v29-prompt-row {
      gap: 5px !important;
      margin-top: 8px !important;
    }

    .v29-prompt-row button {
      min-height: 27px !important;
      padding: 0 8px !important;
      font-size: .40rem !important;
    }

    .v29-open-coach {
      min-height: 34px !important;
      margin-top: 9px !important;
      font-size: .45rem !important;
    }

    .v29-journey-line {
      gap: 4px !important;
      margin-top: 10px !important;
      padding-top: 8px !important;
    }

    .v29-journey-line span {
      font-size: .37rem !important;
    }

    /* Normal laptop widths */
    @media (min-width: 901px) and (max-width: 1280px) {
      .v29-ai-shell {
        grid-template-columns: minmax(0, 1fr) minmax(350px, .88fr) !important;
        padding: 20px 22px !important;
      }

      .v29-ai-copy h1 {
        font-size: clamp(2.1rem, 3.45vw, 3.55rem) !important;
        max-width: 570px !important;
      }

      .v29-ai-copy .gradient-text {
        max-width: 570px !important;
      }

      .v29-console-layout,
      .v29-portrait-panel {
        min-height: 350px !important;
      }

      .v29-portrait-panel img {
        min-height: 350px !important;
      }

      .premium-brand-card {
        width: 146px !important;
        min-width: 146px !important;
      }
    }

    @media (max-width: 900px) {
      .v29-ai-shell {
        grid-template-columns: 1fr !important;
        min-height: auto !important;
      }

      .v29-console-stage {
        max-width: 620px !important;
        justify-self: center !important;
      }

      .v29-ai-copy h1,
      .v29-ai-copy .gradient-text {
        max-width: 100% !important;
      }
    }


    /* REFUEL TRUST SUITE V31 — trust dashboard, expert framework, ratings, certifications and review modal */
    .trust-suite-section {
      padding: 82px 0;
      position: relative;
    }

    .trust-suite-section + .trust-suite-section { padding-top: 0; }

    .trust-suite-shell {
      position: relative;
      overflow: hidden;
      padding: clamp(24px, 4vw, 42px);
      border: 1px solid rgba(32, 238, 224, .24);
      border-radius: 28px;
      background:
        radial-gradient(circle at 8% 4%, rgba(32, 238, 224, .09), transparent 28%),
        linear-gradient(145deg, rgba(10, 28, 32, .96), rgba(3, 11, 13, .99));
      box-shadow: 0 28px 80px rgba(0, 0, 0, .34), inset 0 1px rgba(255, 255, 255, .04);
    }

    .trust-suite-shell::before {
      content: "";
      position: absolute;
      inset: 0 auto auto 8%;
      width: 52%;
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--cyan), transparent);
      box-shadow: 0 0 18px rgba(32, 238, 224, .8);
      opacity: .78;
    }

    .trust-suite-head {
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 24px;
      margin-bottom: 30px;
    }

    .trust-suite-head h2 {
      max-width: 760px;
      margin-top: 12px;
      font-size: clamp(2rem, 4vw, 3.65rem);
    }

    .trust-suite-head p {
      max-width: 560px;
      color: var(--muted);
      font-size: .9rem;
    }

    .trust-disclosure {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 11px;
      color: #b9d0d3;
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: 999px;
      background: rgba(255, 255, 255, .025);
      font-size: .68rem;
      font-weight: 800;
    }

    .trust-disclosure::before {
      content: "i";
      width: 18px;
      height: 18px;
      display: grid;
      place-items: center;
      color: #001315;
      background: var(--cyan);
      border-radius: 50%;
      font-size: .65rem;
      font-weight: 1000;
    }

    .trust-score-layout {
      display: grid;
      grid-template-columns: 230px minmax(320px, 1fr) minmax(290px, .9fr);
      align-items: center;
      gap: 30px;
    }

    .trust-score-primary {
      display: grid;
      justify-items: center;
      gap: 13px;
      padding: 22px;
      border: 1px solid var(--line);
      border-radius: 23px;
      background: rgba(255, 255, 255, .022);
    }

    .trust-score-ring {
      --ring-score: 98%;
      width: 140px;
      height: 140px;
      position: relative;
      display: grid;
      place-items: center;
      border-radius: 50%;
      background:
        radial-gradient(circle, #071619 57%, transparent 59%),
        conic-gradient(var(--cyan) 0 var(--ring-score), rgba(255,255,255,.085) var(--ring-score) 100%);
      box-shadow: 0 0 0 8px rgba(32, 238, 224, .025), 0 0 38px rgba(32, 238, 224, .14);
      isolation: isolate;
    }

    .trust-score-ring::after {
      content: "";
      position: absolute;
      inset: 7px;
      z-index: -1;
      border: 1px solid rgba(32, 238, 224, .2);
      border-radius: inherit;
    }

    .trust-score-ring strong {
      display: block;
      color: #fff;
      font-size: 2rem;
      line-height: .95;
      letter-spacing: -.05em;
      text-align: center;
    }

    .trust-score-ring small {
      display: block;
      margin-top: 7px;
      color: var(--cyan);
      font-size: .58rem;
      font-weight: 950;
      letter-spacing: .1em;
      text-transform: uppercase;
    }

    .trust-score-primary > strong { font-size: .94rem; }
    .trust-score-primary > small { color: var(--muted); text-align: center; font-size: .71rem; }

    .trust-breakdown { display: grid; gap: 16px; }

    .trust-breakdown-item {
      padding: 13px 15px;
      border: 1px solid rgba(255, 255, 255, .06);
      border-radius: 15px;
      background: rgba(0, 0, 0, .13);
    }

    .trust-breakdown-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      color: #d8e9eb;
      font-size: .77rem;
      font-weight: 850;
    }

    .trust-breakdown-top strong { color: var(--cyan-2); }

    .trust-breakdown-track {
      height: 7px;
      margin-top: 9px;
      overflow: hidden;
      border-radius: 999px;
      background: rgba(255, 255, 255, .07);
    }

    .trust-breakdown-track span {
      width: var(--bar-score);
      height: 100%;
      display: block;
      border-radius: inherit;
      background: linear-gradient(90deg, #0caeb0, var(--cyan), var(--mint));
      box-shadow: 0 0 14px rgba(32, 238, 224, .18);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .95s cubic-bezier(.2,.8,.2,1);
    }

    .trust-score-layout.is-animated .trust-breakdown-track span { transform: scaleX(1); }

    .trust-badge-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 13px;
    }

    .trust-score-badge {
      min-height: 130px;
      display: grid;
      align-content: center;
      justify-items: center;
      gap: 9px;
      padding: 14px 10px;
      border: 1px solid var(--line);
      border-radius: 18px;
      background: rgba(32, 238, 224, .035);
      text-align: center;
      transition: transform .22s ease, border-color .22s ease, background .22s ease;
    }

    .trust-score-badge:hover {
      transform: translateY(-5px);
      border-color: var(--line-strong);
      background: rgba(32, 238, 224, .065);
    }

    .trust-score-badge .badge-icon {
      width: 72px;
      height: 72px;
      display: grid;
      place-items: center;
      color: var(--cyan);
      border: 1px solid rgba(32, 238, 224, .3);
      border-radius: 22px;
      background: radial-gradient(circle, rgba(32, 238, 224, .14), rgba(32, 238, 224, .025));
      font-size: 1.65rem;
      box-shadow: inset 0 1px rgba(255,255,255,.05), 0 0 24px rgba(32,238,224,.08);
    }

    .trust-score-badge strong { font-size: .76rem; }
    .trust-score-badge small { color: var(--muted); font-size: .62rem; line-height: 1.35; }

    .expert-approval-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .expert-approval-card {
      position: relative;
      overflow: hidden;
      min-height: 410px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 26px;
      border: 1px solid var(--line);
      border-radius: 23px;
      background:
        radial-gradient(circle at 50% 0%, rgba(32, 238, 224, .09), transparent 34%),
        linear-gradient(155deg, rgba(14, 35, 40, .92), rgba(4, 14, 16, .98));
      text-align: center;
      transition: .25s ease;
    }

    .expert-approval-card:hover {
      transform: translateY(-7px);
      border-color: var(--line-strong);
      box-shadow: 0 22px 55px rgba(0,0,0,.28);
    }

    .expert-avatar {
      width: 120px;
      height: 120px;
      flex: 0 0 120px;
      display: grid;
      place-items: center;
      margin-bottom: 17px;
      overflow: hidden;
      border: 1px solid rgba(32, 238, 224, .35);
      border-radius: 34px;
      background: linear-gradient(145deg, rgba(32,238,224,.11), rgba(2,9,11,.9));
      box-shadow: 0 0 0 7px rgba(32,238,224,.025), 0 0 32px rgba(32,238,224,.1);
    }

    .expert-avatar svg { width: 88px; height: 88px; }

    .expert-title-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .expert-title-row h3 { font-size: 1.15rem; }

    .expert-verified {
      width: 22px;
      height: 22px;
      display: inline-grid;
      place-items: center;
      color: #001315;
      background: var(--cyan);
      border-radius: 50%;
      font-size: .68rem;
      font-weight: 1000;
      box-shadow: 0 0 16px rgba(32,238,224,.32);
    }

    .expert-role {
      margin-top: 7px;
      color: var(--cyan);
      font-size: .66rem;
      font-weight: 900;
      letter-spacing: .08em;
      text-transform: uppercase;
    }

    .expert-quote {
      position: relative;
      flex: 1;
      margin-top: 18px;
      padding: 19px 15px 15px;
      color: #c6d9db;
      border: 1px solid rgba(255,255,255,.06);
      border-radius: 16px;
      background: rgba(255,255,255,.022);
      font-size: .78rem;
      line-height: 1.62;
    }

    .expert-quote::before {
      content: "“";
      position: absolute;
      top: -10px;
      left: 50%;
      color: var(--cyan);
      font-size: 2.4rem;
      font-weight: 1000;
      transform: translateX(-50%);
    }

    .expert-status {
      margin-top: 16px;
      color: var(--muted);
      font-size: .63rem;
      line-height: 1.45;
    }

    .certification-strip {
      display: grid;
      grid-template-columns: minmax(250px, .82fr) minmax(0, 1.5fr);
      align-items: center;
      gap: 28px;
    }

    .certification-copy h2 { margin: 12px 0 14px; font-size: clamp(2rem, 3.7vw, 3.25rem); }
    .certification-copy p { color: var(--muted); font-size: .88rem; }

    .coa-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-top: 18px;
      color: var(--cyan);
      font-size: .78rem;
      font-weight: 900;
    }

    .coa-link:hover { color: var(--cyan-2); }

    .certification-logos {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 12px;
    }

    .certification-badge {
      min-height: 142px;
      display: grid;
      align-content: center;
      justify-items: center;
      gap: 9px;
      padding: 12px 8px;
      border: 1px solid var(--line);
      border-radius: 18px;
      background: rgba(255,255,255,.02);
      text-align: center;
      transition: .22s ease;
    }

    .certification-badge:hover {
      transform: translateY(-5px);
      border-color: var(--line-strong);
      background: rgba(32,238,224,.045);
    }

    .cert-logo {
      width: 80px;
      height: 80px;
      display: grid;
      place-items: center;
      padding: 8px;
      color: #eaffff;
      border: 1px solid rgba(32,238,224,.34);
      border-radius: 50%;
      background:
        radial-gradient(circle, rgba(32,238,224,.12), transparent 65%),
        #061316;
      box-shadow: inset 0 0 0 5px rgba(32,238,224,.025), 0 0 26px rgba(32,238,224,.07);
      font-size: .82rem;
      font-weight: 1000;
      line-height: 1.05;
      letter-spacing: -.02em;
      text-align: center;
    }

    .cert-logo.long { font-size: .55rem; letter-spacing: -.04em; }
    .certification-badge strong { font-size: .69rem; }
    .certification-badge small { color: var(--muted); font-size: .58rem; line-height: 1.3; }

    .coa-verification-details {
      margin-top: 22px;
      padding: 15px 17px;
      border: 1px solid rgba(255,255,255,.07);
      border-radius: 15px;
      background: rgba(0,0,0,.14);
    }

    .coa-verification-details summary {
      color: #dff;
      cursor: pointer;
      font-size: .78rem;
      font-weight: 900;
    }

    .coa-verification-details p {
      margin-top: 10px;
      color: var(--muted);
      font-size: .72rem;
      line-height: 1.55;
    }

    .review-cta-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 22px;
      margin-top: 25px;
      padding-top: 22px;
      border-top: 1px solid rgba(255,255,255,.065);
    }

    .review-cta-row p { color: var(--muted); font-size: .75rem; }

    .product-visual .rating-overlay {
      position: absolute;
      z-index: 5;
      right: 13px;
      bottom: 13px;
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 7px 9px;
      color: #001315;
      border: 1px solid rgba(255,255,255,.42);
      border-radius: 999px;
      background: linear-gradient(135deg, #f6c66d, #fff0b8);
      box-shadow: 0 10px 28px rgba(0,0,0,.28);
      font-size: .67rem;
      font-weight: 1000;
      pointer-events: none;
    }

    .product-visual .rating-overlay small {
      padding-left: 5px;
      border-left: 1px solid rgba(0,19,21,.22);
      font-size: .52rem;
      text-transform: uppercase;
    }

    .enhanced-rating-panel {
      display: grid;
      gap: 8px;
      margin-top: 11px;
      padding: 11px 12px;
      border: 1px solid rgba(255,255,255,.06);
      border-radius: 13px;
      background: rgba(0,0,0,.13);
    }

    .enhanced-rating-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      color: #bdd0d3;
      font-size: .61rem;
      font-weight: 800;
    }

    .verified-review-count { color: var(--cyan); }

    .review-snippet {
      color: var(--muted);
      font-size: .64rem;
      line-height: 1.45;
    }

    .review-card-button {
      justify-self: start;
      padding: 0;
      color: var(--cyan);
      background: transparent;
      border: 0;
      cursor: pointer;
      font-size: .62rem;
      font-weight: 900;
    }

    .review-card-button:hover { color: var(--cyan-2); }

    .review-backdrop {
      position: fixed;
      inset: 0;
      z-index: 144;
      display: none;
      background: rgba(0,0,0,.68);
      backdrop-filter: blur(10px);
    }

    .review-backdrop.show { display: block; }

    /* Review popup V32: always fits inside the visible browser area. */
    .review-modal {
      width: min(720px, calc(100vw - 32px));
      height: min(760px, calc(100vh - 32px));
      height: min(760px, calc(100dvh - 32px));
      max-height: calc(100vh - 32px);
      max-height: calc(100dvh - 32px);
      position: fixed;
      z-index: 145;
      top: 50%;
      left: 50%;
      display: none;
      flex-direction: column;
      overflow: hidden;
      border: 1px solid rgba(32,238,224,.3);
      border-radius: 28px;
      background: linear-gradient(145deg, rgba(15,39,44,.995), rgba(3,13,15,.998));
      box-shadow: 0 40px 110px rgba(0,0,0,.65);
      transform: translate(-50%, -47%) scale(.96);
      opacity: 0;
      transition: .24s ease;
    }

    .review-modal.show {
      display: flex;
      opacity: 1;
      transform: translate(-50%, -50%) scale(1);
    }

    .review-modal-head {
      flex: 0 0 auto;
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 18px;
      padding: 18px 22px;
      border-bottom: 1px solid var(--line);
      background: rgba(5,18,21,.96);
    }

    .review-modal-head h3 {
      margin-top: 2px;
      font-size: clamp(1.25rem, 2.4vw, 1.7rem);
    }

    .review-modal-head .icon-button {
      flex: 0 0 44px;
    }

    .review-modal-head small {
      color: var(--cyan);
      font-size: .66rem;
      font-weight: 900;
      letter-spacing: .08em;
      text-transform: uppercase;
    }

    .review-modal-body {
      flex: 1 1 auto;
      min-height: 0;
      max-height: none;
      overflow-y: auto;
      overscroll-behavior: contain;
      scrollbar-gutter: stable;
      padding: 20px 22px 22px;
    }

    .review-modal-body::-webkit-scrollbar { width: 9px; }
    .review-modal-body::-webkit-scrollbar-track { background: rgba(255,255,255,.025); }
    .review-modal-body::-webkit-scrollbar-thumb { background: rgba(32,238,224,.28); border: 2px solid transparent; border-radius: 999px; background-clip: padding-box; }

    .review-field { margin-bottom: 15px; }
    .review-field > label, .review-field > strong { display: block; margin-bottom: 9px; font-size: .78rem; }

    .review-stars {
      display: flex;
      flex-direction: row-reverse;
      justify-content: flex-end;
      gap: 6px;
    }

    .review-stars input { position: absolute; opacity: 0; pointer-events: none; }

    .review-stars label {
      color: rgba(246,198,109,.28);
      cursor: pointer;
      font-size: 2.15rem;
      line-height: 1;
      transition: transform .18s ease, color .18s ease;
    }

    .review-stars label:hover,
    .review-stars label:hover ~ label,
    .review-stars input:checked ~ label {
      color: var(--gold);
      transform: translateY(-2px);
    }

    .review-tags { display: flex; flex-wrap: wrap; gap: 8px; }

    .review-tag {
      padding: 8px 11px;
      color: #bcd1d3;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgba(255,255,255,.025);
      cursor: pointer;
      font-size: .68rem;
      font-weight: 850;
    }

    .review-tag.active {
      color: #001315;
      border-color: var(--cyan);
      background: var(--cyan);
    }

    .review-textarea {
      width: 100%;
      min-height: 92px;
      resize: vertical;
      padding: 13px 14px;
      color: white;
      border: 1px solid var(--line);
      border-radius: 14px;
      outline: none;
      background: rgba(255,255,255,.035);
    }

    .review-textarea:focus { border-color: var(--cyan); }

    .review-upload {
      min-height: 82px;
      display: grid;
      place-items: center;
      padding: 15px;
      color: #c5d9db;
      border: 1px dashed rgba(32,238,224,.35);
      border-radius: 15px;
      background: rgba(32,238,224,.025);
      cursor: pointer;
      text-align: center;
      font-size: .72rem;
    }

    .review-upload input { display: none; }
    .review-upload-preview { max-width: 180px; max-height: 120px; margin-top: 10px; border-radius: 11px; object-fit: cover; }
    .review-upload-preview[hidden], .review-upload-preview:not([src]) { display: none !important; }

    .review-incentive {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 13px 14px;
      color: #dff;
      border: 1px solid rgba(246,198,109,.22);
      border-radius: 15px;
      background: rgba(246,198,109,.055);
      font-size: .72rem;
    }

    .review-incentive span {
      width: 38px;
      height: 38px;
      flex: 0 0 38px;
      display: grid;
      place-items: center;
      color: #001315;
      border-radius: 12px;
      background: var(--gold);
      font-weight: 1000;
    }

    .review-form-actions {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-top: 16px;
      padding-top: 14px;
      border-top: 1px solid rgba(32,238,224,.12);
    }

    .review-privacy-note { color: var(--muted); font-size: .62rem; line-height: 1.4; }

    @media (max-width: 1100px) {
      .trust-score-layout { grid-template-columns: 210px 1fr; }
      .trust-badge-grid { grid-column: 1 / -1; grid-template-columns: repeat(4, 1fr); }
      .certification-strip { grid-template-columns: 1fr; }
    }

    @media (max-width: 820px) {
      .trust-suite-section { padding: 68px 0; }
      .trust-suite-head { align-items: flex-start; flex-direction: column; }
      .trust-score-layout { grid-template-columns: 1fr; }
      .trust-badge-grid { grid-column: auto; grid-template-columns: repeat(2, 1fr); }
      .expert-approval-grid { grid-template-columns: 1fr; }
      .expert-approval-card { min-height: auto; }
      .certification-logos { grid-template-columns: repeat(3, 1fr); }
      .review-cta-row { align-items: flex-start; flex-direction: column; }
    }

    @media (max-width: 560px) {
      .trust-suite-shell { padding: 21px 16px; border-radius: 22px; }
      .trust-score-primary { padding: 18px 12px; }
      .trust-score-ring { width: 140px; height: 140px; }
      .trust-badge-grid { grid-template-columns: 1fr 1fr; gap: 9px; }
      .trust-score-badge { min-height: 122px; padding: 11px 7px; }
      .trust-score-badge .badge-icon { width: 72px; height: 72px; }
      .expert-avatar { width: 120px; height: 120px; }
      .certification-logos { grid-template-columns: repeat(2, 1fr); }
      .certification-badge:last-child { grid-column: 1 / -1; }
      .cert-logo { width: 80px; height: 80px; }
      .review-modal {
        width: calc(100vw - 18px);
        height: calc(100vh - 18px);
        height: calc(100dvh - 18px);
        max-height: calc(100vh - 18px);
        max-height: calc(100dvh - 18px);
        border-radius: 22px;
      }
      .review-modal-head { padding: 15px 16px; }
      .review-modal-head .icon-button { width: 40px; height: 40px; flex-basis: 40px; }
      .review-modal-body { padding: 16px; }
      .review-stars label { font-size: 1.95rem; }
      .review-form-actions { align-items: stretch; flex-direction: column-reverse; }
      .review-form-actions .button { width: 100%; }
    }



    /* =========================================================
       REFUEL AI MOBILE PWA V3 — PORTRAIT-FIRST APP SHELL
       This override belongs only to the separate mobile package.
       ========================================================= */
    :root {
      --mobile-nav-height: 72px;
      --mobile-safe-bottom: env(safe-area-inset-bottom, 0px);
      --mobile-safe-top: env(safe-area-inset-top, 0px);
    }

    html {
      min-height: 100%;
      background: #020708;
      overscroll-behavior-y: none;
      -webkit-text-size-adjust: 100%;
    }

    body.mobile-pwa-variant {
      min-height: 100dvh;
      padding-bottom: calc(var(--mobile-nav-height) + var(--mobile-safe-bottom) + 10px);
      overscroll-behavior-y: contain;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    .mobile-app-nav,
    .mobile-orientation-lock,
    .mobile-ios-install-sheet { display: none; }

    @media (max-width: 820px) {
      body.mobile-pwa-variant {
        --container: 100%;
        background:
          radial-gradient(circle at 50% -10%, rgba(32,238,224,.12), transparent 34%),
          linear-gradient(180deg, #020708 0%, #061215 44%, #020708 100%);
      }

      body.mobile-pwa-variant .ambient-grid { opacity: .11; }
      body.mobile-pwa-variant .cursor-glow,
      body.mobile-pwa-variant .topbar,
      body.mobile-pwa-variant .mobile-menu,
      body.mobile-pwa-variant .menu-button { display: none !important; }

      body.mobile-pwa-variant .container {
        width: min(calc(100% - 24px), 560px);
      }

      body.mobile-pwa-variant header {
        top: 0;
        border-bottom-color: rgba(32,238,224,.12);
        background: rgba(2,8,10,.88);
        backdrop-filter: blur(22px) saturate(145%);
        padding-top: var(--mobile-safe-top);
      }

      body.mobile-pwa-variant .nav {
        min-height: 64px;
        gap: 12px;
      }

      body.mobile-pwa-variant .brand { gap: 9px; }
      body.mobile-pwa-variant .brand-mark { width: 40px; height: 40px; border-radius: 13px; }
      body.mobile-pwa-variant .brand-copy { font-size: .92rem; }
      body.mobile-pwa-variant .brand-copy small { display: none; }
      body.mobile-pwa-variant .nav-actions { margin-left: auto; }
      body.mobile-pwa-variant .nav-actions .icon-button {
        width: 42px;
        height: 42px;
        border-radius: 14px;
      }

      body.mobile-pwa-variant main {
        width: 100%;
        overflow: clip;
      }

      body.mobile-pwa-variant .section,
      body.mobile-pwa-variant .trust-suite-section,
      body.mobile-pwa-variant .membership-section,
      body.mobile-pwa-variant .brand-category-shop,
      body.mobile-pwa-variant .compact-goal-section,
      body.mobile-pwa-variant .premium-brands-section,
      body.mobile-pwa-variant .monthly-offer-section,
      body.mobile-pwa-variant .v29-process-section,
      body.mobile-pwa-variant .rf-history-experience {
        padding-top: 56px;
        padding-bottom: 56px;
      }

      body.mobile-pwa-variant h1 { font-size: clamp(2.7rem, 13vw, 4.25rem); }
      body.mobile-pwa-variant h2 { font-size: clamp(2rem, 9vw, 3.1rem); }
      body.mobile-pwa-variant h3 { letter-spacing: -.025em; }
      body.mobile-pwa-variant .section-head { margin-bottom: 25px; }
      body.mobile-pwa-variant .section-head p { font-size: .9rem; }

      body.mobile-pwa-variant .monthly-offer-shell,
      body.mobile-pwa-variant .v29-ai-shell,
      body.mobile-pwa-variant .trust-score-layout,
      body.mobile-pwa-variant .membership-shell,
      body.mobile-pwa-variant .safety-card,
      body.mobile-pwa-variant .rf-history-shell {
        border-radius: 24px;
      }

      body.mobile-pwa-variant .monthly-offer-grid,
      body.mobile-pwa-variant .expert-approval-grid,
      body.mobile-pwa-variant .certification-grid,
      body.mobile-pwa-variant .trust-badge-grid {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
        padding: 2px 2px 12px;
        margin-right: -12px;
      }

      body.mobile-pwa-variant .monthly-offer-grid::-webkit-scrollbar,
      body.mobile-pwa-variant .expert-approval-grid::-webkit-scrollbar,
      body.mobile-pwa-variant .certification-grid::-webkit-scrollbar,
      body.mobile-pwa-variant .trust-badge-grid::-webkit-scrollbar { display: none; }

      body.mobile-pwa-variant .monthly-offer-card,
      body.mobile-pwa-variant .expert-approval-card {
        min-width: min(84vw, 340px);
        scroll-snap-align: start;
      }

      body.mobile-pwa-variant .certification-card,
      body.mobile-pwa-variant .trust-badge-card {
        min-width: min(67vw, 260px);
        scroll-snap-align: start;
      }

      body.mobile-pwa-variant .v29-ai-grid,
      body.mobile-pwa-variant .trust-score-layout,
      body.mobile-pwa-variant .safety-grid,
      body.mobile-pwa-variant .footer-grid {
        grid-template-columns: 1fr !important;
      }

      body.mobile-pwa-variant .v29-ai-section { padding: 48px 0 42px; }
      body.mobile-pwa-variant .v29-console-stage { min-height: auto; margin-top: 18px; }
      body.mobile-pwa-variant .v29-ai-console {
        width: 100%;
        transform: none !important;
        border-radius: 24px;
      }

      body.mobile-pwa-variant .trust-score-ring { width: 140px; height: 140px; }
      body.mobile-pwa-variant .trust-score-breakdown { gap: 14px; }

      body.mobile-pwa-variant .compact-goal-grid,
      body.mobile-pwa-variant .goal-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 10px;
      }

      body.mobile-pwa-variant .compact-goal-card,
      body.mobile-pwa-variant .goal-card {
        min-height: 152px;
        padding: 16px;
        border-radius: 18px;
      }

      body.mobile-pwa-variant .shop-toolbar {
        position: sticky;
        top: calc(64px + var(--mobile-safe-top));
        z-index: 30;
        margin: 0 -12px 18px;
        padding: 12px;
        border-block: 1px solid rgba(32,238,224,.10);
        background: rgba(3,12,14,.92);
        backdrop-filter: blur(18px);
      }

      body.mobile-pwa-variant .filters {
        width: 100%;
        flex-wrap: nowrap;
        overflow-x: auto;
        scrollbar-width: none;
      }
      body.mobile-pwa-variant .filters::-webkit-scrollbar { display: none; }
      body.mobile-pwa-variant .filter-btn { flex: 0 0 auto; min-height: 40px; }

      body.mobile-pwa-variant .product-grid,
      body.mobile-pwa-variant .brand-product-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 10px;
      }

      body.mobile-pwa-variant .product-card { border-radius: 19px; }
      body.mobile-pwa-variant .product-visual { min-height: 178px; }
      body.mobile-pwa-variant .product-body { padding: 14px; }
      body.mobile-pwa-variant .product-body h3 { min-height: 39px; font-size: .91rem; }
      body.mobile-pwa-variant .product-meta { gap: 4px; }
      body.mobile-pwa-variant .meta-chip { font-size: .56rem; padding: 4px 6px; }
      body.mobile-pwa-variant .product-bottom {
        align-items: stretch;
        flex-direction: column;
        margin-top: 13px;
      }
      body.mobile-pwa-variant .product-actions { width: 100%; }
      body.mobile-pwa-variant .product-actions .square-btn { flex: 1; }
      body.mobile-pwa-variant .rating-overlay { transform: scale(.9); transform-origin: top right; }

      body.mobile-pwa-variant .membership-grid { grid-template-columns: 1fr !important; }
      body.mobile-pwa-variant .membership-card { border-radius: 22px; }

      body.mobile-pwa-variant footer { padding-bottom: calc(36px + var(--mobile-nav-height) + var(--mobile-safe-bottom)); }
      body.mobile-pwa-variant .footer-bottom { gap: 12px; }

      body.mobile-pwa-variant .cart-drawer {
        width: 100vw;
        max-width: none;
        padding: calc(18px + var(--mobile-safe-top)) 18px calc(18px + var(--mobile-safe-bottom));
        border-left: 0;
      }

      body.mobile-pwa-variant .assessment-modal,
      body.mobile-pwa-variant .review-modal {
        width: auto;
        max-width: none;
        max-height: none;
        inset: calc(8px + var(--mobile-safe-top)) 8px calc(8px + var(--mobile-safe-bottom));
        top: auto;
        left: auto;
        border-radius: 23px;
        transform: translateY(18px) scale(.985);
      }
      body.mobile-pwa-variant .assessment-modal.show,
      body.mobile-pwa-variant .review-modal.show {
        transform: translateY(0) scale(1);
      }
      body.mobile-pwa-variant .modal-body,
      body.mobile-pwa-variant .review-modal-body {
        max-height: calc(100dvh - 104px - var(--mobile-safe-top) - var(--mobile-safe-bottom));
        padding: 18px;
      }
      body.mobile-pwa-variant .review-modal-head,
      body.mobile-pwa-variant .modal-head { padding: 17px 18px; }
      body.mobile-pwa-variant .review-tags { gap: 8px; }
      body.mobile-pwa-variant .review-tag { min-height: 40px; }

      body.mobile-pwa-variant .chat-launcher { display: none; }
      body.mobile-pwa-variant .chat-panel {
        width: auto;
        height: auto;
        inset: calc(8px + var(--mobile-safe-top)) 8px calc(var(--mobile-nav-height) + var(--mobile-safe-bottom) + 8px);
        right: auto;
        bottom: auto;
        border-radius: 23px;
      }

      body.mobile-pwa-variant .install-banner {
        left: 10px;
        right: 10px;
        bottom: calc(var(--mobile-nav-height) + var(--mobile-safe-bottom) + 10px);
        width: auto;
        transform: none;
        border-radius: 19px;
      }

      .mobile-app-nav {
        height: calc(var(--mobile-nav-height) + var(--mobile-safe-bottom));
        position: fixed;
        z-index: 100;
        left: 8px;
        right: 8px;
        bottom: 8px;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        padding: 7px 7px calc(7px + var(--mobile-safe-bottom));
        background: rgba(4,15,17,.94);
        border: 1px solid rgba(32,238,224,.22);
        border-radius: 22px;
        box-shadow: 0 22px 60px rgba(0,0,0,.58), inset 0 1px rgba(255,255,255,.04);
        backdrop-filter: blur(24px) saturate(150%);
      }

      .mobile-app-nav button {
        min-width: 0;
        display: grid;
        justify-items: center;
        align-content: center;
        gap: 3px;
        color: #829da1;
        background: transparent;
        border: 0;
        border-radius: 15px;
        cursor: pointer;
      }

      .mobile-app-nav button span { font-size: 1.12rem; line-height: 1; }
      .mobile-app-nav button small { font-size: .56rem; font-weight: 900; letter-spacing: .02em; }
      .mobile-app-nav button.active {
        color: #001315;
        background: linear-gradient(135deg, var(--cyan), var(--mint));
        box-shadow: 0 8px 22px rgba(32,238,224,.18);
      }

      .mobile-ios-install-sheet {
        position: fixed;
        z-index: 240;
        inset: 0;
        align-items: flex-end;
        padding: 18px 14px calc(18px + var(--mobile-safe-bottom));
        background: rgba(0,0,0,.65);
        backdrop-filter: blur(10px);
      }
      .mobile-ios-install-sheet.show { display: flex; }
      .mobile-ios-install-card {
        width: 100%;
        padding: 22px;
        background: linear-gradient(145deg, #10272c, #061316);
        border: 1px solid rgba(32,238,224,.28);
        border-radius: 24px;
        box-shadow: 0 30px 90px rgba(0,0,0,.62);
      }
      .mobile-ios-install-card h3 { margin-bottom: 8px; }
      .mobile-ios-install-card p { color: var(--muted); font-size: .88rem; }
      .mobile-ios-install-steps { display: grid; gap: 10px; margin: 17px 0; }
      .mobile-ios-install-steps div {
        display: grid;
        grid-template-columns: 34px 1fr;
        align-items: center;
        gap: 10px;
        padding: 11px;
        background: rgba(255,255,255,.03);
        border: 1px solid rgba(255,255,255,.07);
        border-radius: 14px;
      }
      .mobile-ios-install-steps b {
        width: 34px;
        height: 34px;
        display: grid;
        place-items: center;
        color: #001315;
        background: var(--cyan);
        border-radius: 11px;
      }
      .mobile-ios-install-card .button { width: 100%; }
    }

    @media (max-width: 374px) {
      body.mobile-pwa-variant .product-grid,
      body.mobile-pwa-variant .brand-product-grid { grid-template-columns: 1fr !important; }
      body.mobile-pwa-variant .product-visual { min-height: 220px; }
      .mobile-app-nav button small { font-size: .51rem; }
    }

    @media (orientation: landscape) and (max-width: 1000px) {
      .mobile-orientation-lock {
        position: fixed;
        z-index: 9999;
        inset: 0;
        display: grid;
        place-items: center;
        padding: 28px;
        color: white;
        background:
          radial-gradient(circle at 50% 30%, rgba(32,238,224,.16), transparent 35%),
          #020708;
        text-align: center;
      }
      .mobile-orientation-lock-card {
        width: min(430px, 100%);
        padding: 28px;
        border: 1px solid rgba(32,238,224,.28);
        border-radius: 25px;
        background: rgba(8,24,27,.92);
        box-shadow: 0 30px 90px rgba(0,0,0,.62);
      }
      .mobile-orientation-lock-icon { font-size: 2.4rem; }
      .mobile-orientation-lock h2 { margin: 10px 0 7px; font-size: 1.9rem; }
      .mobile-orientation-lock p { color: var(--muted); }
    }

    /* A centered phone-preview frame when this mobile package is opened on a laptop. */
    @media (min-width: 821px) {
      body.mobile-pwa-variant {
        max-width: 520px;
        margin-inline: auto;
        border-inline: 1px solid rgba(32,238,224,.10);
        box-shadow: 0 0 100px rgba(0,0,0,.55);
      }
      body.mobile-pwa-variant .topbar,
      body.mobile-pwa-variant .nav-links,
      body.mobile-pwa-variant .menu-button,
      body.mobile-pwa-variant .cursor-glow { display: none !important; }
      body.mobile-pwa-variant .container { width: calc(100% - 24px); }
      body.mobile-pwa-variant header { max-width: 520px; margin-inline: auto; }
      body.mobile-pwa-variant .product-grid,
      body.mobile-pwa-variant .brand-product-grid { grid-template-columns: repeat(2, minmax(0,1fr)) !important; }
      body.mobile-pwa-variant .v29-ai-grid,
      body.mobile-pwa-variant .safety-grid,
      body.mobile-pwa-variant .footer-grid { grid-template-columns: 1fr !important; }
      .mobile-app-nav { max-width: 500px; margin-inline: auto; display: grid; }
    }


    /* =========================================================
       REFUEL AI MOBILE PWA V2 — PRODUCT CARD WIDTH FIX
       One complete product card per row on Android and iPhone.
       ========================================================= */
    @media (max-width: 820px) {
      body.mobile-pwa-variant,
      body.mobile-pwa-variant main,
      body.mobile-pwa-variant #shop,
      body.mobile-pwa-variant .brand-category-shell,
      body.mobile-pwa-variant #productGrid {
        max-width: 100% !important;
        overflow-x: hidden !important;
      }

      body.mobile-pwa-variant #shop {
        scroll-margin-top: calc(76px + var(--mobile-safe-top));
        padding-bottom: 26px;
      }

      body.mobile-pwa-variant #productGrid.product-grid,
      body.mobile-pwa-variant #productGrid.brand-product-grid {
        display: grid !important;
        grid-template-columns: minmax(0, 1fr) !important;
        align-items: stretch !important;
        width: 100% !important;
        gap: 16px !important;
      }

      body.mobile-pwa-variant #productGrid .real-product-card {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        min-width: 0 !important;
        min-height: 0 !important;
        margin: 0 !important;
        overflow: hidden !important;
        border-radius: 22px !important;
        transform: none !important;
      }

      body.mobile-pwa-variant #productGrid .real-product-card:hover {
        transform: none !important;
      }

      body.mobile-pwa-variant #productGrid .real-product-visual {
        width: 100% !important;
        min-width: 0 !important;
        min-height: 250px !important;
        height: 250px !important;
        padding: 28px 18px 14px !important;
      }

      body.mobile-pwa-variant #productGrid .real-product-image {
        width: auto !important;
        max-width: min(72%, 235px) !important;
        max-height: 218px !important;
        object-fit: contain !important;
      }

      body.mobile-pwa-variant #productGrid .product-body {
        width: 100% !important;
        min-width: 0 !important;
        padding: 18px !important;
        justify-content: flex-start !important;
      }

      body.mobile-pwa-variant #productGrid .product-body > *,
      body.mobile-pwa-variant #productGrid .product-bottom > * {
        min-width: 0 !important;
      }

      body.mobile-pwa-variant #productGrid .product-body h3 {
        min-height: 0 !important;
        margin: 7px 0 6px !important;
        font-size: 1.12rem !important;
        line-height: 1.18 !important;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #productGrid .rating {
        font-size: .77rem !important;
        line-height: 1.5;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #productGrid .product-meta {
        margin-top: 11px !important;
        gap: 7px !important;
      }

      body.mobile-pwa-variant #productGrid .meta-chip {
        max-width: 100%;
        padding: 6px 9px !important;
        font-size: .64rem !important;
        white-space: normal;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #productGrid .product-bottom {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 12px !important;
        width: 100% !important;
        margin-top: 17px !important;
      }

      body.mobile-pwa-variant #productGrid .price {
        flex: 1 1 auto;
      }

      body.mobile-pwa-variant #productGrid .price strong {
        font-size: 1rem !important;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #productGrid .price small {
        display: block;
        margin-top: 2px;
        font-size: .62rem !important;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #productGrid .product-actions {
        width: auto !important;
        flex: 0 0 auto;
        gap: 8px !important;
      }

      body.mobile-pwa-variant #productGrid .product-actions .square-btn,
      body.mobile-pwa-variant #productGrid .real-product-card .square-btn {
        width: 44px !important;
        height: 44px !important;
        flex: 0 0 44px !important;
        border-radius: 13px !important;
      }

      body.mobile-pwa-variant #productGrid .rating-overlay {
        transform: none !important;
        transform-origin: top right;
      }

      body.mobile-pwa-variant #productGrid .product-badge {
        top: 14px !important;
        left: 14px !important;
      }

      body.mobile-pwa-variant #productGrid .real-product-card > .product-badge + .real-product-visual .product-brand-corner {
        top: 49px !important;
      }

      body.mobile-pwa-variant .install-banner {
        gap: 9px !important;
        padding: 10px !important;
      }

      body.mobile-pwa-variant .install-banner .brand-mark {
        width: 44px !important;
        height: 44px !important;
        flex: 0 0 44px !important;
      }

      body.mobile-pwa-variant .install-banner p {
        min-width: 0;
        font-size: .75rem !important;
        line-height: 1.35;
      }

      body.mobile-pwa-variant .install-banner .button,
      body.mobile-pwa-variant .install-banner .icon-button {
        min-height: 42px !important;
      }
    }

    @media (max-width: 390px) {
      body.mobile-pwa-variant #productGrid .real-product-visual {
        min-height: 228px !important;
        height: 228px !important;
      }

      body.mobile-pwa-variant #productGrid .real-product-image {
        max-width: min(76%, 210px) !important;
        max-height: 198px !important;
      }

      body.mobile-pwa-variant #productGrid .product-body {
        padding: 16px !important;
      }

      body.mobile-pwa-variant #productGrid .product-bottom {
        gap: 9px !important;
      }
    }

  

    /* =========================================================
       REFUEL AI MOBILE PWA V3 — NATIVE APP HEADER + FULL RESCALE
       Moves the five app controls into a compact top app bar and
       rebuilds wide desktop sections for a true phone viewport.
       ========================================================= */
    @media (max-width: 820px) {
      :root {
        --mobile-header-height: 62px;
        --mobile-nav-height: 52px;
        --mobile-appbar-height: calc(var(--mobile-header-height) + var(--mobile-nav-height) + var(--mobile-safe-top));
      }

      html,
      body.mobile-pwa-variant {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden !important;
      }

      body.mobile-pwa-variant {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }

      body.mobile-pwa-variant header {
        position: fixed !important;
        z-index: 120 !important;
        inset: 0 0 auto 0 !important;
        width: 100% !important;
        min-height: calc(var(--mobile-header-height) + var(--mobile-safe-top));
        margin: 0 !important;
        padding-top: var(--mobile-safe-top) !important;
        border-bottom: 1px solid rgba(32,238,224,.13) !important;
        background: rgba(2,8,10,.96) !important;
        box-shadow: 0 10px 30px rgba(0,0,0,.28);
        backdrop-filter: blur(24px) saturate(155%);
      }

      body.mobile-pwa-variant header .container,
      body.mobile-pwa-variant header .nav {
        width: 100% !important;
        max-width: none !important;
      }

      body.mobile-pwa-variant .nav {
        min-height: var(--mobile-header-height) !important;
        padding: 0 14px !important;
      }

      body.mobile-pwa-variant .brand-mark {
        width: 38px !important;
        height: 38px !important;
        border-radius: 12px !important;
      }

      body.mobile-pwa-variant .brand-copy {
        font-size: .78rem !important;
        white-space: nowrap;
      }

      body.mobile-pwa-variant .nav-actions .icon-button {
        width: 40px !important;
        height: 40px !important;
        border-radius: 13px !important;
      }

      .mobile-app-nav {
        position: fixed !important;
        z-index: 119 !important;
        top: calc(var(--mobile-header-height) + var(--mobile-safe-top)) !important;
        right: 0 !important;
        bottom: auto !important;
        left: 0 !important;
        width: 100% !important;
        height: var(--mobile-nav-height) !important;
        display: grid !important;
        grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        gap: 3px !important;
        margin: 0 !important;
        padding: 4px 8px !important;
        border: 0 !important;
        border-bottom: 1px solid rgba(32,238,224,.14) !important;
        border-radius: 0 !important;
        background: rgba(3,12,14,.965) !important;
        box-shadow: 0 12px 28px rgba(0,0,0,.34) !important;
        backdrop-filter: blur(22px) saturate(150%);
      }

      .mobile-app-nav button {
        min-height: 42px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
        padding: 0 5px !important;
        color: #789499 !important;
        border: 1px solid transparent !important;
        border-radius: 11px !important;
        background: transparent !important;
      }

      .mobile-app-nav button span {
        font-size: .94rem !important;
      }

      .mobile-app-nav button small {
        font-size: .54rem !important;
        font-weight: 950 !important;
        letter-spacing: .025em !important;
      }

      .mobile-app-nav button.active {
        color: #8afff6 !important;
        border-color: rgba(32,238,224,.22) !important;
        background: rgba(32,238,224,.095) !important;
        box-shadow: inset 0 -2px 0 rgba(32,238,224,.86) !important;
      }

      body.mobile-pwa-variant main {
        width: 100% !important;
        padding-top: var(--mobile-appbar-height) !important;
        overflow-x: hidden !important;
      }

      body.mobile-pwa-variant .container {
        width: calc(100% - 20px) !important;
        max-width: 560px !important;
        min-width: 0 !important;
        margin-inline: auto !important;
      }

      body.mobile-pwa-variant section,
      body.mobile-pwa-variant footer,
      body.mobile-pwa-variant .v29-lit-shell,
      body.mobile-pwa-variant .monthly-offer-shell,
      body.mobile-pwa-variant .premium-brands-shell,
      body.mobile-pwa-variant .v29-ai-shell,
      body.mobile-pwa-variant .compact-goal-shell,
      body.mobile-pwa-variant .brand-category-shell,
      body.mobile-pwa-variant .membership-shell,
      body.mobile-pwa-variant .rf-history-wrap,
      body.mobile-pwa-variant #safety > .container {
        max-width: 100% !important;
        min-width: 0 !important;
      }

      body.mobile-pwa-variant .section,
      body.mobile-pwa-variant .trust-suite-section,
      body.mobile-pwa-variant .membership-section,
      body.mobile-pwa-variant .brand-category-shop,
      body.mobile-pwa-variant .compact-goal-section,
      body.mobile-pwa-variant .premium-brands-section,
      body.mobile-pwa-variant .monthly-offer-section,
      body.mobile-pwa-variant .v29-process-section,
      body.mobile-pwa-variant .rf-history-experience {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
        overflow-x: clip !important;
        scroll-margin-top: calc(var(--mobile-appbar-height) + 8px) !important;
      }

      body.mobile-pwa-variant h1 {
        font-size: clamp(2.25rem, 10.5vw, 3.25rem) !important;
        line-height: .98 !important;
      }

      body.mobile-pwa-variant h2 {
        font-size: clamp(1.8rem, 7.8vw, 2.45rem) !important;
        line-height: 1.02 !important;
      }

      body.mobile-pwa-variant .section-head {
        margin-bottom: 22px !important;
      }

      body.mobile-pwa-variant .section-head p,
      body.mobile-pwa-variant .v29-ai-lead,
      body.mobile-pwa-variant .stack-builder-intro {
        font-size: .84rem !important;
        line-height: 1.58 !important;
      }

      body.mobile-pwa-variant .button {
        min-height: 47px;
      }

      body.mobile-pwa-variant .monthly-offer-shell,
      body.mobile-pwa-variant .premium-brands-shell,
      body.mobile-pwa-variant .v29-ai-shell,
      body.mobile-pwa-variant .compact-goal-shell,
      body.mobile-pwa-variant .brand-category-shell,
      body.mobile-pwa-variant .membership-shell,
      body.mobile-pwa-variant #safety > .container {
        border-radius: 20px !important;
      }

      body.mobile-pwa-variant .v29-ai-shell {
        min-height: 0 !important;
        padding: 20px !important;
      }

      body.mobile-pwa-variant .v29-ai-grid,
      body.mobile-pwa-variant .v29-benefit-grid,
      body.mobile-pwa-variant .profile-input-preview,
      body.mobile-pwa-variant .hero-goal-grid {
        grid-template-columns: 1fr !important;
      }

      body.mobile-pwa-variant .v29-benefit-grid {
        gap: 9px !important;
      }

      body.mobile-pwa-variant .v29-benefit-grid article {
        min-height: 72px !important;
      }

      body.mobile-pwa-variant .v29-ai-copy h1 {
        font-size: clamp(2.2rem, 10vw, 3rem) !important;
      }

      body.mobile-pwa-variant .v29-console-stage,
      body.mobile-pwa-variant .ai-jawad-stage,
      body.mobile-pwa-variant .hero-visual {
        min-height: 0 !important;
      }

      body.mobile-pwa-variant .shop-toolbar {
        top: var(--mobile-appbar-height) !important;
        margin-inline: -10px !important;
      }

      body.mobile-pwa-variant #home,
      body.mobile-pwa-variant #shop,
      body.mobile-pwa-variant #trustScore,
      body.mobile-pwa-variant #history {
        scroll-margin-top: calc(var(--mobile-appbar-height) + 12px) !important;
      }

      body.mobile-pwa-variant .install-banner {
        bottom: calc(10px + var(--mobile-safe-bottom)) !important;
        padding: 9px !important;
        border-radius: 17px !important;
      }

      body.mobile-pwa-variant .chat-panel {
        inset: calc(var(--mobile-appbar-height) + 8px) 8px calc(8px + var(--mobile-safe-bottom)) !important;
      }

      body.mobile-pwa-variant footer {
        padding-bottom: calc(30px + var(--mobile-safe-bottom)) !important;
      }

      /* Our History: rebuild the cinematic desktop composition as a true app card. */
      body.mobile-pwa-variant .rf-history-experience {
        padding-top: 26px !important;
      }

      body.mobile-pwa-variant .rf-history-wrap {
        width: calc(100% - 20px) !important;
        gap: 12px !important;
        overflow: hidden !important;
      }

      body.mobile-pwa-variant .rf-history-hero {
        min-height: 0 !important;
        display: flex !important;
        flex-direction: column !important;
        overflow: hidden !important;
        border-radius: 20px !important;
      }

      body.mobile-pwa-variant .rf-history-hero-media {
        order: 1;
        grid-column: auto !important;
        width: 100% !important;
        min-height: 230px !important;
        height: 230px !important;
      }

      body.mobile-pwa-variant .rf-history-hero-media img {
        width: 100% !important;
        height: 100% !important;
        object-position: center 44% !important;
      }

      body.mobile-pwa-variant .rf-history-hero-shade {
        background: linear-gradient(0deg, rgba(3,5,6,.76), transparent 66%) !important;
      }

      body.mobile-pwa-variant .rf-history-hero-copy {
        order: 2;
        position: relative !important;
        inset: auto !important;
        width: 100% !important;
        padding: 20px 18px 19px !important;
        transform: none !important;
      }

      body.mobile-pwa-variant .rf-history-kicker {
        font-size: .56rem !important;
      }

      body.mobile-pwa-variant .rf-history-hero-copy h2 {
        margin-top: 8px !important;
        font-size: clamp(2.55rem, 12vw, 3.35rem) !important;
        line-height: .92 !important;
      }

      body.mobile-pwa-variant .rf-history-hero-copy h3 {
        margin-top: 13px !important;
        font-size: .92rem !important;
      }

      body.mobile-pwa-variant .rf-history-hero-copy p {
        max-width: 100% !important;
        font-size: .76rem !important;
        line-height: 1.55 !important;
      }

      body.mobile-pwa-variant .rf-history-hero-actions {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 8px !important;
      }

      body.mobile-pwa-variant .rf-history-primary,
      body.mobile-pwa-variant .rf-history-secondary {
        width: 100% !important;
        min-height: 48px !important;
        font-size: .69rem !important;
      }

      body.mobile-pwa-variant .rf-history-hero-brand {
        top: 12px !important;
        right: 12px !important;
        bottom: auto !important;
        padding: 7px !important;
      }

      body.mobile-pwa-variant .rf-history-hero-brand img {
        width: 38px !important;
        height: 38px !important;
      }

      body.mobile-pwa-variant .rf-history-timeline {
        padding: 14px !important;
        overflow: hidden !important;
      }

      body.mobile-pwa-variant .rf-history-nodes {
        grid-template-columns: repeat(5, 72px) !important;
        gap: 4px !important;
        overflow-x: auto !important;
        padding-bottom: 7px !important;
      }

      body.mobile-pwa-variant .rf-history-node {
        padding-inline: 2px !important;
      }

      body.mobile-pwa-variant .rf-history-node strong {
        font-size: .69rem !important;
      }

      body.mobile-pwa-variant .rf-history-node small {
        font-size: .42rem !important;
      }

      body.mobile-pwa-variant .rf-history-chapter {
        min-height: 0 !important;
        grid-template-columns: 1fr !important;
        gap: 8px !important;
        padding: 13px !important;
      }

      body.mobile-pwa-variant .rf-history-chapter > span {
        text-align: left !important;
      }

      body.mobile-pwa-variant .rf-history-chapter strong {
        font-size: .75rem !important;
      }

      body.mobile-pwa-variant .rf-history-chapter p {
        font-size: .62rem !important;
      }

      body.mobile-pwa-variant .rf-history-chapter em {
        grid-column: auto !important;
        justify-self: start !important;
      }

      body.mobile-pwa-variant .rf-history-grid {
        grid-template-columns: minmax(0, 1fr) !important;
        gap: 11px !important;
      }

      body.mobile-pwa-variant .rf-history-place,
      body.mobile-pwa-variant .rf-history-resources {
        width: 100% !important;
        min-width: 0 !important;
        grid-column: auto !important;
        border-radius: 16px !important;
      }

      body.mobile-pwa-variant .rf-history-place {
        grid-template-rows: auto 190px !important;
      }

      body.mobile-pwa-variant .rf-history-place > img {
        width: 100% !important;
        height: 190px !important;
      }

      body.mobile-pwa-variant .rf-history-resource-grid {
        grid-template-columns: 1fr !important;
      }

      body.mobile-pwa-variant .rf-history-trust {
        min-height: 0 !important;
        grid-template-columns: 52px minmax(0, 1fr) !important;
        gap: 12px !important;
        padding: 14px !important;
      }

      body.mobile-pwa-variant .rf-history-trust-icon {
        width: 50px !important;
        height: 50px !important;
      }

      body.mobile-pwa-variant .rf-history-trust-copy {
        min-width: 0 !important;
      }

      body.mobile-pwa-variant .rf-history-proof-list {
        grid-column: 1 / -1 !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        width: 100% !important;
        overflow: visible !important;
        padding-top: 8px !important;
      }

      body.mobile-pwa-variant .rf-history-proof-list span {
        min-width: 0 !important;
        min-height: 62px !important;
        border-right: 0 !important;
        border-bottom: 1px solid rgba(255,255,255,.06);
      }

      body.mobile-pwa-variant .rf-history-since-badge {
        grid-column: 1 / -1 !important;
        min-height: 80px !important;
      }

      /* Prevent every remaining desktop panel from leaking outside the phone. */
      body.mobile-pwa-variant .bundle-shell,
      body.mobile-pwa-variant .trust-grid,
      body.mobile-pwa-variant .experience-grid,
      body.mobile-pwa-variant .goal-grid,
      body.mobile-pwa-variant .product-grid,
      body.mobile-pwa-variant .brand-strip,
      body.mobile-pwa-variant .safety-grid,
      body.mobile-pwa-variant .footer-grid,
      body.mobile-pwa-variant .membership-grid,
      body.mobile-pwa-variant .trust-score-layout,
      body.mobile-pwa-variant .v29-ai-grid {
        width: 100% !important;
        min-width: 0 !important;
      }

      body.mobile-pwa-variant img,
      body.mobile-pwa-variant video,
      body.mobile-pwa-variant canvas,
      body.mobile-pwa-variant svg {
        max-width: 100%;
      }
    }

    @media (max-width: 390px) {
      .mobile-app-nav button {
        gap: 3px !important;
        padding-inline: 3px !important;
      }

      .mobile-app-nav button span {
        font-size: .86rem !important;
      }

      .mobile-app-nav button small {
        font-size: .49rem !important;
      }

      body.mobile-pwa-variant .rf-history-hero-media {
        min-height: 210px !important;
        height: 210px !important;
      }

      body.mobile-pwa-variant .rf-history-hero-copy {
        padding: 17px 15px 16px !important;
      }
    }

  

    /* =========================================================
       REFUEL AI MOBILE PWA V4 — INSTALL LOGO + COMPACT FILTERS
       Uses the real Refuel brand mark in the install prompt and
       reduces oversized brand/category controls on phone screens.
       ========================================================= */
    .install-app-icon {
      width: 56px;
      height: 56px;
      flex: 0 0 56px;
      display: grid;
      place-items: center;
      overflow: hidden;
      border: 1px solid rgba(32,238,224,.22);
      border-radius: 16px;
      background: #020708;
      box-shadow: inset 0 1px rgba(255,255,255,.04), 0 10px 26px rgba(0,0,0,.30);
    }

    @media (max-width: 820px) {
      body.mobile-pwa-variant .install-banner {
        gap: 10px !important;
        min-height: 70px !important;
        padding: 9px 10px !important;
      }

      body.mobile-pwa-variant .install-app-icon {
        width: 50px !important;
        height: 50px !important;
        flex-basis: 50px !important;
        border-radius: 14px !important;
      }

      body.mobile-pwa-variant .install-banner p {
        flex: 1 1 auto !important;
        min-width: 0 !important;
        font-size: .73rem !important;
        line-height: 1.28 !important;
      }

      body.mobile-pwa-variant .install-banner p strong {
        display: block;
        font-size: .82rem !important;
        line-height: 1.2 !important;
      }

      body.mobile-pwa-variant .install-banner p small {
        margin-top: 3px !important;
        font-size: .62rem !important;
        line-height: 1.28 !important;
      }

      body.mobile-pwa-variant .install-banner .button {
        min-height: 42px !important;
        padding-inline: 16px !important;
        border-radius: 13px !important;
        font-size: .74rem !important;
      }

      body.mobile-pwa-variant .install-banner .icon-button {
        width: 42px !important;
        height: 42px !important;
        flex: 0 0 42px !important;
        min-height: 42px !important;
        border-radius: 13px !important;
      }

      body.mobile-pwa-variant .brand-shop-grid {
        display: flex !important;
        grid-template-columns: none !important;
        gap: 8px !important;
        width: 100% !important;
        margin-top: 14px !important;
        padding: 1px 1px 7px !important;
        overflow-x: auto !important;
        overflow-y: hidden !important;
        scroll-snap-type: x proximity !important;
        scrollbar-width: none !important;
      }

      body.mobile-pwa-variant .brand-shop-grid::-webkit-scrollbar {
        display: none !important;
      }

      body.mobile-pwa-variant .brand-shop-button {
        flex: 0 0 132px !important;
        width: 132px !important;
        min-width: 132px !important;
        min-height: 58px !important;
        grid-template-columns: 42px minmax(0,1fr) !important;
        gap: 8px !important;
        padding: 8px !important;
        border-radius: 13px !important;
        scroll-snap-align: start !important;
        transform: none !important;
      }

      body.mobile-pwa-variant .brand-shop-button:hover,
      body.mobile-pwa-variant .brand-shop-button.active {
        transform: none !important;
      }

      body.mobile-pwa-variant .brand-shop-logo {
        width: 42px !important;
        height: 38px !important;
        padding: 4px !important;
        border-radius: 10px !important;
      }

      body.mobile-pwa-variant .brand-shop-logo img {
        max-width: 100% !important;
        max-height: 27px !important;
      }

      body.mobile-pwa-variant .brand-wordmark {
        font-size: .50rem !important;
      }

      body.mobile-pwa-variant .brand-shop-button strong {
        overflow: hidden;
        font-size: .61rem !important;
        line-height: 1.15 !important;
        text-overflow: ellipsis;
        white-space: nowrap;
      }

      body.mobile-pwa-variant .brand-shop-button small {
        margin-top: 2px !important;
        font-size: .50rem !important;
        line-height: 1.15 !important;
      }

      body.mobile-pwa-variant .category-shop-toolbar {
        gap: 10px !important;
        margin: 10px 0 15px !important;
        padding: 10px !important;
        border-radius: 14px !important;
      }

      body.mobile-pwa-variant .category-shop-filters {
        gap: 6px !important;
      }

      body.mobile-pwa-variant .category-shop-button {
        min-height: 32px !important;
        padding: 0 10px !important;
        border-radius: 999px !important;
        font-size: .56rem !important;
        line-height: 1 !important;
      }

      body.mobile-pwa-variant .shop-result-summary {
        min-width: 0 !important;
      }
    }

    @media (max-width: 390px) {
      body.mobile-pwa-variant .install-app-icon {
        width: 46px !important;
        height: 46px !important;
        flex-basis: 46px !important;
      }

      body.mobile-pwa-variant .install-banner .button {
        padding-inline: 13px !important;
      }

      body.mobile-pwa-variant .brand-shop-button {
        flex-basis: 122px !important;
        width: 122px !important;
        min-width: 122px !important;
      }

      body.mobile-pwa-variant .category-shop-button {
        min-height: 30px !important;
        padding-inline: 9px !important;
        font-size: .53rem !important;
      }
    }


    /* =========================================================
       REFUEL AI MOBILE PWA V5 — TRUE TAB APP SHELL
       Converts the long scrolling web page into separate app
       screens. Only the selected tab is visible; each screen has
       its own contained scroll area like a native mobile app.
       ========================================================= */
    @media (max-width: 820px) {
      :root {
        --v5-app-header: calc(62px + var(--mobile-safe-top));
        --v5-app-nav: calc(68px + var(--mobile-safe-bottom));
      }

      body.mobile-pwa-variant.app-shell-mode {
        width: 100% !important;
        height: 100% !important;
        min-height: 100% !important;
        overflow: hidden !important;
        overscroll-behavior: none !important;
      }

      body.mobile-pwa-variant.app-shell-mode {
        position: fixed !important;
        inset: 0 !important;
        padding: 0 !important;
        background: #020708 !important;
      }

      body.mobile-pwa-variant.app-shell-mode header {
        top: 0 !important;
        bottom: auto !important;
        z-index: 180 !important;
      }

      body.mobile-pwa-variant.app-shell-mode main {
        position: fixed !important;
        z-index: 1 !important;
        top: var(--v5-app-header) !important;
        right: 0 !important;
        bottom: var(--v5-app-nav) !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        padding: 0 !important;
        overflow: hidden !important;
        background:
          radial-gradient(circle at 20% 5%, rgba(32,238,224,.08), transparent 34%),
          linear-gradient(180deg, #020708, #041012) !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen {
        position: absolute;
        inset: 0;
        display: none;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        overscroll-behavior-y: contain;
        -webkit-overflow-scrolling: touch;
        scroll-behavior: auto;
        scrollbar-width: none;
        opacity: 0;
        transform: translateX(18px);
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen::-webkit-scrollbar {
        display: none;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen.active {
        display: block;
        opacity: 1;
        transform: translateX(0);
        animation: v5ScreenIn .24s ease both;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen > section:first-child {
        padding-top: 18px !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen > section:last-child {
        padding-bottom: 28px !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .trust-suite-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .membership-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .brand-category-shop,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .compact-goal-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .premium-brands-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .monthly-offer-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .v29-process-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .rf-history-experience,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .v29-ai-section,
      body.mobile-pwa-variant.app-shell-mode .mobile-app-screen .trust-wrap {
        padding-top: 22px !important;
        padding-bottom: 22px !important;
        scroll-margin-top: 0 !important;
      }

      body.mobile-pwa-variant.app-shell-mode footer {
        display: none !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-nav {
        position: fixed !important;
        z-index: 185 !important;
        top: auto !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: var(--v5-app-nav) !important;
        display: grid !important;
        grid-template-columns: repeat(5, minmax(0,1fr)) !important;
        gap: 4px !important;
        padding: 7px 8px calc(7px + var(--mobile-safe-bottom)) !important;
        border: 0 !important;
        border-top: 1px solid rgba(32,238,224,.20) !important;
        border-radius: 20px 20px 0 0 !important;
        background: rgba(2,10,12,.98) !important;
        box-shadow: 0 -16px 38px rgba(0,0,0,.45) !important;
        backdrop-filter: blur(24px) saturate(160%);
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-nav button {
        min-height: 48px !important;
        flex-direction: column !important;
        gap: 2px !important;
        padding: 4px 3px !important;
        border-radius: 14px !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-nav button span {
        font-size: 1rem !important;
        line-height: 1 !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-nav button small {
        font-size: .56rem !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-app-nav button.active {
        color: #001315 !important;
        border-color: transparent !important;
        background: linear-gradient(135deg, var(--cyan), var(--mint)) !important;
        box-shadow: 0 10px 24px rgba(32,238,224,.18) !important;
      }

      body.mobile-pwa-variant.app-shell-mode .shop-toolbar {
        top: 0 !important;
      }

      body.mobile-pwa-variant.app-shell-mode .install-banner {
        z-index: 205 !important;
        bottom: calc(var(--v5-app-nav) + 8px) !important;
        width: calc(100% - 20px) !important;
        max-width: 540px !important;
      }

      body.mobile-pwa-variant.app-shell-mode .chat-launcher {
        display: none !important;
      }

      body.mobile-pwa-variant.app-shell-mode .chat-panel {
        z-index: 240 !important;
        top: var(--v5-app-header) !important;
        right: 0 !important;
        bottom: var(--v5-app-nav) !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        max-width: none !important;
        border: 0 !important;
        border-radius: 0 !important;
        transform: translateY(18px) scale(.99) !important;
      }

      body.mobile-pwa-variant.app-shell-mode .chat-panel.open {
        transform: translateY(0) scale(1) !important;
      }

      body.mobile-pwa-variant.app-shell-mode .cart-drawer {
        z-index: 245 !important;
        top: var(--v5-app-header) !important;
        right: 0 !important;
        bottom: var(--v5-app-nav) !important;
        left: 0 !important;
        width: 100% !important;
        height: auto !important;
        padding: 18px !important;
        border-left: 0 !important;
        border-radius: 0 !important;
      }

      body.mobile-pwa-variant.app-shell-mode .drawer-backdrop,
      body.mobile-pwa-variant.app-shell-mode .modal-backdrop {
        z-index: 230 !important;
      }

      body.mobile-pwa-variant.app-shell-mode .assessment-modal,
      body.mobile-pwa-variant.app-shell-mode .review-modal {
        z-index: 250 !important;
      }

      body.mobile-pwa-variant.app-shell-mode .mobile-screen-sentinel {
        width: 1px;
        height: 1px;
        pointer-events: none;
      }

      @keyframes v5ScreenIn {
        from { opacity: 0; transform: translateX(18px); }
        to { opacity: 1; transform: translateX(0); }
      }
    }



    /* REFUEL AI MOBILE PWA V16 — exact RF asset extracted from uploaded V12 package */
    .brand-mark.brand-mark-image {
      background: transparent !important;
      border: 0 !important;
      box-shadow: none !important;
      overflow: visible !important;
      padding: 0 !important;
    }
    .brand-mark.brand-mark-image::after { display: none !important; }
    .brand-mark.brand-mark-image img {
      width: 100% !important;
      height: 100% !important;
      object-fit: contain !important;
      object-position: center !important;
      transform: none !important;
      filter: none !important;
      padding: 2px !important;
    }
    .install-app-icon {
      background: transparent !important;
      border: 0 !important;
      box-shadow: none !important;
      padding: 0 !important;
      overflow: visible !important;
    }
    .install-app-icon img {
      width: 100% !important;
      height: 100% !important;
      display: block !important;
      object-fit: contain !important;
      object-position: center !important;
      transform: none !important;
      filter: none !important;
      padding: 2px !important;
    }

  </style>

  <!-- REFUEL TRUST SUITE V31: search-engine structured data. Aggregate ratings are intentionally omitted until real verified reviews exist. -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://refuelaisupplements.com/#organization",
        "name": "Refuel AI Intelligent Supplements",
        "url": "https://refuelaisupplements.com/",
        "logo": "<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-183f95d77b48b69a.png'); ?>",
        "description": "A safety-aware supplement marketplace concept with guided product education and product-verification workflows."
      },
      {
        "@type": "WebSite",
        "@id": "https://refuelaisupplements.com/#website",
        "url": "https://refuelaisupplements.com/",
        "name": "Refuel AI Intelligent Supplements",
        "publisher": { "@id": "https://refuelaisupplements.com/#organization" },
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https://refuelaisupplements.com/#shop?search={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      },
      {
        "@type": "Store",
        "@id": "https://refuelaisupplements.com/#store",
        "name": "Refuel AI Intelligent Supplements",
        "url": "/#shop",
        "parentOrganization": { "@id": "https://refuelaisupplements.com/#organization" },
        "areaServed": { "@type": "Country", "name": "Pakistan" },
        "knowsAbout": ["Sports nutrition", "Supplement label education", "Batch verification", "Halal-conscious product discovery"]
      },
      {
        "@type": "ItemList",
        "@id": "/#supplement-categories",
        "name": "Supplement categories",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Protein", "url": "/#shop" },
          { "@type": "ListItem", "position": 2, "name": "Creatine", "url": "/#shop" },
          { "@type": "ListItem", "position": 3, "name": "Vitamins", "url": "/#shop" },
          { "@type": "ListItem", "position": 4, "name": "Performance", "url": "/#shop" }
        ]
      }
    ]
  }
  </script>

  <style id="refuelV6NativeAppStyles">
    /* REFUEL AI MOBILE PWA V6 — NATIVE-LIKE APP FUNCTIONS */
    @media (max-width: 820px) {
      body.mobile-pwa-variant.app-shell-mode {
        --v6-sheet-bg: rgba(4, 17, 20, .985);
        --v6-toolbar-h: 66px;
      }

      .v6-splash {
        position: fixed;
        inset: 0;
        z-index: 1000;
        display: grid;
        place-items: center;
        background:
          radial-gradient(circle at 50% 42%, rgba(32,238,224,.17), transparent 30%),
          #020708;
        opacity: 0;
        visibility: hidden;
        transition: opacity .22s ease, visibility .22s ease;
      }
      .v6-splash.show { opacity: 1; visibility: visible; }
      .v6-splash-card { display: grid; justify-items: center; gap: 14px; }
      .v6-splash-card img { width: 92px; height: 92px; border-radius: 27px; box-shadow: 0 0 50px rgba(32,238,224,.24); }
      .v6-splash-card strong { font-size: 1.22rem; letter-spacing: -.02em; }
      .v6-splash-card small { color: var(--muted); font-weight: 800; }
      .v6-splash-loader { width: 86px; height: 3px; overflow: hidden; border-radius: 99px; background: rgba(255,255,255,.08); }
      .v6-splash-loader::after { content:""; display:block; width:45%; height:100%; border-radius:inherit; background:linear-gradient(90deg,var(--cyan),var(--mint)); animation:v6Load 1s ease-in-out infinite; }

      .v6-network-pill {
        position: fixed;
        z-index: 420;
        top: calc(var(--v5-app-header) + 7px);
        left: 50%;
        display: none;
        align-items: center;
        gap: 7px;
        min-height: 30px;
        padding: 5px 11px;
        color: #fff;
        background: rgba(255,124,137,.94);
        border-radius: 999px;
        box-shadow: 0 10px 28px rgba(0,0,0,.35);
        transform: translateX(-50%);
        font-size: .68rem;
        font-weight: 950;
      }
      .v6-network-pill.show { display:flex; animation:v6PillIn .2s ease both; }

      .v6-header-menu {
        width: 42px !important;
        height: 42px !important;
        display: grid !important;
        place-items: center !important;
        flex: 0 0 42px !important;
        border-radius: 14px !important;
      }

      .v6-screen-toolbar {
        position: sticky;
        z-index: 75;
        top: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        min-height: var(--v6-toolbar-h);
        padding: 10px 14px;
        background: linear-gradient(180deg, rgba(2,9,11,.98), rgba(2,9,11,.91));
        border-bottom: 1px solid rgba(32,238,224,.13);
        backdrop-filter: blur(20px) saturate(150%);
      }
      .v6-screen-title { min-width:0; }
      .v6-screen-title small { display:block; color:var(--cyan); font-size:.59rem; font-weight:950; letter-spacing:.1em; text-transform:uppercase; }
      .v6-screen-title strong { display:block; margin-top:1px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; font-size:1.04rem; }
      .v6-toolbar-actions { display:flex; align-items:center; gap:8px; }
      .v6-tool-button {
        min-width: 39px;
        height: 39px;
        display: inline-grid;
        place-items: center;
        padding: 0 11px;
        color: #dff;
        background: rgba(255,255,255,.035);
        border: 1px solid var(--line);
        border-radius: 13px;
        font-size: .72rem;
        font-weight: 950;
      }
      .v6-tool-button.active { color:#001315; background:linear-gradient(135deg,var(--cyan),var(--mint)); border-color:transparent; }
      .v6-tool-button .v6-count { margin-left:5px; }

      .v6-shop-search-wrap {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 8px;
        padding: 10px 14px;
        background: rgba(3,13,15,.96);
        border-bottom: 1px solid rgba(32,238,224,.10);
      }
      .v6-shop-search {
        width: 100%;
        min-width: 0;
        height: 42px;
        padding: 0 13px 0 39px;
        color: #fff;
        background: rgba(255,255,255,.035);
        border: 1px solid var(--line);
        border-radius: 14px;
        outline: 0;
      }
      .v6-shop-search:focus { border-color: var(--cyan); box-shadow:0 0 0 3px rgba(32,238,224,.07); }
      .v6-search-box { position:relative; min-width:0; }
      .v6-search-box::before { content:'⌕'; position:absolute; z-index:2; left:13px; top:50%; color:var(--cyan); transform:translateY(-50%); }
      .v6-saved-filter { min-width:46px; padding:0 12px; }

      #productGrid .product-card { position: relative !important; }
      .v6-wishlist,
      .v6-compare-toggle {
        position: absolute;
        z-index: 15;
        right: 12px;
        width: 38px;
        height: 38px;
        display: grid;
        place-items: center;
        color: #dff;
        background: rgba(2,10,12,.84);
        border: 1px solid rgba(32,238,224,.22);
        border-radius: 13px;
        backdrop-filter: blur(12px);
        box-shadow: 0 10px 24px rgba(0,0,0,.25);
      }
      .v6-wishlist { top: 12px; font-size: 1.13rem; }
      .v6-compare-toggle { top: 58px; font-size: .82rem; font-weight: 1000; }
      .v6-wishlist.saved { color:#001315; background:linear-gradient(135deg,var(--cyan),var(--mint)); border-color:transparent; }
      .v6-compare-toggle.selected { color:#001315; background:var(--gold); border-color:transparent; }
      #productGrid .product-card[data-v6-search-hidden="true"],
      #productGrid .product-card[data-v6-saved-hidden="true"] { display:none !important; }

      .v6-compare-bar {
        position: fixed;
        z-index: 210;
        right: 10px;
        bottom: calc(var(--v5-app-nav) + 8px);
        left: 10px;
        display: none;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        min-height: 56px;
        padding: 8px 9px 8px 15px;
        background: rgba(5,20,23,.97);
        border: 1px solid var(--line-strong);
        border-radius: 18px;
        box-shadow: 0 18px 45px rgba(0,0,0,.48);
        backdrop-filter: blur(20px);
      }
      .v6-compare-bar.show { display:flex; animation:v6BarIn .2s ease both; }
      .v6-compare-bar p { display:grid; line-height:1.2; }
      .v6-compare-bar small { color:var(--muted); font-size:.65rem; }
      .v6-compare-bar button { min-height:40px; padding:0 16px; border:0; border-radius:12px; color:#001315; background:linear-gradient(135deg,var(--cyan),var(--mint)); font-weight:950; }

      .v6-sheet-backdrop {
        position: fixed;
        inset: 0;
        z-index: 500;
        display: none;
        background: rgba(0,0,0,.64);
        backdrop-filter: blur(8px);
      }
      .v6-sheet-backdrop.show { display:block; }
      .v6-bottom-sheet {
        position: fixed;
        z-index: 510;
        right: 0;
        bottom: 0;
        left: 0;
        max-height: min(78vh, 720px);
        padding: 9px 14px calc(16px + var(--mobile-safe-bottom));
        overflow-y: auto;
        background: var(--v6-sheet-bg);
        border: 1px solid rgba(32,238,224,.23);
        border-bottom: 0;
        border-radius: 26px 26px 0 0;
        box-shadow: 0 -30px 80px rgba(0,0,0,.62);
        transform: translateY(105%);
        transition: transform .28s cubic-bezier(.2,.8,.2,1);
      }
      .v6-bottom-sheet.show { transform: translateY(0); }
      .v6-sheet-handle { width:44px; height:4px; margin:0 auto 12px; border-radius:99px; background:rgba(255,255,255,.18); }
      .v6-sheet-head { display:flex; align-items:flex-start; justify-content:space-between; gap:12px; margin-bottom:14px; }
      .v6-sheet-head small { color:var(--cyan); font-size:.62rem; font-weight:950; letter-spacing:.09em; text-transform:uppercase; }
      .v6-sheet-head h3 { margin-top:3px; font-size:1.35rem; }
      .v6-sheet-close { width:42px; height:42px; display:grid; place-items:center; border:1px solid var(--line); border-radius:14px; background:rgba(255,255,255,.035); color:#fff; }
      .v6-action-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:10px; }
      .v6-action-card {
        min-height: 116px;
        display: grid;
        align-content: space-between;
        gap: 12px;
        padding: 15px;
        text-align: left;
        color: #fff;
        background: linear-gradient(145deg, rgba(16,39,44,.88), rgba(4,14,16,.96));
        border: 1px solid var(--line);
        border-radius: 18px;
      }
      .v6-action-card b { width:38px; height:38px; display:grid; place-items:center; color:var(--cyan); background:rgba(32,238,224,.07); border:1px solid var(--line); border-radius:12px; }
      .v6-action-card strong { display:block; font-size:.86rem; }
      .v6-action-card small { display:block; margin-top:3px; color:var(--muted); font-size:.66rem; line-height:1.35; }

      .v6-menu-list { display:grid; gap:8px; }
      .v6-menu-row {
        min-height: 58px;
        display: grid;
        grid-template-columns: 40px 1fr auto;
        align-items: center;
        gap: 11px;
        padding: 9px 11px;
        color: #fff;
        background: rgba(255,255,255,.026);
        border: 1px solid rgba(255,255,255,.06);
        border-radius: 15px;
        text-align: left;
      }
      .v6-menu-row > b { width:40px; height:40px; display:grid; place-items:center; color:var(--cyan); background:rgba(32,238,224,.06); border:1px solid var(--line); border-radius:12px; }
      .v6-menu-row span { display:grid; line-height:1.2; }
      .v6-menu-row small { color:var(--muted); font-size:.65rem; margin-top:3px; }
      .v6-switch { width:44px; height:25px; position:relative; border-radius:99px; background:rgba(255,255,255,.12); }
      .v6-switch::after { content:""; width:19px; height:19px; position:absolute; top:3px; left:3px; border-radius:50%; background:#fff; transition:.2s ease; }
      .v6-switch.on { background:var(--cyan); }
      .v6-switch.on::after { left:22px; background:#001315; }

      .v6-compare-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:10px; }
      .v6-compare-card { padding:14px; background:rgba(255,255,255,.026); border:1px solid var(--line); border-radius:17px; }
      .v6-compare-card h4 { min-height:42px; font-size:.95rem; }
      .v6-compare-card dl { display:grid; gap:9px; margin-top:12px; }
      .v6-compare-card dt { color:var(--cyan); font-size:.59rem; font-weight:950; text-transform:uppercase; }
      .v6-compare-card dd { color:#d8e7e9; font-size:.72rem; line-height:1.45; }

      .v6-scan-preview { display:none; gap:12px; margin-top:14px; padding:12px; background:rgba(32,238,224,.045); border:1px solid var(--line); border-radius:16px; }
      .v6-scan-preview.show { display:grid; grid-template-columns:72px 1fr; align-items:center; }
      .v6-scan-preview img { width:72px; height:72px; object-fit:cover; border-radius:13px; }
      .v6-scan-preview p { color:var(--muted); font-size:.7rem; line-height:1.42; }

      .v6-nav-badge {
        min-width: 17px;
        height: 17px;
        position: absolute;
        top: 2px;
        right: calc(50% - 20px);
        display: grid;
        place-items: center;
        padding: 0 4px;
        color: #001315;
        background: var(--cyan);
        border-radius: 999px;
        font-size: .52rem;
        font-weight: 1000;
      }
      body.mobile-pwa-variant.app-shell-mode .mobile-app-nav button { position:relative; }
      body.mobile-pwa-variant.app-shell-mode .install-banner { transition: opacity .2s ease, transform .2s ease; }
      body.mobile-pwa-variant.app-shell-mode .v6-compare-bar.show ~ .install-banner { bottom: calc(var(--v5-app-nav) + 72px) !important; }

      @keyframes v6Load { 0%{transform:translateX(-120%)} 100%{transform:translateX(240%)} }
      @keyframes v6PillIn { from{opacity:0;transform:translate(-50%,-8px)} to{opacity:1;transform:translate(-50%,0)} }
      @keyframes v6BarIn { from{opacity:0;transform:translateY(10px)} to{opacity:1;transform:none} }
    }
  </style>
  <style id="refuelV10CompactExpertCards">
    /* V10: three compact expert cards in one symmetrical mobile row */
    @media (max-width: 820px) {
      body.mobile-pwa-variant #expertApproval .trust-suite-shell,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #expertApproval .trust-suite-shell {
        overflow: hidden !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-approval-grid,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-approval-grid {
        display: grid !important;
        grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        grid-auto-flow: column !important;
        width: 100% !important;
        max-width: 100% !important;
        gap: 7px !important;
        overflow: visible !important;
        overflow-x: visible !important;
        scroll-snap-type: none !important;
        padding: 0 !important;
        margin: 0 !important;
        box-sizing: border-box !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-approval-card,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-approval-card {
        width: auto !important;
        min-width: 0 !important;
        max-width: none !important;
        min-height: 226px !important;
        height: 226px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: flex-start !important;
        padding: 12px 6px 10px !important;
        margin: 0 !important;
        overflow: hidden !important;
        border-radius: 16px !important;
        scroll-snap-align: none !important;
        box-sizing: border-box !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-avatar,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-avatar {
        width: 58px !important;
        height: 58px !important;
        flex: 0 0 58px !important;
        margin: 0 0 11px !important;
        border-radius: 18px !important;
        box-shadow: 0 0 0 4px rgba(32,238,224,.025), 0 0 18px rgba(32,238,224,.08) !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-avatar svg,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-avatar svg {
        width: 42px !important;
        height: 42px !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-title-row,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-title-row {
        width: 100% !important;
        max-width: 100% !important;
        display: flex !important;
        align-items: flex-start !important;
        justify-content: center !important;
        gap: 3px !important;
        flex-wrap: nowrap !important;
        box-sizing: border-box !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-title-row h3,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-title-row h3 {
        min-width: 0 !important;
        max-width: calc(100% - 19px) !important;
        margin: 0 !important;
        font-size: .70rem !important;
        line-height: 1.16 !important;
        letter-spacing: -.018em !important;
        text-align: center !important;
        text-wrap: balance;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #expertApproval .expert-verified,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-verified {
        width: 16px !important;
        height: 16px !important;
        flex: 0 0 16px !important;
        margin-top: 0 !important;
        font-size: .48rem !important;
        box-shadow: 0 0 10px rgba(32,238,224,.24) !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-role,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-role {
        width: 100% !important;
        margin-top: 8px !important;
        padding: 0 1px !important;
        color: var(--cyan) !important;
        font-size: .49rem !important;
        line-height: 1.35 !important;
        letter-spacing: .035em !important;
        text-align: center !important;
        overflow-wrap: anywhere;
      }

      body.mobile-pwa-variant #expertApproval .expert-quote,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-quote,
      body.mobile-pwa-variant #expertApproval .expert-status,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-status {
        display: none !important;
      }
    }

    @media (max-width: 390px) {
      body.mobile-pwa-variant #expertApproval .expert-approval-grid,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-approval-grid {
        gap: 5px !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-approval-card,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-approval-card {
        min-height: 210px !important;
        height: 210px !important;
        padding: 10px 4px 8px !important;
        border-radius: 14px !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-avatar,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-avatar {
        width: 50px !important;
        height: 50px !important;
        flex-basis: 50px !important;
        margin-bottom: 9px !important;
        border-radius: 15px !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-avatar svg,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-avatar svg {
        width: 36px !important;
        height: 36px !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-title-row h3,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-title-row h3 {
        font-size: .64rem !important;
      }

      body.mobile-pwa-variant #expertApproval .expert-role,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] .expert-role {
        font-size: .45rem !important;
        letter-spacing: .02em !important;
      }
    }
  </style>


  <style id="refuelV11CompactCertificationStrip">
    /* V11: five compact certification cards in one symmetrical mobile row */
    @media (max-width: 820px) {
      body.mobile-pwa-variant #certificationStandards .trust-suite-shell,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .trust-suite-shell {
        overflow: hidden !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-strip,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-strip {
        display: flex !important;
        flex-direction: column !important;
        align-items: stretch !important;
        gap: 12px !important;
        width: 100% !important;
        min-width: 0 !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-copy,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-copy {
        display: contents !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-copy > .eyebrow,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-copy > .eyebrow { order: 1; }

      body.mobile-pwa-variant #certificationStandards .certification-copy > h2,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-copy > h2 {
        order: 2;
        margin: 2px 0 0 !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-copy > p,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-copy > p {
        order: 3;
        margin: 0 !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-logos,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-logos {
        order: 4;
        display: grid !important;
        grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        width: 100% !important;
        max-width: 100% !important;
        gap: 6px !important;
        overflow: visible !important;
        padding: 0 !important;
        margin: 2px 0 0 !important;
        box-sizing: border-box !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-badge,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-badge {
        grid-column: auto !important;
        width: auto !important;
        min-width: 0 !important;
        max-width: none !important;
        min-height: 116px !important;
        height: 116px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: flex-start !important;
        gap: 7px !important;
        padding: 9px 3px 7px !important;
        margin: 0 !important;
        overflow: hidden !important;
        border-radius: 14px !important;
        box-sizing: border-box !important;
      }

      body.mobile-pwa-variant #certificationStandards .cert-logo,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .cert-logo {
        width: 44px !important;
        height: 44px !important;
        min-width: 44px !important;
        flex: 0 0 44px !important;
        padding: 4px !important;
        border-radius: 14px !important;
        font-size: .58rem !important;
        line-height: 1 !important;
        box-shadow: inset 0 0 0 3px rgba(32,238,224,.025), 0 0 16px rgba(32,238,224,.07) !important;
      }

      body.mobile-pwa-variant #certificationStandards .cert-logo.long,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .cert-logo.long {
        font-size: .37rem !important;
        line-height: 1.05 !important;
        letter-spacing: -.03em !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-badge strong,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-badge strong {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 1px !important;
        font-size: .53rem !important;
        line-height: 1.15 !important;
        letter-spacing: -.01em !important;
        text-align: center !important;
        overflow-wrap: anywhere !important;
        text-wrap: balance;
      }

      body.mobile-pwa-variant #certificationStandards .certification-badge small,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-badge small {
        display: none !important;
      }

      body.mobile-pwa-variant #certificationStandards .coa-link,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .coa-link {
        order: 5;
        width: 100% !important;
        min-height: 44px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 8px !important;
        margin: 0 !important;
        padding: 10px 14px !important;
        color: #001315 !important;
        background: linear-gradient(135deg, var(--cyan), var(--mint)) !important;
        border: 0 !important;
        border-radius: 14px !important;
        box-shadow: 0 12px 30px rgba(32,238,224,.16) !important;
        font-size: .72rem !important;
        font-weight: 950 !important;
        text-align: center !important;
        box-sizing: border-box !important;
      }

      body.mobile-pwa-variant #certificationStandards .coa-link span,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .coa-link span {
        font-size: 1rem !important;
        line-height: 1 !important;
      }
    }

    @media (max-width: 380px) {
      body.mobile-pwa-variant #certificationStandards .certification-logos,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-logos {
        gap: 4px !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-badge,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-badge {
        min-height: 108px !important;
        height: 108px !important;
        padding: 8px 2px 6px !important;
      }

      body.mobile-pwa-variant #certificationStandards .cert-logo,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .cert-logo {
        width: 40px !important;
        height: 40px !important;
        min-width: 40px !important;
        flex-basis: 40px !important;
        font-size: .53rem !important;
      }

      body.mobile-pwa-variant #certificationStandards .cert-logo.long,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .cert-logo.long {
        font-size: .34rem !important;
      }

      body.mobile-pwa-variant #certificationStandards .certification-badge strong,
      body.mobile-pwa-variant .mobile-app-screen[data-screen="trust"] #certificationStandards .certification-badge strong {
        font-size: .48rem !important;
      }
    }
  </style>


  <style id="refuelV12DashboardCleanup">
    /* V12: shorter native-style Home dashboard + fitted goal controls */
    @media (max-width: 820px) {
      body.mobile-pwa-variant .v29-process-section,
      body.mobile-pwa-variant .trust-wrap {
        display: none !important;
      }

      body.mobile-pwa-variant.app-shell-mode #mobileScreen-home {
        overflow-x: hidden !important;
      }

      body.mobile-pwa-variant .compact-goal-section {
        padding-top: 18px !important;
        padding-bottom: 18px !important;
        overflow: hidden !important;
      }

      body.mobile-pwa-variant .compact-goal-shell {
        display: block !important;
        width: 100% !important;
        padding: 18px 14px !important;
        border-radius: 20px !important;
        overflow: hidden !important;
      }

      body.mobile-pwa-variant .compact-goal-copy {
        margin-bottom: 15px !important;
      }

      body.mobile-pwa-variant .compact-goal-copy h2 {
        margin-top: 8px !important;
        font-size: clamp(1.65rem, 7.2vw, 2.15rem) !important;
        line-height: 1.03 !important;
      }

      body.mobile-pwa-variant .compact-goal-copy p {
        margin-top: 9px !important;
        font-size: .78rem !important;
        line-height: 1.5 !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 10px !important;
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: visible !important;
        scroll-snap-type: none !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons .hero-goal-chip,
      body.mobile-pwa-variant .compact-goal-buttons .compact-all-products {
        width: 100% !important;
        min-width: 0 !important;
        max-width: none !important;
        min-height: 96px !important;
        padding: 13px 12px !important;
        border-radius: 16px !important;
        transform: none !important;
        scroll-snap-align: none !important;
        overflow: hidden !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons button > span {
        font-size: 1.15rem !important;
        line-height: 1 !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons button strong {
        display: block !important;
        max-width: 100% !important;
        font-size: .82rem !important;
        line-height: 1.2 !important;
        white-space: normal !important;
        overflow-wrap: anywhere !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons button small {
        display: block !important;
        max-width: 100% !important;
        font-size: .64rem !important;
        line-height: 1.35 !important;
        white-space: normal !important;
        overflow-wrap: anywhere !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons .compact-all-products {
        grid-column: 1 / -1 !important;
        min-height: 68px !important;
        grid-template-columns: auto 1fr !important;
        grid-template-rows: auto auto !important;
        align-items: center !important;
        align-content: center !important;
        justify-items: start !important;
        column-gap: 11px !important;
      }

      body.mobile-pwa-variant .compact-goal-buttons .compact-all-products > span {
        grid-row: 1 / 3 !important;
      }

      body.mobile-pwa-variant .compact-goal-status {
        display: grid !important;
        grid-template-columns: auto 1fr !important;
        gap: 4px 8px !important;
        width: 100% !important;
        margin-top: 14px !important;
        padding-top: 13px !important;
      }

      body.mobile-pwa-variant .compact-goal-status small {
        grid-column: 1 / -1 !important;
        line-height: 1.35 !important;
      }
    }

    @media (max-width: 360px) {
      body.mobile-pwa-variant .compact-goal-buttons {
        gap: 8px !important;
      }
      body.mobile-pwa-variant .compact-goal-buttons .hero-goal-chip {
        min-height: 90px !important;
        padding: 11px 10px !important;
      }
      body.mobile-pwa-variant .compact-goal-buttons button strong {
        font-size: .76rem !important;
      }
      body.mobile-pwa-variant .compact-goal-buttons button small {
        font-size: .59rem !important;
      }
    }
  </style>


  <style id="one-file-hostinger-v19">
    /* PWA install controls intentionally use their original show/hide rules. */
    @media (min-width: 821px) {
      html, body { width: 100%; min-width: 0; max-width: none; }
      body { margin: 0; overflow-x: hidden; }
      .container { width: min(calc(100% - 40px), var(--container)); }
      .mobile-app-nav { display:none !important; }
      main, header, footer { width: 100%; max-width: none; }
    }
  </style>


  <style id="desktop-clean-layout-v20">
    /* V20: hide phone-only app controls on computers and keep the real desktop canvas. */
    @media (min-width: 821px) {
      body > .mobile-app-nav,
      body > .mobile-ios-install-sheet,
      body > [id^="v6"] {
        display: none !important;
        visibility: hidden !important;
        pointer-events: none !important;
      }

      html, body {
        width: 100% !important;
        min-width: 0 !important;
        max-width: none !important;
        zoom: 1 !important;
      }

      body {
        margin: 0 !important;
        transform: none !important;
        overflow-x: hidden !important;
      }

      header, main, footer {
        width: 100% !important;
        max-width: none !important;
      }

      .container {
        width: min(calc(100% - 48px), 1240px) !important;
        max-width: 1240px !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }

      main {
        display: block !important;
        position: relative !important;
      }

      footer {
        clear: both !important;
      }
    }
  </style>


  <style id="refuel-full-brand-v644">
    @media (max-width: 820px) {
      body.mobile-pwa-variant header .brand { flex: 1 1 0; min-width: 0; }
      body.mobile-pwa-variant header .brand-mark { flex-shrink: 0; }
      body.mobile-pwa-variant header .brand-copy {
        min-width: 0;
        white-space: normal !important;
        overflow: visible;
        line-height: 1.2;
      }
      body.mobile-pwa-variant header .nav-actions { flex-shrink: 0; }
      body.mobile-pwa-variant .install-banner p strong {
        white-space: normal;
        overflow-wrap: anywhere;
      }
    }
  </style>
  <?php wp_head(); ?>
</head>
<!-- REFUEL AI COMPACT COMMERCIAL RELEASE: TRUST-SUITE-V31 -->
<!-- WORKFLOW REMOVED / HERO SCALED / CTA MOVED UP: TRUST-SUITE-V31 -->
<!-- BLANK GAP FIXED / PRODUCTS FORCED VISIBLE: TRUST-SUITE-V31 -->
<!-- AI JAWAD PORTRAIT UPDATED: TRUST-SUITE-V31 -->
<!-- ONE JOURNEY CTA / WORKING AI COACH / MEMBERSHIP SAVINGS: TRUST-SUITE-V31 -->
<!-- PREMIUM MOVING TOP BRANDS RELEASE: TRUST-SUITE-V31 -->
<!-- ALL REAL LOGOS / SOFT PREMIUM SHINE: TRUST-SUITE-V31 -->
<!-- REAL PRODUCTS GROUPED BY BRAND AND CATEGORY: TRUST-SUITE-V31 -->
<!-- ELITE 10% MONTHLY REWARD 1ST–10TH: TRUST-SUITE-V31 -->
<!-- MUSCLETECH AND GAT PRODUCT EXPANSION: TRUST-SUITE-V31 -->
<!-- ASSESSMENT 100 PERCENT STUCK FIXED / MODAL SCALED: TRUST-SUITE-V31 -->
<!-- BRIGHTER BLACK EMBOSSED TOP BRAND LOGOS: TRUST-SUITE-V31 -->
<!-- EMBOSSED LOGOS VISIBILITY FIX: TRUST-SUITE-V31 -->
<!-- OFFER OF THE MONTH ABOVE DASHBOARD: TRUST-SUITE-V31 -->
<!-- FACILITY AND HISTORY SECTION USING USER PHOTOS: TRUST-SUITE-V31 -->
<!-- REFUEL HISTORY JANUARY 2017 TO 2026: TRUST-SUITE-V31 -->
<!-- SOFT PREMIUM RIGHT TO LEFT TOP BRANDS: PREMIUM-AI-JAWAD-OUTER-LIGHT-V29 -->
<!-- VISIBLE TRANSFORM RIGHT TO LEFT TOP BRANDS: PREMIUM-AI-JAWAD-OUTER-LIGHT-V29 -->
<!-- FINAL CUSTOMER JOURNEY SECTION ORDER: PREMIUM-AI-JAWAD-OUTER-LIGHT-V29 -->
<!-- AI JOURNEY ALWAYS STARTS AT STEP 1 + WORKING BACK: PREMIUM-AI-JAWAD-OUTER-LIGHT-V29 -->
<!-- PREMIUM AI JAWAD + SOFT OUTER LIGHTS: PREMIUM-AI-JAWAD-OUTER-LIGHT-V29 -->
<!-- TOP BRANDS COMPACT + AI LAPTOP FIT: DESKTOP-SCALE-FIT-V30 -->
<body class="mobile-pwa-variant" data-release="ONE-FILE-V20-DESKTOP-CLEAN-FIX">
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

  <script id="initial-responsive-mode-v19">
    if (window.innerWidth > 820) document.body.classList.remove("mobile-pwa-variant");
  </script>
  <div class="mobile-orientation-lock" role="status" aria-live="polite">
    <div class="mobile-orientation-lock-card">
      <div class="mobile-orientation-lock-icon">↻</div>
      <h2>Rotate to portrait</h2>
      <p>Refuel AI Supplements adapts automatically for desktop and mobile screens.</p>
    </div>
  </div>

  <!-- RESPONSIVE DESKTOP + MOBILE RELEASE: ONE-FILE-V20 -->
  <div class="ambient-grid" aria-hidden="true"></div>
  <div class="cursor-glow" id="cursorGlow" aria-hidden="true"></div>

  <div class="topbar">Authenticity-first shopping • Pakistan-wide delivery • AI-guided product education</div>

  <header>
    <div class="container nav">
      <a class="brand" href="#home" aria-label="Refuel AI home">
        <span class="brand-mark brand-mark-image"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-94a7da5fab076e2f.png'); ?>" alt="Refuel AI logo"></span>
        <span class="brand-copy">REFUEL <b>AI</b> SUPPLEMENTS<small>Intelligent supplements</small></span>
      </a>

      <nav class="nav-links" aria-label="Primary navigation">
        <a href="#shop">Shop</a>
        <a href="#goals">Shop by Goal</a>
        <a href="#brands">Brands</a>
        <a href="#aiConsole">AI Help</a>
        <a href="#membership">Membership</a>
        <a href="#safety">Safety</a>
        <a href="#history" class="history-nav-button">
          <span>Our History</span>
          <small>2017 → 2026</small>
        </a>
      </nav>

      <div class="nav-actions">
        <details class="refuel-header-search"><summary aria-label="Search products">⌕</summary><form role="search" method="get" action="<?php echo esc_url(refuel_woo_shop_url()); ?>"><label for="refuel-main-search">Search products</label><input id="refuel-main-search" name="s" type="search" placeholder="Search products" required><input type="hidden" name="post_type" value="product"><button type="submit">Search</button></form></details>
        <button class="icon-button" id="cartButton" aria-label="Open cart" onclick="event.stopImmediatePropagation(); window.location.assign('<?php echo esc_url(refuel_shop_page_url('cart')); ?>'); return false;">🛒<span class="cart-badge" id="cartCount">0</span></button>
        <button class="icon-button menu-button" id="menuButton" aria-label="Open menu">☰</button>
      </div>
    </div>

    <div class="mobile-menu" id="mobileMenu">
      <a href="#shop">Shop Supplements</a>
      <a href="#goals">Shop by Goal</a>
      <a href="#brands">Global Brands</a>
      <a href="#aiConsole">AI Help</a>
      <a href="#membership">Membership</a>
      <a href="#safety">Safety Standards</a>
      <a href="#history">Our History — Since January 2017</a>
    </div>
  </header>

  <main id="home"><section class="monthly-offer-section" id="monthlyOffer">
    <div class="container monthly-offer-shell v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
      <div class="monthly-offer-head"><div>
        <span class="eyebrow">Shop current products</span>
        <h2>Featured <span class="gradient-text">Supplements</span></h2>
        <p>Prices and availability come from our WooCommerce shop. Any sale appears here only when it is active in the shop.</p>
      </div></div>
      <div class="monthly-offer-grid">
        <?php $refuel_featured_catalog = refuel_catalog_data();
        foreach (['gold standard 100% whey', 'platinum 100% creatine', 'stacked pre'] as $refuel_featured_name) :
          if (empty($refuel_featured_catalog[$refuel_featured_name])) { continue; }
          $featured = $refuel_featured_catalog[$refuel_featured_name]; ?>
        <article class="monthly-offer-card">
          <div class="monthly-offer-visual">
            <?php if (!empty($featured['image'])) : ?><img decoding="async" loading="lazy" src="<?php echo esc_url($featured['image']); ?>" alt="<?php echo esc_attr($featured['name']); ?>"><?php endif; ?>
          </div>
          <div class="monthly-offer-info">
            <small>Featured product</small>
            <h3><?php echo esc_html($featured['name']); ?></h3>
            <p><?php echo $featured['inStock'] ? 'Available in the shop' : 'Currently out of stock'; ?></p>
            <div class="monthly-offer-pricing"><strong><?php echo esc_html($featured['priceText']); ?></strong></div>
            <div class="monthly-offer-actions">
              <a class="offer-view-button" href="<?php echo esc_url($featured['url']); ?>">View Product</a>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
        <?php if (!$refuel_featured_catalog) : ?><p class="refuel-shop-unavailable">Browse our shop for current products and prices.</p><?php endif; ?>
      </div>
      <div class="monthly-offer-footer"><a class="monthly-offer-shop-all" href="<?php echo esc_url(refuel_woo_shop_url()); ?>">Shop All Products →</a></div>
    </div>
  </section>

<style id="refuel-quick-categories-v647">
.refuel-quick-categories { padding:28px 0; }
.nav-actions { position:relative; }
.refuel-header-search summary { display:grid; place-items:center; width:40px; height:40px; border:1px solid rgba(32,238,224,.3); border-radius:10px; color:#f2ffff; cursor:pointer; font-size:1.4rem; list-style:none; }
.refuel-header-search form { position:absolute; top:calc(100% + 12px); right:0; z-index:50; display:flex; gap:8px; width:min(84vw,350px); padding:12px; border:1px solid rgba(32,238,224,.3); border-radius:12px; background:#071416; }
.refuel-header-search label { position:absolute; clip:rect(0 0 0 0); width:1px; height:1px; overflow:hidden; }
.refuel-header-search input[type=search] { flex:1; min-width:0; padding:9px; border-radius:8px; border:1px solid rgba(32,238,224,.3); background:#020708; color:#fff; }
.refuel-header-search button { border:0; border-radius:8px; padding:9px; background:#20eee0; color:#001315; font-weight:800; }
@media(max-width:820px) { .nav-actions #menuButton { order:0; } .nav-actions .refuel-header-search { order:1; } .nav-actions #cartButton { order:2; } }
.refuel-shop-unavailable,.refuel-live-shop-link { color:#cbe2e5; padding:12px; }
.refuel-live-shop-link a { color:#85ffc1; font-weight:800; }
.refuel-quick-categories-inner { background:rgba(7,20,22,.82); border:1px solid rgba(32,238,224,.22); border-radius:22px; padding:24px; }
.refuel-quick-heading { display:flex; justify-content:space-between; align-items:end; gap:15px; margin-bottom:16px; }
.refuel-quick-heading h2 { margin:4px 0 0; }
.refuel-quick-heading a { color:#85ffc1; font-weight:800; text-decoration:none; }
.refuel-quick-grid { display:grid; grid-template-columns:repeat(5,minmax(0,1fr)); gap:10px; }
.refuel-quick-tile { display:flex; justify-content:space-between; align-items:center; gap:10px; min-height:60px; padding:14px; border:1px solid rgba(32,238,224,.2); border-radius:14px; background:#071416; color:#f2ffff; font-weight:800; text-decoration:none; }
.refuel-quick-tile:hover,.refuel-quick-tile:focus-visible { border-color:#20eee0; color:#85ffc1; }
.monthly-offer-actions { grid-template-columns:1fr; }
.monthly-offer-actions a { display:inline-flex; align-items:center; justify-content:center; text-decoration:none; min-height:38px; border-radius:10px; font-size:.72rem; font-weight:900; }
#productGrid .product-card[data-live="0"] { display:none !important; }
.monthly-offer-pricing strong del { color:#91acb0; font-size:.85em; margin-right:8px; }
@media(max-width:820px) { .refuel-quick-grid { grid-template-columns:repeat(2,minmax(0,1fr)); } .refuel-quick-heading { align-items:start; } .refuel-quick-heading a { font-size:.8rem; } }
</style>
<section class="refuel-quick-categories" aria-labelledby="refuel-category-heading">
  <div class="container refuel-quick-categories-inner">
    <div class="refuel-quick-heading">
      <div><span class="eyebrow">Shop supplements</span><h2 id="refuel-category-heading">Shop by Category</h2></div>
      <a href="<?php echo esc_url(refuel_woo_shop_url()); ?>">View all products →</a>
    </div>
    <div class="refuel-quick-grid">
      <?php foreach (['Protein', 'Creatine', 'Pre-Workout', 'Vitamins', 'Accessories'] as $category_label) : ?>
        <a class="refuel-quick-tile" href="<?php echo esc_url(add_query_arg(['s' => $category_label, 'post_type' => 'product'], refuel_woo_shop_url())); ?>"><?php echo esc_html($category_label); ?><span aria-hidden="true">→</span></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="compact-goal-section" id="goals">
      <div class="container compact-goal-shell v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
        <div class="compact-goal-copy">
          <span class="eyebrow">Shop by goal</span>
          <h2>Choose your goal. See the most relevant products.</h2>
          <p id="goalSelectionHint">
            One click filters the products below. The AI assessment remains optional.
          </p>
        </div>

        <div class="compact-goal-buttons" role="group" aria-label="Shop by fitness goal">
          <button class="hero-goal-chip" data-stack-goal="muscle">
            <span>💪</span><strong>Build Muscle</strong><small>Protein + creatine</small>
          </button>
          <button class="hero-goal-chip" data-stack-goal="performance">
            <span>⚡</span><strong>Performance</strong><small>Energy + endurance</small>
          </button>
          <button class="hero-goal-chip" data-stack-goal="health">
            <span>🧬</span><strong>Daily Health</strong><small>Vitamins + wellness</small>
          </button>
          <button class="hero-goal-chip" data-stack-goal="recovery">
            <span>🌙</span><strong>Recovery</strong><small>Protein + support</small>
          </button>
          <button class="compact-all-products" id="showAllGoalProducts">
            <span>▦</span><strong>View All</strong><small>Every category</small>
          </button>
        </div>

        <div class="compact-goal-status">
          <span>Selected:</span>
          <strong id="heroGoalStatus">All products</strong>
          <small id="readinessGoal">Choose a goal when you need guidance</small>
        </div>
      </div>
    </section>

    
<section class="brand-category-shop" id="shop">
      <div class="container brand-category-shell v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
        <div class="brand-category-head reveal">
          <div>
            <span class="eyebrow">Premium supplement store</span>
            <h2>Shop by <span class="gradient-text">Brand & Category</span></h2>
            <p>
              Start with a trusted brand or narrow the catalogue by supplement category.
              Prices and availability below follow the WooCommerce shop. Open a product to see its full details.
            </p>
          </div>
          <div class="shop-ai-note">
            <span>◎</span>
            <div>
              <strong>AI-Powered Recommendations</strong>
              <small>Personalized category guidance based on your goals.</small>
            </div>
          </div>
        </div>

        <div class="brand-shop-grid reveal" aria-label="Filter products by brand">
            <button class="brand-shop-button" type="button" data-shop-brand="all">
              <span class="brand-shop-logo"><span class="brand-wordmark">ALL</span></span>
              <span><strong>All Brands</strong><small>Browse products</small></span>
            </button>
            <button class="brand-shop-button" type="button" data-shop-brand="rule-one">
              <span class="brand-shop-logo"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-d97dfca073facf41.png'); ?>" alt="Rule One logo"></span>
              <span><strong>Rule One</strong><small>Browse products</small></span>
            </button>
            <button class="brand-shop-button" type="button" data-shop-brand="muscletech">
              <span class="brand-shop-logo"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-da6410ff67f6afeb.png'); ?>" alt="MuscleTech logo"></span>
              <span><strong>MuscleTech</strong><small>Browse products</small></span>
            </button>
            <button class="brand-shop-button" type="button" data-shop-brand="optimum">
              <span class="brand-shop-logo"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-21c434966b2f872b.png'); ?>" alt="Optimum Nutrition logo"></span>
              <span><strong>Optimum Nutrition</strong><small>Browse products</small></span>
            </button>
            <button class="brand-shop-button" type="button" data-shop-brand="bpi">
              <span class="brand-shop-logo"><span class="brand-wordmark">bpi SPORTS</span></span>
              <span><strong>BPI Sports</strong><small>Browse products</small></span>
            </button>
            <button class="brand-shop-button" type="button" data-shop-brand="bsn">
              <span class="brand-shop-logo"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-431f2cf05caa6498.png'); ?>" alt="BSN logo"></span>
              <span><strong>BSN</strong><small>Browse products</small></span>
            </button>
            <button class="brand-shop-button" type="button" data-shop-brand="gat">
              <span class="brand-shop-logo"><span class="brand-wordmark">GAT<br>SPORT</span></span>
              <span><strong>GAT Sport</strong><small>Browse products</small></span>
            </button>
        </div>

        <div class="category-shop-toolbar reveal">
          <div class="category-shop-filters" aria-label="Filter products by category">
            <button class="category-shop-button active" type="button" data-shop-type="all">All Products</button>
            <button class="category-shop-button" type="button" data-shop-type="whey">Whey Protein</button>
            <button class="category-shop-button" type="button" data-shop-type="isolate">Whey Isolate</button>
            <button class="category-shop-button" type="button" data-shop-type="casein">Casein</button>
            <button class="category-shop-button" type="button" data-shop-type="blend">Protein Blend</button>
            <button class="category-shop-button" type="button" data-shop-type="lean">Lean Protein</button>
            <button class="category-shop-button" type="button" data-shop-type="creatine">Creatine</button>
            <button class="category-shop-button" type="button" data-shop-type="preworkout">Pre-Workout</button>
            <button class="category-shop-button" type="button" data-shop-type="amino">Amino Acids</button>
            <button class="category-shop-button" type="button" data-shop-type="vitamins">Vitamins</button>
            <button class="category-shop-button" type="button" data-shop-type="weight">Weight Management</button>
            <button class="category-shop-button" type="button" data-shop-type="support">Performance Support</button>
            <button class="category-shop-button" type="button" data-shop-type="pump">Pump Support</button>
          </div>
          <div class="shop-result-summary">
            <strong id="shopResultCount">Loading products</strong>
            <small id="shopActiveFilter">All brands • All categories</small>
          </div>
        </div>

        <div class="product-grid brand-product-grid" id="productGrid">
          <article class="product-card real-product-card reveal"
            data-category="protein"
            data-type="whey"
            data-brand="rule-one"
            data-id="rule1-whey"
            data-name="Whey Protein"
            data-price=""
            data-purpose="A whey-protein option for convenient daily protein intake. Match it to total diet, lactose tolerance, serving needs and budget.">
            <span class="product-badge">SHOP PRODUCT</span>
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">Rule One</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-84de0605dc607052.webp'); ?>" alt="Whey Protein">
            </div>
            <div class="product-body">
              <span class="micro-label">Rule One</span>
              <h3>Whey Protein</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Whey Protein</span>
                <span class="meta-chip">Muscle Building</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Whey Protein information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Whey Protein">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="protein"
            data-type="blend"
            data-brand="muscletech"
            data-id="nitrotech-original"
            data-name="Nitro-Tech"
            data-price=""
            data-purpose="A performance protein blend. Review serving size, other dietary protein sources, ingredients and individual tolerance.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-3b396e2ccd1ea18f.webp'); ?>" alt="Nitro-Tech">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Nitro-Tech</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Protein Blend</span>
                <span class="meta-chip">Muscle Building</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Nitro-Tech information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Nitro-Tech">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="protein"
            data-type="blend"
            data-brand="muscletech"
            data-id="nitrotech-gold"
            data-name="Nitro-Tech Whey Gold"
            data-price=""
            data-purpose="A whey-based protein option for customers comparing taste, serving size, total protein intake and value.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-d8cecc89c7184b23.webp'); ?>" alt="Nitro-Tech Whey Gold">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Nitro-Tech Whey Gold</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Whey Blend</span>
                <span class="meta-chip">Muscle Building</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Nitro-Tech Whey Gold information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Nitro-Tech Whey Gold">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="protein"
            data-type="whey"
            data-brand="optimum"
            data-id="on-gold-standard"
            data-name="Gold Standard 100% Whey"
            data-price=""
            data-purpose="A mainstream whey option. Suitability depends on diet, dairy tolerance, flavour preference, serving needs and budget.">
            <span class="product-badge">SHOP PRODUCT</span>
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">Optimum Nutrition</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-37b855181ec8ab48.webp'); ?>" alt="Gold Standard 100% Whey">
            </div>
            <div class="product-body">
              <span class="micro-label">Optimum Nutrition</span>
              <h3>Gold Standard 100% Whey</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Whey Protein</span>
                <span class="meta-chip">Muscle Building</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Gold Standard 100% Whey information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Gold Standard 100% Whey">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="lean"
            data-brand="muscletech"
            data-id="nitrotech-ripped"
            data-name="Nitro-Tech Ripped"
            data-price=""
            data-purpose="A lean-positioned protein formula. Customers should review the complete ingredient panel and avoid assuming it independently causes weight loss.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-2dd228e01190cd2d.webp'); ?>" alt="Nitro-Tech Ripped">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Nitro-Tech Ripped</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Lean Protein</span>
                <span class="meta-chip">Weight Management</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Nitro-Tech Ripped information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Nitro-Tech Ripped">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="protein"
            data-type="isolate"
            data-brand="rule-one"
            data-id="rule1-isolate"
            data-name="R1 Protein Whey Isolate"
            data-price=""
            data-purpose="A refined whey-isolate option often compared for lighter texture, lower lactose and protein concentration.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">Rule One</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-e1629814c6650fae.webp'); ?>" alt="R1 Protein Whey Isolate">
            </div>
            <div class="product-body">
              <span class="micro-label">Rule One</span>
              <h3>R1 Protein Whey Isolate</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Whey Isolate</span>
                <span class="meta-chip">Muscle Building</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View R1 Protein Whey Isolate information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add R1 Protein Whey Isolate">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="recovery"
            data-type="casein"
            data-brand="rule-one"
            data-id="rule1-casein"
            data-name="Casein Protein"
            data-price=""
            data-purpose="A slower-digesting protein category commonly considered between meals or before longer periods without food.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">Rule One</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-bbafe20583ac0c4e.webp'); ?>" alt="Casein Protein">
            </div>
            <div class="product-body">
              <span class="micro-label">Rule One</span>
              <h3>Casein Protein</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Casein</span>
                <span class="meta-chip">Recovery</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Casein Protein information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Casein Protein">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="recovery"
            data-type="isolate"
            data-brand="bsn"
            data-id="bsn-syntha-isolate"
            data-name="Syntha-6 Isolate"
            data-price=""
            data-purpose="An isolate-positioned protein option. Compare ingredients, dairy tolerance, flavour and total protein requirements.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">BSN</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-ea5c116f8d0016ea.webp'); ?>" alt="Syntha-6 Isolate">
            </div>
            <div class="product-body">
              <span class="micro-label">BSN</span>
              <h3>Syntha-6 Isolate</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Isolate Blend</span>
                <span class="meta-chip">Recovery</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Syntha-6 Isolate information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Syntha-6 Isolate">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="recovery"
            data-type="blend"
            data-brand="bsn"
            data-id="bsn-syntha-edge"
            data-name="Syntha-6 Edge"
            data-price=""
            data-purpose="A blended protein option focused on taste and convenience. Compare serving size and overall diet before choosing.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">BSN</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-b8dd1a91e694bde0.webp'); ?>" alt="Syntha-6 Edge">
            </div>
            <div class="product-body">
              <span class="micro-label">BSN</span>
              <h3>Syntha-6 Edge</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Protein Blend</span>
                <span class="meta-chip">Recovery</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View Syntha-6 Edge information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add Syntha-6 Edge">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="protein"
            data-type="isolate"
            data-brand="bpi"
            data-id="bpi-iso-hd"
            data-name="ISO HD"
            data-price=""
            data-purpose="An isolate-focused protein option for customers comparing texture, serving size, ingredients and value.">
            
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">BPI Sports</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-c3ad43770326214d.webp'); ?>" alt="ISO HD">
            </div>
            <div class="product-body">
              <span class="micro-label">BPI Sports</span>
              <h3>ISO HD</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Isolate Blend</span>
                <span class="meta-chip">Muscle Building</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn" aria-label="View ISO HD information">ⓘ</button>
                  <button class="square-btn add-btn" aria-label="Add ISO HD">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="creatine"
            data-type="creatine"
            data-brand="muscletech"
            data-id="muscletech-platinum-creatine"
            data-name="Platinum 100% Creatine"
            data-price=""
            data-purpose="Creatine monohydrate category for strength and training support. Use according to the product label and consider hydration, age, medicines and known kidney concerns before purchase.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-357c4922496c2117.webp'); ?>" alt="Platinum 100% Creatine">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Platinum 100% Creatine</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Creatine</span>
                <span class="meta-chip">Strength Support</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Platinum 100% Creatine information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Platinum 100% Creatine">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="weight"
            data-brand="muscletech"
            data-id="muscletech-hydroxycut-hardcore"
            data-name="Hydroxycut Hardcore Elite"
            data-price=""
            data-purpose="A stimulant-containing weight-management category. Review caffeine content and the complete label. Not appropriate for everyone, especially customers with pregnancy, heart, blood-pressure, anxiety, sleep or medicine-related concerns.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-903bc60f5271f89e.webp'); ?>" alt="Hydroxycut Hardcore Elite">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Hydroxycut Hardcore Elite</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Weight Management</span>
                <span class="meta-chip">Stimulant Formula</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Hydroxycut Hardcore Elite information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Hydroxycut Hardcore Elite">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="support"
            data-brand="muscletech"
            data-id="muscletech-alpha-test"
            data-name="Alpha Test"
            data-price=""
            data-purpose="A men's performance-support supplement. Product marketing claims should not replace medical assessment. Review ingredients and seek professional advice for hormonal, fertility or medicine concerns.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-a0e206d3dcf6c0d3.webp'); ?>" alt="Alpha Test">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Alpha Test</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Performance Support</span>
                <span class="meta-chip">Men's Formula</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Alpha Test information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Alpha Test">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="amino"
            data-brand="gat"
            data-id="gat-l-arginine"
            data-name="L-Arginine"
            data-price=""
            data-purpose="An amino-acid supplement category often considered for training support. Customers using blood-pressure, heart or nitrate medicines should seek professional guidance before use.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">GAT Sport</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-45ddaf948715f810.webp'); ?>" alt="L-Arginine">
            </div>
            <div class="product-body">
              <span class="micro-label">GAT Sport</span>
              <h3>L-Arginine</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Amino Acid</span>
                <span class="meta-chip">Training Support</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View L-Arginine information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add L-Arginine">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="vitamins"
            data-type="vitamins"
            data-brand="muscletech"
            data-id="muscletech-platinum-multivitamin"
            data-name="Platinum Multivitamin"
            data-price=""
            data-purpose="A daily multivitamin category. Compare the label with the customer's diet and other supplements to reduce duplicate vitamin and mineral intake.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-293350c64763219b.webp'); ?>" alt="Platinum Multivitamin">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Platinum Multivitamin</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Multivitamin</span>
                <span class="meta-chip">Daily Health</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Platinum Multivitamin information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Platinum Multivitamin">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="pump"
            data-brand="muscletech"
            data-id="muscletech-nitric-oxide-peptide"
            data-name="Nitric Oxide Peptide 160"
            data-price=""
            data-purpose="A pump-support product category. Review the complete label and seek professional advice when using blood-pressure, heart or nitrate medicines.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-b5593e73bcbf5f09.webp'); ?>" alt="Nitric Oxide Peptide 160">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Nitric Oxide Peptide 160</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Pump Support</span>
                <span class="meta-chip">Training Performance</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Nitric Oxide Peptide 160 information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Nitric Oxide Peptide 160">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="support"
            data-brand="muscletech"
            data-id="muscletech-test-peptide"
            data-name="Test Peptide T10"
            data-price=""
            data-purpose="A men's performance-support formula. Avoid presenting it as treatment for low testosterone or sexual-health conditions. Review medicines and medical history before use.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-c949307e2da530d6.webp'); ?>" alt="Test Peptide T10">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Test Peptide T10</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Performance Support</span>
                <span class="meta-chip">Men's Formula</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Test Peptide T10 information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Test Peptide T10">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="performance"
            data-type="preworkout"
            data-brand="muscletech"
            data-id="muscletech-stacked-pre"
            data-name="Stacked Pre"
            data-price=""
            data-purpose="A pre-workout category for training energy and focus. Check caffeine and stimulant totals across coffee, energy drinks and other supplements.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-480fe65014ff13c0.webp'); ?>" alt="Stacked Pre">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Stacked Pre</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Pre-Workout</span>
                <span class="meta-chip">Energy & Focus</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Stacked Pre information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Stacked Pre">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="recovery"
            data-type="amino"
            data-brand="muscletech"
            data-id="muscletech-plasma-bcaa"
            data-name="Plasma BCAA"
            data-price=""
            data-purpose="A branched-chain amino-acid category. Customers already meeting daily protein needs may receive limited additional value, so compare diet first.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-e3335134d802bc92.webp'); ?>" alt="Plasma BCAA">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Plasma BCAA</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">BCAA</span>
                <span class="meta-chip">Training Recovery</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Plasma BCAA information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Plasma BCAA">+</button>
                </div>
              </div>
            </div>
          </article>
          <article class="product-card real-product-card reveal"
            data-category="creatine"
            data-type="creatine"
            data-brand="muscletech"
            data-id="muscletech-creatine-peptide"
            data-name="Creatine Peptide 447"
            data-price=""
            data-purpose="A creatine-blend category for training support. Compare the creatine dose and value per serving with standard creatine monohydrate.">
            <div class="product-visual real-product-visual">
              <span class="product-brand-corner">MuscleTech</span>
              <img decoding="async" loading="lazy" class="real-product-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-8219bc1c2dc8aa67.webp'); ?>" alt="Creatine Peptide 447">
            </div>
            <div class="product-body">
              <span class="micro-label">MuscleTech</span>
              <h3>Creatine Peptide 447</h3>
              <div class="rating">See product details</div>
              <div class="product-meta">
                <span class="meta-chip type-chip">Creatine Blend</span>
                <span class="meta-chip">Strength Support</span>
              </div>
              <div class="product-bottom">
                <div class="price">
                  <strong>Checking price…</strong><small>Current shop details</small>
                </div>
                <div class="product-actions">
                  <button class="square-btn ghost info-btn"
                    aria-label="View Creatine Peptide 447 information">ⓘ</button>
                  <button class="square-btn add-btn"
                    aria-label="Add Creatine Peptide 447">+</button>
                </div>
              </div>
            </div>
          </article>
        </div>

        <p class="refuel-live-shop-link"><a href="<?php echo esc_url(refuel_woo_shop_url()); ?>">Browse the live shop for the full catalogue and current availability →</a></p>
        <div class="catalogue-more-wrap reveal">
          <button class="catalogue-more-button" id="catalogueMoreButton" type="button">
            Show More Products
          </button>
          <small id="catalogueMoreNote">Showing a compact selection first.</small>
        </div>

        <div class="shop-confidence-strip reveal">
          <article><span>✓</span><div><strong>Authenticity Checks</strong><small>Ask about sourcing and batch details</small></div></article>
          <article><span>▣</span><div><strong>Secure Delivery</strong><small>Pakistan-wide fulfilment</small></div></article>
          <article><span>✦</span><div><strong>Premium Quality</strong><small>Clear product information</small></div></article>
          <article><span>↻</span><div><strong>Return Details</strong><small>Review the policy before purchase</small></div></article>
          <article><span>◉</span><div><strong>AI Support</strong><small>Ask before you choose</small></div></article>
        </div>
      </div>
    </section>

    

<section class="premium-brands-section" id="brands">
      <div class="container premium-brands-shell reveal v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
        <div class="premium-brands-head">
          <div>
            <span class="eyebrow">Trusted. Tested. Performance proven.</span>
            <h2>Top <span class="gradient-text">Brands</span></h2>
            <p>
              Premium real-brand showcase with soft glass, gentle shine and continuous motion.
            </p>
          </div>

          <div class="brand-carousel-controls" aria-label="Brand carousel controls">
            <button id="brandPrev" type="button" aria-label="Previous brands">←</button>
            <button id="brandNext" type="button" aria-label="Next brands">→</button>
          </div>
        </div>

        <div class="brand-stage">
          <div class="brand-stage-glow" aria-hidden="true"></div>
          <div class="brand-carousel" id="brandCarousel" tabindex="0"
            aria-label="Moving top supplement brands">
            <div class="brand-carousel-track" id="brandTrack">
              <article class="premium-brand-card real-logo-card" data-brand="Optimum Nutrition">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-21c434966b2f872b.png'); ?>" alt="Optimum Nutrition logo">
                </span>
                <strong>OPTIMUM NUTRITION</strong>
                <small>Performance nutrition</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Applied Nutrition">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-c7a1844646eb8c21.png'); ?>" alt="Applied Nutrition logo">
                </span>
                <strong>APPLIED NUTRITION</strong>
                <small>Sports supplements</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="MuscleTech">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-da6410ff67f6afeb.png'); ?>" alt="MuscleTech logo">
                </span>
                <strong>MUSCLETECH</strong>
                <small>Research-led formulas</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Dymatize">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-bf268ae229139ed5.png'); ?>" alt="Dymatize logo">
                </span>
                <strong>DYMATIZE</strong>
                <small>Protein innovation</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="MyProtein">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-2d1ce6a5594cd2b2.png'); ?>" alt="MyProtein logo">
                </span>
                <strong>MYPROTEIN</strong>
                <small>Everyday performance</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Rule One">
                <span class="real-brand-logo logo-tall">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-d97dfca073facf41.png'); ?>" alt="Rule One logo">
                </span>
                <strong>RULE ONE</strong>
                <small>Sports nutrition</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Animal">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-2c52173a8ababa20.png'); ?>" alt="Animal logo">
                </span>
                <strong>ANIMAL</strong>
                <small>Hardcore training support</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="BSN">
                <span class="real-brand-logo logo-square">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-431f2cf05caa6498.png'); ?>" alt="BSN logo">
                </span>
                <strong>BSN</strong>
                <small>Performance supplements</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Cellucor C4">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-160748fc3d411dbe.png'); ?>" alt="Cellucor C4 logo">
                </span>
                <strong>CELLUCOR C4</strong>
                <small>Pre-workout performance</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Ghost">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-332df2617adb3a6f.png'); ?>" alt="Ghost logo">
                </span>
                <strong>GHOST</strong>
                <small>Lifestyle performance</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Big Ramy Labs">
                <span class="real-brand-logo logo-tall">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-28a157a449da964c.png'); ?>" alt="Big Ramy Labs logo">
                </span>
                <strong>BIG RAMY LABS</strong>
                <small>Bodybuilding nutrition</small>
              </article>

              <article class="premium-brand-card real-logo-card" data-brand="Kevin Levrone">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-458ed555ebb25eb6.png'); ?>" alt="Kevin Levrone logo">
                </span>
                <strong>KEVIN LEVRONE</strong>
                <small>Signature series</small>
              </article>

              <!-- Duplicate set for seamless continuous movement -->
              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-21c434966b2f872b.png'); ?>" alt="">
                </span>
                <strong>OPTIMUM NUTRITION</strong>
                <small>Performance nutrition</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-c7a1844646eb8c21.png'); ?>" alt="">
                </span>
                <strong>APPLIED NUTRITION</strong>
                <small>Sports supplements</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-da6410ff67f6afeb.png'); ?>" alt="">
                </span>
                <strong>MUSCLETECH</strong>
                <small>Research-led formulas</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-bf268ae229139ed5.png'); ?>" alt="">
                </span>
                <strong>DYMATIZE</strong>
                <small>Protein innovation</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-2d1ce6a5594cd2b2.png'); ?>" alt="">
                </span>
                <strong>MYPROTEIN</strong>
                <small>Everyday performance</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-tall">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-d97dfca073facf41.png'); ?>" alt="">
                </span>
                <strong>RULE ONE</strong>
                <small>Sports nutrition</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-2c52173a8ababa20.png'); ?>" alt="">
                </span>
                <strong>ANIMAL</strong>
                <small>Hardcore training support</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-square">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-431f2cf05caa6498.png'); ?>" alt="">
                </span>
                <strong>BSN</strong>
                <small>Performance supplements</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-160748fc3d411dbe.png'); ?>" alt="">
                </span>
                <strong>CELLUCOR C4</strong>
                <small>Pre-workout performance</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-332df2617adb3a6f.png'); ?>" alt="">
                </span>
                <strong>GHOST</strong>
                <small>Lifestyle performance</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-tall">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-28a157a449da964c.png'); ?>" alt="">
                </span>
                <strong>BIG RAMY LABS</strong>
                <small>Bodybuilding nutrition</small>
              </article>

              <article class="premium-brand-card real-logo-card" aria-hidden="true">
                <span class="real-brand-logo logo-wide">
                  <span class="logo-shine" aria-hidden="true"></span>
                  <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-458ed555ebb25eb6.png'); ?>" alt="">
                </span>
                <strong>KEVIN LEVRONE</strong>
                <small>Signature series</small>
              </article>
            </div>
          </div>
        </div>

        <div class="brand-motion-status">
          <span class="brand-live-dot"></span>
          <strong>Soft right-to-left brand showcase</strong>
          <small>Hover to pause • Drag or swipe • Use arrows to browse</small>
        </div>

        <div class="brand-trust-grid">
          <article>
            <span>✓</span>
            <div><strong>Verified Quality</strong><small>Authenticity-first sourcing</small></div>
          </article>
          <article>
            <span>⚗</span>
            <div><strong>Performance Driven</strong><small>Goal-focused categories</small></div>
          </article>
          <article>
            <span>◎</span>
            <div><strong>AI Guided</strong><small>Find the right category first</small></div>
          </article>
          <article>
            <span>🔒</span>
            <div><strong>Safe & Transparent</strong><small>Clear labels and guidance</small></div>
          </article>
        </div>
      </div>
    </section>

    
<section class="v29-ai-section" id="aiIntro">
      <div class="container v29-ai-shell">
        <span class="v29-outline-glint" aria-hidden="true"></span>

        <div class="v29-ai-copy visible">
          <span class="eyebrow">Goal-first AI guidance</span>
          <h1>
            Choose your goal first.
            <span class="gradient-text">Refuel AI finds the right category.</span>
          </h1>
          <p class="v29-ai-lead">
            No random recommendations. Refuel AI checks the customer’s goal,
            experience, preferences and important safety considerations before
            explaining which supplement category deserves attention.
          </p>

          <div class="v29-benefit-grid" aria-label="AI guidance benefits">
            <article><span>01</span><div><strong>Goal understood</strong><small>Outcome and experience level</small></div></article>
            <article><span>02</span><div><strong>Safety screened</strong><small>Diet, medicines and conditions</small></div></article>
            <article><span>03</span><div><strong>Category explained</strong><small>Why it may or may not fit</small></div></article>
          </div>

          <button class="button button-primary v29-ai-primary" type="button" data-open-assessment>
            Start My 60-Second AI Journey →
          </button>
          <p class="v29-ai-disclaimer">
            Guided education only — not diagnosis, prescribing or a replacement for professional care.
          </p>
        </div>

        <div class="v29-console-stage visible" id="heroVisual">
          <article class="v29-ai-console" id="aiConsole">
            <div class="v29-console-topbar">
              <span class="v29-online"><i></i> AI JAWAD ONLINE</span>
              <span class="v29-console-mode">REFUEL INTELLIGENCE</span>
            </div>

            <div class="v29-console-layout">
              <div class="v29-portrait-panel">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-3660db823de0393e.png'); ?>" alt="AI Jawad, founder and personal stack advisor">
                <div class="v29-portrait-scan" aria-hidden="true"></div>
                <div class="v29-profile-label">
                  <small>FOUNDER • PERSONAL STACK ADVISOR</small>
                  <strong>AI Jawad</strong>
                  <span>Goal-first • Safety-aware • Product education</span>
                </div>
              </div>

              <div class="v29-console-body">
                <div class="v29-live-analysis">
                  <div>
                    <small>LIVE GUIDED SELECTION</small>
                    <strong>Tell me what you want to achieve</strong>
                  </div>
                  <div class="v29-wave" aria-hidden="true">
                    <i></i><i></i><i></i><i></i><i></i>
                  </div>
                </div>

                <p id="aiJawadMessage">
                  Share your goal and experience level. I’ll identify the right
                  category first and explain the safest starting point.
                </p>

                <div class="v29-jawad-input">
                  <input id="jawadQuickInput" type="text"
                    placeholder="Example: muscle gain, beginner">
                  <button id="jawadQuickSend" type="button">ASK AI</button>
                </div>

                <div class="jawad-quick-prompts compact-prompts v29-prompts">
                  <button type="button"
                    data-jawad-prompt="I want to build muscle. Which category should I start with?">
                    Build Muscle
                  </button>
                  <button type="button"
                    data-jawad-prompt="I am a beginner. Help me find the right supplement category.">
                    Beginner
                  </button>
                  <button type="button"
                    data-jawad-prompt="What safety questions should I answer first?">
                    Safety Check
                  </button>
                </div>

                <button class="v29-full-coach" id="heroAskJawadCard" type="button">
                  Open Full AI Coach →
                </button>

                <div class="v29-console-trust">
                  <span>Goal first</span>
                  <span>Safety aware</span>
                  <span>Clear reasoning</span>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="v29-process-section">
      <div class="container v29-process-ribbon visible">
        <span class="v29-outline-glint" aria-hidden="true"></span>
        <div class="v29-process-intro">
          <span class="eyebrow">How your AI journey works</span>
          <strong>From one goal to a clearer buying decision.</strong>
        </div>
        <div class="v29-process-steps" aria-label="AI journey steps">
          <article><b>01</b><span>Goal</span><small>What do you want to achieve?</small></article>
          <i>→</i>
          <article><b>02</b><span>Safety</span><small>What needs to be checked?</small></article>
          <i>→</i>
          <article><b>03</b><span>Category</span><small>Which type fits the purpose?</small></article>
          <i>→</i>
          <article><b>04</b><span>Products</span><small>Compare relevant options.</small></article>
        </div>
      </div>
    </section>

    <section class="trust-wrap">
      <div class="container trust-grid reveal v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
        <article class="trust-card"><div class="trust-icon">🤖</div><div><strong>AI Shopping Coach</strong><small>Guided education, not random selling</small></div></article>
        <article class="trust-card"><div class="trust-icon">✓</div><div><strong>Authenticity Workflow</strong><small>Supplier and batch verification ready</small></div></article>
        <article class="trust-card"><div class="trust-icon">☪</div><div><strong>Halal-Conscious Filters</strong><small>Clear label and source information</small></div></article>
        <article class="trust-card"><div class="trust-icon">🚚</div><div><strong>Pakistan Delivery</strong><small>Fast, trackable fulfilment experience</small></div></article>
      </div>
    </section>


    <section class="trust-suite-section" id="trustScore">
      <div class="container trust-suite-shell reveal">
        <div class="trust-suite-head"><div>
          <span class="eyebrow">Shop with clear information</span>
          <h2>Check the product details before ordering.</h2>
        </div><p>Review the label, ingredients, seller, batch details and suitability for your needs. Ask us when information is missing.</p></div>
      </div>
    </section>

    <section class="trust-suite-section" id="certificationStandards">
      <div class="container trust-suite-shell reveal">
        <div class="certification-strip">
          <div class="certification-copy">
            <span class="eyebrow">Certification verification strip</span>
            <h2>Five standards to check before trust is claimed.</h2>
            <p>These marks identify verification frameworks the store can check against. Their display here does not mean every product is certified; product-level evidence must be confirmed batch by batch.</p>
            <a class="coa-link" href="#coaVerification">View COA verification guide <span>→</span></a>
          </div>

          <div class="certification-logos" aria-label="Certification frameworks">
            <article class="certification-badge"><div class="cert-logo">NSF</div><strong>NSF Certified Sport</strong><small>Check product listing</small></article>
            <article class="certification-badge"><div class="cert-logo long">INFORMED<br>SPORT</div><strong>Informed Sport</strong><small>Batch-test verification</small></article>
            <article class="certification-badge"><div class="cert-logo">BSCG</div><strong>BSCG Certified</strong><small>Independent testing</small></article>
            <article class="certification-badge"><div class="cert-logo">GMP</div><strong>GMP Facility</strong><small>Manufacturing standard</small></article>
            <article class="certification-badge"><div class="cert-logo">HALAL</div><strong>Halal Evidence</strong><small>Issuer and scope check</small></article>
          </div>
        </div>

        <details class="coa-verification-details" id="coaVerification">
          <summary>How Refuel should verify a Certificate of Analysis (COA)</summary>
          <p>Match the product name, lot or batch number, manufacturing or testing date, laboratory identity, test methods and pass/fail results to the exact item being sold. Store the original document and do not reuse one batch COA for a different lot.</p>
        </details>

        <div class="review-cta-row">
          <div>
            <strong>Purchased from Refuel?</strong>
            <p>Reviews and full product details are available from individual product pages in the shop.</p>
          </div>
          <a class="button button-primary" href="<?php echo esc_url(refuel_woo_shop_url()); ?>">Browse Products</a>
        </div>
      </div>
    </section>

<section class="membership-section" id="membership">
      <div class="container membership-shell reveal v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
        <div class="membership-head">
          <div>
            <span class="eyebrow">Membership & savings</span>
            <h2>Explore membership plans. Subscriptions are coming soon.</h2>
            <p>
              View each plan's monthly or yearly details in the popup. When memberships
              launch, active Elite members will receive 10% off eligible store purchases
              from the 1st through the 10th of every calendar month.
            </p>
          </div>

          <div class="billing-toggle" role="group" aria-label="Choose billing period">
            <button class="billing-button active" type="button" data-billing="monthly">
              Monthly
            </button>
            <button class="billing-button" type="button" data-billing="yearly">
              Yearly
            </button>
          </div>
        </div>

        <div class="annual-saving-banner elite-reward-banner" id="eliteRewardBanner">
          <div class="saving-icon">10%</div>
          <div>
            <strong>Elite Monthly Reward</strong>
            <small>
              Active Elite members receive 10% off eligible product purchases
              from the 1st through the 10th of every month.
            </small>
          </div>
          <div class="elite-reward-status">
            <span class="billing-status" id="billingStatus">Monthly billing selected</span>
            <span class="elite-promo-status" id="elitePromoStatus">Checking monthly reward…</span>
          </div>
        </div>

        <div class="membership-grid">
          <article class="membership-card" data-plan="Starter" data-monthly="1490">
            <div class="plan-top">
              <div>
                <small>ESSENTIAL SUPPORT</small>
                <h3>Starter</h3>
              </div>
              <span class="plan-icon">◎</span>
            </div>
            <div class="plan-price">
              <strong data-plan-price>PKR 1,490</strong>
              <small data-plan-period>/ month</small>
              <em data-plan-note>Flexible monthly billing</em>
            </div>
            <ul>
              <li>AI category guidance</li>
              <li>Saved shopping goals</li>
              <li>Member-only product offers</li>
              <li>Educational ingredient support</li>
            </ul>
            <button class="choose-plan-button" type="button">View Starter Details</button>
          </article>

          <article class="membership-card featured" data-plan="Pro" data-monthly="2990">
            <span class="popular-plan">MOST POPULAR</span>
            <div class="plan-top">
              <div>
                <small>SMARTER PERSONALIZATION</small>
                <h3>Pro</h3>
              </div>
              <span class="plan-icon">✦</span>
            </div>
            <div class="plan-price">
              <strong data-plan-price>PKR 2,990</strong>
              <small data-plan-period>/ month</small>
              <em data-plan-note>Flexible monthly billing</em>
            </div>
            <ul>
              <li>Everything in Starter</li>
              <li>Complete AI stack builder</li>
              <li>Priority AI coach guidance</li>
              <li>Shopping and goal history</li>
            </ul>
            <button class="choose-plan-button primary" type="button">View Pro Details</button>
          </article>

          <article class="membership-card elite-plan-card" data-plan="Elite" data-monthly="5490">
            <span class="elite-reward-badge">10% OFF • 1ST–10TH</span>
            <div class="plan-top">
              <div>
                <small>PREMIUM MEMBER ACCESS</small>
                <h3>Elite</h3>
              </div>
              <span class="plan-icon">♛</span>
            </div>
            <div class="plan-price">
              <strong data-plan-price>PKR 5,490</strong>
              <small data-plan-period>/ month</small>
              <em data-plan-note>Flexible monthly billing</em>
            </div>
            <ul>
              <li>Everything in Pro</li>
              <li>Monthly guided stack review</li>
              <li>10% off eligible products from the 1st–10th monthly</li>
              <li>VIP offers and early product access</li>
            </ul>
            <button class="choose-plan-button" type="button">View Elite Details</button>
          </article>
        </div>

        <div class="membership-selection" id="membershipSelection">
          <div>
            <small>MEMBERSHIP STATUS</small>
            <strong id="selectedMembership">Subscriptions are coming soon</strong>
            <span id="selectedMembershipPrice">Open any plan to view its full details.</span>
          </div>
          <button class="membership-checkout" id="membershipCheckout" type="button" disabled>
            Coming Soon
          </button>
        </div>
      </div>
    </section>

    <div class="membership-modal-backdrop" id="membershipModalBackdrop" aria-hidden="true"></div>
    <section class="membership-details-modal" id="membershipDetailsModal" role="dialog" aria-modal="true" aria-labelledby="membershipModalTitle" aria-hidden="true">
      <div class="membership-modal-head">
        <div>
          <small>Membership plan details</small>
          <h3 id="membershipModalTitle">Membership</h3>
        </div>
        <button class="icon-button" id="closeMembershipModal" type="button" aria-label="Close membership details">✕</button>
      </div>
      <div class="membership-modal-body">
        <div class="membership-modal-price">
          <strong id="membershipModalPrice"></strong>
          <span id="membershipModalPeriod"></span>
        </div>
        <p class="membership-modal-note" id="membershipModalNote"></p>
        <ul class="membership-modal-features" id="membershipModalFeatures"></ul>
        <div class="membership-coming-soon">
          <span>COMING SOON</span>
          <strong>Membership subscriptions are not open yet.</strong>
          <p>You can review every plan now. Subscription signup and billing will be enabled when memberships launch.</p>
        </div>
        <button class="membership-modal-disabled" type="button" disabled>Subscription Coming Soon</button>
      </div>
    </section>

    
<section class="section" id="safety">
      <div class="container v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span><div class="section-head reveal"><span class="eyebrow">Trust is a feature</span><h2>Responsible AI, not unsafe promises.</h2></div><div class="safety-grid"><article class="safety-card reveal"><h3>Safety escalation built into the journey</h3><p>The demo AI avoids personal supplement combinations when a customer mentions medicines, pregnancy, allergies, kidney, liver, heart, blood-pressure or diabetes concerns.</p><div class="safety-points"><div>Clear “educational guidance” language</div><div>Doctor or pharmacist referral when needed</div><div>No diagnosis, treatment or cure claims</div></div></article><article class="safety-card reveal"><h3>Launch checklist</h3><p>Before accepting real orders, connect verified inventory, a payment gateway, order database, delivery integration, legal pages and a real server-side AI service.</p><div class="safety-points"><div>Product authenticity records</div><div>Privacy and returns policy</div><div>Secure checkout and account protection</div></div></article></div></div>
    </section>
  
<section class="rf-history-experience" id="history">
      <div class="container rf-history-wrap v29-lit-shell"><span class="v29-outline-glint" aria-hidden="true"></span>
        <div class="rf-history-hero reveal">
          <div class="rf-history-hero-media">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-21391b4d660a022d.webp'); ?>" alt="Refuel fitness and wellness facility with cardio equipment and health bar" loading="lazy">
            <div class="rf-history-hero-shade"></div>
          </div>

          <div class="rf-history-hero-copy">
            <span class="rf-history-kicker"><i></i> Our foundation. Our future.</span>
            <h2>Our <span>History</span></h2>
            <h3>Since January 2017 to 2026</h3>
            <p>
              From a real fitness and wellness facility to traditional supplement selling—and now,
              the evolution into Refuel AI Intelligent Supplements.
            </p>
            <div class="rf-history-hero-actions">
              <button class="rf-history-primary" id="historyExploreButton" type="button">Explore Our Journey <b>→</b></button>
              <button class="rf-history-secondary" id="historyGalleryButton" type="button">View Real Facility <span>▣</span></button>
            </div>
          </div>

          <div class="rf-history-hero-brand" aria-label="Refuel brand mark">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-559044f82a1a1ae5.webp'); ?>" alt="Refuel logo">
            <small>Physical roots • Intelligent future</small>
          </div>
        </div>

        <div class="rf-history-timeline reveal" id="historyTimeline">
          <div class="rf-history-line"><span id="historyTimelineProgress"></span></div>
          <div class="rf-history-nodes">
          <button class="rf-history-node is-active" type="button" data-history-index="0" aria-pressed="true">
            <span class="rf-history-node-dot"></span>
            <strong>JAN 2017</strong>
            <small>Physical roots</small>
          </button>
          <button class="rf-history-node" type="button" data-history-index="1" aria-pressed="false">
            <span class="rf-history-node-dot"></span>
            <strong>2019</strong>
            <small>Customer-led learning</small>
          </button>
          <button class="rf-history-node" type="button" data-history-index="2" aria-pressed="false">
            <span class="rf-history-node-dot"></span>
            <strong>2022</strong>
            <small>Operational knowledge</small>
          </button>
          <button class="rf-history-node" type="button" data-history-index="3" aria-pressed="false">
            <span class="rf-history-node-dot"></span>
            <strong>2024</strong>
            <small>Trusted retail history</small>
          </button>
          <button class="rf-history-node" type="button" data-history-index="4" aria-pressed="false">
            <span class="rf-history-node-dot"></span>
            <strong>2026</strong>
            <small>AI-powered future</small>
          </button>
          </div>
          <div class="rf-history-chapter" id="historyChapter" aria-live="polite">
            <span id="historyChapterYear">JAN 2017</span>
            <div>
              <strong id="historyChapterTitle">The physical Refuel journey begins</strong>
              <p id="historyChapterBody">Refuel begins serving customers through a real fitness and wellness facility, with hands-on training support and traditional supplement selling.</p>
            </div>
            <em id="historyChapterMetric">Physical roots</em>
          </div>
        </div>

        <div class="rf-history-grid reveal">
          <button class="rf-history-place rf-history-training" type="button"
            data-facility-image="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-51b222ca9ed0c069.webp'); ?>"
            data-facility-caption="Training Floor — real Refuel strength-training facility">
            <div class="rf-history-place-head"><span>◫</span><div><strong>Training Floor</strong><small>Strength in every rep. Discipline in every set.</small></div></div>
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-51b222ca9ed0c069.webp'); ?>" alt="Refuel training floor with weight benches and strength equipment" loading="lazy">
            <b>View real facility ↗</b>
          </button>

          <button class="rf-history-place rf-history-cardio" type="button"
            data-facility-image="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-367fdf5000a28516.webp'); ?>"
            data-facility-caption="Cardio Zone — real Refuel treadmill and endurance area">
            <div class="rf-history-place-head"><span>♡</span><div><strong>Cardio Zone</strong><small>Endurance today. Performance tomorrow.</small></div></div>
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-367fdf5000a28516.webp'); ?>" alt="Refuel cardio zone with treadmills" loading="lazy">
            <b>View real facility ↗</b>
          </button>

          <button class="rf-history-place rf-history-health" type="button"
            data-facility-image="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-b1a62ae66ee9f749.webp'); ?>"
            data-facility-caption="Health Bar — real Refuel wellness and nutrition space">
            <div class="rf-history-place-head"><span>♢</span><div><strong>Health Bar</strong><small>Fuel better. Live stronger.</small></div></div>
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-b1a62ae66ee9f749.webp'); ?>" alt="Refuel health bar inside the fitness facility" loading="lazy">
            <b>View real facility ↗</b>
          </button>

          <button class="rf-history-place rf-history-identity" type="button"
            data-facility-image="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-4d25ca0a07e9d63b.webp'); ?>"
            data-facility-caption="Refuel Brand Identity — illuminated facility wall mark">
            <div class="rf-history-place-head"><span>◇</span><div><strong>Brand Identity</strong><small>A symbol of trust, built on experience.</small></div></div>
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-4d25ca0a07e9d63b.webp'); ?>" alt="Illuminated Refuel logo inside the facility" loading="lazy">
            <b>View real identity ↗</b>
          </button>

          <article class="rf-history-resources">
            <div class="rf-history-place-head"><span>◎</span><div><strong>People • Materials • Resources</strong><small>The right people. The right products. The right knowledge.</small></div></div>
            <div class="rf-history-resource-grid">
              <div><i>♙</i><span><strong>People</strong><small>Coaches, staff and customer support shaped by real facility work.</small></span></div>
              <div><i>⌁</i><span><strong>Materials</strong><small>Products, labels, batches and authenticity information.</small></span></div>
              <div><i>▣</i><span><strong>Resources</strong><small>Guides, safety education and goal-first category support.</small></span></div>
              <div><i>↗</i><span><strong>Facility Growth</strong><small>Operational experience now informing the digital platform.</small></span></div>
            </div>
          </article>
        </div>

        <div class="rf-history-trust reveal">
          <div class="rf-history-trust-icon">✓</div>
          <div class="rf-history-trust-copy">
            <h3>Built on <span>Trust.</span> Backed by <span>Experience.</span></h3>
            <p>
              Refuel has served the fitness community since January 2017. The new AI platform is being built on real facility experience, traditional supplement retail and direct customer guidance.
            </p>
          </div>
          <div class="rf-history-proof-list">
            <span><i>▥</i><small>Real Facility<br>Experience</small></span>
            <span><i>♙</i><small>Real Customer<br>Guidance</small></span>
            <span><i>▢</i><small>Supplement Retail<br>History</small></span>
            <span><i>♡</i><small>Community<br>Support</small></span>
            <span><i>◉</i><small>Operational<br>Knowledge</small></span>
          </div>
          <div class="rf-history-since-badge">
            <small>SINCE</small><strong>2017</strong><span>★★★★★</span>
          </div>
        </div>
      </div>
    </section>

    
<div class="facility-lightbox" id="facilityLightbox" hidden>
      <button class="facility-lightbox-close" id="facilityLightboxClose" type="button" aria-label="Close facility image">×</button>
      <div class="facility-lightbox-content" role="dialog" aria-modal="true" aria-label="Facility image viewer">
        <img decoding="async" loading="lazy" id="facilityLightboxImage" src="" alt="">
        <p id="facilityLightboxCaption"></p>
      </div>
    </div>

    
</main>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div><a class="brand" href="#home"><span class="brand-mark brand-mark-image"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-94a7da5fab076e2f.png'); ?>" alt="Refuel AI logo"></span><span class="brand-copy">REFUEL <b>AI</b><small>Intelligent supplements</small></span></a><p class="footer-description">A premium supplement marketplace concept combining authentic products, halal-conscious discovery and responsible AI-powered education.</p></div>
        <div class="footer-column"><h4>Shop</h4><a href="#shop">Protein</a><a href="#shop">Creatine</a><a href="#shop">Vitamins</a><a href="#shop">Performance</a></div>
        <div class="footer-column"><h4>Refuel AI</h4><a href="#goals">Shop by Goal</a><a href="#aiConsole">AI Help</a><a href="#safety">Safety</a><a href="#">About</a></div>
        <div class="footer-column"><h4>Customer Care</h4><a href="#">Authenticity</a><a href="#">Delivery</a><a href="#">Returns</a><a href="#">Contact</a></div>
      </div>
      <div class="footer-bottom"><span>© <span id="year"></span> Refuel AI. All rights reserved.</span><span>Supplements are not intended to diagnose, treat, cure or prevent disease.</span></div>
    </div>
  </footer>


  <nav class="mobile-app-nav" id="mobileAppNav" aria-label="Mobile app navigation">
    <button type="button" class="active" data-mobile-target="home" aria-label="Home"><span>⌂</span><small>HOME</small></button>
    <button type="button" data-mobile-target="shop" aria-label="Shop"><span>▦</span><small>SHOP</small></button>
    <button type="button" data-mobile-action="ai" aria-label="AI Coach"><span>◉</span><small>AI</small></button>
    <button type="button" data-mobile-target="trust" aria-label="Trust"><span>✓</span><small>TRUST</small></button>
    <button type="button" data-mobile-action="cart" aria-label="Cart"><span>🛒</span><small>CART</small></button>
  </nav>

  <div class="mobile-ios-install-sheet" id="mobileIosInstallSheet" aria-hidden="true">
    <div class="mobile-ios-install-card" role="dialog" aria-modal="true" aria-labelledby="mobileIosInstallTitle">
      <h3 id="mobileIosInstallTitle">Install Refuel AI Supplements on iPhone</h3>
      <p>Apple installs this secure PWA through Safari.</p>
      <div class="mobile-ios-install-steps">
        <div><b>1</b><span>Tap the Safari <strong>Share</strong> button.</span></div>
        <div><b>2</b><span>Choose <strong>Add to Home Screen</strong>.</span></div>
        <div><b>3</b><span>Tap <strong>Add</strong> to install the app.</span></div>
      </div>
      <button class="button button-primary" id="closeMobileIosInstall" type="button">Got it</button>
    </div>
  </div>

  <div class="drawer-backdrop" id="drawerBackdrop"></div>
  <aside class="cart-drawer" id="cartDrawer" aria-label="Shopping cart">
    <div class="drawer-head"><div><small class="micro-label">Your selection</small><h3>Smart Cart</h3></div><button class="icon-button" id="closeCart" aria-label="Close cart">✕</button></div>
    <div class="cart-items" id="cartItems"><div class="empty-cart">Your cart is empty. Add products or build an AI stack.</div></div>
    <div class="drawer-price-summary">
      <div class="drawer-price-row"><span>Subtotal</span><strong id="cartSubtotal">PKR 0</strong></div>
      <div class="drawer-price-row elite-cart-discount" id="eliteDiscountRow" hidden>
        <span>Elite reward — 10%</span><strong id="eliteDiscountAmount">− PKR 0</strong>
      </div>
      <div class="drawer-total"><span>Total</span><strong id="cartTotal">PKR 0</strong></div>
      <small class="elite-cart-note" id="eliteCartNote"></small>
    </div>
    <button class="button button-primary" id="checkoutButton" onclick="event.stopImmediatePropagation(); window.location.assign('<?php echo esc_url(refuel_shop_page_url('checkout')); ?>'); return false;">Continue to Checkout</button>
  </aside>


  <div class="modal-backdrop" id="assessmentBackdrop"></div>
  <section class="assessment-modal" id="assessmentModal" role="dialog" aria-modal="true" aria-labelledby="assessmentTitle">
    <div class="modal-head"><div><small>Refuel AI assessment</small><h3 id="assessmentTitle">Build your supplement stack</h3></div><button class="icon-button" id="closeAssessment" aria-label="Close assessment">✕</button></div>
    <div class="modal-body" id="assessmentModalBody">
      <div class="assessment-progress-shell">
        <div class="assessment-progress-meta">
          <span class="assessment-stage-badge" id="assessmentStageBadge">Getting started</span>
          <strong class="assessment-percent" id="assessmentPercent">20%</strong>
        </div>
        <div class="progress-track" aria-label="Assessment progress">
          <span id="assessmentProgress"></span>
        </div>
      </div>
      <div id="assessmentContent"></div>
    </div>
  </section>

  <button class="chat-launcher" id="chatLauncher" aria-label="Open Refuel AI Coach">◉</button>
  <section class="chat-panel" id="chatPanel" aria-label="Refuel AI Coach">
    <div class="chat-head"><div class="chat-profile"><div class="chat-avatar">◉</div><div><strong>Refuel AI Coach</strong><div class="online">Online</div></div></div><button class="icon-button" id="closeChat" aria-label="Close chat">✕</button></div>
    <div class="chat-messages" id="chatMessages"><div class="message bot">Welcome to Refuel AI. Tell me your goal, or ask me to compare protein, creatine, vitamins or performance products.</div></div>
    <div class="quick-prompts"><button data-prompt="Compare whey and plant protein">Whey vs plant</button><button data-prompt="What does creatine do?">Creatine basics</button><button data-prompt="Build a muscle stack">Muscle stack</button></div>
    <form class="chat-form" id="chatForm"><input id="chatInput" type="text" placeholder="Ask about supplements..." autocomplete="off" /><button type="submit">➜</button></form>
  </section>

  <div class="install-banner" id="installBanner"><div class="install-app-icon" aria-hidden="true"><img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-94a7da5fab076e2f.png'); ?>" alt=""></div><p><strong>Install Refuel AI Supplements</strong><small>Add the mobile PWA to your home screen.</small></p><button class="button button-primary button-small" id="installButton">Install</button><button class="icon-button" id="dismissInstall" aria-label="Dismiss install prompt">✕</button></div>
  <div class="toast" id="toast"></div>

  <script type="application/json" id="refuel-live-catalog"><?php echo wp_json_encode(refuel_catalog_data(), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?></script>
  <script id="refuel-catalog-sync">
    (() => {
      let live = {};
      try { live = JSON.parse(document.getElementById('refuel-live-catalog').textContent); } catch (error) {}
      document.querySelectorAll('#productGrid .product-card').forEach(card => {
        const item = live[card.dataset.name.trim().toLowerCase()];
        if (!item) { card.dataset.live = '0'; card.classList.add('hidden'); return; }
        card.dataset.live = '1';
        card.dataset.url = item.url;
        card.dataset.price = item.price;
        card.querySelector('.price strong').textContent = item.priceText;
        card.querySelector('.price small').textContent = item.inStock ? 'Available in shop' : 'Out of stock';
        if (item.image) card.querySelector('.real-product-image').src = item.image;
        if (!item.inStock) card.querySelector('.add-btn').disabled = true;
      });
    })();
  </script>
  <script>
    const products = Array.from(document.querySelectorAll('.product-card')).filter(card => card.dataset.live === '1').map(card => ({
      id: card.dataset.id,
      name: card.dataset.name,
      price: Number(card.dataset.price),
      purpose: card.dataset.purpose,
      category: card.dataset.category,
      url: card.dataset.url
    }));

    const productById = id => products.find(product => product.id === id);
    const currency = value => 'PKR ' + Number(value).toLocaleString('en-PK');
    const wooShopUrl = "<?php echo esc_js(refuel_woo_shop_url()); ?>";
    const wooCartUrl = "<?php echo esc_url(refuel_shop_page_url('cart')); ?>";
    const wooCheckoutUrl = "<?php echo esc_url(refuel_shop_page_url('checkout')); ?>";
    const REFUEL_CART_STORAGE_KEY = 'refuelCartV7';
    const REFUEL_CART_SCHEMA = 'v5-6';
    let refuelCartNeedsReset = true;
    const cart = (() => {
      try {
        refuelCartNeedsReset = localStorage.getItem('refuelCartSchema') !== REFUEL_CART_SCHEMA;
        if (refuelCartNeedsReset) {
          Object.keys(localStorage).forEach(key => {
            if (/^refuelCartV\d+$/.test(key) || /^wc_(cart_hash|fragments)/.test(key)) localStorage.removeItem(key);
          });
          Object.keys(sessionStorage).forEach(key => {
            if (/^wc_(cart_hash|fragments)/.test(key)) sessionStorage.removeItem(key);
          });
          return [];
        }
        const saved = JSON.parse(localStorage.getItem(REFUEL_CART_STORAGE_KEY) || '[]');
        return Array.isArray(saved) ? saved : [];
      } catch (error) {
        return [];
      }
    })();

    if (refuelCartNeedsReset) {
      const resetStaleCartAfterLoad = () => {
        const config = window.RefuelCartConfig || {};
        const resetBody = new URLSearchParams({ action: 'refuel_reset_stale_cart', schema: REFUEL_CART_SCHEMA });
        fetch(config.resetUrl || '/wp-admin/admin-ajax.php', {
          method: 'POST',
          credentials: 'same-origin',
          cache: 'no-store',
          body: resetBody,
          headers: { 'Accept': 'application/json', 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' }
        })
          .then(response => response.ok ? response.json() : null)
          .then(payload => {
            if (!payload || !payload.success) return;
            localStorage.setItem('refuelCartSchema', REFUEL_CART_SCHEMA);
            localStorage.setItem(REFUEL_CART_STORAGE_KEY, '[]');
            cart.splice(0, cart.length);
            if (typeof renderCart === 'function') renderCart();
          })
          .catch(() => {});
      };
      if (document.readyState === 'complete') window.setTimeout(resetStaleCartAfterLoad, 700);
      else window.addEventListener('load', () => window.setTimeout(resetStaleCartAfterLoad, 700), { once: true });
    }
    let selectedGoal = '';
    let deferredInstallPrompt = null;

    const $ = selector => document.querySelector(selector);
    const $$ = selector => Array.from(document.querySelectorAll(selector));
    const toast = $('#toast');
    const cartDrawer = $('#cartDrawer');
    const drawerBackdrop = $('#drawerBackdrop');
    const assessmentModal = $('#assessmentModal');
    const assessmentBackdrop = $('#assessmentBackdrop');

    $('#year').textContent = new Date().getFullYear();

    function showToast(message) {
      toast.textContent = message;
      toast.classList.add('show');
      clearTimeout(showToast.timer);
      showToast.timer = setTimeout(() => toast.classList.remove('show'), 2200);
    }

    function setBodyLock(locked) {
      document.body.classList.toggle('modal-open', locked);
    }

    function openCart() {
      cartDrawer.classList.add('open');
      drawerBackdrop.classList.add('show');
      setBodyLock(true);
    }

    function closeCart() {
      cartDrawer.classList.remove('open');
      drawerBackdrop.classList.remove('show');
      setBodyLock(false);
    }

    function addToCart(product, quantity = 1) {
      const existing = cart.find(item => item.id === product.id);
      if (existing) existing.quantity += quantity;
      else cart.push({ ...product, quantity });
      renderCart();
      showToast(product.name + ' added to Smart Cart');
    }

    function removeFromCart(id) {
      const index = cart.findIndex(item => item.id === id);
      if (index >= 0) cart.splice(index, 1);
      renderCart();
    }

    function renderCart() {
      const count = cart.reduce((sum, item) => sum + item.quantity, 0);
      const subtotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
      const reward = eliteMonthlyRewardState();
      const eliteDiscount = eliteMemberActive && reward.active ? subtotal * 0.10 : 0;
      const total = subtotal - eliteDiscount;

      $('#cartCount').textContent = count;
      try { localStorage.setItem(REFUEL_CART_STORAGE_KEY, JSON.stringify(cart)); } catch (error) {}
      const v6CartBadge = document.getElementById('v6NavCartCount');
      if (v6CartBadge) {
        v6CartBadge.textContent = count > 99 ? '99+' : String(count);
        v6CartBadge.hidden = count < 1;
      }
      $('#cartSubtotal').textContent = currency(subtotal);
      $('#cartTotal').textContent = currency(total);
      $('#eliteDiscountAmount').textContent = '− ' + currency(eliteDiscount);
      $('#eliteDiscountRow').hidden = eliteDiscount <= 0;

      if (eliteMemberActive && reward.active) {
        $('#eliteCartNote').textContent =
          'Elite Monthly Reward applied: 10% off eligible products during the 1st–10th.';
      } else if (eliteMemberActive) {
        $('#eliteCartNote').textContent =
          'Elite membership selected. The 10% store reward activates from the 1st–10th each month.';
      } else {
        $('#eliteCartNote').textContent =
          'Elite members receive 10% off eligible products from the 1st–10th monthly.';
      }

      $('#cartItems').innerHTML = cart.length ? cart.map(item => `
        <div class="cart-line">
          <div><strong>${item.name}</strong><small>${item.quantity} × ${currency(item.price)}</small></div>
          <button class="remove-item" data-remove="${item.id}">Remove</button>
        </div>`).join('') : '<div class="empty-cart">Your cart is empty. Add products or build an AI stack.</div>';
      $$('[data-remove]').forEach(button => button.addEventListener('click', () => removeFromCart(button.dataset.remove)));
    }

    $('#cartButton').addEventListener('click', () => {
      window.location.href = wooCartUrl;
    });
    $('#closeCart').addEventListener('click', closeCart);
    drawerBackdrop.addEventListener('click', closeCart);
    $('#checkoutButton').addEventListener('click', () => {
      window.location.href = wooCheckoutUrl;
    });

    $$('.add-btn').forEach(button => button.addEventListener('click', event => {
      const card = event.currentTarget.closest('.product-card');
      const name = card ? card.dataset.name : '';
      const separator = wooShopUrl.includes('?') ? '&' : '?';
      window.location.href = card.dataset.url || (wooShopUrl + separator + 's=' + encodeURIComponent(name));
    }));

    $$('.info-btn').forEach(button => button.addEventListener('click', event => {
      const card = event.currentTarget.closest('.product-card');
      if (card.dataset.url) window.location.href = card.dataset.url;
    }));

    function openInfoModal(product) {
      selectedGoal = product.category;
      openAssessment();
      assessmentState.step = 5;
      assessmentState.answers = { goal: product.category, diet: 'not selected', level: 'not selected', concern: 'none', preference: 'learn more' };
      $('#assessmentProgress').style.width = '100%';
      $('#assessmentContent').innerHTML = `
        <span class="step-label">Product intelligence</span>
        <h2 class="question-title">${product.name}</h2>
        <div class="result-card">
          <small class="micro-label">What it is for</small>
          <h3>${product.category.charAt(0).toUpperCase() + product.category.slice(1)} category</h3>
          <p class="muted">${product.purpose}</p>
          <div class="medical-warning">This is general product education, not medical advice. Check the exact label and speak with a doctor or pharmacist when health conditions or medicines are involved.</div>
        </div>
        <div class="modal-actions"><button class="button button-secondary" data-close-modal>Close</button><button class="button button-primary" id="addInfoProduct">Add to Cart</button></div>`;
      $('[data-close-modal]').addEventListener('click', closeAssessment);
      $('#addInfoProduct').addEventListener('click', () => { window.location.href = product.url || wooShopUrl; });
    }

    $$('.filter-btn').forEach(button => button.addEventListener('click', () => {
      $$('.filter-btn').forEach(item => item.classList.remove('active'));
      button.classList.add('active');
      const filter = button.dataset.filter;
      $$('.product-card').forEach(card => card.classList.toggle('hidden', filter !== 'all' && card.dataset.category !== filter));
    }));

    const menuButton = $('#menuButton');
    const mobileMenu = $('#mobileMenu');
    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
      menuButton.textContent = mobileMenu.classList.contains('open') ? '✕' : '☰';
    });
    $$('.mobile-menu a').forEach(link => link.addEventListener('click', () => { mobileMenu.classList.remove('open'); menuButton.textContent = '☰'; }));

    const assessmentQuestions = [
      {
        key: 'goal', title: 'What is your main goal?', choices: [
          ['muscle','💪','Build muscle','Protein, calories and strength support'],
          ['performance','⚡','Performance','Energy, strength and endurance'],
          ['health','🧬','Daily health','Micronutrients and daily support'],
          ['recovery','🌙','Recovery','Sleep, hydration and mobility']
        ]
      },
      {
        key: 'diet', title: 'Which option best describes your diet?', choices: [
          ['standard','◉','Standard diet','No major food exclusions'],
          ['halal','☪','Halal-conscious','Check source and certification'],
          ['vegetarian','🌿','Vegetarian','Avoid meat-derived ingredients'],
          ['dairyfree','◇','Dairy-free','Prefer plant-based protein']
        ]
      },
      {
        key: 'level', title: 'What is your training experience?', choices: [
          ['beginner','1','Beginner','New or returning to training'],
          ['intermediate','2','Intermediate','Consistent weekly training'],
          ['advanced','3','Advanced','Structured performance training'],
          ['lifestyle','∞','Lifestyle health','General wellness focus']
        ]
      },
      {
        key: 'concern', title: 'Do any safety considerations apply?', choices: [
          ['none','✓','None selected','Continue with general education'],
          ['medicine','Rx','Medicines','Prescription or regular medicine'],
          ['condition','!','Health condition','Kidney, liver, heart, diabetes or blood pressure'],
          ['pregnancy','◇','Pregnancy / nursing','Professional guidance required']
        ]
      },
      {
        key: 'preference', title: 'What matters most when you shop?', choices: [
          ['value','₨','Best value','Prioritize price and serving count'],
          ['premium','★','Premium quality','Prioritize refined formulas'],
          ['simple','○','Simple stack','Keep the number of products low'],
          ['education','i','More education','Explain every category clearly']
        ]
      }
    ];

    const assessmentState = { step: 0, answers: {} };

    function openAssessment(goal = '') {
      const startingGoal = goal || selectedGoal || '';

      selectedGoal = startingGoal;
      assessmentState.step = 0;
      assessmentState.answers = startingGoal
        ? { goal: startingGoal }
        : {};

      assessmentModal.classList.add('show');
      assessmentBackdrop.classList.add('show');
      setBodyLock(true);

      // Every new AI journey must visibly begin on Question 1.
      updateAssessmentProgress(20, 'Step 1 of ' + assessmentQuestions.length);
      renderAssessment();
      resetAssessmentScroll();
    }

    function closeAssessment() {
      assessmentModal.classList.remove('show');
      assessmentBackdrop.classList.remove('show');
      setBodyLock(false);
    }

    function updateAssessmentProgress(percent, label) {
      const safePercent = Math.max(0, Math.min(100, Math.round(percent)));
      $('#assessmentProgress').style.width = safePercent + '%';
      $('#assessmentPercent').textContent = safePercent + '%';
      $('#assessmentStageBadge').textContent = label;
    }

    function resetAssessmentScroll() {
      const modalBody = $('#assessmentModalBody');
      if (modalBody) {
        modalBody.scrollTop = 0;
        requestAnimationFrame(() => {
          modalBody.scrollTo({ top: 0, behavior: 'smooth' });
        });
      }
    }

    function renderAssessment() {
      const content = $('#assessmentContent');

      if (assessmentState.step >= assessmentQuestions.length) {
        updateAssessmentProgress(100, 'Assessment complete');
        renderAssessmentResult();
        resetAssessmentScroll();
        return;
      }

      const question = assessmentQuestions[assessmentState.step];

      // A previously selected goal may appear selected on Step 1,
      // but Step 1 must never be skipped. This also makes Back work.
      const currentPercent =
        ((assessmentState.step + 1) / assessmentQuestions.length) * 100;

      updateAssessmentProgress(
        currentPercent,
        'Step ' + (assessmentState.step + 1) + ' of ' +
          assessmentQuestions.length
      );

      content.innerHTML = `
        <span class="step-label">Step ${assessmentState.step + 1} of ${assessmentQuestions.length}</span>
        <h2 class="question-title">${question.title}</h2>
        <div class="choice-grid">${question.choices.map(choice => `
          <button class="choice ${assessmentState.answers[question.key] === choice[0] ? 'selected' : ''}" data-answer="${choice[0]}">
            <span class="choice-icon">${choice[1]}</span><span><strong>${choice[2]}</strong><small>${choice[3]}</small></span>
          </button>`).join('')}</div>
        <div class="modal-actions"><button type="button" class="button button-secondary" id="assessmentBack" ${assessmentState.step === 0 ? 'disabled' : ''}>Back</button><button type="button" class="button button-primary" id="assessmentNext" ${assessmentState.answers[question.key] ? '' : 'disabled'}>Continue</button></div>`;

      $$('.choice').forEach(button => button.addEventListener('click', () => {
        assessmentState.answers[question.key] = button.dataset.answer;
        $$('.choice').forEach(item => item.classList.remove('selected'));
        button.classList.add('selected');
        $('#assessmentNext').disabled = false;
      }));
      $('#assessmentBack').addEventListener('click', event => {
        event.preventDefault();

        if (assessmentState.step <= 0) return;

        assessmentState.step -= 1;
        renderAssessment();
        resetAssessmentScroll();
      });

      $('#assessmentNext').addEventListener('click', event => {
        event.preventDefault();

        if (!assessmentState.answers[question.key]) return;

        assessmentState.step += 1;
        renderAssessment();
        resetAssessmentScroll();
      });

      resetAssessmentScroll();
    }

    function recommendedIds(answers) {
      if (answers.diet === 'dairyfree') {
        return [
          'muscletech-platinum-multivitamin',
          'muscletech-platinum-creatine'
        ];
      }

      if (answers.goal === 'muscle') {
        return answers.preference === 'premium'
          ? [
              'rule1-isolate',
              'muscletech-platinum-creatine',
              'muscletech-platinum-multivitamin'
            ]
          : [
              'on-gold-standard',
              'muscletech-platinum-creatine',
              'muscletech-platinum-multivitamin'
            ];
      }

      if (answers.goal === 'performance') {
        return answers.concern === 'none'
          ? [
              'muscletech-stacked-pre',
              'muscletech-platinum-creatine',
              'gat-l-arginine'
            ]
          : [
              'muscletech-platinum-creatine',
              'muscletech-platinum-multivitamin'
            ];
      }

      if (answers.goal === 'recovery') {
        return [
          'rule1-casein',
          'bsn-syntha-isolate',
          'muscletech-plasma-bcaa'
        ];
      }

      return [
        'muscletech-platinum-multivitamin',
        'on-gold-standard'
      ];
    }

    function stackName(answers) {
      const names = { muscle: 'Lean Muscle Essentials', performance: 'Performance Foundation', health: 'Daily Wellness Core', recovery: 'Recovery Support Stack' };
      return names[answers.goal] || 'Personalized Starter Stack';
    }

    function renderAssessmentResult() {
      const answers = assessmentState.answers;
      const ids = recommendedIds(answers);
      let recommended = ids.map(productById).filter(Boolean);

      if (!recommended.length) {
        recommended = products
          .filter(product => ['protein', 'creatine', 'vitamins'].includes(product.category))
          .slice(0, 3);
      }

      const blocked =
        ['medicine','condition','pregnancy'].includes(answers.concern);
      const total = recommended.reduce((sum, product) => sum + product.price, 0);
      $('#assessmentContent').innerHTML = `
        <div class="assessment-result-ready">
        <span class="step-label">AI assessment complete</span>
        <h2 class="question-title">${blocked ? 'Professional review recommended' : stackName(answers)}</h2>
        <div class="result-card">
          <small class="micro-label">${blocked ? 'Safety-first result' : 'Your educational stack preview'}</small>
          <h3>${blocked ? 'We paused personal combination advice.' : 'A clear starting point for your goal.'}</h3>
          <p class="muted">${blocked ? 'Because you selected a medicine, health condition, pregnancy or nursing consideration, the website should not recommend a personal supplement combination. Review exact ingredients with a qualified doctor or pharmacist.' : 'This preview combines relevant product categories based on your selected goal, diet, training level and shopping preference.'}</p>
          ${blocked ? '<div class="medical-warning">This safety response is intentional. Responsible AI should protect customer trust rather than push a sale.</div>' : `<div class="result-products">${recommended.map(product => `<div class="result-product"><span><strong>${product.name}</strong><br><small class="muted">${product.category}</small></span><strong>${currency(product.price)}</strong></div>`).join('')}</div><div class="bundle-total"><span><small>Estimated item total</small><strong>${currency(total)}</strong></span><span>Review items in the shop</span></div>`}
        </div>
        <div class="modal-actions"><button class="button button-secondary" id="restartAssessment">Start Again</button>${blocked ? '<button class="button button-primary" id="openCoachFromResult">Ask General Questions</button>' : '<button class="button button-primary" id="addRecommendedStack">Add Full Stack</button>'}</div>
        </div>`;
      $('#restartAssessment').addEventListener('click', () => {
        assessmentState.step = 0;
        assessmentState.answers = {};
        selectedGoal = '';
        updateAssessmentProgress(20, 'Getting started');
        renderAssessment();
        resetAssessmentScroll();
      });
      if (blocked) {
        $('#openCoachFromResult').addEventListener('click', () => { closeAssessment(); openChat(); addMessage('I need general education because I have a health or medicine consideration.', 'user'); setTimeout(() => addMessage('I can explain general product categories, but I cannot recommend a personal combination. Please review exact ingredients with a doctor or pharmacist.', 'bot'), 350); });
      } else {
        $('#addRecommendedStack').addEventListener('click', () => { recommended.forEach(product => addToCart(product)); closeAssessment(); openCart(); });
      }
    }

    $$('[data-open-assessment]').forEach(button => button.addEventListener('click', () => openAssessment()));
    $$('.goal-card').forEach(button => button.addEventListener('click', () => openAssessment(button.dataset.goal)));
    $('#closeAssessment').addEventListener('click', closeAssessment);
    assessmentBackdrop.addEventListener('click', closeAssessment);

    const addPreviewBundleButton = $('#addPreviewBundle');
    if (addPreviewBundleButton) addPreviewBundleButton.addEventListener('click', () => { ['whey','creatine','multi'].map(productById).forEach(product => addToCart(product)); openCart(); });

    const chatPanel = $('#chatPanel');
    const chatMessages = $('#chatMessages');
    function openChat() { chatPanel.classList.add('open'); $('#chatInput').focus(); }
    function closeChat() { chatPanel.classList.remove('open'); }
    $('#chatLauncher').addEventListener('click', () => chatPanel.classList.contains('open') ? closeChat() : openChat());
    $('#closeChat').addEventListener('click', closeChat);

    function addMessage(text, type) {
      const message = document.createElement('div');
      message.className = 'message ' + type;
      message.textContent = text;
      chatMessages.appendChild(message);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function aiResponse(question) {
      const text = question.toLowerCase();
      const safetyWords = ['medicine','medication','diabetes','blood pressure','kidney','liver','heart','pregnant','pregnancy','allergy','doctor','nursing'];
      if (safetyWords.some(word => text.includes(word))) return 'Because you mentioned a medicine or health consideration, I should not recommend a personal supplement combination. I can explain ingredients generally, but please review the exact label with a doctor or pharmacist.';
      if (text.includes('plant') && text.includes('whey')) return 'Whey is dairy-derived and usually offers a complete amino-acid profile in a compact serving. Plant blends can be dairy-free and may combine multiple sources. The better choice depends on diet, lactose tolerance, taste and total daily protein intake.';
      if (text.includes('protein') && text.includes('creatine')) return 'Protein helps you meet daily protein needs; creatine is a separate performance category commonly used for strength and high-intensity exercise. They serve different purposes. Suitability still depends on age, health history, medicines and hydration.';
      if (text.includes('creatine')) return 'Creatine is commonly used to support strength and repeated high-intensity effort. Review the label, hydration, age, health history and medicines before use.';
      if (text.includes('protein')) return 'Protein choice depends on total food intake, lactose tolerance, diet preference, serving size and budget. Whey concentrate, isolate and plant blends serve different customer needs.';
      if (text.includes('muscle') || text.includes('stack')) return 'For a muscle-gain shopping journey, start with total calorie and protein needs. The relevant categories are protein convenience, creatine education and micronutrient review. Use the AI assessment for a guided demo stack.';
      return 'Tell me your goal, diet preference, training experience and whether any medicines or health considerations apply. I will keep the guidance educational and safety-first.';
    }

    $('#chatForm').addEventListener('submit', event => {
      event.preventDefault();
      const input = $('#chatInput');
      const question = input.value.trim();
      if (!question) return;
      addMessage(question, 'user');
      input.value = '';
      setTimeout(() => addMessage(aiResponse(question), 'bot'), 420);
    });
    $$('.quick-prompts button').forEach(button => button.addEventListener('click', () => { openChat(); addMessage(button.dataset.prompt, 'user'); setTimeout(() => addMessage(aiResponse(button.dataset.prompt), 'bot'), 350); }));

    const revealObserver = new IntersectionObserver(entries => entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); revealObserver.unobserve(entry.target); } }), { threshold: .12 });
    $$('.reveal').forEach(element => revealObserver.observe(element));

    const cursorGlow = $('#cursorGlow');
    if (window.matchMedia('(pointer:fine)').matches) {
      window.addEventListener('pointermove', event => { cursorGlow.style.left = event.clientX + 'px'; cursorGlow.style.top = event.clientY + 'px'; cursorGlow.style.opacity = '1'; });
      const visual = $('#heroVisual');
      visual.addEventListener('pointermove', event => {
        const rect = visual.getBoundingClientRect();
        const x = (event.clientX - rect.left) / rect.width - .5;
        const y = (event.clientY - rect.top) / rect.height - .5;
        $('#aiConsole').style.transform = `rotateY(${x * 9}deg) rotateX(${y * -7}deg)`;
      });
      visual.addEventListener('pointerleave', () => $('#aiConsole').style.transform = 'rotateY(-4deg) rotateX(2deg)');
    }

    window.addEventListener('beforeinstallprompt', event => {
      event.preventDefault();
      deferredInstallPrompt = event;
      $('#installBanner').classList.add('show');
    });
    $('#installButton').addEventListener('click', async () => {
      if (!deferredInstallPrompt) {
        if (!/iphone|ipad|ipod/i.test(navigator.userAgent)) showToast('Chrome menu ⋮ → Install app or Add to Home screen');
        return;
      }
      deferredInstallPrompt.prompt();
      await deferredInstallPrompt.userChoice;
      deferredInstallPrompt = null;
      $('#installBanner').classList.remove('show');
    });
    $('#dismissInstall').addEventListener('click', () => $('#installBanner').classList.remove('show'));
    window.addEventListener('appinstalled', () => { $('#installBanner').classList.remove('show'); showToast('Refuel AI installed successfully'); });

    document.addEventListener('keydown', event => {
      if (event.key === 'Escape') { closeCart(); closeAssessment(); closeChat(); }
    });

    const heroGoalButtons = $$('.hero-goal-chip');
    const heroGoalMessages = {
      muscle: 'Muscle gain selected. I’ll first review your diet and total protein needs, then compare protein convenience, creatine education and micronutrient support.',
      performance: 'Performance selected. I’ll check training intensity, caffeine considerations, hydration and recovery before comparing relevant categories.',
      health: 'Daily health selected. I’ll review food patterns, micronutrient needs and safety considerations before showing a simple educational starting point.',
      recovery: 'Recovery selected. I’ll ask about sleep, soreness, hydration and training load before comparing recovery-support categories.'
    };
    const heroGoalLabels = {
      muscle: 'Muscle gain selected',
      performance: 'Performance selected',
      health: 'Daily health selected',
      recovery: 'Recovery selected'
    };
    let heroSelectedGoal = '';

    heroGoalButtons.forEach(button => button.addEventListener('click', () => {
      heroSelectedGoal = button.dataset.stackGoal;
      selectedGoal = heroSelectedGoal;
      heroGoalButtons.forEach(item => item.classList.toggle('active', item === button));
      $('#heroGoalStatus').textContent = heroGoalLabels[heroSelectedGoal];
      $('#readinessGoal').textContent = heroGoalLabels[heroSelectedGoal];
      $('#goalSelectionHint').textContent = 'Great choice — continue to the five-step AI assessment';
      $('#aiJawadMessage').textContent = heroGoalMessages[heroSelectedGoal];
    }));
    const openJawadCoach = () => {
      openChat();
      const prompt = heroSelectedGoal
        ? `Help me build a ${heroSelectedGoal} supplement stack.`
        : 'Help me choose the right supplement stack.';
      addMessage(prompt, 'user');
      setTimeout(() => addMessage(aiResponse(prompt), 'bot'), 350);
    };
    const heroAskJawadCardButton = $('#heroAskJawadCard');
    if (heroAskJawadCardButton) heroAskJawadCardButton.addEventListener('click', openJawadCoach);


    const jawadQuickInput = document.getElementById('jawadQuickInput');
    const jawadQuickSend = document.getElementById('jawadQuickSend');

    function answerInJawadPanel(question) {
      const cleaned = (question || '').trim();
      if (!cleaned) return;

      document.getElementById('aiJawadMessage').textContent = aiResponse(cleaned);
      jawadQuickInput.value = '';

      const coachCard = document.getElementById('aiConsole');
      coachCard.style.boxShadow =
        '0 28px 80px rgba(0,0,0,.58), 0 0 48px rgba(32,238,224,.18)';
      setTimeout(() => {
        coachCard.style.boxShadow = '';
      }, 700);
    }

    jawadQuickSend.addEventListener('click', () =>
      answerInJawadPanel(jawadQuickInput.value)
    );

    jawadQuickInput.addEventListener('keydown', event => {
      if (event.key === 'Enter') answerInJawadPanel(jawadQuickInput.value);
    });

    document.querySelectorAll('.jawad-quick-prompts button').forEach(button => {
      button.addEventListener('click', () =>
        answerInJawadPanel(button.dataset.jawadPrompt)
      );
    });
    // PWA registration and safe cache upgrades are handled by functions.php.
const compactGoalProductMap = {
      muscle: ['protein', 'creatine'],
      performance: ['performance', 'creatine'],
      health: ['vitamins'],
      recovery: ['protein', 'vitamins']
    };

    function filterProductsForGoal(goal) {
      const allowed = compactGoalProductMap[goal] || [];
      const productCards = [...document.querySelectorAll('.product-card')];

      productCards.forEach(card => {
        card.classList.toggle('hidden', allowed.length > 0 && !allowed.includes(card.dataset.category));
      });

      document.querySelectorAll('.filter-btn').forEach(button => {
        button.classList.remove('active');
      });

      const labels = {
        muscle: 'Build Muscle — protein and creatine',
        performance: 'Performance — energy, endurance and creatine',
        health: 'Daily Health — vitamins and wellness',
        recovery: 'Recovery — protein and support'
      };

      if (goal && labels[goal]) {
        document.getElementById('heroGoalStatus').textContent = labels[goal];
        document.getElementById('readinessGoal').textContent =
          'Products below are filtered for this goal';
      }

      document.getElementById('shop').scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }

    document.querySelectorAll('.hero-goal-chip').forEach(button => {
      button.addEventListener('click', () => {
        filterProductsForGoal(button.dataset.stackGoal);
        document.getElementById('showAllGoalProducts').classList.remove('active');
      });
    });

    document.getElementById('showAllGoalProducts').addEventListener('click', () => {
      document.querySelectorAll('.product-card').forEach(card => card.classList.remove('hidden'));
      document.querySelectorAll('.hero-goal-chip').forEach(button => button.classList.remove('active'));
      document.getElementById('showAllGoalProducts').classList.add('active');
      document.getElementById('heroGoalStatus').textContent = 'All products';
      document.getElementById('readinessGoal').textContent =
        'Choose a goal when you need guidance';
      const allFilter = document.querySelector('.filter-btn[data-filter="all"]');
      if (allFilter) allFilter.classList.add('active');
      document.getElementById('shop').scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });

    function openCompactJawadCoach() {
      openChat();
      addMessage('Help me identify the right supplement category before I shop.', 'user');
      setTimeout(() => {
        addMessage(
          'Tell me your main goal, experience level, diet preference, allergies, medicines and known medical conditions. I will explain the safest starting category.',
          'bot'
        );
      }, 350);
    }

    const compactConsole = document.getElementById('aiConsole');
    const compactVisual = document.getElementById('heroVisual');

    if (compactConsole && compactVisual && window.matchMedia('(pointer:fine)').matches) {
      compactVisual.addEventListener('pointermove', event => {
        const rect = compactVisual.getBoundingClientRect();
        const x = (event.clientX - rect.left) / rect.width - .5;
        const y = (event.clientY - rect.top) / rect.height - .5;
        compactConsole.style.transform =
          `rotateY(${x * 7}deg) rotateX(${y * -5}deg) translate3d(${x * 4}px, ${y * 3}px, 0)`;
      });

      compactVisual.addEventListener('pointerleave', () => {
        compactConsole.style.transform = 'rotateY(-4deg) rotateX(2deg)';
      });
    }


    window.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.reveal').forEach(element => {
        element.classList.add('visible');
        element.style.opacity = '1';
        element.style.visibility = 'visible';
        element.style.transform = 'none';
      });
    });


    const billingButtons = [...document.querySelectorAll('.billing-button')];
    const membershipCards = [...document.querySelectorAll('.membership-card')];
    const billingStatus = document.getElementById('billingStatus');
    const membershipModal = document.getElementById('membershipDetailsModal');
    const membershipModalBackdrop = document.getElementById('membershipModalBackdrop');
    const closeMembershipModalButton = document.getElementById('closeMembershipModal');
    const membershipModalTitle = document.getElementById('membershipModalTitle');
    const membershipModalPrice = document.getElementById('membershipModalPrice');
    const membershipModalPeriod = document.getElementById('membershipModalPeriod');
    const membershipModalNote = document.getElementById('membershipModalNote');
    const membershipModalFeatures = document.getElementById('membershipModalFeatures');

    let membershipBilling = 'monthly';
    let membershipDetailsCard = null;
    let membershipModalTrigger = null;
    let eliteMemberActive = false;

    function eliteMonthlyRewardState(referenceDate = new Date()) {
      const day = referenceDate.getDate();
      const active = day >= 1 && day <= 10;
      const currentMonthName = referenceDate.toLocaleString('en-US', { month: 'short' });

      let nextStart;
      if (active) {
        nextStart = new Date(referenceDate.getFullYear(), referenceDate.getMonth(), 10, 23, 59, 59);
      } else {
        nextStart = new Date(referenceDate.getFullYear(), referenceDate.getMonth() + 1, 1);
      }

      return {
        active,
        day,
        currentWindow: currentMonthName + ' 1–10',
        nextStart,
        daysUntilNext: active
          ? Math.max(0, 10 - day)
          : Math.ceil((nextStart - referenceDate) / 86400000)
      };
    }

    function updateEliteMonthlyRewardStatus() {
      const state = eliteMonthlyRewardState();
      const status = document.getElementById('elitePromoStatus');
      if (!status) return;

      if (state.active) {
        status.textContent = 'Elite reward period: ' + state.currentWindow + ' • memberships coming soon';
        status.classList.add('active');
      } else {
        const nextLabel = state.nextStart.toLocaleDateString('en-US', {
          month: 'short',
          day: 'numeric'
        });
        status.textContent =
          'Next Elite reward period: ' + nextLabel + '–10 • memberships coming soon';
        status.classList.remove('active');
      }
    }

    function formatPKR(value) {
      return 'PKR ' + Math.round(value).toLocaleString('en-US');
    }

    function membershipPrice(card) {
      const monthly = Number(card.dataset.monthly);
      if (membershipBilling === 'yearly') {
        return {
          main: formatPKR(monthly * 12),
          period: '/ year',
          note: formatPKR(monthly) + '/month billed annually'
        };
      }

      return {
        main: formatPKR(monthly),
        period: '/ month',
        note: 'Flexible monthly billing'
      };
    }

    function updateMembershipPrices() {
      membershipCards.forEach(card => {
        const price = membershipPrice(card);
        card.querySelector('[data-plan-price]').textContent = price.main;
        card.querySelector('[data-plan-period]').textContent = price.period;
        card.querySelector('[data-plan-note]').textContent = price.note;
      });

      billingStatus.textContent = membershipBilling === 'yearly'
        ? 'Yearly membership billing selected'
        : 'Monthly membership billing selected';

      if (membershipDetailsCard && membershipModal.classList.contains('show')) {
        populateMembershipModal(membershipDetailsCard);
      }
    }

    function populateMembershipModal(card) {
      const price = membershipPrice(card);
      membershipModalTitle.textContent = card.dataset.plan + ' Membership';
      membershipModalPrice.textContent = price.main;
      membershipModalPeriod.textContent = price.period;
      membershipModalNote.textContent = price.note;
      membershipModalFeatures.replaceChildren(
        ...[...card.querySelectorAll('li')].map(item => {
          const feature = document.createElement('li');
          feature.textContent = item.textContent;
          return feature;
        })
      );
    }

    function openMembershipModal(card, trigger) {
      membershipDetailsCard = card;
      membershipModalTrigger = trigger;
      populateMembershipModal(card);
      membershipModal.classList.add('show');
      membershipModalBackdrop.classList.add('show');
      membershipModal.setAttribute('aria-hidden', 'false');
      membershipModalBackdrop.setAttribute('aria-hidden', 'false');
      setBodyLock(true);
      closeMembershipModalButton.focus();
    }

    function closeMembershipModal() {
      membershipModal.classList.remove('show');
      membershipModalBackdrop.classList.remove('show');
      membershipModal.setAttribute('aria-hidden', 'true');
      membershipModalBackdrop.setAttribute('aria-hidden', 'true');
      setBodyLock(false);
      if (membershipModalTrigger) membershipModalTrigger.focus();
    }

    billingButtons.forEach(button => {
      button.addEventListener('click', () => {
        membershipBilling = button.dataset.billing;
        billingButtons.forEach(item => item.classList.toggle('active', item === button));
        updateMembershipPrices();
      });
    });

    membershipCards.forEach(card => {
      const detailsButton = card.querySelector('.choose-plan-button');
      detailsButton.addEventListener('click', () => {
        openMembershipModal(card, detailsButton);
      });
    });

    closeMembershipModalButton.addEventListener('click', closeMembershipModal);
    membershipModalBackdrop.addEventListener('click', closeMembershipModal);
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && membershipModal.classList.contains('show')) {
        closeMembershipModal();
      }
    });

    updateMembershipPrices();
    updateEliteMonthlyRewardStatus();
    localStorage.removeItem('refuelDemoMembership');

    renderCart();


    const brandCarousel = document.getElementById('brandCarousel');
    const brandTrack = document.getElementById('brandTrack');
    const brandPrev = document.getElementById('brandPrev');
    const brandNext = document.getElementById('brandNext');

    if (brandCarousel && brandTrack && brandPrev && brandNext) {
      let brandPaused = false;
      let brandDragging = false;
      let brandPointerStart = 0;
      let brandOffsetStart = 0;
      let brandOffset = 0;
      let brandFrame = null;
      let brandLastTime = performance.now();

      // Clearly visible but still premium and slow.
      const brandPixelsPerSecond = 26;

      const brandHalfWidth = () => brandTrack.scrollWidth / 2;

      const brandCardStep = () => {
        const firstCard = brandTrack.querySelector('.premium-brand-card');
        if (!firstCard) return 200;
        const styles = getComputedStyle(brandTrack);
        const gap = parseFloat(styles.columnGap || styles.gap || '13') || 13;
        return firstCard.getBoundingClientRect().width + gap;
      };

      function normalizeBrandOffset() {
        const half = brandHalfWidth();
        if (half <= 0) return;
        while (brandOffset >= half) brandOffset -= half;
        while (brandOffset < 0) brandOffset += half;
      }

      function paintBrandPosition() {
        normalizeBrandOffset();
        brandTrack.style.transform =
          'translate3d(' + (-brandOffset).toFixed(2) + 'px, 0, 0)';
      }

      function animateBrands(now) {
        const elapsedSeconds = Math.min((now - brandLastTime) / 1000, 0.05);
        brandLastTime = now;

        if (!brandPaused && !brandDragging && !document.hidden) {
          brandOffset += brandPixelsPerSecond * elapsedSeconds;
          paintBrandPosition();
        }

        brandFrame = requestAnimationFrame(animateBrands);
      }

      function startBrandMotion() {
        if (brandFrame) cancelAnimationFrame(brandFrame);
        brandLastTime = performance.now();
        paintBrandPosition();
        brandFrame = requestAnimationFrame(animateBrands);
      }

      brandCarousel.addEventListener('mouseenter', () => {
        brandPaused = true;
      });

      brandCarousel.addEventListener('mouseleave', () => {
        brandPaused = false;
        brandDragging = false;
        brandCarousel.classList.remove('dragging');
        brandLastTime = performance.now();
      });

      brandCarousel.addEventListener('pointerdown', event => {
        brandDragging = true;
        brandPaused = true;
        brandPointerStart = event.clientX;
        brandOffsetStart = brandOffset;
        brandCarousel.classList.add('dragging');

        if (brandCarousel.setPointerCapture) {
          brandCarousel.setPointerCapture(event.pointerId);
        }
      });

      brandCarousel.addEventListener('pointermove', event => {
        if (!brandDragging) return;
        const distance = event.clientX - brandPointerStart;
        brandOffset = brandOffsetStart - distance;
        paintBrandPosition();
      });

      function finishBrandDrag(event) {
        if (!brandDragging) return;
        brandDragging = false;
        brandPaused = false;
        brandCarousel.classList.remove('dragging');
        brandLastTime = performance.now();

        if (
          event &&
          event.pointerId !== undefined &&
          brandCarousel.hasPointerCapture &&
          brandCarousel.hasPointerCapture(event.pointerId)
        ) {
          brandCarousel.releasePointerCapture(event.pointerId);
        }
      }

      brandCarousel.addEventListener('pointerup', finishBrandDrag);
      brandCarousel.addEventListener('pointercancel', finishBrandDrag);

      brandPrev.addEventListener('click', () => {
        brandOffset -= brandCardStep();
        paintBrandPosition();
        brandLastTime = performance.now();
      });

      brandNext.addEventListener('click', () => {
        brandOffset += brandCardStep();
        paintBrandPosition();
        brandLastTime = performance.now();
      });

      brandCarousel.addEventListener('keydown', event => {
        if (event.key === 'ArrowLeft') {
          event.preventDefault();
          brandOffset -= brandCardStep();
          paintBrandPosition();
        } else if (event.key === 'ArrowRight') {
          event.preventDefault();
          brandOffset += brandCardStep();
          paintBrandPosition();
        }
      });

      document.addEventListener('visibilitychange', () => {
        brandLastTime = performance.now();
      });

      window.addEventListener('resize', paintBrandPosition);
      window.addEventListener('load', startBrandMotion, { once: true });

      requestAnimationFrame(startBrandMotion);

      window.addEventListener('beforeunload', () => {
        if (brandFrame) cancelAnimationFrame(brandFrame);
      });
    }


    const brandShopButtons = [...document.querySelectorAll('.brand-shop-button')];
    const categoryShopButtons = [...document.querySelectorAll('.category-shop-button')];
    const shopProductCards = [...document.querySelectorAll('#productGrid .product-card')];

    let activeShopBrand = 'all';
    let activeShopType = 'all';

    const shopBrandLabels = {
      all: 'All brands',
      'rule-one': 'Rule One',
      muscletech: 'MuscleTech',
      optimum: 'Optimum Nutrition',
      bpi: 'BPI Sports',
      bsn: 'BSN',
      gat: 'GAT Sport'
    };

    const shopTypeLabels = {
      all: 'All categories',
      whey: 'Whey Protein',
      isolate: 'Whey Isolate',
      casein: 'Casein',
      blend: 'Protein Blend',
      lean: 'Lean Protein',
      creatine: 'Creatine',
      preworkout: 'Pre-Workout',
      amino: 'Amino Acids',
      vitamins: 'Vitamins',
      weight: 'Weight Management',
      support: 'Performance Support',
      pump: 'Pump Support'
    };

    const catalogueMoreButton = document.getElementById('catalogueMoreButton');
    const catalogueMoreNote = document.getElementById('catalogueMoreNote');
    const compactCatalogueLimit = 12;
    let catalogueExpanded = false;

    function applyBrandCategoryFilters() {
      const matchingCards = shopProductCards.filter(card => {
        const brandMatch =
          activeShopBrand === 'all' || card.dataset.brand === activeShopBrand;
        const typeMatch =
          activeShopType === 'all' || card.dataset.type === activeShopType;
        return card.dataset.live === '1' && brandMatch && typeMatch;
      });

      shopProductCards.forEach(card => {
        const matches = matchingCards.includes(card);
        card.classList.toggle('hidden', !matches);
        card.classList.remove('catalogue-collapsed');
      });

      const shouldCollapse =
        !catalogueExpanded && matchingCards.length > compactCatalogueLimit;

      if (shouldCollapse) {
        matchingCards.slice(compactCatalogueLimit).forEach(card => {
          card.classList.add('catalogue-collapsed');
        });
      }

      document.getElementById('shopResultCount').textContent =
        matchingCards.length +
        (matchingCards.length === 1 ? ' product' : ' products');

      document.getElementById('shopActiveFilter').textContent =
        shopBrandLabels[activeShopBrand] + ' • ' + shopTypeLabels[activeShopType];

      if (matchingCards.length > compactCatalogueLimit) {
        catalogueMoreButton.hidden = false;
        catalogueMoreButton.textContent =
          catalogueExpanded ? 'Show Fewer Products' : 'Show More Products';
        catalogueMoreNote.textContent = catalogueExpanded
          ? 'All matching products are visible.'
          : 'Showing ' + compactCatalogueLimit + ' of ' +
            matchingCards.length + ' matching products.';
      } else {
        catalogueMoreButton.hidden = true;
        catalogueMoreNote.textContent =
          matchingCards.length + ' matching product' +
          (matchingCards.length === 1 ? '.' : 's.');
      }
    }

    catalogueMoreButton.addEventListener('click', () => {
      catalogueExpanded = !catalogueExpanded;
      applyBrandCategoryFilters();

      if (!catalogueExpanded) {
        document.getElementById('shop').scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });

    brandShopButtons.forEach(button => {
      button.addEventListener('click', () => {
        activeShopBrand = button.dataset.shopBrand;
        catalogueExpanded = false;
        brandShopButtons.forEach(item =>
          item.classList.toggle('active', item === button)
        );
        applyBrandCategoryFilters();
      });
    });

    categoryShopButtons.forEach(button => {
      button.addEventListener('click', () => {
        activeShopType = button.dataset.shopType;
        catalogueExpanded = false;
        categoryShopButtons.forEach(item =>
          item.classList.toggle('active', item === button)
        );
        applyBrandCategoryFilters();
      });
    });

    const initialAllBrandsButton =
      document.querySelector('.brand-shop-button[data-shop-brand="all"]');
    if (initialAllBrandsButton) initialAllBrandsButton.classList.add('active');

    document.querySelectorAll('.hero-goal-chip').forEach(button => {
      button.addEventListener('click', () => {
        setTimeout(() => {
          const visible = shopProductCards.filter(card => card.dataset.live === '1' && !card.classList.contains('hidden')).length;
          document.getElementById('shopResultCount').textContent =
            visible + (visible === 1 ? ' product' : ' products');
          document.getElementById('shopActiveFilter').textContent =
            'Filtered by selected fitness goal';
        }, 50);
      });
    });

    applyBrandCategoryFilters();


    function updateMonthlyOfferCountdown() {
      const now = new Date();
      const endOfMonth = new Date(
        now.getFullYear(),
        now.getMonth() + 1,
        1,
        0, 0, 0
      );

      const difference = Math.max(0, endOfMonth - now);
      const days = Math.floor(difference / 86400000);
      const hours = Math.floor((difference % 86400000) / 3600000);
      const minutes = Math.floor((difference % 3600000) / 60000);

      const countdown = document.getElementById('monthlyOfferCountdown');
      const monthLabel = document.getElementById('monthlyOfferMonthLabel');

      if (countdown) {
        countdown.textContent =
          days + 'd ' + hours + 'h ' + minutes + 'm';
      }

      if (monthLabel) {
        monthLabel.textContent = now.toLocaleString('en-US', {
          month: 'long',
          year: 'numeric'
        }) + ' promotion';
      }
    }

    document.querySelectorAll('[data-offer-view]').forEach(button => {
      button.addEventListener('click', () => {
        const product = productById(button.dataset.offerView);
        if (!product) return;
        openProductInfo(product);
      });
    });

    document.querySelectorAll('[data-offer-add]').forEach(button => {
      button.addEventListener('click', () => {
        const product = productById(button.dataset.offerAdd);
        if (!product) return;
        addToCart(product);
        openCart();
      });
    });

    const monthlyOfferShopAll = document.getElementById('monthlyOfferShopAll');
    if (monthlyOfferShopAll) {
      monthlyOfferShopAll.addEventListener('click', () => {
        document.getElementById('shop').scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      });
    }

    updateMonthlyOfferCountdown();
    setInterval(updateMonthlyOfferCountdown, 60000);


    const facilityLightbox = document.getElementById('facilityLightbox');
    const facilityLightboxImage = document.getElementById('facilityLightboxImage');
    const facilityLightboxCaption = document.getElementById('facilityLightboxCaption');
    const facilityLightboxClose = document.getElementById('facilityLightboxClose');

    function closeFacilityLightbox() {
      if (!facilityLightbox) return;
      facilityLightbox.hidden = true;
      facilityLightboxImage.src = '';
      document.body.style.overflow = '';
    }

    document.querySelectorAll('[data-facility-image]').forEach(button => {
      button.addEventListener('click', () => {
        facilityLightboxImage.src = button.dataset.facilityImage;
        facilityLightboxImage.alt = button.dataset.facilityCaption || 'Refuel facility';
        facilityLightboxCaption.textContent = button.dataset.facilityCaption || '';
        facilityLightbox.hidden = false;
        document.body.style.overflow = 'hidden';
      });
    });

    if (facilityLightboxClose) {
      facilityLightboxClose.addEventListener('click', closeFacilityLightbox);
    }

    if (facilityLightbox) {
      facilityLightbox.addEventListener('click', event => {
        if (event.target === facilityLightbox) closeFacilityLightbox();
      });
    }

    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && facilityLightbox && !facilityLightbox.hidden) {
        closeFacilityLightbox();
      }
    });

  
    const refuelHistoryChapters = [{"year": "JAN 2017", "title": "The physical Refuel journey begins", "body": "Refuel begins serving customers through a real fitness and wellness facility, with hands-on training support and traditional supplement selling.", "metric": "Physical roots"}, {"year": "2019", "title": "Experience shaped by real questions", "body": "Daily customer conversations about goals, product categories, authenticity and safe use continue shaping how Refuel explains supplement choices.", "metric": "Customer-led learning"}, {"year": "2022", "title": "Facility knowledge grows stronger", "body": "Training-floor experience, wellness support and product education remain connected inside the physical Refuel environment.", "metric": "Operational knowledge"}, {"year": "2024", "title": "Traditional retail continues", "body": "Refuel keeps serving customers and selling supplements through direct guidance—still without its own AI-based shopping platform.", "metric": "Trusted retail history"}, {"year": "2026", "title": "The Refuel AI transformation", "body": "That real-world experience begins evolving into Refuel AI Intelligent Supplements: a goal-first, safety-aware and educational digital platform.", "metric": "AI-powered future"}];
    const historyNodes = Array.from(document.querySelectorAll('[data-history-index]'));
    const historyChapterYear = document.getElementById('historyChapterYear');
    const historyChapterTitle = document.getElementById('historyChapterTitle');
    const historyChapterBody = document.getElementById('historyChapterBody');
    const historyChapterMetric = document.getElementById('historyChapterMetric');
    const historyTimelineProgress = document.getElementById('historyTimelineProgress');

    function selectHistoryChapter(index) {
      const chapter = refuelHistoryChapters[index];
      if (!chapter) return;
      historyNodes.forEach((node, nodeIndex) => {
        const active = nodeIndex === index;
        node.classList.toggle('is-active', active);
        node.setAttribute('aria-pressed', String(active));
      });
      historyChapterYear.textContent = chapter.year;
      historyChapterTitle.textContent = chapter.title;
      historyChapterBody.textContent = chapter.body;
      historyChapterMetric.textContent = chapter.metric;
      historyTimelineProgress.style.width = (index / (refuelHistoryChapters.length - 1) * 100) + '%';
      const chapterPanel = document.getElementById('historyChapter');
      chapterPanel.animate(
        [{ opacity: .35, transform: 'translateY(5px)' }, { opacity: 1, transform: 'translateY(0)' }],
        { duration: 260, easing: 'ease-out' }
      );
    }

    historyNodes.forEach(node => {
      node.addEventListener('click', () => selectHistoryChapter(Number(node.dataset.historyIndex)));
    });

    const historyExploreButton = document.getElementById('historyExploreButton');
    if (historyExploreButton) {
      historyExploreButton.addEventListener('click', () => {
        document.getElementById('historyTimeline').scrollIntoView({ behavior: 'smooth', block: 'center' });
        setTimeout(() => selectHistoryChapter(4), 450);
      });
    }

    const historyGalleryButton = document.getElementById('historyGalleryButton');
    if (historyGalleryButton) {
      historyGalleryButton.addEventListener('click', () => {
        const firstFacilityCard = document.querySelector('.rf-history-place[data-facility-image]');
        if (firstFacilityCard) firstFacilityCard.click();
      });
    }

    selectHistoryChapter(0);


    // REFUEL TRUST SUITE V31
    (() => {
      const trustLayout = document.getElementById('trustScoreLayout');
      if (trustLayout) {
        const animateTrust = () => trustLayout.classList.add('is-animated');
        if ('IntersectionObserver' in window) {
          const trustObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                animateTrust();
                trustObserver.disconnect();
              }
            });
          }, { threshold: .3 });
          trustObserver.observe(trustLayout);
        } else {
          animateTrust();
        }
      }

      const modal = document.getElementById('reviewModal');
      const backdrop = document.getElementById('reviewBackdrop');
      const form = document.getElementById('reviewForm');
      const closeButton = document.getElementById('closeReviewModal');
      const productIdInput = document.getElementById('reviewProductId');
      const productNameInput = document.getElementById('reviewProductName');
      const photoInput = document.getElementById('reviewPhoto');
      const photoPreview = document.getElementById('reviewPhotoPreview');
      const uploadText = document.getElementById('reviewUploadText');
      const selectedTags = new Set();
      let previousFocus = null;

      if (!modal || !backdrop || !form) return;

      const openReviewModal = (productId = 'general', productName = 'General Refuel purchase') => {
        previousFocus = document.activeElement;
        productIdInput.value = productId;
        productNameInput.value = productName;
        modal.classList.add('show');
        backdrop.classList.add('show');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
        setTimeout(() => productNameInput.focus(), 40);
      };

      const closeReviewModal = () => {
        modal.classList.remove('show');
        backdrop.classList.remove('show');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('modal-open');
        if (previousFocus && typeof previousFocus.focus === 'function') previousFocus.focus();
      };

      document.addEventListener('click', event => {
        const trigger = event.target.closest('.open-review-modal');
        if (!trigger) return;
        openReviewModal(trigger.dataset.reviewProductId || 'general', trigger.dataset.reviewProductName || 'General Refuel purchase');
      });

      closeButton.addEventListener('click', closeReviewModal);
      backdrop.addEventListener('click', closeReviewModal);

      document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && modal.classList.contains('show')) closeReviewModal();
      });

      document.querySelectorAll('.review-tag').forEach(tag => {
        tag.addEventListener('click', () => {
          const value = tag.dataset.reviewTag;
          tag.classList.toggle('active');
          if (tag.classList.contains('active')) selectedTags.add(value);
          else selectedTags.delete(value);
          tag.setAttribute('aria-pressed', String(tag.classList.contains('active')));
        });
      });

      photoInput.addEventListener('change', () => {
        const file = photoInput.files && photoInput.files[0];
        photoPreview.hidden = true;
        photoPreview.removeAttribute('src');
        uploadText.textContent = 'Tap to add a JPG, PNG or WebP photo';
        if (!file) return;

        const allowed = ['image/jpeg', 'image/png', 'image/webp'];
        if (!allowed.includes(file.type) || file.size > 5 * 1024 * 1024) {
          photoInput.value = '';
          if (typeof showToast === 'function') showToast('Choose a JPG, PNG or WebP image under 5 MB.');
          return;
        }

        const reader = new FileReader();
        reader.onload = event => {
          photoPreview.src = event.target.result;
          photoPreview.hidden = false;
          uploadText.textContent = file.name;
        };
        reader.readAsDataURL(file);
      });

      form.addEventListener('submit', event => {
        event.preventDefault();
        const checkedRating = form.querySelector('input[name="reviewRating"]:checked');
        const reviewText = document.getElementById('reviewText').value.trim();
        if (!checkedRating) {
          if (typeof showToast === 'function') showToast('Please choose a star rating.');
          return;
        }
        if (reviewText.length < 12) {
          if (typeof showToast === 'function') showToast('Please write at least 12 characters.');
          return;
        }

        const pendingReview = {
          id: `pending-${Date.now()}`,
          productId: productIdInput.value,
          productName: productNameInput.value.trim(),
          rating: Number(checkedRating.value),
          tags: [...selectedTags],
          review: reviewText,
          photoName: photoInput.files && photoInput.files[0] ? photoInput.files[0].name : '',
          status: 'pending-verification',
          createdAt: new Date().toISOString()
        };

        try {
          const saved = JSON.parse(localStorage.getItem('refuelPendingReviews') || '[]');
          saved.push(pendingReview);
          localStorage.setItem('refuelPendingReviews', JSON.stringify(saved.slice(-20)));
        } catch (error) {
          console.warn('Pending review storage unavailable:', error);
        }

        form.reset();
        selectedTags.clear();
        document.querySelectorAll('.review-tag.active').forEach(tag => {
          tag.classList.remove('active');
          tag.setAttribute('aria-pressed', 'false');
        });
        photoPreview.hidden = true;
        photoPreview.removeAttribute('src');
        uploadText.textContent = 'Tap to add a JPG, PNG or WebP photo';
        closeReviewModal();
        if (typeof showToast === 'function') showToast('Review saved locally as pending verification.');
      });
    })();


    // REFUEL AI MOBILE PWA V3 APP-SHELL CONTROLS
    (() => {
      const nav = document.getElementById('mobileAppNav');
      const iosSheet = document.getElementById('mobileIosInstallSheet');
      const closeIos = document.getElementById('closeMobileIosInstall');
      const installButton = document.getElementById('installButton');
      const isIos = /iphone|ipad|ipod/i.test(navigator.userAgent);
      const isStandalone = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;

      if (isStandalone) document.body.classList.add('is-standalone');

      const setActive = button => {
        if (!nav || !button) return;
        nav.querySelectorAll('button').forEach(item => item.classList.toggle('active', item === button));
      };

      if (nav) {
        nav.addEventListener('click', event => {
          const button = event.target.closest('button');
          if (!button) return;
          setActive(button);

          if (button.dataset.mobileTarget) {
            const targetId = button.dataset.mobileTarget === 'trust' ? 'trustScore' : button.dataset.mobileTarget;
            const target = document.getElementById(targetId);
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }

          if (button.dataset.mobileAction === 'ai') {
            const launcher = document.getElementById('chatLauncher');
            if (launcher) launcher.click();
          }

          if (button.dataset.mobileAction === 'cart') {
            const cart = document.getElementById('cartButton');
            if (cart) cart.click();
          }
        });
      }

      const observedSections = ['home', 'shop', 'trustScore'];
      if ('IntersectionObserver' in window && nav) {
        const observer = new IntersectionObserver(entries => {
          const visible = entries
            .filter(entry => entry.isIntersecting)
            .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
          if (!visible) return;
          const button = nav.querySelector(`[data-mobile-target="${visible.target.id}"]`);
          if (button) setActive(button);
        }, { rootMargin: '-20% 0px -65% 0px', threshold: [0, .15, .4] });
        observedSections.forEach(id => {
          const section = document.getElementById(id);
          if (section) observer.observe(section);
        });
      }

      const showIosInstall = () => {
        if (!iosSheet) return;
        iosSheet.classList.add('show');
        iosSheet.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
      };
      const hideIosInstall = () => {
        if (!iosSheet) return;
        iosSheet.classList.remove('show');
        iosSheet.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('modal-open');
      };

      if (isIos && !isStandalone) {
        setTimeout(() => {
          const banner = document.getElementById('installBanner');
          if (banner && !sessionStorage.getItem('refuelIosInstallDismissed')) banner.classList.add('show');
        }, 1800);

        if (installButton) installButton.addEventListener('click', showIosInstall);
      }

      if (closeIos) closeIos.addEventListener('click', () => {
        sessionStorage.setItem('refuelIosInstallDismissed', '1');
        hideIosInstall();
        const banner = document.getElementById('installBanner');
        if (banner) banner.classList.remove('show');
      });

      if (iosSheet) iosSheet.addEventListener('click', event => {
        if (event.target === iosSheet) hideIosInstall();
      });

      const updateViewportHeight = () => {
        document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`);
      };
      updateViewportHeight();
      window.addEventListener('resize', updateViewportHeight, { passive: true });
      window.addEventListener('orientationchange', updateViewportHeight, { passive: true });
    })();

  </script>


  <script>
    // REFUEL AI MOBILE PWA V5 — TRUE TAB APP SHELL
    (() => {
      const isPhoneLayout = window.matchMedia('(max-width: 820px)');
      if (!isPhoneLayout.matches) return;
      const isStandaloneApp = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;
      if (!isStandaloneApp) return;

      const body = document.body;
      const main = document.querySelector('main');
      const nav = document.getElementById('mobileAppNav');
      if (!body || !main || !nav) return;

      const screenMap = {
        home: ['#home', '#goals', '#membership'],
        shop: ['#monthlyOffer', '#brands', '#shop'],
        trust: ['#trustScore', '#expertApproval', '#certificationStandards', '#safety', '#history']
      };

      const specialNodes = [document.getElementById('facilityLightbox')].filter(Boolean);
      const screens = {};

      Object.entries(screenMap).forEach(([name, selectors]) => {
        const screen = document.createElement('div');
        screen.className = 'mobile-app-screen';
        screen.id = `mobileScreen-${name}`;
        screen.dataset.screen = name;
        screen.setAttribute('role', 'region');
        screen.setAttribute('aria-label', `${name.charAt(0).toUpperCase() + name.slice(1)} screen`);
        screen.setAttribute('aria-hidden', 'true');

        selectors.forEach(selector => {
          const node = main.querySelector(selector);
          if (node) screen.appendChild(node);
        });

        const sentinel = document.createElement('div');
        sentinel.className = 'mobile-screen-sentinel';
        sentinel.setAttribute('aria-hidden', 'true');
        screen.appendChild(sentinel);
        main.appendChild(screen);
        screens[name] = screen;
      });

      specialNodes.forEach(node => main.appendChild(node));

      let currentScreen = 'home';
      const validScreens = Object.keys(screens);

      const setNavActive = name => {
        nav.querySelectorAll('button').forEach(button => {
          const isActive = button.dataset.mobileTarget === name;
          button.classList.toggle('active', isActive);
          if (button.dataset.mobileTarget) button.setAttribute('aria-current', isActive ? 'page' : 'false');
        });
      };

      const showScreen = (name, updateUrl = true) => {
        if (!screens[name]) name = 'home';
        currentScreen = name;

        Object.entries(screens).forEach(([key, screen]) => {
          const active = key === name;
          screen.classList.toggle('active', active);
          screen.setAttribute('aria-hidden', active ? 'false' : 'true');
          if (active) screen.scrollTop = 0;
        });

        setNavActive(name);

        if (updateUrl) {
          const nextHash = `#${name}`;
          if (window.location.hash !== nextHash) history.replaceState({ screen: name }, '', nextHash);
        }
      };

      // Capture first so the older scroll-to-section handler cannot run.
      nav.addEventListener('click', event => {
        const button = event.target.closest('button');
        if (!button) return;

        event.preventDefault();
        event.stopImmediatePropagation();

        const target = button.dataset.mobileTarget;
        const action = button.dataset.mobileAction;

        if (target) {
          showScreen(target);
          return;
        }

        if (action === 'ai') {
          const quickActions = document.getElementById('v6AiQuickButton');
          if (quickActions) quickActions.click();
          else {
            const launcher = document.getElementById('chatLauncher');
            if (launcher) launcher.click();
          }
          return;
        }

        if (action === 'cart') {
          const cartButton = document.getElementById('cartButton');
          if (cartButton) cartButton.click();
        }
      }, true);

      window.addEventListener('hashchange', () => {
        const requested = window.location.hash.replace('#', '');
        if (validScreens.includes(requested)) showScreen(requested, false);
      });

      const initial = window.location.hash.replace('#', '');
      showScreen(validScreens.includes(initial) ? initial : 'home', false);

      // Mobile Chrome/Safari must remain a normal responsive document. Fixing
      // the body and main element before browser chrome settles can produce a
      // zero-height, apparently blank page on real phones. The native tab shell
      // is reserved for the installed PWA, where the viewport is stable.
      body.classList.add('app-shell-mode');
      body.dataset.mobileShellReady = '1';

      // Fail open if an installed app cannot produce a visible first screen.
      const verifyVisibleScreen = () => {
        const active = document.querySelector('.mobile-app-screen.active');
        const rect = active ? active.getBoundingClientRect() : null;
        const visible = active && rect && rect.width > 1 && rect.height > 120 &&
          getComputedStyle(active).display !== 'none' && active.textContent.trim().length > 20;
        if (!visible) {
          body.classList.remove('app-shell-mode');
          body.dataset.mobileShellReady = 'fail-open';
        }
      };
      requestAnimationFrame(() => requestAnimationFrame(verifyVisibleScreen));
      window.setTimeout(verifyVisibleScreen, 1200);

      // Keep users inside the current app screen after closing full-screen panels.
      ['closeChat', 'closeCart'].forEach(id => {
        const control = document.getElementById(id);
        if (control) control.addEventListener('click', () => setNavActive(currentScreen));
      });
    })();
  </script>


  <!-- REFUEL AI MOBILE PWA V6 — Native-like interactive layer -->
  <div class="v6-splash" id="v6Splash" aria-hidden="true">
    <div class="v6-splash-card">
      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/inline/refuel-94a7da5fab076e2f.png'); ?>" alt="">
      <strong>Refuel AI Supplements</strong>
      <small>Trusted supplement intelligence</small>
      <div class="v6-splash-loader"></div>
    </div>
  </div>

  <div class="v6-network-pill" id="v6NetworkPill"><span>●</span><span>Offline mode</span></div>

  <button id="v6AiQuickButton" type="button" hidden aria-hidden="true"></button>
  <input id="v6LabelInput" type="file" accept="image/*" capture="environment" hidden>

  <div class="v6-compare-bar" id="v6CompareBar" aria-live="polite">
    <p><strong id="v6CompareCount">0 selected</strong><small>Select up to two products</small></p>
    <button id="v6OpenCompare" type="button">Compare</button>
  </div>

  <div class="v6-sheet-backdrop" id="v6SheetBackdrop"></div>

  <section class="v6-bottom-sheet" id="v6AiSheet" aria-hidden="true" aria-label="AI quick actions">
    <div class="v6-sheet-handle"></div>
    <div class="v6-sheet-head"><div><small>Refuel intelligence</small><h3>What would you like to do?</h3></div><button class="v6-sheet-close" data-v6-close type="button">✕</button></div>
    <div class="v6-action-grid">
      <button class="v6-action-card" id="v6AskAi" type="button"><b>◉</b><span><strong>Ask Refuel AI</strong><small>Open the full-screen supplement assistant.</small></span></button>
      <button class="v6-action-card" id="v6BuildStack" type="button"><b>＋</b><span><strong>Build my stack</strong><small>Start the guided goal and safety workflow.</small></span></button>
      <button class="v6-action-card" id="v6ScanLabel" type="button"><b>▣</b><span><strong>Scan a label</strong><small>Use your camera to capture a supplement label.</small></span></button>
      <button class="v6-action-card" id="v6CompareProducts" type="button"><b>⇄</b><span><strong>Compare products</strong><small>Select two products from the Shop screen.</small></span></button>
    </div>
    <div class="v6-scan-preview" id="v6ScanPreview"><img decoding="async" loading="lazy" id="v6ScanImage" alt="Selected label preview"><div><strong>Label captured</strong><p id="v6ScanMessage">The image stays on this device. Secure cloud label analysis can be connected later.</p></div></div>
  </section>

  <section class="v6-bottom-sheet" id="v6MenuSheet" aria-hidden="true" aria-label="App menu">
    <div class="v6-sheet-handle"></div>
    <div class="v6-sheet-head"><div><small>App controls</small><h3>Refuel AI Supplements</h3></div><button class="v6-sheet-close" data-v6-close type="button">✕</button></div>
    <div class="v6-menu-list">
      <button class="v6-menu-row" id="v6MenuSaved" type="button"><b>♡</b><span><strong>Saved products</strong><small>Your favourites stay on this device.</small></span><em id="v6SavedCount">0</em></button>
      <button class="v6-menu-row" id="v6MenuInstall" type="button"><b>⇩</b><span><strong>Install app</strong><small>Open Refuel AI from your home screen.</small></span><em>›</em></button>
      <button class="v6-menu-row" id="v6MenuOffline" type="button"><b>✓</b><span><strong>Offline-ready shell</strong><small id="v6OfflineText">Checking connection…</small></span><em id="v6OfflineState">—</em></button>
      <button class="v6-menu-row" id="v6VibrationToggle" type="button"><b>≋</b><span><strong>Touch feedback</strong><small>Small vibration on supported Android phones.</small></span><i class="v6-switch" id="v6VibrationSwitch"></i></button>
      <button class="v6-menu-row" id="v6CheckUpdates" type="button"><b>↻</b><span><strong>Check for updates</strong><small>Refresh the cached mobile app shell.</small></span><em>›</em></button>
    </div>
  </section>

  <section class="v6-bottom-sheet" id="v6CompareSheet" aria-hidden="true" aria-label="Product comparison">
    <div class="v6-sheet-handle"></div>
    <div class="v6-sheet-head"><div><small>Side-by-side</small><h3>Product comparison</h3></div><button class="v6-sheet-close" data-v6-close type="button">✕</button></div>
    <div class="v6-compare-grid" id="v6CompareGrid"></div>
  </section>

  <script id="refuelV6NativeAppScript">
    (() => {
      if (!window.matchMedia('(max-width: 820px)').matches) return;

      const qs = (selector, root = document) => root.querySelector(selector);
      const qsa = (selector, root = document) => Array.from(root.querySelectorAll(selector));
      const haptic = (pattern = 12) => {
        if (localStorage.getItem('refuelV6Haptics') === 'off') return;
        if ('vibrate' in navigator) navigator.vibrate(pattern);
      };

      // Brief launch screen once per tab/session.
      const splash = qs('#v6Splash');
      const allowSplash = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;
      if (splash && allowSplash && !sessionStorage.getItem('refuelV7SplashSeen')) {
        sessionStorage.setItem('refuelV7SplashSeen', '1');
        splash.classList.add('show');
        splash.setAttribute('aria-hidden', 'false');
        setTimeout(() => {
          splash.classList.remove('show');
          splash.setAttribute('aria-hidden', 'true');
        }, 3000);
      }

      // Add a native-style app menu button to the fixed header.
      const navActions = qs('.nav-actions');
      const cartButton = qs('#cartButton');
      let appMenuButton = qs('#v6AppMenuButton');
      if (navActions && cartButton && !appMenuButton) {
        appMenuButton = document.createElement('button');
        appMenuButton.id = 'v6AppMenuButton';
        appMenuButton.className = 'icon-button v6-header-menu';
        appMenuButton.type = 'button';
        appMenuButton.setAttribute('aria-label', 'Open app menu');
        appMenuButton.textContent = '•••';
        navActions.insertBefore(appMenuButton, cartButton);
      }

      // Add cart count to the bottom navigation.
      const cartNav = qs('[data-mobile-action="cart"]');
      if (cartNav && !qs('#v6NavCartCount', cartNav)) {
        const badge = document.createElement('b');
        badge.id = 'v6NavCartCount';
        badge.className = 'v6-nav-badge';
        badge.hidden = true;
        badge.textContent = '0';
        cartNav.appendChild(badge);
      }

      const screens = {
        home: qs('#mobileScreen-home'),
        shop: qs('#mobileScreen-shop'),
        trust: qs('#mobileScreen-trust')
      };

      const makeToolbar = (screen, eyebrow, title, actionsHtml = '') => {
        if (!screen || qs('.v6-screen-toolbar', screen)) return;
        const bar = document.createElement('div');
        bar.className = 'v6-screen-toolbar';
        bar.innerHTML = `<div class="v6-screen-title"><small>${eyebrow}</small><strong>${title}</strong></div><div class="v6-toolbar-actions">${actionsHtml}</div>`;
        screen.prepend(bar);
      };
      const hour = new Date().getHours();
      const greeting = hour < 12 ? 'Good morning' : hour < 18 ? 'Good afternoon' : 'Good evening';
      makeToolbar(screens.home, 'For you', greeting, '<button class="v6-tool-button" id="v6HomeAi" type="button">AI</button>');
      makeToolbar(screens.shop, 'Catalogue', 'Shop supplements', '<button class="v6-tool-button" id="v6ShopSavedTop" type="button">♡ <span class="v6-count" id="v6ShopSavedCount">0</span></button>');
      makeToolbar(screens.trust, 'Verification centre', 'Trust & standards', '<button class="v6-tool-button" id="v6TrustTop" type="button">Info</button>');

      // Search and Saved controls belong inside the Shop screen.
      if (screens.shop && !qs('#v6ShopSearchWrap')) {
        const searchWrap = document.createElement('div');
        searchWrap.id = 'v6ShopSearchWrap';
        searchWrap.className = 'v6-shop-search-wrap';
        searchWrap.innerHTML = '<div class="v6-search-box"><input class="v6-shop-search" id="v6ShopSearch" type="search" placeholder="Search products or brands" autocomplete="off"></div><button class="v6-tool-button v6-saved-filter" id="v6SavedFilter" type="button" aria-label="Show saved products">♡</button>';
        const toolbar = qs('.v6-screen-toolbar', screens.shop);
        toolbar.insertAdjacentElement('afterend', searchWrap);
      }

      const backdrop = qs('#v6SheetBackdrop');
      const sheets = qsa('.v6-bottom-sheet');
      const closeSheets = () => {
        sheets.forEach(sheet => {
          sheet.classList.remove('show');
          sheet.setAttribute('aria-hidden', 'true');
        });
        if (backdrop) backdrop.classList.remove('show');
        document.body.classList.remove('modal-open');
      };
      const openSheet = sheet => {
        if (!sheet) return;
        closeSheets();
        sheet.classList.add('show');
        sheet.setAttribute('aria-hidden', 'false');
        backdrop?.classList.add('show');
        document.body.classList.add('modal-open');
        haptic(10);
      };
      qsa('[data-v6-close]').forEach(button => button.addEventListener('click', closeSheets));
      backdrop?.addEventListener('click', closeSheets);

      qs('#v6AiQuickButton')?.addEventListener('click', () => openSheet(qs('#v6AiSheet')));
      appMenuButton?.addEventListener('click', () => openSheet(qs('#v6MenuSheet')));
      qs('#v6HomeAi')?.addEventListener('click', () => openSheet(qs('#v6AiSheet')));

      const activateTab = name => {
        const button = qs(`[data-mobile-target="${name}"]`);
        if (button) button.click();
      };

      qs('#v6AskAi')?.addEventListener('click', () => {
        closeSheets();
        qs('#chatLauncher')?.click();
      });
      qs('#v6BuildStack')?.addEventListener('click', () => {
        closeSheets();
        if (typeof openAssessment === 'function') openAssessment();
        else qs('[data-open-assessment]')?.click();
      });
      qs('#v6ScanLabel')?.addEventListener('click', () => qs('#v6LabelInput')?.click());
      qs('#v6CompareProducts')?.addEventListener('click', () => {
        closeSheets();
        activateTab('shop');
        showToast('Tap ⇄ on two products to compare');
      });

      const scanInput = qs('#v6LabelInput');
      scanInput?.addEventListener('change', () => {
        const file = scanInput.files && scanInput.files[0];
        if (!file) return;
        if (!file.type.startsWith('image/')) {
          showToast('Please choose a JPG, PNG or WebP image');
          return;
        }
        const reader = new FileReader();
        reader.onload = event => {
          qs('#v6ScanImage').src = event.target.result;
          qs('#v6ScanMessage').textContent = `${file.name} is ready. The image stays on this device until a secure analysis backend is connected.`;
          qs('#v6ScanPreview')?.classList.add('show');
          openSheet(qs('#v6AiSheet'));
          haptic([10, 35, 10]);
        };
        reader.readAsDataURL(file);
      });

      // Offline state and app-shell status.
      const networkPill = qs('#v6NetworkPill');
      const updateNetwork = announce => {
        const online = navigator.onLine;
        networkPill?.classList.toggle('show', !online);
        const text = qs('#v6OfflineText');
        const state = qs('#v6OfflineState');
        if (text) text.textContent = online ? 'Connected — cached app shell is available.' : 'No connection — cached screens remain available.';
        if (state) state.textContent = online ? 'ONLINE' : 'OFFLINE';
        if (announce) showToast(online ? 'Back online' : 'Offline mode enabled');
      };
      updateNetwork(false);
      window.addEventListener('online', () => updateNetwork(true));
      window.addEventListener('offline', () => updateNetwork(true));

      // Persistent wishlist.
      let saved = new Set();
      try { saved = new Set(JSON.parse(localStorage.getItem('refuelWishlistV6') || '[]')); } catch (error) {}
      let savedOnly = false;
      const productCards = qsa('#productGrid .product-card');
      const saveWishlist = () => localStorage.setItem('refuelWishlistV6', JSON.stringify([...saved]));
      const updateSavedUi = () => {
        const count = saved.size;
        ['#v6SavedCount','#v6ShopSavedCount'].forEach(selector => { const node = qs(selector); if (node) node.textContent = String(count); });
        qs('#v6SavedFilter')?.classList.toggle('active', savedOnly);
        qs('#v6ShopSavedTop')?.classList.toggle('active', savedOnly);
        productCards.forEach(card => {
          const button = qs('.v6-wishlist', card);
          const active = saved.has(card.dataset.id);
          button?.classList.toggle('saved', active);
          if (button) button.textContent = active ? '♥' : '♡';
          card.dataset.v6SavedHidden = savedOnly && !active ? 'true' : 'false';
        });
      };
      const toggleSavedFilter = () => {
        savedOnly = !savedOnly;
        updateSavedUi();
        if (savedOnly && !saved.size) showToast('No saved products yet');
        else showToast(savedOnly ? 'Showing saved products' : 'Showing all products');
        haptic(8);
      };
      qs('#v6SavedFilter')?.addEventListener('click', toggleSavedFilter);
      qs('#v6ShopSavedTop')?.addEventListener('click', toggleSavedFilter);
      qs('#v6MenuSaved')?.addEventListener('click', () => {
        closeSheets();
        activateTab('shop');
        savedOnly = true;
        updateSavedUi();
      });

      // Two-product comparison.
      const compareSet = new Set();
      const compareBar = qs('#v6CompareBar');
      const updateCompareUi = () => {
        qsa('.v6-compare-toggle').forEach(button => button.classList.toggle('selected', compareSet.has(button.dataset.id)));
        const count = compareSet.size;
        qs('#v6CompareCount').textContent = `${count} selected`;
        compareBar?.classList.toggle('show', count > 0);
      };

      productCards.forEach(card => {
        const id = card.dataset.id;
        if (!qs('.v6-wishlist', card)) {
          const heart = document.createElement('button');
          heart.className = 'v6-wishlist';
          heart.type = 'button';
          heart.setAttribute('aria-label', 'Save product');
          heart.addEventListener('click', event => {
            event.preventDefault(); event.stopPropagation();
            saved.has(id) ? saved.delete(id) : saved.add(id);
            saveWishlist(); updateSavedUi(); haptic(9);
            showToast(saved.has(id) ? 'Saved to favourites' : 'Removed from favourites');
          });
          card.appendChild(heart);
        }
        if (!qs('.v6-compare-toggle', card)) {
          const compare = document.createElement('button');
          compare.className = 'v6-compare-toggle';
          compare.type = 'button';
          compare.dataset.id = id;
          compare.textContent = '⇄';
          compare.setAttribute('aria-label', 'Select for comparison');
          compare.addEventListener('click', event => {
            event.preventDefault(); event.stopPropagation();
            if (compareSet.has(id)) compareSet.delete(id);
            else if (compareSet.size < 2) compareSet.add(id);
            else { showToast('Choose only two products'); haptic([15,40,15]); return; }
            updateCompareUi(); haptic(8);
          });
          card.appendChild(compare);
        }
      });
      updateSavedUi();
      updateCompareUi();

      qs('#v6OpenCompare')?.addEventListener('click', () => {
        if (compareSet.size < 2) { showToast('Select one more product'); return; }
        const selected = [...compareSet].map(id => productById(id)).filter(Boolean);
        qs('#v6CompareGrid').innerHTML = selected.map(product => `
          <article class="v6-compare-card">
            <small class="micro-label">${product.category}</small>
            <h4>${product.name}</h4>
            <dl>
              <div><dt>Price</dt><dd>${currency(product.price)}</dd></div>
              <div><dt>Purpose</dt><dd>${product.purpose}</dd></div>
            </dl>
          </article>`).join('');
        openSheet(qs('#v6CompareSheet'));
      });

      // Search works together with the existing brand/category filters.
      qs('#v6ShopSearch')?.addEventListener('input', event => {
        const query = event.target.value.trim().toLowerCase();
        productCards.forEach(card => {
          const searchable = `${card.dataset.name || ''} ${card.dataset.brand || ''} ${card.dataset.category || ''} ${card.dataset.type || ''}`.toLowerCase();
          card.dataset.v6SearchHidden = query && !searchable.includes(query) ? 'true' : 'false';
        });
      });

      // App menu functions.
      qs('#v6MenuInstall')?.addEventListener('click', () => {
        closeSheets();
        const install = qs('#installButton');
        if (install) install.click();
        else showToast('Use your browser menu to install Refuel AI Supplements');
      });
      const vibrationSwitch = qs('#v6VibrationSwitch');
      const updateVibration = () => vibrationSwitch?.classList.toggle('on', localStorage.getItem('refuelV6Haptics') !== 'off');
      updateVibration();
      qs('#v6VibrationToggle')?.addEventListener('click', () => {
        const nextOff = localStorage.getItem('refuelV6Haptics') !== 'off';
        localStorage.setItem('refuelV6Haptics', nextOff ? 'off' : 'on');
        updateVibration();
        if (!nextOff) haptic(12);
        showToast(nextOff ? 'Touch feedback off' : 'Touch feedback on');
      });
      qs('#v6CheckUpdates')?.addEventListener('click', async () => {
        closeSheets();
        showToast('Checking for app updates…');
        try {
          const registration = await navigator.serviceWorker?.getRegistration();
          await registration?.update();
          setTimeout(() => location.reload(), 650);
        } catch (error) {
          location.reload();
        }
      });

      // Restore cart and refresh new cart badge after V6 UI exists.
      if (typeof renderCart === 'function') renderCart();

      // Native-like swipe navigation between primary screens.
      const order = ['home','shop','trust'];
      Object.entries(screens).forEach(([name, screen]) => {
        if (!screen) return;
        let startX = 0, startY = 0, active = false;
        screen.addEventListener('touchstart', event => {
          if (event.touches.length !== 1) return;
          const target = event.target;
          if (target.closest('button,input,textarea,select,a,.brand-carousel-shell,.filters')) return;
          startX = event.touches[0].clientX; startY = event.touches[0].clientY; active = true;
        }, { passive:true });
        screen.addEventListener('touchend', event => {
          if (!active || !event.changedTouches[0]) return;
          active = false;
          const dx = event.changedTouches[0].clientX - startX;
          const dy = event.changedTouches[0].clientY - startY;
          if (Math.abs(dx) < 75 || Math.abs(dx) < Math.abs(dy) * 1.25) return;
          const index = order.indexOf(name);
          const next = dx < 0 ? order[index + 1] : order[index - 1];
          if (next) { activateTab(next); haptic(8); }
        }, { passive:true });
      });

      // Haptic response for the permanent nav and add-to-cart actions.
      qs('#mobileAppNav')?.addEventListener('click', () => haptic(7), { capture:false });
      qsa('.add-btn').forEach(button => button.addEventListener('click', () => haptic([8,25,8])));
    })();
  </script>


<script id="responsive-mode-guard-v19">
(() => {
  const applyMode = () => {
    const mobile = window.innerWidth <= 820;
    document.body.classList.toggle('mobile-pwa-variant', mobile);
    document.documentElement.classList.toggle('desktop-browser-mode', !mobile);
    if (!mobile) {
      document.body.classList.remove('app-shell-mode', 'modal-open');
      document.querySelectorAll('.mobile-app-screen').forEach(screen => {
        screen.style.removeProperty('display');
      });
    }
  };
  applyMode();
  window.addEventListener('resize', applyMode, { passive: true });
  window.addEventListener('orientationchange', applyMode, { passive: true });
})();
</script>


<script id="desktop-start-position-v20">
(() => {
  if (window.innerWidth <= 820) return;
  try { history.scrollRestoration = 'manual'; } catch (error) {}
  const resetToTop = () => {
    if (!location.hash) window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
  };
  resetToTop();
  window.addEventListener('load', () => setTimeout(resetToTop, 60), { once: true });
})();
</script>

<script id="mobile-chrome-nav-hardening-v21">
(() => {
  const isStandalone = () => window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;
  const targetMap = { home: 'home', shop: 'shop', trust: 'trustScore' };

  document.addEventListener('click', event => {
    if (isStandalone() || window.innerWidth > 820) return;
    const button = event.target.closest('#mobileAppNav button[data-mobile-target]');
    if (!button) return;

    const targetId = targetMap[button.dataset.mobileTarget];
    const target = targetId ? document.getElementById(targetId) : null;
    if (!target) return;

    event.preventDefault();
    event.stopPropagation();
    event.stopImmediatePropagation();
    document.body.classList.remove('app-shell-mode', 'modal-open');

    document.querySelectorAll('#mobileAppNav button').forEach(item => {
      item.classList.toggle('active', item === button);
    });

    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    history.replaceState(null, '', `#${button.dataset.mobileTarget}`);
  }, true);
})();
</script>



<script id="refuel-woocommerce-bridge">
(function () {
  var refuelWoo = {
    home: "<?php echo esc_url(home_url('/')); ?>",
    shop: "<?php echo esc_js(refuel_woo_shop_url()); ?>",
    cart: "<?php echo esc_url(refuel_shop_page_url('cart')); ?>",
    checkout: "<?php echo esc_url(refuel_shop_page_url('checkout')); ?>",
    account: "<?php echo esc_url(refuel_shop_page_url('myaccount')); ?>"
  };

  function go(url) {
    if (window.RefuelPageLoader) window.RefuelPageLoader.show(0);
    window.setTimeout(function () { window.location.href = url; }, 360);
  }

  function stopAndGo(event, url) {
    event.preventDefault();
    event.stopPropagation();
    if (typeof event.stopImmediatePropagation === 'function') event.stopImmediatePropagation();
    go(url);
  }

  function bindRedirect(selector, url) {
    var node = document.querySelector(selector);
    if (!node) return;
    node.addEventListener('click', function (event) { stopAndGo(event, url); }, true);
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a[href="#shop"]').forEach(function (link) {
      link.setAttribute('href', refuelWoo.shop);
    });

    bindRedirect('#cartButton', refuelWoo.cart);
    bindRedirect('#checkoutButton', refuelWoo.checkout);
    document.querySelectorAll('.add-btn').forEach(function (button) {
      button.setAttribute('title', 'Open this product in WooCommerce shop');
      button.addEventListener('click', function (event) {
        var card = event.currentTarget.closest('[data-name]');
        var name = card ? card.getAttribute('data-name') : '';
        var separator = refuelWoo.shop.indexOf('?') === -1 ? '?' : '&';
        stopAndGo(event, (card && card.dataset.url) || (refuelWoo.shop + separator + 's=' + encodeURIComponent(name)));
      }, true);
    });
  });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
