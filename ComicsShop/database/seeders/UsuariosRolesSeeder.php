<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosRolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios_roles')->insert([
            ['usuario_id' => 1, 'rol_id' => 1],
            ['usuario_id' => 2, 'rol_id' => 2],
            ['usuario_id' => 3, 'rol_id' => 2],
            ['usuario_id' => 4, 'rol_id' => 2],
            ['usuario_id' => 5, 'rol_id' => 2],
            ['usuario_id' => 6, 'rol_id' => 2],
            ['usuario_id' => 7, 'rol_id' => 2],
            ['usuario_id' => 8, 'rol_id' => 2],
            ['usuario_id' => 9, 'rol_id' => 2],
            ['usuario_id' => 10, 'rol_id' => 2],
        ]);
    }
}
