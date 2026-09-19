<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\ProductModel;
use RuntimeException;

class HomeController
{
    /**
     * Arma la página de inicio: catálogo de sabores + sabor destacado.
     *
     * @param array<string, string> $config
     */
    public function index(array $config): void
    {
        $products = (new ProductModel())->all();

        if ($products === []) {
            throw new RuntimeException('El catálogo de sabores está vacío.');
        }

        $featured = $products[0];
        $title = $config['brand'] . ' | Aguas frescas';

        require __DIR__ . '/../Views/home.php';
    }
}
