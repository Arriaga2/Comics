<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosProveedoresSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pedidos_proveedores')->insert([
            [
                'proveedor_id' => 1,
                'total' => 2000.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 2,
                'total' => 3500.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 3,
                'total' => 5000.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 4,
                'total' => 1500.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 5,
                'total' => 2500.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 6,
                'total' => 1800.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 7,
                'total' => 1200.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 8,
                'total' => 3000.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 9,
                'total' => 2800.00,
                'fecha' => now(),
            ],
            [
                'proveedor_id' => 10,
                'total' => 3200.00,
                'fecha' => now(),
            ],
        ]);
    }
}
