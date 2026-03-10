<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureNameSeeder extends Seeder
{
    /**
     * Seeds feature_names. Used by features (Color: Plata/Dorado/Negro; Alta seguridad: Segura/Muy segura/Alta seguridad; Mida: NNmm and NNxNN).
     */
    public function run(): void
    {
        DB::table('feature_names')->insert([
            ['name' => 'Material', 'is_active' => true],
            ['name' => 'Color', 'is_active' => true],
            ['name' => 'Mida', 'is_active' => true],
            ['name' => 'Alta seguretat', 'is_active' => true],
        ]);
    }
}
