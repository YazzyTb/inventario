<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de importar el modelo correcto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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


     public function store(Request $request)
     {
         // Validar los datos
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:8|confirmed',
             'rol' => 'required|string',  // Asegúrate de validar el rol también
         ]);
     
         // Crear un nuevo usuario
         User::create([
             'name' => $validatedData['name'],
             'email' => $validatedData['email'],
             'password' => Hash::make($validatedData['password']),
             'rol' => $validatedData['rol'], // Guardar el rol seleccionado
         ]);
     
         return redirect()->route('clientes.index')->with('success', 'Cliente registrado exitosamente');
     }
     
}
