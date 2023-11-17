<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ImageSeeder::class,
            PrisonerSeeder::class,
            UserSeeder::class,
            NewsSeeder::class,
            VehiclesSeeder::class,
            CellsSeeder::class,
        ]);
    }
}
