<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePedidosProveedoresSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detalle_pedidos_proveedores')->insert([
            [
                'pedido_id' => 1,
                'producto_id' => 1,
                'cantidad' => 10,
                'precio_unitario' => 150.00
            ],
            [
                'pedido_id' => 2,
                'producto_id' => 2,
                'cantidad' => 20,
                'precio_unitario' => 200.00
            ],
            [
                'pedido_id' => 3,
                'producto_id' => 3,
                'cantidad' => 15,
                'precio_unitario' => 400.00
            ],
            [
                'pedido_id' => 4,
                'producto_id' => 4,
                'cantidad' => 25,
                'precio_unitario' => 300.00
            ],
            [
                'pedido_id' => 5,
                'producto_id' => 5,
                'cantidad' => 30,
                'precio_unitario' => 100.00
            ],
            [
                'pedido_id' => 6,
                'producto_id' => 6,
                'cantidad' => 10,
                'precio_unitario' => 250.00
            ],
            [
                'pedido_id' => 7,
                'producto_id' => 7,
                'cantidad' => 20,
                'precio_unitario' => 350.00
            ],
            [
                'pedido_id' => 8,
                'producto_id' => 8,
                'cantidad' => 5,
                'precio_unitario' => 90.00
            ],
            [
                'pedido_id' => 9,
                'producto_id' => 9,
                'cantidad' => 40,
                'precio_unitario' => 50.00
            ],
            [
                'pedido_id' => 10,
                'producto_id' => 10,
                'cantidad' => 12,
                'precio_unitario' => 500.00
            ],
        ]);
    }
}