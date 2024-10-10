<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// routes/web.php

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');

Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados');


// Ruta para mostrar la tabla de clientes
// Route::get('/clientes', [ClienteController::class, 'index']);

// Ruta para mostrar el formulario de registro de clientes
Route::get('/clientes/create', [ClienteController::class, 'create']);

// Ruta para procesar el formulario y almacenar el cliente
Route::post('/clientes', [ClienteController::class, 'store']);
