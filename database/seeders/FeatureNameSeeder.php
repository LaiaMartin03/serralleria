<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureNameSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('feature_names')->insert([
            ['name' => 'Material', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Color', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mida', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
