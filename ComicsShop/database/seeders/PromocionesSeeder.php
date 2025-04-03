<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocionesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('promociones')->insert([
            [
                'producto_id' => 1,
                'descuento' => 10.00,
                'fecha_inicio' => '2024-02-01',
                'fecha_fin' => '2024-02-15'
            ],
            [
                'producto_id' => 2,
                'descuento' => 15.00,
                'fecha_inicio' => '2024-03-01',
                'fecha_fin' => '2024-03-10'
            ],
            [
                'producto_id' => 3,
                'descuento' => 20.00,
                'fecha_inicio' => '2024-04-01',
                'fecha_fin' => '2024-04-15'
            ],
            [
                'producto_id' => 4,
                'descuento' => 10.00,
                'fecha_inicio' => '2024-05-01',
                'fecha_fin' => '2024-05-10'
            ],
            [
                'producto_id' => 5,
                'descuento' => 15.00,
                'fecha_inicio' => '2024-06-01',
                'fecha_fin' => '2024-06-15'
            ],
            [
                'producto_id' => 6,
                'descuento' => 25.00,
                'fecha_inicio' => '2024-07-01',
                'fecha_fin' => '2024-07-10'
            ],
            [
                'producto_id' => 7,
                'descuento' => 10.00,
                'fecha_inicio' => '2024-08-01',
                'fecha_fin' => '2024-08-15'
            ],
            [
                'producto_id' => 8,
                'descuento' => 30.00,
                'fecha_inicio' => '2024-09-01',
                'fecha_fin' => '2024-09-10'
            ],
            [
                'producto_id' => 9,
                'descuento' => 20.00,
                'fecha_inicio' => '2024-10-01',
                'fecha_fin' => '2024-10-15'
            ],
            [
                'producto_id' => 10,
                'descuento' => 10.00,
                'fecha_inicio' => '2024-11-01',
                'fecha_fin' => '2024-11-10'
            ],
        ]);
    }
}
