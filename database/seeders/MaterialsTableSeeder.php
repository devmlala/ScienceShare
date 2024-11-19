<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            ['title' => 'Mapa mental Termodinâmica', 'description' => 'Sem descrição', 'subcategory_id' => 1],
            ['title' => 'Biologia das Plantas', 'description' => 'Material sobre a biologia das plantas e suas funções.', 'subcategory_id' => 6],
            ['title' => 'Ecologia dos Ecossistemas', 'description' => 'Estudo dos diferentes tipos de ecossistemas e sua dinâmica.', 'subcategory_id' => 7],
        ]);
    }
}
