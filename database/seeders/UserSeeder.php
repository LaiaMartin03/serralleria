<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $users = [
            [
                'name' => 'Maria García',
                'email' => 'maria.garcia@example.com',
                'phone' => '612345678',
                'phone2' => '934567890',
                'dni' => '12345678A',
                'password' => 'password',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Joan Martínez',
                'email' => 'joan.martinez@example.com',
                'phone' => '698765432',
                'phone2' => null,
                'dni' => '87654321B',
                'password' => 'password',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Anna López',
                'email' => 'anna.lopez@example.com',
                'phone' => '655443322',
                'phone2' => '931122334',
                'dni' => '11223344C',
                'password' => 'password',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];
        foreach ($users as $data) {
            User::create($data);
        }
    }
}
