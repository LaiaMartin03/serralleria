<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderAddressSeeder extends Seeder
{
    /**
     * Seeds order_addresses (one row per address type per order: shipping, installation). Min 20 records (2 per order for first 10 orders, then 1 each for rest).
     */
    public function run(): void
    {
        $streets = [
            'Carrer Major 12', 'Plaça Catalunya 5', 'Avinguda Diagonal 100', 'Carrer Balmes 45', 'Rambla Catalunya 22',
            'Passeig de Gràcia 88', 'Carrer Muntaner 156', 'Carrer Aragó 200', 'Carrer Provença 120', 'Carrer València 78',
            'Carrer Gran de Gràcia 15', 'Carrer Consell de Cent 300', 'Carrer Diputació 90', 'Carrer Villarroel 44', 'Carrer Casanova 67',
            'Carrer Enric Granados 33', 'Carrer Paris 101', 'Carrer Mallorca 210', 'Carrer Bruc 55', 'Carrer Roger de Llúria 28',
        ];
        $rows = [];
        for ($orderId = 1; $orderId <= 20; $orderId++) {
            $idx = ($orderId - 1) % 20;
            $rows[] = [
                'order_id' => $orderId,
                'type' => 'shipping',
                'street' => $streets[$idx],
                'city' => 'Barcelona',
                'province' => 'Barcelona',
                'postal_code' => '08' . str_pad((string)$orderId, 3, '0', STR_PAD_LEFT),
                'note' => $orderId % 4 === 0 ? 'Disponible a partir de les 15h' : null,
            ];
            if ($orderId <= 12) {
                $rows[] = [
                    'order_id' => $orderId,
                    'type' => 'installation',
                    'street' => $streets[$idx],
                    'city' => 'Barcelona',
                    'province' => 'Barcelona',
                    'postal_code' => '08' . str_pad((string)$orderId, 3, '0', STR_PAD_LEFT),
                    'note' => null,
                ];
            }
        }
        DB::table('order_addresses')->insert($rows);
    }
}
