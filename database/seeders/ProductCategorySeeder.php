<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Seeds product_categories. Min 20 records.
     */
    public function run(): void
    {
        $categories = [
            ['code' => 'portes', 'name' => 'Portes', 'is_active' => true],
            ['code' => 'finestres', 'name' => 'Finestres', 'is_active' => true],
            ['code' => 'persianes', 'name' => 'Persianes', 'is_active' => true],
            ['code' => 'reixes', 'name' => 'Reixes', 'is_active' => true],
            ['code' => 'portons', 'name' => 'Portons', 'is_active' => true],
            ['code' => 'tancaments', 'name' => 'Tancaments', 'is_active' => true],
            ['code' => 'porteria', 'name' => 'Porteria automàtica', 'is_active' => true],
            ['code' => 'vidres', 'name' => 'Vidres i finestres', 'is_active' => true],
            ['code' => 'persianes-enrollables', 'name' => 'Persianes enrollables', 'is_active' => true],
            ['code' => 'portes-blindades', 'name' => 'Portes blindades', 'is_active' => true],
            ['code' => 'portes-fusta', 'name' => 'Portes de fusta', 'is_active' => true],
            ['code' => 'marcs', 'name' => 'Marcs i contramarcs', 'is_active' => true],
            ['code' => 'tornavents', 'name' => 'Tornavents', 'is_active' => true],
            ['code' => 'celosies', 'name' => 'Celosies', 'is_active' => true],
            ['code' => 'portes-garage', 'name' => 'Portes de garatge', 'is_active' => true],
            ['code' => 'reixes-seguretat', 'name' => 'Reixes de seguretat', 'is_active' => true],
            ['code' => 'accessoris', 'name' => 'Accessoris', 'is_active' => true],
            ['code' => 'obres', 'name' => 'Obres i reformes', 'is_active' => true],
            ['code' => 'recanvis', 'name' => 'Recanvis', 'is_active' => true],
            ['code' => 'especial', 'name' => 'Mides especials', 'is_active' => true],
        ];
        DB::table('product_categories')->insert($categories);
    }
}
