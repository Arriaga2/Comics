<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    public function run(): void
    {
        $contactos = [
            [
                'usuario_id' => 1,
                'mensaje' => '¿Tienen más cómics de Spider-Man?',
                'respuesta' => 'Sí, próximamente tendremos más stock.'
            ],
            [
                'usuario_id' => 2,
                'mensaje' => '¿Hacen envíos a otros estados?',
                'respuesta' => 'Sí, hacemos envíos a toda la República Mexicana.'
            ],
            [
                'usuario_id' => 3,
                'mensaje' => '¿Tienen figuras de Dragon Ball?',
                'respuesta' => 'Sí, tenemos varias figuras de Dragon Ball.'
            ],
            [
                'usuario_id' => 4,
                'mensaje' => '¿Puedo cancelar un pedido?',
                'respuesta' => 'Sí, siempre que no haya sido enviado.'
            ],
            [
                'usuario_id' => 5,
                'mensaje' => '¿Tienen mangas de One Piece?',
                'respuesta' => 'Sí, tenemos varios volúmenes disponibles.'
            ],
            [
                'usuario_id' => 6,
                'mensaje' => '¿Hacen descuentos por compras mayores?',
                'respuesta' => 'Sí, ofrecemos descuentos por compras mayores a $1000.'
            ],
            [
                'usuario_id' => 7,
                'mensaje' => '¿Tienen ropa temática de Marvel?',
                'respuesta' => 'Sí, tenemos sudaderas y playeras de Marvel.'
            ],
            [
                'usuario_id' => 8,
                'mensaje' => '¿Tienen posters de Star Wars?',
                'respuesta' => 'Sí, tenemos varios posters de Star Wars.'
            ],
            [
                'usuario_id' => 9,
                'mensaje' => '¿Tienen llaveros de videojuegos?',
                'respuesta' => 'Sí, tenemos llaveros de varios videojuegos.'
            ],
            [
                'usuario_id' => 10,
                'mensaje' => '¿Tienen modelos kits de Gundam?',
                'respuesta' => 'Sí, tenemos varios modelos kits de Gundam.'
            ],
        ];

        DB::table('contacto')->insert($contactos);
    }
}