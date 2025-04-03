<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosUsuariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pedidos_usuarios')->insert([
            [
                'usuario_id' => 2,
                'total' => 549.98,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 3,
                'total' => 349.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 4,
                'total' => 499.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 5,
                'total' => 399.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 6,
                'total' => 99.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 7,
                'total' => 159.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 8,
                'total' => 79.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 9,
                'total' => 199.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 10,
                'total' => 299.99,
                'fecha' => now(),
            ],
            [
                'usuario_id' => 1,
                'total' => 249.99,
                'fecha' => now(),
            ],
        ]);
    }
}
