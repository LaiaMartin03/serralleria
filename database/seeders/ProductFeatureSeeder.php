<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductFeatureSeeder extends Seeder
{
    /**
     * Seeds product_features (product–feature pairs). Min 20 records. Uses Color (Plata/Dorado/Negro) and Alta seguretat (Segura/Muy segura/Alta seguridad) where applicable.
     */
    public function run(): void
    {
        $pairs = [
            [1, 1], [1, 6], [1, 9], [1, 12],   // product 1: Material Fusta, Color Plata, Alta seguretat Segura, Mida 80mm
            [2, 1], [2, 7], [2, 13],
            [3, 2], [3, 8], [3, 22],            // Material Alumini, Color Negro, Mida 80x200
            [4, 2], [4, 6], [4, 14],
            [5, 1], [5, 7], [5, 10], [5, 15],  // Alta seguretat Muy segura
            [6, 2], [6, 8], [6, 23],
            [7, 3], [7, 6], [7, 11], [7, 16],   // Alta seguretat Alta seguridad
            [8, 4], [8, 7], [8, 17],
            [9, 2], [9, 8], [9, 18],
            [10, 1], [10, 6], [10, 9], [10, 19],
            [11, 2], [11, 7], [11, 24],
            [12, 2], [12, 8], [12, 12],
            [13, 1], [13, 6], [13, 10], [13, 20],
            [14, 1], [14, 7], [14, 25],
            [15, 3], [15, 8], [15, 26],
            [16, 2], [16, 6], [16, 27],
            [17, 4], [17, 7], [17, 11], [17, 28],
            [18, 3], [18, 8], [18, 29],
            [19, 1], [19, 6],
            [20, 5], [20, 7], [20, 30],
        ];
        $rows = array_map(fn ($p) => ['product_id' => $p[0], 'feature_id' => $p[1]], $pairs);
        DB::table('product_features')->insert($rows);
    }
}
