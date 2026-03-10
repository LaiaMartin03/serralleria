<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seeds admins. Only 3 records; one is admin/admin for login.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            ['username' => 'admin', 'password' => Hash::make('admin'), 'is_active' => true, 'last_login_at' => null],
            ['username' => 'manager', 'password' => Hash::make('password'), 'is_active' => true, 'last_login_at' => null],
            ['username' => 'support', 'password' => Hash::make('password'), 'is_active' => true, 'last_login_at' => null],
        ]);
    }
}
