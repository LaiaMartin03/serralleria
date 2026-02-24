<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackImageSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('pack_images')->insert([
            ['pack_id' => 1, 'image_path' => 'packs/pack-complet-1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 1, 'image_path' => 'packs/pack-complet-2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 2, 'image_path' => 'packs/pack-premium-1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 2, 'image_path' => 'packs/pack-premium-2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 3, 'image_path' => 'packs/pack-basic-1.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
