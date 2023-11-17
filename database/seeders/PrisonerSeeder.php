<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrisonerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prisoners')->insert([
            'id' => '1',
            'name' => 'Donald J Trump',
            'email' => 'donald@parkcounty.nl',
            'password' => bcrypt('donald'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('image_prisoner')->insert([
            'image_id' => '2',
            'prisoners_id' => '1',
        ]);
        DB::table('image_prisoner')->insert([
            'image_id' => '3',
            'prisoners_id' => '1',
        ]);
        DB::table('prisoners')->insert([
            'id' => '2',
            'name' => 'Barack Obama',
            'email' => 'barack@parkcounty.nl',
            'password' => bcrypt('barack'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('image_prisoner')->insert([
            'image_id' => '4',
            'prisoners_id' => '2',
        ]);
        DB::table('image_prisoner')->insert([
            'image_id' => '5',
            'prisoners_id' => '2',
        ]);
        DB::table('prisoners')->insert([
            'id' => '3',
            'name' => 'Bill Gates',
            'email' => 'bill@parkcounty.nl',
            'password' => bcrypt('bill'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('image_prisoner')->insert([
            'image_id' => '6',
            'prisoners_id' => '3',
        ]);
        DB::table('image_prisoner')->insert([
            'image_id' => '7',
            'prisoners_id' => '3',
        ]);
        DB::table('prisoners')->insert([
            'id' => '4',
            'name' => 'Nicholas Amyoony',
            'email' => 'nick@parkcounty.nl',
            'password' => bcrypt('nick'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
