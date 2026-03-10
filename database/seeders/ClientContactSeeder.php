<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientContactSeeder extends Seeder
{
    /**
     * Seeds client_contacts (names, phones, email per client). Min 20 records.
     */
    public function run(): void
    {
        $firstNames = ['Maria', 'Joan', 'Anna', 'Carlos', 'Laura', 'David', 'Elena', 'Marc', 'Cristina', 'Jordi', 'Patricia', 'Albert', 'Nuria', 'Roger', 'Sandra', 'Pau', 'Gemma', 'Xavier', 'Marta', 'Oriol'];
        $surnames = ['García', 'Martínez', 'López', 'Sánchez', 'Fernández', 'Ramírez', 'Torres', 'Navarro', 'Molina', 'Serrano', 'Rubio', 'Dominguez', 'Vázquez', 'Iglesias', 'Mora', 'Vidal', 'Castillo', 'Romero', 'Gil', 'Herrera'];
        $rows = [];
        for ($i = 0; $i < 20; $i++) {
            $rows[] = [
                'client_id' => $i + 1,
                'name' => $firstNames[$i],
                'surname' => $surnames[$i],
                'phone' => '6' . str_pad((string)(12345678 + $i * 111), 8, '0', STR_PAD_LEFT),
                'phone2' => $i % 3 === 0 ? '93' . str_pad((string)(1000000 + $i), 7, '0', STR_PAD_LEFT) : null,
                'email' => strtolower($firstNames[$i]) . '.' . strtolower($surnames[$i]) . '@example.com',
                'is_primary' => true,
                'is_active' => true,
            ];
        }
        DB::table('client_contacts')->insert($rows);
    }
}
