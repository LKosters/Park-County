<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cells')->insert([
            [
                'housenumber' => 'Politiestraat 1',
                'max_inhabitants' => 2,
                'tv' => false,
                'isolation' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 2',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 3',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 4',
                'max_inhabitants' => 2,
                'tv' => false,
                'isolation' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 5',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 6',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 7',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 8',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'housenumber' => 'Politiestraat 9',
                'max_inhabitants' => 2,
                'tv' => true,
                'isolation' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);

        // cells_prisoners
        DB::table('cell_prisoner')->insert([
                [
                    'cell_id' => 1,
                    'prisoner_id' => 1,
                ],
                [
                    'cell_id' => 2,
                    'prisoner_id' => 2,
                ],
                [
                    'cell_id' => 3,
                    'prisoner_id' => 3,
                ],
                [
                    'cell_id' => 4,
                    'prisoner_id' => 4,
                ],
                [
                    'cell_id' => 5,
                    'prisoner_id' => 1,
                ],
                [
                    'cell_id' => 6,
                    'prisoner_id' => 2,
                ],
                [
                    'cell_id' => 7,
                    'prisoner_id' => 3,
                ],
                [
                    'cell_id' => 8,
                    'prisoner_id' => 4,
                ],
                [
                    'cell_id' => 9,
                    'prisoner_id' => 1,
                ]
            ]
        );
    }
}
