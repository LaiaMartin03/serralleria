<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            ProductCategorySeeder::class,
            FeatureNameSeeder::class,
            ProductSeeder::class,
            FeatureSeeder::class,
            ProductFeatureSeeder::class,
            ProductImageSeeder::class,
            AddressSeeder::class,
            PackSeeder::class,
            PackImageSeeder::class,
            OrderSeeder::class,
            PackDetailSeeder::class,
            OrderDetailSeeder::class,
            PersonalizedSolutionSeeder::class,
            PersonalizedSolutionAttachmentSeeder::class,
        ]);
    }
}
