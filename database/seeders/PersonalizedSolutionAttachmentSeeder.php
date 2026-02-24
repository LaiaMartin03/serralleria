<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalizedSolutionAttachmentSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        DB::table('personalized_solution_attachments')->insert([
            ['personalized_solution_id' => 1, 'file_path' => 'solutions/1/foto-marc.jpg', 'original_filename' => 'foto-marc.jpg', 'file_type' => 'image', 'created_at' => $now, 'updated_at' => $now],
            ['personalized_solution_id' => 1, 'file_path' => 'solutions/1/plà.pdf', 'original_filename' => 'plà.pdf', 'file_type' => 'document', 'created_at' => $now, 'updated_at' => $now],
            ['personalized_solution_id' => 2, 'file_path' => 'solutions/2/balco.jpg', 'original_filename' => 'balco.jpg', 'file_type' => 'image', 'created_at' => $now, 'updated_at' => $now],
            ['personalized_solution_id' => 3, 'file_path' => 'solutions/3/terrassa.pdf', 'original_filename' => 'terrassa.pdf', 'file_type' => 'document', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
