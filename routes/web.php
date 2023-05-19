<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route:get     Consultar
 * Route:post    Guardar
 * Route:put     Actualizar
 * Route:delete  Eliminar
 */

Route::get('/', function () {
    return 'ruta home';
    // return view('welcome');
});

Route::get('/blog', function () {
    return 'listado de publicaciones';
});

Route::get('/blog/{slug}', function ($slug) {
    return $slug;
});

// request : solicitud o peticion
Route::get('/buscar', function (Request $request) {
    return $request->all();
});
