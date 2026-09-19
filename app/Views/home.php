<?php require __DIR__ . '/partials/header.php'; ?>

<main>
  <!-- ==========================================
       1. HERO PRINCIPAL (#inicio)
       Presentación de la marca, encabezado y llamadas a la acción.
       ========================================== -->
  <section class="hero" id="inicio">

    <!-- Fotografía de fondo a sangre. El degradado que la funde con el
         texto se aplica en CSS (.hero::before), no aquí. -->
    <div class="hero-media">
      <img
        src="assets/images/coleccion.jpg"
        alt="Los ocho sabores de aguas frescas Névé"
        width="2400" height="1340"
        decoding="async"
        fetchpriority="high">
    </div>

    <div class="hero-copy">
      <p class="eyebrow"><i></i> Mi pausa fuera de casa</p>

      <h1>Un toque de arte para tu pausa <em>helada.</em></h1>

      <p class="hero-text">
      
      </p>

      <div class="hero-actions">
        <a class="button button-dark" href="#sabores">Ver menú de sabores <span>↓</span></a>
        <a class="text-link wa-link" href="#">Hacer un pedido</a>
      </div>

      <div class="hero-note">
        <span class="sparkle">✦</span> Sabores auténticos, momentos únicos
      </div>
    </div>

  </section>

  <!-- ==========================================
       2. CARRUSEL INFORMATIVO (QUICK INFO)
       Diapositivas dinámicas con flechas y puntos de navegación.
       ========================================== -->
  <section class="quick-info" aria-label="Ventajas de Névé">
    <div class="quick-info-track">
      <article class="quick-info-slide active">
        <b>8 sabores</b>
        <span>para elegir tu momento</span>
      </article>

      <article class="quick-info-slide">
        <b>Pedido directo</b>
        <span>consulta y pide por WhatsApp</span>
      </article>

      <article class="quick-info-slide">
        <b>Para compartir</b>
        <span>en una tarde rica o un antojo</span>
      </article>
    </div>

    <div class="quick-info-controls">
      <button class="quick-info-arrow" type="button" data-direction="previous" aria-label="Ver ventaja anterior">←</button>

      <div class="quick-info-dots" role="tablist" aria-label="Seleccionar ventaja">
        <button class="active" role="tab" aria-selected="true" aria-label="Ver ventaja 1"></button>
        <button role="tab" aria-selected="false" aria-label="Ver ventaja 2"></button>
        <button role="tab" aria-selected="false" aria-label="Ver ventaja 3"></button>
      </div>

      <button class="quick-info-arrow" type="button" data-direction="next" aria-label="Ver siguiente ventaja">→</button>
    </div>
  </section>

  <!-- ==========================================
       3. MENÚ Y GALERÍA DE SABORES (#sabores)
       Incluye la galería fotográfica y el selector dinámico de sabores.
       ========================================== -->
  <section class="flavors-section" id="sabores">
    <div class="section-heading">
      <div>
        <p class="eyebrow"><i></i> Nuestro menú</p>
        <h2>Hoy se antoja<br>algo de Névé.</h2>
      </div>
      <p>Elige el sabor que se te antoja. Pronto podrás encontrar aquí nuevas creaciones de la casa.</p>
    </div>

    <!-- Galería fotográfica interactiva (una foto por diapositiva) -->
<div class="flavor-gallery" aria-label="Galería de Névé">
  <div class="flavor-gallery-track">
    <figure class="flavor-gallery-slide active" aria-hidden="false">
      <img src="assets/images/sabores-neve.jpg" alt="Las ocho aguas frescas Névé" width="900" height="700" decoding="async">
      <figcaption>
        <span>La colección Névé</span>
        <strong>Ocho formas de refrescar tu día</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/horchata.jpg" alt="Producto Horchata" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Horchata</span>
        <strong>Una pausa rica, suave y especial</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/jamaica.jpg" alt="Producto Jamaica" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Jamaica</span>
        <strong>Sabor fresco y natural</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/taro.jpg" alt="Producto Taro" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Taro</span>
        <strong>Cremoso y diferente</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/pistache.jpg" alt="Producto Pistache" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Pistache</span>
        <strong>El favorito de la casa</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/limon.jpg" alt="Producto Limón" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Limón</span>
        <strong>Clásico y refrescante</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/nuez.jpg" alt="Producto Nuez" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Nuez</span>
        <strong>Sabor tradicional</strong>
      </figcaption>
    </figure>

    <figure class="flavor-gallery-slide">
      <img src="assets/images/cafe.jpg" alt="Producto Café" width="900" height="700" loading="lazy" decoding="async">
      <figcaption>
        <span>Café</span>
        <strong>Para recargar tu energía</strong>
      </figcaption>
    </figure>
  </div>

  <div class="flavor-gallery-controls">
    <button class="flavor-gallery-arrow" type="button" data-gallery-direction="previous" aria-label="Ver foto anterior">←</button>

    <div class="flavor-gallery-dots" role="tablist" aria-label="Seleccionar foto">
      <button class="active" role="tab" aria-selected="true" aria-label="Ver foto 1"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 2"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 3"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 4"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 5"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 6"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 7"></button>
      <button role="tab" aria-selected="false" aria-label="Ver foto 8"></button>
    </div>


    <button class="flavor-gallery-arrow" type="button" data-gallery-direction="next" aria-label="Ver siguiente foto">→</button>
  </div>
</div>
    <!-- Layout interactivo de sabores (Tabs + Ficha) -->
    <div class="flavor-layout">
      <div class="flavor-menu" role="tablist" aria-label="Sabores de Névé">
        <?php foreach ($products as $index => $product): ?>
          <button 
            class="flavor-option <?= $index === 0 ? 'active' : '' ?>" 
            role="tab" 
            aria-selected="<?= $index === 0 ? 'true' : 'false' ?>" 
            data-product='<?= e(json_encode($product, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)) ?>'
          >
            <?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?> 
            <span><?= e($product['name']) ?></span>
            <b>↗</b>
          </button>
        <?php endforeach; ?>
      </div>

      <article 
        class="flavor-feature" 
        style="--flavor-bg:<?= e($featured['color']) ?>;--flavor-accent:<?= e($featured['accent']) ?>" 
        aria-live="polite"
      >
        <div class="flavor-art" id="flavorArt">
          <span class="art-fruit" id="artFruit" aria-hidden="true"><?= e($featured['symbol']) ?></span>
          <div class="bottle">
            <div class="cap"></div>
            <div class="bottle-label">
              <small>NÉVÉ</small>
              <strong id="labelFlavor"><?= e(upper($featured['name'])) ?></strong>
              <span id="labelNote"><?= e($featured['note']) ?></span>
            </div>
          </div>
        </div>

        <div class="flavor-info">
          <p id="flavorNumber">01 / <?= str_pad((string) count($products), 2, '0', STR_PAD_LEFT) ?></p>
          <h3 id="flavorName"><?= e($featured['name']) ?></h3>
          <span class="flavor-tag" id="flavorTag"><?= e($featured['tag']) ?></span>
          <p id="flavorDescription"><?= e($featured['description']) ?></p>
          <p class="product-price" id="flavorPrice"><?= e($featured['price']) ?></p>
          <a class="text-link wa-link" href="#">Quiero probarla <span>↗</span></a>
        </div>
      </article>
    </div>
  </section>

  <!-- ==========================================
       4. SOBRE LA MARCA (#nosotros)
       Sección de identidad, historia y cifras destacadas.
       ========================================== -->
  <section class="neve-experience" id="nosotros">

    <div class="experience-grid">

        <!-- HISTORIA -->
        <div class="experience-story">

            <span class="experience-label">
                NUESTRA HISTORIA
            </span>

            <h2>
                La experiencia Névé
            </h2>

            <p>
                Névé nace de la idea de convertir algo tan cotidiano como
                una bebida en una experiencia que se disfrute con todos
                los sentidos.
            </p>

            <p>
                Cada sabor, cada detalle y cada elemento de nuestra
                identidad busca transmitir frescura, calidad y una
                personalidad propia.
            </p>

            <p>
                Más que una bebida, buscamos crear momentos que quieras
                volver a disfrutar.
            </p>

        </div>


        <!-- CARRUSEL DE LOGOS -->
        <div class="experience-logos" aria-roledescription="carrusel" aria-label="Identidad visual de Névé">

            <div class="logos-carousel">

                <button
                    type="button"
                    class="carousel-arrow carousel-prev"
                    data-carousel-direction="previous"
                    aria-label="Logo anterior">
                    &#10094;
                </button>

                <div class="logos-track-container">

                    <div class="logos-track">

                        <div class="logo-slide active" aria-hidden="false">
                            <img
                                src="assets/images/logo1.png"
                                alt="Logotipo principal de Névé"
                                width="430" height="260"
                                decoding="async">
                        </div>

                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="assets/images/logo2.png"
                                alt="Versión alterna del logotipo de Névé"
                                width="430" height="260"
                                loading="lazy"
                                decoding="async">
                        </div>

                    </div>

                </div>

                <button
                    type="button"
                    class="carousel-arrow carousel-next"
                    data-carousel-direction="next"
                    aria-label="Siguiente logo">
                    &#10095;
                </button>

            </div>

            <div class="carousel-dots" role="tablist" aria-label="Elegir logo">

                <button
                    type="button"
                    class="carousel-dot active"
                    role="tab"
                    aria-selected="true"
                    aria-label="Mostrar logo 1">
                </button>

                <button
                    type="button"
                    class="carousel-dot"
                    role="tab"
                    aria-selected="false"
                    aria-label="Mostrar logo 2">
                </button>

            </div>

        </div>

    </div>

</section>
  <!-- ==========================================
       5. LLAMADA A LA ACCIÓN FINAL (CTA)
       Sección de cierre comercial para pedidos directos.
       ========================================== -->
  <section class="cta">
    <div>
      <p class="eyebrow"><i></i> Pedido rápido</p>
      <h2>Tu próximo sabor<br>favorito está aquí.</h2>
    </div>
    <a class="button button-light wa-link" href="#">Pedir por WhatsApp <span>↗</span></a>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>