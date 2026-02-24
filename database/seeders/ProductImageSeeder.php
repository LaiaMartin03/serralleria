<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('product_images')->insert([
            ['product_id' => 1, 'image_path' => 'products/porta-blindada-1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 1, 'image_path' => 'products/porta-blindada-2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 2, 'image_path' => 'products/porta-fusta-1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 3, 'image_path' => 'products/finestra-1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 4, 'image_path' => 'products/persiana-1.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
