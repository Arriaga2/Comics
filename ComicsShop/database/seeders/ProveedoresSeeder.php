<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    public function run(): void
    {
        $proveedores = [
            [
                'nombre' => 'Distribuidora Marvel',
                'contacto' => 'Miguel Ortega',
                'telefono' => '5551234567',
                'email' => 'marvel@distribuidora.com',
                'direccion' => 'CDMX'
            ],
            [
                'nombre' => 'DC Comics Supplier',
                'contacto' => 'Andrea López',
                'telefono' => '5557654321',
                'email' => 'dc@proveedor.com',
                'direccion' => 'CDMX'
            ],
            [
                'nombre' => 'Anime World',
                'contacto' => 'Kenji Sato',
                'telefono' => '5556789012',
                'email' => 'anime@proveedor.com',
                'direccion' => 'Guadalajara'
            ],
            [
                'nombre' => 'Manga Lovers',
                'contacto' => 'Hiroshi Tanaka',
                'telefono' => '5553456789',
                'email' => 'manga@proveedor.com',
                'direccion' => 'Monterrey'
            ],
            [
                'nombre' => 'Star Wars Merch',
                'contacto' => 'Luke Skywalker',
                'telefono' => '5559876543',
                'email' => 'starwars@proveedor.com',
                'direccion' => 'Los Ángeles'
            ],
            [
                'nombre' => 'Funko Store',
                'contacto' => 'Peter Griffin',
                'telefono' => '5554321098',
                'email' => 'funko@proveedor.com',
                'direccion' => 'Houston'
            ],
            [
                'nombre' => 'Coleccionables HQ',
                'contacto' => 'Sara Martínez',
                'telefono' => '5558901234',
                'email' => 'coleccionables@proveedor.com',
                'direccion' => 'Querétaro'
            ],
            [
                'nombre' => 'Lego Comics',
                'contacto' => 'John Brick',
                'telefono' => '5555678901',
                'email' => 'lego@proveedor.com',
                'direccion' => 'Nueva York'
            ],
            [
                'nombre' => 'Pop Culture',
                'contacto' => 'Diego Ramírez',
                'telefono' => '5559012345',
                'email' => 'popculture@proveedor.com',
                'direccion' => 'Puebla'
            ],
            [
                'nombre' => 'Retro Toys',
                'contacto' => 'Mario Bros',
                'telefono' => '5556782345',
                'email' => 'retro@proveedor.com',
                'direccion' => 'CDMX'
            ],
        ];

        DB::table('proveedores')->insert($proveedores);
    }
}