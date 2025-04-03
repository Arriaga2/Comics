<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('inventario')->insert([
            ['producto_id' => 1, 'stock' => 20],
            ['producto_id' => 2, 'stock' => 15],
            ['producto_id' => 3, 'stock' => 30],
            ['producto_id' => 4, 'stock' => 25],
            ['producto_id' => 5, 'stock' => 40],
            ['producto_id' => 6, 'stock' => 18],
            ['producto_id' => 7, 'stock' => 12],
            ['producto_id' => 8, 'stock' => 35],
            ['producto_id' => 9, 'stock' => 50],
            ['producto_id' => 10, 'stock' => 10],
        ]);
    }
}