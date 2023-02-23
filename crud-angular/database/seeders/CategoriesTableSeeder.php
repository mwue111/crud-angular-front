<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'categoría 1',
            'slug' => 'categoria-1'
        ]);

        DB::table('categories')->insert([
            'name' => 'categoría 2',
            'slug' => 'categoria-2'
        ]);
    }
}
