<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Porta blindada 80cm',
                'description' => 'Porta d\'entrada blindada, 80 cm d\'amplada.',
                'price' => 450.00,
                'installation_price' => 85.00,
                'stock' => 10,
                'is_instalable' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_id' => 1,
                'name' => 'Porta de fusta 90cm',
                'description' => 'Porta de fusta massissa, 90 cm.',
                'price' => 320.00,
                'installation_price' => 75.00,
                'stock' => 5,
                'is_instalable' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_id' => 2,
                'name' => 'Finestra corredissa 120x100',
                'description' => 'Finestra corredissa d\'alumini, 120x100 cm.',
                'price' => 280.00,
                'installation_price' => 65.00,
                'stock' => 15,
                'is_instalable' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_id' => 3,
                'name' => 'Persiana enrollable',
                'description' => 'Persiana enrollable aluminio, mida estàndard.',
                'price' => 95.00,
                'installation_price' => null,
                'stock' => 30,
                'is_instalable' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
