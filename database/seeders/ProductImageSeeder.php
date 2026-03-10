<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Seeds product_images. Min 20 records (storage paths; no blob in DB).
     */
    public function run(): void
    {
        $rows = [];
        for ($i = 1; $i <= 20; $i++) {
            $rows[] = [
                'product_id' => $i,
                'storage_path' => "products/product-{$i}-main.jpg",
                'filename' => "product-{$i}-main.jpg",
                'size_bytes' => 80000 + $i * 2000,
                'checksum' => null,
                'content_type' => 'image/jpeg',
                'sort_order' => 1,
                'is_active' => true,
            ];
        }
        // Extra images for first 5 products (sort_order 2)
        for ($i = 1; $i <= 5; $i++) {
            $rows[] = [
                'product_id' => $i,
                'storage_path' => "products/product-{$i}-detail.jpg",
                'filename' => "product-{$i}-detail.jpg",
                'size_bytes' => 95000 + $i * 1000,
                'checksum' => null,
                'content_type' => 'image/jpeg',
                'sort_order' => 2,
                'is_active' => true,
            ];
        }
        DB::table('product_images')->insert($rows);
    }
}
