<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePedidosUsuariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detalle_pedidos_usuarios')->insert([
            [
                'pedido_id' => 1,
                'producto_id' => 1,
                'cantidad' => 2,
                'precio_unitario' => 199.99,
            ],
            [
                'pedido_id' => 2,
                'producto_id' => 4,
                'cantidad' => 1,
                'precio_unitario' => 349.99,
            ],
            [
                'pedido_id' => 3,
                'producto_id' => 3,
                'cantidad' => 1,
                'precio_unitario' => 499.99,
            ],
            [
                'pedido_id' => 4,
                'producto_id' => 7,
                'cantidad' => 1,
                'precio_unitario' => 399.99,
            ],
            [
                'pedido_id' => 5,
                'producto_id' => 8,
                'cantidad' => 1,
                'precio_unitario' => 99.99,
            ],
            [
                'pedido_id' => 6,
                'producto_id' => 5,
                'cantidad' => 1,
                'precio_unitario' => 159.99,
            ],
            [
                'pedido_id' => 7,
                'producto_id' => 9,
                'cantidad' => 1,
                'precio_unitario' => 79.99,
            ],
            [
                'pedido_id' => 8,
                'producto_id' => 1,
                'cantidad' => 1,
                'precio_unitario' => 199.99,
            ],
            [
                'pedido_id' => 9,
                'producto_id' => 6,
                'cantidad' => 1,
                'precio_unitario' => 299.99,
            ],
            [
                'pedido_id' => 10,
                'producto_id' => 2,
                'cantidad' => 1,
                'precio_unitario' => 249.99,
            ],
        ]);
    }
}
