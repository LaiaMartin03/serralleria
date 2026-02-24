<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('product_categories')->insert([
            ['name' => 'Portes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Finestres', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Persianes', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
