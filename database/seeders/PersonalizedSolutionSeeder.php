<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalizedSolutionSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('personalized_solutions')->insert([
            [
                'client_id' => 1,
                'email' => 'maria.garcia@example.com',
                'phone' => '612345678',
                'address' => 'Carrer Major 12, 08001 Barcelona',
                'problem_description' => 'Necessito una porta que s\'adapti a un marc irregular.',
                'resolution' => null,
                'status' => 'en curs',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_id' => 2,
                'email' => 'joan.martinez@example.com',
                'phone' => '698765432',
                'address' => 'Plaça Catalunya 5, 08002 Barcelona',
                'problem_description' => 'Consulta sobre finestres per a un balcó corbat.',
                'resolution' => null,
                'status' => 'pendent',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_id' => null,
                'email' => 'visitant@example.com',
                'phone' => '666111222',
                'address' => null,
                'problem_description' => 'Mida especial per persiana a terrassa.',
                'resolution' => 'S\'ha recomanat el model X amb mida a mida.',
                'status' => 'resolt',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
