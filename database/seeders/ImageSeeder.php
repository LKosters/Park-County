<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'url'=>'/images/other/parkcounty-staff.jpg',
            'alt' => 'Parkcounty staff picture',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('images')->insert([
            'url'=>'/images/mugshots/1/donald-trump-1.jpg',
            'alt' => 'Donald Trump Mugshot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('images')->insert([
            'url'=>'/images/mugshots/1/donald-trump-2.jpg',
            'alt' => 'Donald Trump Mugshot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('images')->insert([
            'url'=>'/images/mugshots/2/obama-1.png',
            'alt' => 'Barrack Obama Mugshot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('images')->insert([
            'url'=>'/images/mugshots/2/obama-2.png',
            'alt' => 'Barrack Obama Mugshot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('images')->insert([
            'url'=>'/images/mugshots/3/bill-gates-1.jpg',
            'alt' => 'Bill Gates Mugshot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('images')->insert([
            'url'=>'/images/mugshots/3/bill-gates-2.jpg',
            'alt' => 'Bill Gates Mugshot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
