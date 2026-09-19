<!doctype html>
<html lang="es-MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aguas frescas Névé: ocho sabores preparados al momento. Pide por WhatsApp.">
  <meta name="theme-color" content="#203536">
  <title><?= e($title) ?></title>

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($title) ?>">
  <meta property="og:description" content="Ocho aguas frescas preparadas al momento. Pide por WhatsApp.">
  <meta property="og:image" content="assets/images/sabores-neve.jpg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/styles.css">
  <link rel="stylesheet" href="assets/enhancements.css">
</head>
<body
  data-whatsapp="<?= e($config['whatsapp']) ?>"
  data-message="<?= e($config['whatsapp_message']) ?>">

<a class="skip-link" href="#sabores">Saltar al menú de sabores</a>

<header class="site-header">
  <a class="brand" href="#inicio" aria-label="Névé, ir al inicio">
    <span>NÉVÉ</span><small>ARTE HELADO</small>
  </a>

  <nav aria-label="Navegación principal">
    <a href="#inicio">Inicio</a>
    <a href="#sabores">Menú</a>
    <a href="#nosotros">La experiencia</a>
  </nav>

  <a class="contact-pill wa-link" href="#">Pedir por WhatsApp <span aria-hidden="true">↗</span></a>
</header>
