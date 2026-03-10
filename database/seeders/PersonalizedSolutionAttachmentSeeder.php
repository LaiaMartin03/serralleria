<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalizedSolutionAttachmentSeeder extends Seeder
{
    /**
     * Seeds personalized_solution_attachments. Min 20 records (references files in storage).
     */
    public function run(): void
    {
        $rows = [];
        for ($i = 1; $i <= 20; $i++) {
            $ext = $i % 3 === 0 ? 'pdf' : 'jpg';
            $ct = $ext === 'pdf' ? 'application/pdf' : 'image/jpeg';
            $rows[] = [
                'personalized_solution_id' => $i,
                'storage_path' => "solutions/{$i}/attach-1.{$ext}",
                'original_filename' => "fitxer-{$i}.{$ext}",
                'size_bytes' => 100000 + $i * 5000,
                'checksum' => null,
                'content_type' => $ct,
                'description' => $i % 4 === 0 ? 'Plà o document adjunt' : null,
                'is_active' => true,
            ];
        }
        for ($i = 1; $i <= 8; $i++) {
            $rows[] = [
                'personalized_solution_id' => $i,
                'storage_path' => "solutions/{$i}/foto-marc.jpg",
                'original_filename' => "foto-marc-{$i}.jpg",
                'size_bytes' => 250000 + $i * 10000,
                'checksum' => null,
                'content_type' => 'image/jpeg',
                'description' => null,
                'is_active' => true,
            ];
        }
        DB::table('personalized_solution_attachments')->insert($rows);
    }
}
