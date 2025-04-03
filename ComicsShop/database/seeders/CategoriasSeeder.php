<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Cómics'],
            ['nombre' => 'Mangas'],
            ['nombre' => 'Figuras de acción'],
            ['nombre' => 'Coleccionables'],
            ['nombre' => 'Juegos de mesa'],
            ['nombre' => 'Ropa temática'],
            ['nombre' => 'Posters'],
            ['nombre' => 'Llaveros'],
            ['nombre' => 'Peluches'],
            ['nombre' => 'Model Kits'],
        ]);
    }
}
