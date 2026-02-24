<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('order_details')->insert([
            ['order_id' => 1, 'product_id' => 1, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 450.00, 'offer' => null, 'requires_installation' => true, 'created_at' => $now, 'updated_at' => $now],
            ['order_id' => 1, 'product_id' => 4, 'pack_id' => null, 'quantity' => 2, 'unit_price' => 95.00, 'offer' => 10.00, 'requires_installation' => false, 'created_at' => $now, 'updated_at' => $now],
            ['order_id' => 2, 'product_id' => null, 'pack_id' => 1, 'quantity' => 1, 'unit_price' => 699.00, 'offer' => null, 'requires_installation' => true, 'created_at' => $now, 'updated_at' => $now],
            ['order_id' => 3, 'product_id' => 3, 'pack_id' => null, 'quantity' => 2, 'unit_price' => 280.00, 'offer' => null, 'requires_installation' => true, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
