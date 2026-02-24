<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('addresses')->insert([
            [
                'client_id' => 1,
                'street' => 'Carrer Major 12',
                'city' => 'Barcelona',
                'postal_code' => '08001',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_id' => 2,
                'street' => 'Plaça Catalunya 5',
                'city' => 'Barcelona',
                'postal_code' => '08002',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_id' => 3,
                'street' => 'Avinguda Diagonal 100',
                'city' => 'Barcelona',
                'postal_code' => '08018',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
