<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackDetailSeeder extends Seeder
{
    /**
     * Seeds pack_items (products that belong to a pack). Min 20 records.
     */
    public function run(): void
    {
        $items = [
            [1, 1], [1, 4], [2, 1], [2, 3], [3, 2], [4, 1], [4, 4], [5, 8], [5, 10], [6, 3], [6, 6],
            [7, 4], [7, 9], [8, 1], [8, 7], [9, 2], [9, 14], [10, 10], [10, 1], [11, 9], [11, 4],
            [12, 5], [12, 19], [13, 3], [13, 12], [14, 1], [14, 3], [14, 4], [15, 2], [15, 9], [16, 7], [16, 10],
            [17, 11], [18, 13], [19, 20], [19, 9], [20, 3], [20, 6], [20, 14],
        ];
        $rows = array_map(fn ($p) => ['pack_id' => $p[0], 'product_id' => $p[1], 'is_active' => true], $items);
        DB::table('pack_items')->insert($rows);
    }
}
