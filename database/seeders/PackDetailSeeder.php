<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackDetailSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('pack_details')->insert([
            ['pack_id' => 1, 'product_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 1, 'product_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 2, 'product_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 2, 'product_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['pack_id' => 3, 'product_id' => 2, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
