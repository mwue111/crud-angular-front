<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
        'name' => 'user',
        'email' => 'dany@admin.com',
        'password' => '$2y$10$vG/vgC1C4Mpq6NObWQ4WseIGIWz4O1WvX9MJZ6mXmf4cw6ZnVaxAK'
       ]);
    }
}
