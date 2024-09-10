<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            ['name' => 'Termodinâmica', 'category_id' => 1],
            ['name' => 'Eletromagnetismo', 'category_id' => 1],
            ['name' => 'Ondulatória', 'category_id' => 1],
            ['name' => 'Cosmologia', 'category_id' => 2],
            ['name' => 'Astrobiologia', 'category_id' => 2],
            ['name' => 'Botânica', 'category_id' => 3],
            ['name' => 'Zoologia', 'category_id' => 3],
            ['name' => 'Conservação', 'category_id' => 4],
        ]);
    }
}
