<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Catálogo de sabores.
 * Para agregar uno nuevo, añade un registro con las mismas claves:
 * la vista, el selector y los contadores se actualizan solos.
 */
class ProductModel
{
    /** @return list<array<string, string>> */
    public function all(): array
    {
        return [
            ['slug'=>'horchata','name'=>'Horchata','note'=>'suave y cremosa','tag'=>'El clásico que abraza','description'=>'Cremosa, suave y con ese sabor que convierte cualquier pausa en un momento rico.','color'=>'#f2dfb6','accent'=>'#a96f3c','symbol'=>'◒','price'=>'$35 MXN'],
            ['slug'=>'taro','name'=>'Taro','note'=>'dulce y diferente','tag'=>'Un giro inesperado','description'=>'Un sabor delicado y original, con una personalidad que no pasa desapercibida.','color'=>'#dfd0f0','accent'=>'#8c61ab','symbol'=>'✿','price'=>'$35 MXN'],
            ['slug'=>'nuez','name'=>'Nuez','note'=>'intensa y reconfortante','tag'=>'Para saborear despacio','description'=>'Notas cálidas y una textura que hace de cada trago un pequeño gusto.','color'=>'#e9d4b8','accent'=>'#a06d3d','symbol'=>'◉','price'=>'$35 MXN'],
            ['slug'=>'limon','name'=>'Limón','note'=>'vibrante y cítrica','tag'=>'Frescura que despierta','description'=>'Brillante, ligera y llena de energía. El toque refrescante para cualquier hora.','color'=>'#e3f0ae','accent'=>'#7e9e36','symbol'=>'◐','price'=>'$35 MXN'],
            ['slug'=>'pistache','name'=>'Pistache','note'=>'suave y especial','tag'=>'Una joyita verde','description'=>'Cremoso, delicado y con un carácter sutil que te invita a repetir.','color'=>'#d4e6bf','accent'=>'#6f9143','symbol'=>'❋','price'=>'$35 MXN'],
            ['slug'=>'jamaica','name'=>'Jamaica','note'=>'floral y chispeante','tag'=>'El sabor que florece','description'=>'Una explosión floral y refrescante, con un color que alegra la mesa.','color'=>'#f1c7d3','accent'=>'#ad4766','symbol'=>'✺','price'=>'$35 MXN'],
            ['slug'=>'cafe','name'=>'Café','note'=>'aromática y profunda','tag'=>'Para el antojo intenso','description'=>'Aroma irresistible y un perfil profundo para quienes disfrutan lo auténtico.','color'=>'#dec7b5','accent'=>'#77503c','symbol'=>'✦','price'=>'$35 MXN'],
            ['slug'=>'pina','name'=>'Piña','note'=>'tropical y jugosa','tag'=>'Una escapada tropical','description'=>'Dulce, luminosa y tropical. Un sorbo que sabe a sol y buena compañía.','color'=>'#ffe69e','accent'=>'#cc8b27','symbol'=>'✹','price'=>'$35 MXN'],
        ];
    }
}
