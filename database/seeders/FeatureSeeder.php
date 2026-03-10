<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Seeds features. Color: only Plata, Dorado, Negro. Alta seguretat: only Segura, Muy segura, Alta seguridad. Mida: NNmm and NNxNN.
     */
    public function run(): void
    {
        $features = [
            // Material (feature_name_id 1)
            ['feature_name_id' => 1, 'value' => 'Fusta', 'is_active' => true],
            ['feature_name_id' => 1, 'value' => 'Alumini', 'is_active' => true],
            ['feature_name_id' => 1, 'value' => 'PVC', 'is_active' => true],
            ['feature_name_id' => 1, 'value' => 'Acer', 'is_active' => true],
            ['feature_name_id' => 1, 'value' => 'Compost', 'is_active' => true],
            // Color (feature_name_id 2): only Plata, Dorado, Negro
            ['feature_name_id' => 2, 'value' => 'Plata', 'is_active' => true],
            ['feature_name_id' => 2, 'value' => 'Dorado', 'is_active' => true],
            ['feature_name_id' => 2, 'value' => 'Negro', 'is_active' => true],
            // Alta seguretat (feature_name_id 4): only Segura, Muy segura, Alta seguridad
            ['feature_name_id' => 4, 'value' => 'Segura', 'is_active' => true],
            ['feature_name_id' => 4, 'value' => 'Muy segura', 'is_active' => true],
            ['feature_name_id' => 4, 'value' => 'Alta seguridad', 'is_active' => true],
        ];
        // Mida (feature_name_id 3): NNmm and NNxNN
        $midas = ['80mm', '90mm', '100mm', '110mm', '120mm', '75mm', '85mm', '95mm', '105mm', '115mm'];
        $midas2 = ['80x200', '90x210', '100x200', '120x100', '100x80', '110x210', '120x220', '85x205', '95x215', '105x200', '115x210', '75x195'];
        foreach ($midas as $m) {
            $features[] = ['feature_name_id' => 3, 'value' => $m, 'is_active' => true];
        }
        foreach ($midas2 as $m) {
            $features[] = ['feature_name_id' => 3, 'value' => $m . ' cm', 'is_active' => true];
        }
        DB::table('features')->insert($features);
    }
}
