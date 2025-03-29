<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//rutas para las vistas del controlador controladorVistas
Route::get('/', [controladorVistas::class, 'index'])->name('rutaindex');
Route::get('/carrito', [controladorVistas::class, 'carrito'])->name('rutacarrito');
Route::get('/configuracion', [controladorVistas::class, 'configuracion'])->name('rutaconfiguracion');
Route::get('/contacto', [controladorVistas::class, 'contacto'])->name('rutacontacto');
Route::get('/enviar_mensaje', [controladorVistas::class, 'enviar_mensaje'])->name('rutaenviar_mensaje');
Route::get('/gestionInventario', [controladorVistas::class, 'gestionInventario'])->name('rutagestionInventario');
Route::get('/gestionPedidos', [controladorVistas::class, 'gestionPedidos'])->name('rutagestionPedidos');
Route::get('/gestionProductos', [controladorVistas::class, 'gestionProductos'])->name('rutagestionProductos');
Route::get('/gestionPromociones', [controladorVistas::class, 'gestionPromociones'])->name('rutagestionPromociones');
Route::get('/gestionProvedores', [controladorVistas::class, 'gestionProvedores'])->name('rutagestionProvedores');
Route::get('/gestionUsuarios', [controladorVistas::class, 'gestionUsuarios'])->name('rutagestionUsuarios');
Route::get('/inicio', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get('/inicioAdmin', [controladorVistas::class, 'inicioAdmin'])->name('rutainicioAdmin');
Route::get('/oferta', [controladorVistas::class, 'ofertas'])->name('rutaoferta');
Route::get('/pago', [controladorVistas::class, 'pago'])->name('rutapago');
Route::get('/perfil', [controladorVistas::class, 'perfil'])->name('rutaperfil');
Route::get('/producto', [controladorVistas::class, 'producto'])->name('rutaproducto');
Route::get('/Reportes', [controladorVistas::class, 'reportes'])->name('rutareportes');
Route::get('/seguimiento', [controladorVistas::class, 'seguimiento'])->name('rutaseguimiento');
Route::get('/tienda', [controladorVistas::class, 'tienda'])->name('rutatienda');





