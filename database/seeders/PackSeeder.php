<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackSeeder extends Seeder
{
    /**
     * Seeds packs. Min 20 records.
     */
    public function run(): void
    {
        $packs = [
            ['name' => 'Pack entrada completa', 'description' => 'Porta blindada + persiana. Ideal per a reformes.', 'price' => 699.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack premium', 'description' => 'Porta blindada + finestra. Qualitat màxima.', 'price' => 899.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack bàsic', 'description' => 'Porta de fusta. Bon preu.', 'price' => 549.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack seguretat', 'description' => 'Porta blindada + reixa.', 'price' => 789.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack garatge', 'description' => 'Portó + porter automàtic.', 'price' => 1199.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack finestres doble', 'description' => 'Dues finestres corredisses.', 'price' => 520.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack reforma bany', 'description' => 'Tancament + persiana.', 'price' => 235.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack entrada i reixa', 'description' => 'Porta + reixa seguretat.', 'price' => 635.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack llar', 'description' => 'Porta fusta + celosia.', 'price' => 460.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack oficina', 'description' => 'Porter automàtic + porta.', 'price' => 770.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack terrassa', 'description' => 'Tancament + persiana enrollable.', 'price' => 195.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack blindat premium', 'description' => 'Porta blindada 90cm + pany reforçat.', 'price' => 525.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack finestra i persiana', 'description' => 'Finestra + persiana 80mm.', 'price' => 368.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack triple', 'description' => 'Porta + finestra + persiana.', 'price' => 815.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack econòmic', 'description' => 'Porta fusta + tancament.', 'price' => 430.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack reixa i porter', 'description' => 'Reixa + porter automàtic.', 'price' => 500.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack vidres', 'description' => 'Doble vidre 100x120.', 'price' => 245.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack marcs', 'description' => 'Marc i contramarc 90cm.', 'price' => 110.00, 'is_trending' => false, 'is_active' => true],
            ['name' => 'Pack obres', 'description' => 'Kit obres + tancament.', 'price' => 215.00, 'is_trending' => true, 'is_active' => true],
            ['name' => 'Pack especial', 'description' => 'Productes mida especial.', 'price' => 650.00, 'is_trending' => false, 'is_active' => true],
        ];
        DB::table('packs')->insert($packs);
    }
}
