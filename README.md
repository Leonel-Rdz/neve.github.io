# Névé — sitio MVC (v1.5)

Sitio web en PHP organizado con el patrón MVC.

## Cómo verlo

Desde la carpeta `public`, ejecuta:

```
php -S localhost:8000
```

y abre `http://localhost:8000`.

## Qué cambió en esta versión: color

Colores principales: **verde pastel** y **rosa pastel**. El resto del
sistema de color se organiza así:

- **`--ink`** (`#203536`) — texto y elementos oscuros de anclaje
  (botón oscuro, cinta, enlace de salto).
- **`--cream`** (`#fffdf7`) — fondo base del sitio.
- **`--green`** y **`--pink`** — los dos colores principales, en su
  tono más saturado: se usan como fondo de "superficies" (la píldora
  de quick-info, la tarjeta de logos, la galería de fotos, el CTA).
- **`--rose`** (`#d6608d`) — un solo rosa de énfasis para texto activo,
  enlaces y detalles. Antes había tres tonos casi iguales sueltos por
  el CSS (`#d66390`, `#e26392`, `#dc759b`); ahora es una sola variable.
- Dos **tintes muy claros** de verde y rosa se usan una vez cada uno,
  como fondo de sección completa (no como variable, por ser un solo uso).

### El carrusel "8 sabores" (`quick-info`)

Antes era una franja oscura (`#203536`) a todo lo ancho de la pantalla,
sin relación con el resto de la paleta. Ahora es una píldora angosta y
centrada (máximo 640px), con un degradado diagonal verde → rosa y texto
en tinta oscura. En móvil se convierte en una tarjeta redondeada en vez
de píldora completa, porque el texto ocupa dos líneas.

### CSS muerto que se eliminó

`.essence`, `.essence-image`, `.essence-copy`, `.ribbon` y `.facts`
existían en `styles.css` pero **ningún elemento del HTML usa esas
clases** — es una plantilla anterior que quedó huérfana. Se eliminaron
en vez de colorearlas, porque coloréar CSS que nadie ve no mejora nada.

La sección que sí existe («La experiencia Névé», con el carrusel de
logos) no tenía ningún tratamiento de color — ahora tiene un fondo
verde muy pálido, y el carrusel de logos es una tarjeta rosa (hace
pareja con la galería de fotos de arriba, que también es una tarjeta
de color).

### Otros ajustes de color

- Sombra al pasar el ratón sobre botones: antes era un gris plano;
  ahora es un resplandor suave que mezcla verde y rosa.
- Enlaces del menú: al pasar el ratón, cambian a rose en vez de solo
  bajar la opacidad.
- Bordes del menú de sabores: gris frío → gris verdoso, más acorde.
- Fondo de la galería de fotos: ahora usa `var(--pink)` directamente
  en vez de un tono suelto aparte casi idéntico.

### Nota sobre los logos

`logo1.png` trae un fondo celeste incrustado en la propia imagen (no es
CSS) y `logo2.png` trae uno rosa. Sobre la nueva tarjeta rosa del
carrusel, el celeste de `logo1.png` desentona un poco — si tienes una
versión de ese logo con fondo transparente, se vería mejor. Puedo
quitarle el fondo por ti si me lo pides.

## Qué se corrigió en la v1.3 (resumen, ver commits anteriores)

- El fallo de `.logo-slide.active` (faltaba la regla CSS del estado activo).
- Carrusel reutilizable único en `app.js` para los tres carruseles.
- Accesibilidad: `aria-hidden`, navegación por teclado, foco visible,
  `prefers-reduced-motion`, enlace de salto.
- Escapado de salida (`e()`), manejo de errores en `index.php`.
- Hero rediseñado con foto de fondo a sangre y degradado.

## Dónde editar

- `config/site.php` — número y mensaje de WhatsApp.
- `app/Models/ProductModel.php` — catálogo de sabores.
- `app/Views/home.php` — contenido y estructura de la página.
- `app/Views/partials/` — cabecera y pie.
- `app/helpers.php` — funciones `e()` (escapar) y `upper()`.
- `public/assets/styles.css` — variables de color (`:root`), hero, menú
  de sabores.
- `public/assets/enhancements.css` — quick-info, galería, carrusel de
  logos, accesibilidad.
- `public/assets/app.js` — carruseles y selector de sabores.

## Cambiar los colores principales

Todo el sitio depende de estas variables en `styles.css`:

```css
:root {
  --green: #c9eac9;
  --pink: #ffd6e8;
  --rose: #d6608d;
  --ink: #203536;
  --cream: #fffdf7;
  --muted: #5e7070;
}
```

Cambiar `--green` o `--pink` actualiza automáticamente la píldora de
quick-info, la tarjeta de logos, la galería de fotos, el CTA y el botón
de WhatsApp del encabezado.

Requiere PHP 8.0 o superior.
