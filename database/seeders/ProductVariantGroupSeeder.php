<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantGroupSeeder extends Seeder
{
    /**
     * Seeds product_variant_groups (optional display name for variant group). Min 20 records.
     */
    public function run(): void
    {
        $names = [
            'Tornavents amplada',
            'Porta blindada mides',
            'Finestra corredissa',
            'Persiana lamel·les',
            'Reixa mida',
            'Porter automàtic',
            'Obertura lateral',
            'Marc estàndard',
            'Blindatge gruix',
            'Color acabats',
            'Tipus pany',
            'Alçada estàndard',
            'Amplada variants',
            'Model bàsic',
            'Serie premium',
            'Mida especial',
            'Tipus vidre',
            'Orientació',
            'Material marc',
            'Gruix full',
            'Sistema obertura',
        ];
        foreach ($names as $name) {
            DB::table('product_variant_groups')->insert(['name' => $name]);
        }
    }
}
