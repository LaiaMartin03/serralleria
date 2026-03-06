<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackImageSeeder extends Seeder
{
    /**
     * Seeds pack_images. Min 20 records (storage paths; no blob in DB).
     */
    public function run(): void
    {
        $rows = [];
        for ($i = 1; $i <= 20; $i++) {
            $rows[] = [
                'pack_id' => $i,
                'storage_path' => "packs/pack-{$i}-main.jpg",
                'filename' => "pack-{$i}-main.jpg",
                'size_bytes' => 100000 + $i * 1500,
                'checksum' => null,
                'content_type' => 'image/jpeg',
                'sort_order' => 1,
                'is_active' => true,
            ];
        }
        for ($i = 1; $i <= 5; $i++) {
            $rows[] = [
                'pack_id' => $i,
                'storage_path' => "packs/pack-{$i}-detail.jpg",
                'filename' => "pack-{$i}-detail.jpg",
                'size_bytes' => 105000 + $i * 500,
                'checksum' => null,
                'content_type' => 'image/jpeg',
                'sort_order' => 2,
                'is_active' => true,
            ];
        }
        DB::table('pack_images')->insert($rows);
    }
}
