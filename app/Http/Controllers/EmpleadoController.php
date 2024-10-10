<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de importar el modelo correcto
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $users = User::all(); // o el modelo que estés utilizando
        return view('empleados', compact('users'));
    }
     // Mostrar el formulario de registro de clientes
     public function create()
     {
         return view('formEmpleado');
     }
 

    // Otras funciones como create, store, etc.
}
