<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Seeds client_addresses (shipping, installation, etc. per client). Min 20 records. Includes is_primary.
     */
    public function run(): void
    {
        $streets = [
            'Carrer Major 12', 'Plaça Catalunya 5', 'Avinguda Diagonal 100', 'Carrer Balmes 45',
            'Rambla Catalunya 22', 'Passeig de Gràcia 88', 'Carrer Muntaner 156', 'Carrer Aragó 200',
            'Carrer Provença 120', 'Carrer València 78', 'Carrer Gran de Gràcia 15', 'Carrer Consell de Cent 300',
            'Carrer Diputació 90', 'Carrer Villarroel 44', 'Carrer Casanova 67', 'Carrer Enric Granados 33',
            'Carrer Paris 101', 'Carrer Mallorca 210', 'Carrer Bruc 55', 'Carrer Roger de Llúria 28',
        ];
        $cities = array_fill(0, 20, 'Barcelona');
        $provinces = array_fill(0, 20, 'Barcelona');
        $postals = ['08001', '08002', '08007', '08008', '08009', '08010', '08011', '08012', '08013', '08014', '08015', '08016', '08017', '08018', '08019', '08020', '08021', '08022', '08023', '08024'];
        $types = ['shipping', 'installation', 'shipping', 'other', 'shipping', 'installation', 'shipping', 'shipping', 'installation', 'shipping', 'shipping', 'other', 'shipping', 'installation', 'shipping', 'shipping', 'installation', 'shipping', 'shipping', 'installation'];
        $labels = ['Casa', 'Oficina', null, 'Magatzem', 'Domicili', 'Instal·lació', null, 'Casa', null, 'Oficina', null, null, 'Casa', null, 'Domicili', null, 'Local', null, 'Casa', null];
        $rows = [];
        for ($i = 0; $i < 20; $i++) {
            $rows[] = [
                'client_id' => $i + 1,
                'type' => $types[$i],
                'label' => $labels[$i],
                'street' => $streets[$i],
                'city' => $cities[$i],
                'province' => $provinces[$i],
                'postal_code' => $postals[$i],
                'is_primary' => $i % 2 === 0,
                'is_active' => true,
            ];
        }
        DB::table('client_addresses')->insert($rows);
    }
}
