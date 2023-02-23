<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 5; $i++){
            DB::table('clients')->insert([
                'firstname' => "usuario $i",
                'lastname' => "apellido $i",
                'document' => "ABC$i",
                'email' => "usuario$i@gmail.com",
            ]);
        }
    }
}
