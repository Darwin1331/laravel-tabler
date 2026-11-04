<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Usuarios
|--------------------------------------------------------------------------
| Conservamos los nombres de ruta usados por el sidebar y el navbar.
| Las vistas se organizan en resources/views/usuarios/.
*/
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', function () {
        return view('usuarios.usuarios');
    })->name('index');

    Route::get('/create', function () {
        return view('usuarios.crear');
    })->name('create');

    Route::get('/profile', function () {
        return view('usuarios.perfil');
    })->name('profile');
});


// Páginas de demostración de Tabler

Route::get('/charts', function () {
    return view('graficos.graficos');
})->name('charts');

Route::get('/tables', function () {
    return view('tablas.tablas');
})->name('tables');

Route::get('/forms', function () {
    return view('formularios.formularios');
})->name('forms');

// Gestión de productos
Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos.index');

Route::post('/productos', [ProductoController::class, 'store'])
    ->name('productos.store');

Route::put('/productos/{id}', [ProductoController::class, 'update'])
    ->name('productos.update');

Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])
    ->name('productos.destroy');
