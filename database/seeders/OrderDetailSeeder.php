<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Seeds order_lines (line items: product or pack, quantity, price). Min 20 records.
     */
    public function run(): void
    {
        $lines = [
            ['order_id' => 1, 'product_id' => 1, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 450.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 85.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 1, 'product_id' => 4, 'pack_id' => null, 'quantity' => 2, 'unit_price' => 95.00, 'offer' => 10.00, 'is_installation_requested' => false, 'installation_price' => null, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 2, 'product_id' => null, 'pack_id' => 1, 'quantity' => 1, 'unit_price' => 699.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 120.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 3, 'product_id' => 3, 'pack_id' => null, 'quantity' => 2, 'unit_price' => 280.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 65.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 4, 'product_id' => 5, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 480.00, 'offer' => 20.00, 'is_installation_requested' => true, 'installation_price' => 90.00, 'extra_keys_qty' => 1, 'extra_key_unit_price' => 25.00, 'is_included' => true],
            ['order_id' => 5, 'product_id' => 8, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 890.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 150.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 6, 'product_id' => null, 'pack_id' => 2, 'quantity' => 1, 'unit_price' => 899.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 130.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 7, 'product_id' => 10, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 320.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 95.00, 'extra_keys_qty' => 2, 'extra_key_unit_price' => 15.00, 'is_included' => true],
            ['order_id' => 8, 'product_id' => 12, 'pack_id' => null, 'quantity' => 3, 'unit_price' => 88.00, 'offer' => 5.00, 'is_installation_requested' => false, 'installation_price' => null, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 9, 'product_id' => null, 'pack_id' => 4, 'quantity' => 1, 'unit_price' => 789.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 110.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 10, 'product_id' => 7, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 180.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 55.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 11, 'product_id' => 11, 'pack_id' => null, 'quantity' => 2, 'unit_price' => 195.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 50.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 12, 'product_id' => 14, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 290.00, 'offer' => 15.00, 'is_installation_requested' => true, 'installation_price' => 70.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 13, 'product_id' => null, 'pack_id' => 6, 'quantity' => 1, 'unit_price' => 520.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 100.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 14, 'product_id' => 16, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 165.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 52.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 15, 'product_id' => 18, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 720.00, 'offer' => 50.00, 'is_installation_requested' => true, 'installation_price' => 140.00, 'extra_keys_qty' => 1, 'extra_key_unit_price' => 20.00, 'is_included' => true],
            ['order_id' => 16, 'product_id' => 20, 'pack_id' => null, 'quantity' => 2, 'unit_price' => 45.00, 'offer' => null, 'is_installation_requested' => false, 'installation_price' => null, 'extra_keys_qty' => 1, 'extra_key_unit_price' => 8.00, 'is_included' => true],
            ['order_id' => 17, 'product_id' => 6, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 220.00, 'offer' => null, 'is_installation_requested' => true, 'installation_price' => 60.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 18, 'product_id' => null, 'pack_id' => 14, 'quantity' => 1, 'unit_price' => 815.00, 'offer' => 40.00, 'is_installation_requested' => true, 'installation_price' => 180.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 19, 'product_id' => 19, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 75.00, 'offer' => null, 'is_installation_requested' => false, 'installation_price' => null, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
            ['order_id' => 20, 'product_id' => 2, 'pack_id' => null, 'quantity' => 1, 'unit_price' => 320.00, 'offer' => 25.00, 'is_installation_requested' => true, 'installation_price' => 75.00, 'extra_keys_qty' => 0, 'extra_key_unit_price' => null, 'is_included' => true],
        ];
        DB::table('order_lines')->insert($lines);
    }
}
