<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juanperez@email.com',
                'telefono' => '4421234567',
                'direccion' => 'Calle Falsa 123, Querétaro',
                'contraseña' => Hash::make('clave123'),
            ],
            [
                'nombre' => 'María Gómez',
                'email' => 'mariagomez@email.com',
                'telefono' => '4427654321',
                'direccion' => 'Avenida Siempre Viva 742, Querétaro',
                'contraseña' => Hash::make('clave456'),
            ],
            [
                'nombre' => 'Carlos Ramírez',
                'email' => 'carlosr@email.com',
                'telefono' => '4429876543',
                'direccion' => 'Blvd. Bernardo Quintana, Querétaro',
                'contraseña' => Hash::make('clave789'),
            ],
            [
                'nombre' => 'Laura Méndez',
                'email' => 'lauram@email.com',
                'telefono' => '4426543210',
                'direccion' => 'Col. Centro, Querétaro',
                'contraseña' => Hash::make('claveabc'),
            ],
            [
                'nombre' => 'Ricardo Torres',
                'email' => 'ricardot@email.com',
                'telefono' => '4428765432',
                'direccion' => 'Col. Milenio, Querétaro',
                'contraseña' => Hash::make('clavexyz'),
            ],
            [
                'nombre' => 'Ana López',
                'email' => 'analopez@email.com',
                'telefono' => '4422345678',
                'direccion' => 'Col. Juriquilla, Querétaro',
                'contraseña' => Hash::make('clave111'),
            ],
            [
                'nombre' => 'Pedro Sánchez',
                'email' => 'pedros@email.com',
                'telefono' => '4428763456',
                'direccion' => 'Col. Álamos, Querétaro',
                'contraseña' => Hash::make('clave222'),
            ],
            [
                'nombre' => 'Sofía Herrera',
                'email' => 'sofiah@email.com',
                'telefono' => '4427643321',
                'direccion' => 'Col. Cimatario, Querétaro',
                'contraseña' => Hash::make('clave333'),
            ],
            [
                'nombre' => 'Luis Domínguez',
                'email' => 'luisd@email.com',
                'telefono' => '4426547890',
                'direccion' => 'Col. El Refugio, Querétaro',
                'contraseña' => Hash::make('clave444'),
            ],
            [
                'nombre' => 'Gabriela Castro',
                'email' => 'gabrielac@email.com',
                'telefono' => '4429871234',
                'direccion' => 'Col. Candiles, Querétaro',
                'contraseña' => Hash::make('clave555'),
            ],
        ];

        DB::table('usuarios')->insert($usuarios);
    }
}
