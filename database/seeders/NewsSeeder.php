<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'title'=>'Mugshot Donald Trump nu beschikbaar!',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Massa vitae tortor condimentum lacinia quis. Velit sed ullamcorper morbi tincidunt ornare massa eget. Cursus metus aliquam eleifend mi.',
            'thumbnail'=>'https://images-ext-1.discordapp.net/external/Bbs6MBD1R6WcS9b3D5zr6JfT74SmVuve4pIRCZFkkHU/%3Fw%3D575/https/www.bostonherald.com/wp-content/uploads/2023/08/APTOPIX_Georgia_Election_Indictment_65468.jpg?width=662&height=662',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('news')->insert([
            'title'=>'Mugshot Bill Gates nu beschikbaar!',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Massa vitae tortor condimentum lacinia quis. Velit sed ullamcorper morbi tincidunt ornare massa eget. Cursus metus aliquam eleifend mi.',
            'thumbnail'=>'https://media.discordapp.net/attachments/1148506794063306853/1151105053499858995/51Ee9UDu3iL._AC_UF8941000_QL80_.jpg?width=456&height=662',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
