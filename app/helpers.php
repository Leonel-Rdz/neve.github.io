<?php
declare(strict_types=1);

if (!function_exists('e')) {
    /**
     * Escapa cualquier valor antes de imprimirlo en HTML.
     * Úsalo siempre en las vistas: <?= e($valor) ?>
     */
    function e(mixed $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

if (!function_exists('upper')) {
    /**
     * Mayúsculas seguras con acentos (usa mbstring si está disponible).
     */
    function upper(string $value): string
    {
        return function_exists('mb_strtoupper')
            ? mb_strtoupper($value, 'UTF-8')
            : strtoupper($value);
    }
}
