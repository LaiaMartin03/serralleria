<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('packs')->insert([
            ['price' => 699.00, 'is_instalable' => true, 'status' => 'actiu', 'created_at' => $now, 'updated_at' => $now],
            ['price' => 899.00, 'is_instalable' => true, 'status' => 'actiu', 'created_at' => $now, 'updated_at' => $now],
            ['price' => 549.00, 'is_instalable' => false, 'status' => 'actiu', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
