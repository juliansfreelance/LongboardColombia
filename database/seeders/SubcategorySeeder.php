<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'Mini Cruisers',
                'slug' => Str::slug('Mini Cruisers'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Cruisers',
                'slug' => Str::slug('Cruisers'),
            ],

            [
                'category_id' => 1,
                'name' => 'Longboards',
                'slug' => Str::slug('Longboards'),
            ],

            [
                'category_id' => 1,
                'name' => 'Promociones',
                'slug' => Str::slug('Promociones'),
            ],

            /* TV, audio y video */

            [
                'category_id' => 2,
                'name' => 'Ruedas.',
                'slug' => Str::slug('Ruedas.'),
            ],
            [
                'category_id' => 2,
                'name' => 'Trucks.',
                'slug' => Str::slug('Trucks.'),
            ],

            [
                'category_id' => 2,
                'name' => 'Bushings',
                'slug' => Str::slug('Bushings'),
            ],

            [
                'category_id' => 2,
                'name' => 'Hardware',
                'slug' => Str::slug('Hardware'),
            ],

            [
                'category_id' => 2,
                'name' => 'Rodamientos',
                'slug' => Str::slug('Rodamientos'),
            ],
            /* Consola y videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('xbos'),
            ],

            [
                'category_id' => 3,
                'name' => 'Apparel',
                'slug' => Str::slug('Apparel'),
            ],

            [
                'category_id' => 3,
                'name' => 'Herramienta.',
                'slug' => Str::slug('Herramienta'),
            ],

            [
                'category_id' => 3,
                'name' => 'Lubricantes y limpiadores',
                'slug' => Str::slug('Lubricantes y limpiadores'),
            ],

            [
                'category_id' => 3,
                'name' => 'Protección.',
                'slug' => Str::slug('Protección.'),
            ],

            [
                'category_id' => 3,
                'name' => 'Tubo para balance boards',
                'slug' => Str::slug('Tubo para balance boards'),
            ],

        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
