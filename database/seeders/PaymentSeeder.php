<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Seeds payments (one or more per order). Min 20 records.
     */
    public function run(): void
    {
        $now = now();
        $methods = ['card', 'paypal', 'bizum', 'card', 'bizum', 'card', 'card', 'paypal', 'bizum', 'card', 'card', 'paypal', 'bizum', 'card', 'card', 'bizum', 'card', 'paypal', 'card', 'bizum'];
        $rows = [];
        for ($i = 1; $i <= 20; $i++) {
            $orderId = $i;
            $amount = 100.00 + $i * 25.50 + ($i % 3) * 50;
            $rows[] = [
                'order_id' => $orderId,
                'amount' => round($amount, 2),
                'payment_method' => $methods[$i - 1],
                'gateway_reference' => $i % 5 !== 0 ? 'ref_' . $i . '_' . time() : null,
                'paid_at' => $i % 4 !== 0 ? $now->copy()->subDays(20 - $i) : null,
            ];
        }
        DB::table('payments')->insert($rows);
    }
}
