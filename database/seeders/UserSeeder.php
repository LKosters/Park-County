<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Bas Oosterbosch',
            'email' => 'bas@parkcounty.nl',
            'password' => bcrypt('bas'),
            'role' => 'manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Laurens Kosters',
            'email' => 'laurens@parkcounty.nl',
            'password' => bcrypt('laurens'),
            'role' => 'manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Hidde Lubbers',
            'email' => 'hidde@parkcounty.nl',
            'password' => bcrypt('hidde'),
            'role' => 'manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => '4',
            'name' => 'Jacqueline de Cock',
            'email' => 'Jacqueline@parkcounty.nl',
            'password' => bcrypt('jacqueline'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => '5',
            'name' => 'Bibi de Boer',
            'email' => 'bibi@parkcounty.nl',
            'password' => bcrypt('bibi'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => '6',
            'name' => 'Fatima Brandt',
            'email' => 'fatima@parkcounty.nl',
            'password' => bcrypt('fatima'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
