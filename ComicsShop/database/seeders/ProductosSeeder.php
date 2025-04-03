<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            [
                'nombre' => 'Spider-Man #1',
                'descripcion' => 'Cómic de Spider-Man edición especial',
                'precio' => 199.99,
                'categoria_id' => 1,
                'proveedor_id' => 1
            ],
            [
                'nombre' => 'Batman: Year One',
                'descripcion' => 'Historia del origen de Batman',
                'precio' => 249.99,
                'categoria_id' => 1,
                'proveedor_id' => 2
            ],
            [
                'nombre' => 'Figura Goku SSJ',
                'descripcion' => 'Figura articulada de Goku Super Saiyan',
                'precio' => 499.99,
                'categoria_id' => 3,
                'proveedor_id' => 3
            ],
            [
                'nombre' => 'Funko Pop Darth Vader',
                'descripcion' => 'Edición limitada de Funko Pop',
                'precio' => 349.99,
                'categoria_id' => 4,
                'proveedor_id' => 5
            ],
            [
                'nombre' => 'Manga One Piece Vol. 1',
                'descripcion' => 'Edición en español del primer tomo',
                'precio' => 159.99,
                'categoria_id' => 2,
                'proveedor_id' => 4
            ],
            [
                'nombre' => 'Rompecabezas Marvel 1000 piezas',
                'descripcion' => 'Puzzle con arte de Avengers',
                'precio' => 299.99,
                'categoria_id' => 5,
                'proveedor_id' => 6
            ],
            [
                'nombre' => 'Sudadera Batman',
                'descripcion' => 'Sudadera negra con logo de Batman',
                'precio' => 399.99,
                'categoria_id' => 6,
                'proveedor_id' => 2
            ],
            [
                'nombre' => 'Poster de Attack on Titan',
                'descripcion' => 'Poster oficial con arte de la serie',
                'precio' => 99.99,
                'categoria_id' => 7,
                'proveedor_id' => 3
            ],
            [
                'nombre' => 'Llavero de Zelda',
                'descripcion' => 'Llavero metálico con logo de Zelda',
                'precio' => 79.99,
                'categoria_id' => 8,
                'proveedor_id' => 9
            ],
            [
                'nombre' => 'Set de Model Kits Gundam',
                'descripcion' => 'Model kit de Gundam RX-78',
                'precio' => 599.99,
                'categoria_id' => 10,
                'proveedor_id' => 10
            ],
        ];

        DB::table('productos')->insert($productos);
    }
}