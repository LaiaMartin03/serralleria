<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Seeds orders. kind: cart | order | like; status only when kind=order. Min 20 records.
     */
    public function run(): void
    {
        $now = now();
        $rows = [];
        $kinds = ['order', 'order', 'order', 'cart', 'order', 'order', 'order', 'cart', 'order', 'order', 'order', 'cart', 'order', 'order', 'order', 'order', 'cart', 'order', 'order', 'order'];
        $statuses = ['sent', 'pending', 'installation_pending', null, 'installation_confirmed', 'sent', 'pending', null, 'sent', 'installation_pending', 'pending', null, 'sent', 'installation_confirmed', 'pending', 'sent', null, 'installation_pending', 'sent', 'pending'];
        for ($i = 0; $i < 20; $i++) {
            $clientId = ($i % 20) + 1;
            $isOrder = $kinds[$i] === 'order';
            $rows[] = [
                'client_id' => $clientId,
                'kind' => $kinds[$i],
                'status' => $statuses[$i],
                'order_date' => $isOrder ? $now->copy()->subDays(30 - $i) : null,
                'shipping_date' => $isOrder && $i % 3 === 0 ? $now->copy()->subDays(28 - $i) : null,
                'shipping_price' => $isOrder && $i % 2 === 0 ? 10.00 + ($i % 5) * 2 : null,
            ];
        }
        DB::table('orders')->insert($rows);
    }
}
