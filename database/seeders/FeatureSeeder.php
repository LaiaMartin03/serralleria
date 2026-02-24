<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('features')->insert([
            ['feature_name_id' => 1, 'value' => 'Fusta', 'created_at' => $now, 'updated_at' => $now],
            ['feature_name_id' => 1, 'value' => 'Alumini', 'created_at' => $now, 'updated_at' => $now],
            ['feature_name_id' => 1, 'value' => 'PVC', 'created_at' => $now, 'updated_at' => $now],
            ['feature_name_id' => 2, 'value' => 'Blanc', 'created_at' => $now, 'updated_at' => $now],
            ['feature_name_id' => 2, 'value' => 'Maró', 'created_at' => $now, 'updated_at' => $now],
            ['feature_name_id' => 3, 'value' => '80cm', 'created_at' => $now, 'updated_at' => $now],
            ['feature_name_id' => 3, 'value' => '120x100', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
