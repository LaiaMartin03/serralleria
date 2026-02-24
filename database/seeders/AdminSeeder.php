<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('admins')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'manager',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'support',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
