<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalizedSolutionSeeder extends Seeder
{
    /**
     * Seeds personalized_solutions. Can be independent of client and order. status: pending_review | reviewed | client_contacted | rejected | completed. Min 20 records.
     */
    public function run(): void
    {
        $statuses = ['pending_review', 'reviewed', 'client_contacted', 'rejected', 'completed', 'pending_review', 'reviewed', 'client_contacted', 'pending_review', 'completed', 'pending_review', 'reviewed', 'client_contacted', 'rejected', 'reviewed', 'pending_review', 'client_contacted', 'reviewed', 'pending_review', 'completed'];
        $problems = [
            'Necessito una porta que s\'adapti a un marc irregular.',
            'Consulta sobre finestres per a un balcó corbat.',
            'Mida especial per persiana a terrassa.',
            'Porta blindada per local comercial amb mida no estàndard.',
            'Finestra 110x210 cm, mida a mida.',
            'Reixa de seguretat per portafinestra.',
            'Tancament per balcó corbat.',
            'Porta garatge amb obertura lateral.',
            'Persiana enrollable 95mm per finestra gran.',
            'Marc especial 105 cm amplada.',
            'Porter automàtic per comunitat 12 veïns.',
            'Vidre doble acristallat mida especial.',
            'Celosia per pati interior.',
            'Porta fusta massissa 85 cm.',
            'Tornavent 120 cm amb reixa.',
            'Reforma entrada: porta + reixa + marcs.',
            'Finestra batent 90x200 cm.',
            'Persiana 80mm per 3 finestres.',
            'Porta blindada alta seguretat.',
            'Consulta mida 100x80 cm finestra.',
        ];
        $rows = [];
        for ($i = 0; $i < 20; $i++) {
            $hasClient = $i % 3 !== 2;
            $hasOrder = $i % 4 === 0 && $hasClient;
            $rows[] = [
                'client_id' => $hasClient ? (($i % 20) + 1) : null,
                'order_id' => $hasOrder ? (($i % 15) + 1) : null,
                'email' => $hasClient ? null : 'visitant' . ($i + 1) . '@example.com',
                'phone' => $i % 2 === 0 ? '6' . str_pad((string)(12345678 + $i), 8, '0', STR_PAD_LEFT) : null,
                'address_street' => $i % 2 === 0 ? 'Carrer Example ' . ($i + 1) : null,
                'address_city' => $i % 2 === 0 ? 'Barcelona' : null,
                'address_province' => $i % 2 === 0 ? 'Barcelona' : null,
                'address_postal_code' => $i % 2 === 0 ? '08' . str_pad((string)($i + 1), 3, '0', STR_PAD_LEFT) : null,
                'address_note' => $i % 5 === 0 ? 'Disponible a partir de les 15h' : null,
                'problem_description' => $problems[$i],
                'resolution' => in_array($statuses[$i], ['reviewed', 'client_contacted', 'completed']) ? 'S\'ha recomanat el model adequat i pressupost enviat.' : null,
                'status' => $statuses[$i],
                'is_active' => true,
            ];
        }
        DB::table('personalized_solutions')->insert($rows);
    }
}
