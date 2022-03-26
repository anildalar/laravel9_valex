<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //1. Query Builder
        DB::table('users')->insert([
            'name' => 'oklabs',
            'email' => 'oklabs@gmail.com',
            'password' => bcrypt('oklabs'),
        ]);
        DB::table('users')->insert([
            'name' => 'oklabs2',
            'email' => 'oklabs2@gmail.com',
            'password' => bcrypt('oklabs2oklabs2'),
        ]);
    }
}
