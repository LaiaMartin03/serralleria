<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('orders')->insert([
            [
                'client_id' => 1,
                'order_date' => $now->copy()->subDays(10),
                'shipping_date' => $now->copy()->subDays(5),
                'installation_date' => null,
                'status' => 'enviat',
                'displacement_price' => 35.00,
                'payment_method' => 'transferència',
                'shipping_address' => 'Carrer Major 12, 08001 Barcelona',
                'installation_address' => 'Carrer Major 12, 08001 Barcelona',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_id' => 2,
                'order_date' => $now->copy()->subDays(3),
                'shipping_date' => null,
                'installation_date' => null,
                'status' => 'pendent',
                'displacement_price' => null,
                'payment_method' => 'targeta',
                'shipping_address' => 'Plaça Catalunya 5, 08002 Barcelona',
                'installation_address' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_id' => 3,
                'order_date' => $now->copy()->subDays(1),
                'shipping_date' => null,
                'installation_date' => null,
                'status' => 'en preparació',
                'displacement_price' => 45.00,
                'payment_method' => 'transferència',
                'shipping_address' => 'Avinguda Diagonal 100, 08018 Barcelona',
                'installation_address' => 'Avinguda Diagonal 100, 08018 Barcelona',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
