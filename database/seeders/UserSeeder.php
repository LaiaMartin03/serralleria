<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seeds clients table (account: person or company). Min 20 records.
     */
    public function run(): void
    {
        $rows = [];
        $persons = [
            ['type' => 'person', 'id_doc' => '12345678A', 'email' => 'maria.garcia@example.com'],
            ['type' => 'person', 'id_doc' => '87654321B', 'email' => 'joan.martinez@example.com'],
            ['type' => 'person', 'id_doc' => '11223344C', 'email' => 'anna.lopez@example.com'],
            ['type' => 'person', 'id_doc' => '22334455D', 'email' => 'carlos.sanchez@example.com'],
            ['type' => 'person', 'id_doc' => '33445566E', 'email' => 'laura.fernandez@example.com'],
            ['type' => 'person', 'id_doc' => '44556677F', 'email' => 'david.ramirez@example.com'],
            ['type' => 'person', 'id_doc' => '55667788G', 'email' => 'elena.torres@example.com'],
            ['type' => 'person', 'id_doc' => '66778899H', 'email' => 'marc.navarro@example.com'],
            ['type' => 'person', 'id_doc' => '77889900J', 'email' => 'cristina.molina@example.com'],
            ['type' => 'person', 'id_doc' => '88990011K', 'email' => 'jordi.serrano@example.com'],
            ['type' => 'person', 'id_doc' => '99001122L', 'email' => 'patricia.rubio@example.com'],
            ['type' => 'person', 'id_doc' => '10012233M', 'email' => 'albert.dominguez@example.com'],
            ['type' => 'person', 'id_doc' => '21123344N', 'email' => 'nuria.vazquez@example.com'],
            ['type' => 'person', 'id_doc' => '32234455P', 'email' => 'roger.iglesias@example.com'],
            ['type' => 'person', 'id_doc' => '43345566Q', 'email' => 'sandra.mora@example.com'],
        ];
        $companies = [
            ['type' => 'company', 'cif' => 'B12345678', 'email' => 'info@constructora-nord.com'],
            ['type' => 'company', 'cif' => 'B23456789', 'email' => 'comandes@reformes-bcn.com'],
            ['type' => 'company', 'cif' => 'B34567890', 'email' => 'admin@obres-girona.cat'],
            ['type' => 'company', 'cif' => 'B45678901', 'email' => 'contacte@habitatge-plus.com'],
            ['type' => 'company', 'cif' => 'B56789012', 'email' => 'ventes@portes-tarragona.es'],
        ];
        foreach ($persons as $p) {
            $rows[] = [
                'type' => $p['type'],
                'identification' => $p['id_doc'],
                'login_email' => $p['email'],
                'password' => Hash::make('password'),
                'is_active' => true,
            ];
        }
        foreach ($companies as $c) {
            $rows[] = [
                'type' => $c['type'],
                'identification' => $c['cif'],
                'login_email' => $c['email'],
                'password' => Hash::make('password'),
                'is_active' => true,
            ];
        }
        DB::table('clients')->insert($rows);
    }
}
