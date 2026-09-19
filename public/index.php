<?php
declare(strict_types=1);

/**
 * Punto de entrada único del sitio.
 * Todas las peticiones llegan aquí y se delegan al controlador.
 */

require __DIR__ . '/../app/helpers.php';

spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';

    if (!str_starts_with($class, $prefix)) {
        return;
    }

    $relative = str_replace('\\', '/', substr($class, strlen($prefix)));
    $path = __DIR__ . '/../app/' . $relative . '.php';

    if (is_file($path)) {
        require $path;
    }
});

$config = require __DIR__ . '/../config/site.php';

try {
    (new App\Controllers\HomeController())->index($config);
} catch (Throwable $error) {
    http_response_code(500);
    error_log('Névé: ' . $error->getMessage());
    echo '<h1>La página no se pudo cargar</h1>';
    echo '<p>Vuelve a intentarlo en unos momentos.</p>';
}
